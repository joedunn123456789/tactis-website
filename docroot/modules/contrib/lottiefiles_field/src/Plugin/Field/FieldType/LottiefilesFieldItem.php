<?php

namespace Drupal\lottiefiles_field\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\link\Plugin\Field\FieldType\LinkItem;
use Drupal\link\LinkItemInterface;

/**
 * Plugin implementation of the 'lottiefiles_field' field type.
 *
 * @FieldType(
 *   id = "lottiefiles_field",
 *   label = @Translation("Lottiefiles Field"),
 *   description = @Translation("Providing lottiefiles field."),
 *   category = @Translation("Reference"),
 *   default_widget = "lottiefiles_field",
 *   default_formatter = "lottiefiles_field",
 *   constraints = {
 *     "LinkType" = {},
 *     "LinkAccess" = {},
 *     "LinkExternalProtocols" = {},
 *     "LinkNotExistingInternal" = {}
 *   }
 * )
 */
class LottiefilesFieldItem extends LinkItem {

  /**
   * {@inheritdoc}
   */
  public static function defaultFieldSettings() {
    return [
      'autoplay' => 0,
      'background' => 'transparent',
      'controls' => 0,
      'hover' => 0,
      'loop' => 0,
      'mode' => 'normal',
      'speed' => 1,
      'selector' => '',
      'width' => 0,
      'link_type' => LinkItemInterface::LINK_GENERIC,
    ] + array_diff_key(parent::defaultFieldSettings(), ['title' => FALSE]);
  }

  /**
   * {@inheritdoc}
   */
  public function fieldSettingsForm(array $form, FormStateInterface $form_state) {
    // Get base form from LinkItem.
    $element = array_diff_key(parent::fieldSettingsForm($form, $form_state), ['title' => FALSE]);
    $element['link_type']['#weight'] = 8;
    $element['link_type']['#default_value'] = 17;
    $element['link_type']['#access'] = FALSE;
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    return [
      'autoplay' => DataDefinition::create('boolean')
        ->setLabel(t('Autoplay'))
        ->setDescription(t("Autoplay animation on load.")),
      'background' => DataDefinition::create('string')
        ->setLabel(t('Background'))
        ->setDescription(t("Background color.")),
      'controls' => DataDefinition::create('boolean')
        ->setLabel(t('Controls'))
        ->setDescription(t("Show controls.")),
      'hover' => DataDefinition::create('boolean')
        ->setLabel(t('Hover'))
        ->setDescription(t("Whether to play on mouse hover.")),
      'loop' => DataDefinition::create('boolean')
        ->setLabel(t('Loop'))
        ->setDescription(t("Whether to loop animation.")),
      'mode' => DataDefinition::create('string')
        ->setLabel(t('Mode'))
        ->setDescription(t("Play mode.")),
      'speed' => DataDefinition::create('integer')
        ->setLabel(t('Speed'))
        ->setDescription(t("Animation speed.")),
      'selector' => DataDefinition::create('string')
        ->setLabel(t('Selector'))
        ->setDescription(t("Unique selector identifier.")),
      'width' => DataDefinition::create('integer')
        ->setLabel(t('Width'))
        ->setDescription(t("Width in pixel.")),
    ] + parent::propertyDefinitions($field_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $schema = parent::schema($field_definition);

    $schema['columns'] = [
      'autoplay' => [
        'description' => t("Autoplay animation on load."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
      'background' => [
        'description' => t("Background color."),
        'type' => 'varchar',
        'length' => 32,
        'default' => '',
      ],
      'controls' => [
        'description' => t("Show controls."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
      'hover' => [
        'description' => t("Whether to play on mouse hover."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
      'loop' => [
        'description' => t("Whether to loop animation."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
      'mode' => [
        'description' => t("Play mode."),
        'type' => 'varchar',
        'length' => 10,
        'default' => '',
      ],
      'speed' => [
        'description' => t("Animation speed."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
      'selector' => [
        'description' => t("Unique selector identifier."),
        'type' => 'varchar',
        'length' => 20,
        'default' => '',
      ],
      'width' => [
        'description' => t("Width of the lottiefile."),
        'type' => 'int',
        'unsigned' => TRUE,
        'default' => 0,
      ],
    ] + $schema['columns'];

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $uri = $this->get('uri')->getValue();

    return ($uri === NULL || $uri === '');

  }

}
