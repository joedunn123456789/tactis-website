<?php

namespace Drupal\lottiefiles_field\Plugin\media\Source;

use Drupal\media\MediaInterface;
use Drupal\media\MediaSourceBase;
use Drupal\media\MediaTypeInterface;
use Drupal\link\LinkItemInterface;

/**
 * Lottiefile entity media source.
 *
 * @MediaSource(
 *   id = "lottiefile",
 *   label = @Translation("Lottiefile"),
 *   description = @Translation("Lottiefile Media Entity"),
 *   allowed_field_types = {"lottiefiles_field"},
 *   default_thumbnail_filename = "lottie.png",
 *   forms = {
 *     "media_library_add" = "\Drupal\lottiefiles_field\Form\LottiefilesFieldMediaForm",
 *   },
 * )
 */
class Lottiefile extends MediaSourceBase {

  /**
   * Key for "Name" metadata attribute.
   *
   * @var string
   */
  const METADATA_ATTRIBUTE_NAME = 'name';

  /**
   * {@inheritdoc}
   */
  public function getMetadataAttributes() {
    return [
      static::METADATA_ATTRIBUTE_NAME => $this->t('Name'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getMetadata(MediaInterface $media, $attribute_name) {

    switch ($attribute_name) {
      case static::METADATA_ATTRIBUTE_NAME:
      case 'default_name':
        $source_field = $this->getSourceFieldDefinition($media->bundle->entity)->getName();
        if ($media->hasField($source_field) && !$media->get($source_field)->isEmpty()) {
          return $media->get($source_field)->name;
        }
      default:
        return parent::getMetadata($media, $attribute_name);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function createSourceField(MediaTypeInterface $type) {
    return parent::createSourceField($type)->set('settings', ['link_type' => LinkItemInterface::LINK_GENERIC]);
  }

}
