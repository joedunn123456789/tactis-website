<?php

namespace Drupal\lottiefiles_field\Form;

use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\media_library\Form\AddFormBase;
use Drupal\Core\Render\Markup;
use Drupal\lottiefiles_field\Plugin\Field\FieldWidget\LottiefilesFieldWidget;
use Drupal\file\Entity\File;

/**
 * Form to create media entities using the Media Remote source plugin.
 */
class LottiefilesFieldMediaForm extends AddFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return $this->getBaseFormId() . '_lottiefiles_field_media';
  }

  /**
   * {@inheritdoc}
   */
  protected function buildInputElement(array $form, FormStateInterface $form_state) {

    $form['#attached']['library'][] = 'lottiefiles_field/lottiefiles_field.mediawidget';
    $randSelector = LottiefilesFieldWidget::generateRandomString(5);

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#required' => TRUE,
    ];

    $form['uri'] = [
      '#type' => 'url',
      '#title' => $this->t('JSON URL'),
      '#description' => $this->t('Enter a JSON file URL. This can be an external URL (e.g., https://assets3.lottiefiles.com/packages/lf20_1gqj80jh.json) or an internal path (e.g., /sites/default/files/animations/animation.json).'),
    ];

    $form['file'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('JSON File upload'),
      '#description' => $this->t('You can upload your own lottiefiles in JSON format, it will automatically generate the Lottiefile URL.'),
      '#upload_validators' => [
        'file_validate_extensions' => ['json'],
      ],
      '#upload_location' => 'public://lottiefile_field/',
    ];

    $container = [
      '#title' => $this->t('Player settings'),
      '#type' => 'details',
      '#open' => FALSE,
    ];
    $color = '#000000';
    $colorpicker = $this->t('Pick the background color :') . ' <input type="color" data-target="#' . 'lottie-' . $randSelector . '" name="mediabgcolorpicker" value="' . $color . '">';
    $container += [
      'autoplay' => [
        '#type' => 'checkbox',
        '#title' => $this->t('Autoplay'),
        '#description' => $this->t('Autoplay animation on load.'),
        '#default_value' => FALSE,
      ],
      'background' => [
        '#type' => 'textfield',
        '#title' => $this->t('Background'),
        '#description' => $this->t('Background color must be HEX value with # also only accepted `transparent` keyword'),
        '#default_value' => 'transparent',
        '#attributes' => [
          'id' => 'lottie-' . $randSelector,
        ],
        '#suffix' => Markup::create($colorpicker),
      ],
      'controls' => [
        '#type' => 'checkbox',
        '#title' => $this->t('Controls'),
        '#description' => $this->t('Show controls.'),
        '#default_value' => FALSE,
      ],
      'hover' => [
        '#type' => 'checkbox',
        '#title' => $this->t('Hover'),
        '#description' => $this->t('Whether to play on mouse hover.'),
        '#default_value' => FALSE,
      ],
      'loop' => [
        '#type' => 'checkbox',
        '#title' => $this->t('Loop'),
        '#description' => $this->t('Whether to loop animation.'),
        '#default_value' => FALSE,
      ],
      'mode' => [
        '#type' => 'select',
        '#title' => $this->t('Mode'),
        '#options' => [
          'normal' => $this->t('Normal'),
          'bounce' => $this->t('Bounce'),
        ],
        '#description' => $this->t('Play mode.'),
        '#default_value' => 'normal',
      ],
      'speed' => [
        '#type' => 'select',
        '#title' => $this->t('Speed'),
        '#options' => [
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
        ],
        '#description' => $this->t('Animation speed.'),
        '#default_value' => 1,
      ],
      'selector' => [
        '#type' => 'hidden',
        '#title' => $this->t('Selector'),
        '#description' => $this->t('Unique selector identifier.'),
        '#default_value' => 'lottie-' . $randSelector,
      ],
      'width' => [
        '#type' => 'number',
        '#min' => 0,
        '#title' => $this->t('Width in pixel'),
        '#description' => $this->t('Width of the lottiefile animation.'),
        '#default_value' => 0,
      ],
    ];

    $form['container'] = $container;

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add'),
      '#button_type' => 'primary',
      '#validate' => ['::validate'],
      '#submit' => ['::addButtonSubmit'],
      '#ajax' => [
        'callback' => '::updateFormCallback',
        'wrapper' => 'media-library-wrapper',
        'url' => Url::fromRoute('media_library.ui'),
        'options' => [
          'query' => $this->getMediaLibraryState($form_state)->all() + [
            FormBuilderInterface::AJAX_FORM_REQUEST => TRUE,
          ],
        ],
      ],
    ];
    return $form;
  }

  /**
   * Submit handler for the add button.
   *
   * @param array $form
   *   The form render array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state.
   */
  public function addButtonSubmit(array $form, FormStateInterface $form_state) {
    // Update uri from file field.
    $file = $form_state->getValue('file');
    if ($fid = $file[0]) {
      $file_object = File::load($fid);
      // Set the status flag permanent of the file object.
      $file_object->setPermanent();
      $file_object->save();
      $file_uri = $file_object->getFileUri();
      $uri = \Drupal::service('file_url_generator')->generateAbsoluteString($file_uri);
      $form_state->setValue('uri', $uri);
    }
    $this->processInputValues([$form_state->cleanValues()->getValues()], $form, $form_state);
  }

  /**
   * Validates the Media Lottiefiles background field.
   *
   * @param array $form
   *   The complete form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current form state.
   */
  public function validate(array &$form, FormStateInterface $form_state) {
    $value = $form_state->getValue('background');
    if (strlen($value) == 0) {
      $form_state->setErrorByName('background', $this->t("Must have value on Background field."));
    }
    if ($value != 'transparent') {
      if (!preg_match('/^#([a-f0-9]{6})$/iD', strtolower($value))) {
        $form_state->setErrorByName('background', $this->t("Color must be a 6-digit hexadecimal value with #, suitable for CSS."));
      }
    }

    // Validate uri.
    $uri = $form_state->getValue('uri');
    $file = $form_state->getValue('file');
    if (empty($file) && empty($uri)) {
      $form_state->setErrorByName('uri', $this->t("Must have lottiefiles JSON external URL."));
    }
  }

}
