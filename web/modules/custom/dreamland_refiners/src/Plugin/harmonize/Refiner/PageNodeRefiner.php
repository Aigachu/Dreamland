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
 *   id = "dreamland_refiners.entity.node.page.refiner",
 *   target = "entity.node.page"
 * )
 *
 * @package Drupal\harmonize\Plugin\Harmonizer\Refiner
 */
final class PageNodeRefiner extends RefinerBase {

  /**
   * Add personal tweaks to harmonized data in this function.
   *
   * {@inheritdoc}
   */
  public function refine(&$consignment, &$harmony, $object): void {
    // Similar alterations to what we did earlier, but in a refiner!
    if (isset($consignment['field_featured_articles'])) {
      $consignment['featured_article_count'] = count($consignment['field_featured_articles']);
    }
  }

}
