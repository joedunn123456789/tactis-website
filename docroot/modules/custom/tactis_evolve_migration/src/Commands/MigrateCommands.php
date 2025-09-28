<?php

namespace Drupal\tactis_evolve_migration\Commands;

use Drupal\Core\Database\Connection;
use Drupal\Core\Entity\EntityTypeManager;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drush\Commands\DrushCommands;




/**
 * Drush command file.
 */
class MigrateCommands extends DrushCommands {

  /**
   * The database connection used to store file usage information.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected Connection $connection;

  /**
   * The drupal entity query interface.
   *
   * @var \Drupal\Core\Entity\EntityTypeManager
   */
  protected EntityTypeManager $entityTypeManager;

  /**
   * Constructor for the module's drush commands.
   *
   * @param \Drupal\Core\Database\Connection $connection
   *   The db connection.
   * @param \Drupal\Core\Entity\EntityTypeManager $entityTypeManager
   *   The means by which to query, load, save, and operate on entities.
   */
  public function __construct(Connection $connection, EntityTypeManager $entityTypeManager) {
    parent::__construct();
    $this->connection = $connection;
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * A custom Drush command to displays the given text.
   *
   * @command tactis-evolve-migration:move-legacy-body
   * @aliases mlb
   */
  public function moveLegacyBody() {
    $storage = $this->entityTypeManager->getStorage('node');
    $nids = $storage->getQuery()->accessCheck('FALSE')
      ->condition('type', 'article')
      ->condition("field_legacy_body", NULL, 'IS NOT NULL')
      ->execute();
    $size = count($nids);

    foreach ($nids as $nid) {

      $query = \Drupal::database()->select('paragraphs_item_field_data', 'pfd')
        ->fields('pfd', ['id'])
        ->condition('pfd.parent_type', 'node')
        ->condition('pfd.parent_id', $nid);

      $query->addJoin('left','node','n','pfd.parent_id=n.nid');
      $query->isNull('n.nid');
      $query->distinct();

      $paragraph_ids = $query->execute()->fetchCol();
      if ($paragraph_ids) {
        $para_storage = \Drupal::entityTypeManager()->getStorage('paragraph');
        foreach ($paragraph_ids as $paragraph_id) {
          if ($para = $para_storage->load($paragraph_id)) {
            $para->delete();
          }
        }
      }


      $node = Node::load($nid);
      $legacy_body = $node->get('field_legacy_body')->getValue();
      $legacy_image = $node->get('field_legacy_hero_image')->getValue();

      $topImage = Paragraph::create([
        'type' => 'image_with_caption',
        'field_image' => [
          'target_id' => $legacy_image[0]['target_id']
        ]
      ]);
      $topImage->save();

      //First create the rich text paragraph
      $rich_text_paragraph = Paragraph::create([
        'type' => 'rich_text',
        'field_rich_text' => [
          "value"  =>  $legacy_body[0]['value'],
          "summary" => $legacy_body[0]['summary'],
          "format" => $legacy_body[0]['format']
        ],
        'field_frame_content' => 1
      ]);
      $rich_text_paragraph->save();
      //Next create the section paragraph and insert the rich text paragraph
      $section_paragraph = Paragraph::create([
        'type' => 'section',
        'field_content' => [
          [
            'target_id' => $topImage->id(),
            'target_revision_id' => $topImage->getRevisionId(),
          ],
          [
          'target_id' => $rich_text_paragraph->id(),
          'target_revision_id' => $rich_text_paragraph->getRevisionId(),
          ],
        ]
      ]);
      $section_paragraph->save();

      //Finally, append the new section paragraph to the custom content field.
      $node->field_custom_content = $section_paragraph;
      //$node->field_custom_content->appendItem($section_paragraph);
      $node->save();
    }
  }
}

