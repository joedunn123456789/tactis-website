<?php

namespace Drupal\tactis_webform_handlers\Plugin\WebformHandler;

use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\tactis_mautic\Service\MauticApiService;
use Drupal\webform\Annotation\WebformHandler;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Link Mautic Profiles on Webform submission.
 *
 * @WebformHandler(
 *   id = "Link Mautic Profile",
 *   label = @Translation("Link Mautic Profile"),
 *   category = @Translation("Mautic"),
 *   description = @Translation("Link Mautic profile on Webform Submissions."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */

class MauticWebformHandler extends WebformHandlerBase implements ContainerFactoryPluginInterface {

  /**
   * @var \Symfony\Component\HttpFoundation\RequestStack $requestStack
   */
  protected RequestStack $requestStack;

  /**
   * @var MauticApiService $mauticService;
   */
  protected MauticApiService $mauticService;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->requestStack = $container->get('request_stack');
    $instance->mauticService = $container->get(MauticApiService::class);
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration(): array {
    return [
        'campaign_id' => '',
        'segment_id' => '',
      ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state): array {
    $form = parent::buildConfigurationForm($form, $form_state);

    // Get Webform fields.
    $webform = $this->getWebform();
    $elements = $webform->getElementsDecoded();
    $fields = $this->extractFields($elements);

    $webform_fields = [];
    foreach ($fields as $key => $element) {
      $webform_fields[$key] = $element['#title'] ?? $key;
    }

    $form['campaign_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mautic Campaign ID'),
      '#default_value' => $this->configuration['campaign_id'] ?? '',
      '#description' => $this->t('Enter the Mautic Campaign ID to add users too, or leave blank for none.'),
    ];

    $form['segment_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mautic Segment ID'),
      '#default_value' => $this->configuration['segment_id'] ?? '',
      '#description' => $this->t('Enter the Segment ID to add users too, or leave blank for none.'),
    ];

    $form['field_mapping'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Field Mapping'),
      '#description' => $this->t('Map Webform fields to Mautic field names. Enter "none" to skip mapping.'),
    ];

    foreach ($webform_fields as $webform_key => $webform_label) {
      $form['field_mapping'][$webform_key] = [
        '#type' => 'textfield',
        '#title' => $this->t('Mautic field name for: %label', ['%label' => $webform_label]),
        '#default_value' => $this->configuration['field_mapping'][$webform_key] ?? '',
        '#description' => $this->t('Enter the Mautic field name.  Leave blank to use %key.', ['%key' => $webform_key]),
      ];
    }

    return $form;
  }

  /**
   * Extracts fields from Webform elements, including nested fields, without prefixes.
   *
   * @param array $elements
   *   The Webform elements.
   *
   * @return array
   *   A flat array of all fields (no nested prefixes).
   */
  protected function extractFields(array $elements): array {
    $fields = [];
    foreach ($elements as $key => $element) {
      // Ensure $element is an array and contains sub-elements before recursing.
      if (is_array($element) && isset($element['#type'])) {
        // If the element is a container (like Flexbox, Fieldset, or Details), recurse.
        if (in_array($element['#type'], ['fieldset', 'details', 'container', 'webform_flexbox'])) {
          $fields += $this->extractFields($element);
        }
        // Otherwise, store it as a regular field.
        else {
          if (in_array($key, ['captcha', 'actions'])) { continue; }
          $fields[$key] = $element['#title'] ?? $key;
        }
      }
    }
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state): void {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['campaign_id'] = $form_state->getValue('campaign_id');
    $this->configuration['segment_id'] = $form_state->getValue('segment_id');
    $this->configuration['field_mapping'] = $form_state->getValue('field_mapping');
  }

  /**
   * {@inheritdoc}
   */

  // Function to be fired after submitting the Webform.
  public function postSave(WebformSubmissionInterface $webform_submission, $update = TRUE): void {

    $campaign_id = $this->configuration['campaign_id'];
    $segment_id = $this->configuration['segment_id'];
    $field_mapping = $this->configuration['field_mapping'];

    // Get an array of the values from the submission.
    $values = $webform_submission->getData();

    // Prepare API payload with mapped fields.
    $mapped_data = [];
    foreach ($values as $webform_key => $value) {
      if (!empty($field_mapping[$webform_key])) {
        if ($field_mapping[$webform_key] !== 'none') {
          $mapped_data[$field_mapping[$webform_key]] = $value;
        }
      }else{
        $mapped_data[$webform_key] = $value;
      }
    }

    // The belief is that our snippet will always generate a mtc_id.
    // Even if the user has never been to the site.
    $mautic_id = $this->requestStack->getCurrentRequest()
      ->cookies->get('mtc_id');

    if (!is_null($mautic_id)){
      // We have an id being tracked.  Let's assign some info to this one.
      $contact = [];
      foreach ($mapped_data as $key => $value) {
        $contact[$key] = $value;
      }

      $this->mauticService->updateContact($mautic_id, $contact);

      if (!empty($campaign_id)) {
        $this->mauticService->addToCampaign($campaign_id, $mautic_id);
      }

      if (!empty($segment_id)) {
        $this->mauticService->addToSegment($segment_id, $mautic_id);
      }
    }
  }
}
