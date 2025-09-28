<?php

namespace Drupal\lottiefiles_field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\Xss;
use Drupal\Core\Url;

/**
 * Plugin implementation of the 'lottiefiles_field' formatter.
 *
 * @FieldFormatter(
 *   id = "lottiefiles_field",
 *   label = @Translation("Lottiefiles Field"),
 *   field_types = {
 *     "lottiefiles_field"
 *   }
 * )
 */
class LottiefilesFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [

      // Implement default settings.
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return [

      // Implement settings form.
    ] + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];

    // Implement settings summary.
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    // Add one image per item.
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#theme' => 'lottiefiles_player_formatter',
        '#uri' => $this->convertToAbsoluteUrl($item->uri),
        '#autoplay' => $item->autoplay,
        '#background' => Xss::filter($item->background),
        '#controls' => $item->controls,
        '#hover' => $item->hover,
        '#loop' => $item->loop,
        '#mode' => $item->mode,
        '#speed' => $item->speed,
        '#selector' => $item->selector,
        '#width' => $item->width,
        '#cssselector' => Html::cleanCssIdentifier($item->getFieldDefinition()->getName()),
      ];
    }

    return $elements;

  }

  /**
   * Convert a URL (internal or external) to an absolute URL.
   *
   * @param string $url
   *   The URL string which could be internal or external.
   *
   * @return string
   *   An absolute URL string.
   */
  public function convertToAbsoluteUrl($url) {
    // Check if the URL is an internal path.
    if (strpos($url, 'internal:/') === 0) {
      // Handle internal path, convert to absolute URL.
      $absolute_url = Url::fromUri($url)->setAbsolute()->toString();
    }
    else {
      // Assume it's an external URL.
      $absolute_url = $url;
    }

    return $absolute_url;
  }

}
