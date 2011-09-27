<?php

/**
 * @file
 * Hooks provided by the Commerce Physical Product module.
 */


/**
 * Allows modules to specify a different weight field name for the specified
 * entity than the one determined by Commerce Physical Product.
 *
 * @see commerce_physical_entity_weight_field_name()
 */
function hook_commerce_physical_entity_weight_field_name_alter(&$field_name, $entity_type, $entity) {
  // No example.
}
