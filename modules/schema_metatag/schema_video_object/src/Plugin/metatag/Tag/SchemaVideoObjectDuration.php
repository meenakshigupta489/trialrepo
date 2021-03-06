<?php

namespace Drupal\schema_video_object\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaDurationBase;

/**
 * Provides a plugin for the 'schema_video_object_duration' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_video_object_duration",
 *   label = @Translation("duration"),
 *   description = @Translation("The video duration in seconds. This will be converted by schema_video_object into the ISO 8601 format."),
 *   name = "duration",
 *   group = "schema_video_object",
 *   weight = 0,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaVideoObjectDuration extends SchemaDurationBase {

}
