<?php

namespace Drupal\dreamland_refiners\Plugin\harmonize\Refiner;

use Drupal\harmonize\PluginManager\Refinery\RefinerBase;

/**
 * Provide plugin to alter harmonizer data for an entity.
 *
 * @noinspection
 *   AnnotationMissingUseInspection
 *
 * @Refiner(
 *   id = "dreamland_refiners.entity.node.refiner",
 *   target = "entity.node"
 * )
 *
 * @package Drupal\harmonize\Plugin\Harmonizer\Refiner
 */
final class NodeRefiner extends RefinerBase {

  /**
   * Add personal tweaks to harmonized data in this function.
   *
   * {@inheritdoc}
   */
  public function refine(&$consignment, &$harmony, $object): void {
    // Similar alterations to what we did earlier, but in a refiner!
    // $consignment['featured_article_count'] = count($consignment['field_featured_articles']);
  }

}
