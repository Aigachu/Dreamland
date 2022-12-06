<?php

use Drupal\harmonize\Service\Harmonics;

/**
 * @file
 * Override & customize data harmonizations for a given Drupal object or entity.
 *
 * @harmonizerType entity
 * @entityType node
 * @bundle page
 *
 * This is a custom file to handle the reformatting of data before it reaches
 * Drupal templates.
 *
 * Available variables:
 * @var array $consignment
 *    The data consigned by core Harmonize behaviour or Refiners.
 * @var array $harmony
 *    The data that will be returned to the Twig template.
 * @var Harmonics $harmonics
 *    The Harmonics service which contains helper functions.
 *
 * Re-arrange and assign data to the $harmony variable here, and that's all you
 * need. The rest will be handled in the Twig Templates.
 */

// The same alterations we did earlier, but in a harmony file!
// $consignment['related_article_count'] = count($consignment['field_related_articles']);
