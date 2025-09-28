<?php

namespace Drupal\lottiefiles_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\link\Plugin\Field\FieldWidget\LinkWidget;
use Drupal\Component\Utility\Crypt;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Render\Markup;
use Drupal\file\Entity\File;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Plugin implementation of the 'lottiefiles_field' widget.
 *
 * @FieldWidget(
 *   id = "lottiefiles_field",
 *   label = @Translation("Lottiefiles Field"),
 *   field_types = {
 *     "lottiefiles_field"
 *   }
 * )
 */
class LottiefilesFieldWidget extends LinkWidget {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'autoplay' => 0,
      'background' => 'transparent',
      'controls' => 0,
      'hover' => 0,
      'loop' => 0,
      'mode' => 'Normal',
      'speed' => 1,
      'selector' => '',
      'width' => 0,
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    // Get the field settings.
    $elements = parent::settingsForm($form, $form_state);
    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    // Identity the form context.
    $buildinfo = $form_state->getBuildInfo();
    // Ingore saving default uri value.
    if ($buildinfo['base_form_id'] != 'field_config_form') {
      $element['#attached']['library'][] = 'lottiefiles_field/lottiefiles_field.widget';
      $element['uri']['#title'] = $this->t('Lottiefile URL');
      $element['uri']['#weight'] = -20;
      $element['uri']['#required'] = FALSE;
      $element['uri']['#description'] = $this->t('This can be an external URL (e.g., https://assets3.lottiefiles.com/packages/lf20_1gqj80jh.json) or an internal path (e.g., /sites/default/files/animations/animation.json).');
      $randSelector = $this->generateRandomString(5);
  
      /** @var \Drupal\link\LinkItemInterface $item */
      $item = $items[$delta];
      $element += [
        '#type' => 'details',
        '#open' => TRUE,
      ];
  
      $color = (isset($item->background) && $item->background != 'transparent') ? Xss::filter($item->background) : '#000000';
      $colorpicker = $this->t('Pick the background color :') . ' <input type="color" data-target="#' . 'lottie-' . $randSelector . '" name="bgcolorpicker" value="' . $color . '">';
  
      $element['file'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('JSON File upload'),
        '#description' => $this->t('You can upload your own lottiefiles in JSON format, it will automatically generate the Lottiefile URL.'),
        '#upload_validators' => [
          'file_validate_extensions' => ['json'],
        ],
        '#upload_location' => 'public://lottiefile_field/',
      ];
      $element += [
        'autoplay' => [
          '#type' => 'checkbox',
          '#title' => $this->t('Autoplay'),
          '#description' => $this->t('Autoplay animation on load.'),
          '#default_value' => $item->autoplay,
        ],
        'background' => [
          '#type' => 'textfield',
          '#title' => $this->t('Background'),
          '#description' => $this->t('Background color must be HEX value with # also only accepted `transparent` keyword'),
          '#default_value' => isset($item->background) ? Xss::filter($item->background) : 'transparent',
          '#element_validate' => [
            [static::class, 'colorValidate'],
          ],
          '#attributes' => [
            'id' => 'lottie-' . $randSelector,
          ],
          '#suffix' => Markup::create($colorpicker),
        ],
        'controls' => [
          '#type' => 'checkbox',
          '#title' => $this->t('Controls'),
          '#description' => $this->t('Show controls.'),
          '#default_value' => $item->controls,
        ],
        'hover' => [
          '#type' => 'checkbox',
          '#title' => $this->t('Hover'),
          '#description' => $this->t('Whether to play on mouse hover.'),
          '#default_value' => $item->hover,
        ],
        'loop' => [
          '#type' => 'checkbox',
          '#title' => $this->t('Loop'),
          '#description' => $this->t('Whether to loop animation.'),
          '#default_value' => $item->loop,
        ],
        'mode' => [
          '#type' => 'select',
          '#title' => $this->t('Mode'),
          '#options' => [
            'normal' => $this->t('Normal'),
            'bounce' => $this->t('Bounce'),
          ],
          '#description' => $this->t('Play mode.'),
          '#default_value' => $item->mode,
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
          '#default_value' => $item->speed,
        ],
        'selector' => [
          '#type' => 'hidden',
          '#title' => $this->t('Selector'),
          '#description' => $this->t('Unique selector identifier.'),
          '#default_value' => empty($item->selector) ? 'lottie-' . $randSelector : $item->selector,
        ],
        'width' => [
          '#type' => 'number',
          '#min' => 0,
          '#title' => $this->t('Width in pixel'),
          '#description' => $this->t('Width of the lottiefile animation.'),
          '#default_value' => empty($item->width) ? 0 : $item->width,
        ],
      ];
    }
    else {
      $element['uri']['#access'] = FALSE;
    }
    return $element;
  }

  /**
   * Validate the color text field background.
   */
  public static function colorValidate($element, FormStateInterface $form_state) {
    $value = $element['#value'];
    if (strlen($value) == 0) {
      $form_state->setValueForElement($element, '');
      return;
    }
    if ($value == 'transparent') {
      $form_state->setValueForElement($element, 'transparent');
      return;
    }
    if (!preg_match('/^#([a-f0-9]{6})$/iD', strtolower($value))) {
      $form_state->setError($element, "Color must be a 6-digit hexadecimal value with #, suitable for CSS.");
    }
  }

  /**
   * Random String generator.
   */
  public static function generateRandomString($length) {
    return Crypt::randomBytesBase64($length);
  }

  /**
   * Form element validation handler for the 'uri' element.
   *
   * Disallows saving inaccessible or untrusted URLs.
   */
  public static function validateUriElement($element, FormStateInterface $form_state, $form) {

    // Identity the form context.
    $buildinfo = $form_state->getBuildInfo();
    // Ingore saving default uri value.
    if ($buildinfo['base_form_id'] != 'field_config_form') {
      $uri = static::getUserEnteredStringAsUri($element['#value']);

      // If file upload get new value.
      // Check file upload field value.
      $array_parents = $element['#array_parents'];
      $values = $form_state->getValues();
      // Dynamically navigate through the values array using the array_parents.
      $file_id_finder = &$values;
      foreach ($array_parents as $parent) {
        if (isset($file_id_finder[$parent])) {
          if(isset($file_id_finder['file']['fids'][0])){
            $file_id_finder = $file_id_finder['file']['fids'][0];
            break;
          }
  
          $file_id_finder = &$file_id_finder[$parent];
        } else {
          // Handle the case where the path does not exist.
          continue;
        }
      }
  
      if (isset($file_id_finder)) {
        $fid = $file_id_finder;
        $file_object = File::load($fid);
        if($file_object){
          // Set the status flag permanent of the file object.
          $file_object->setPermanent();
          $file_object->save();
          $uri = $file_object->getFileUri();
          $file_uri = $file_object->getFileUri();
          $uri = \Drupal::service('file_url_generator')->generateString($file_uri, ['absolute' => FALSE]);
          $uri = static::getUserEnteredStringAsUri($uri);
        }
      }
  
      $form_state
        ->setValueForElement($element, $uri);

    }
  }

}
