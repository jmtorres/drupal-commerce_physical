<?php

/**
 * @file
 * Hooks provided by the Commerce Physical Product module.
 */


/**
 * Allows modules to specify a different weight field name for the specified
 * entity than the one determined by Commerce Physical Product.
 *
 * @param &$field_name
 *   The name of the field instance on the entity that is currently specified as
 *   the weight field to use in weight calculations.
 * @param $entity_type
 *   The type of entity the field is attached to.
 * @param $entity
 *   The actual entity whose weight value is being determined.
 *
 * @see commerce_physical_entity_weight_field_name()
 */
function hook_commerce_physical_entity_weight_field_name_alter(&$field_name, $entity_type, $entity) {
  // No example.
}

/**
 * Allows modules to alter the weight that has been determined for a product
 * line item.
 *
 * @param &$weight
 *   The weight field value array representing the weight of the product line
 *   item, which defaults to the weight of the product times the quantity.
 * @param $line_item
 *   The product line item object whose weight is being determined. The product
 *   data can be referenced through this line item's commerce_product field.
 *
 * @see commerce_physical_product_line_item_weight()
 */
function hook_commerce_physical_product_line_item_weight(&$weight, $line_item) {
  // Add a one pound tare weight to the product for shipping calculation.
  $weight['weight'] += physical_weight_convert(array('weight' => 1, 'unit' => 'lb'), $weight['unit']);
}

/**
 * Allows modules to alter the weight that has been determined for an order.
 *
 * @param &$weight
 *   The weight field value array representing the weight of the product.
 * @param $order
 *   The order object whose weight is being determined.
 * @param $unit
 *   The unit of measurement to use for the returned weight of the order.
 *
 * @see commerce_physical_order_weight()
 */
function hook_commerce_physical_order_weight(&$weight, $order, $unit) {
  // No example.
}
