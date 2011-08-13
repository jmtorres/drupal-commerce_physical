<?php

/**
 * @file
 * Hooks provided by the Physical Product module.
 */


/**
 * Allows modules to define additional weight units of measurement.
 *
 * @param &$units
 *   The array of weight units of measurement, each one defined as an array
 *   containing a name and abbreviation.
 */
function hook_commerce_physical_weight_unit_info_alter(&$units) {
  // No example.
}
