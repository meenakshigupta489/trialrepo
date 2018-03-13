<?php

namespace Drupal\schema_image_object\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaAggregateRatingBase;

/**
 * Provides a plugin for the 'schema_image_object_aggregate_rating' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_image_object_aggregate_rating",
 *   label = @Translation("AggregateRating"),
 *   description = @Translation("AggregateRating (the numeric AggregateRating of the item)."),
 *   name = "aggregateRating",
 *   group = "schema_image_object",
 *   weight = 11,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaImageObjectAggregateRating extends SchemaAggregateRatingBase {

}
