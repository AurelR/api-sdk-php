<?php

namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 *
 * @property int $id_unit
 * @property int $id_item
 * @property string $condition
 * @property string $location
 * @property string $warehouse
 * @property int $amount
 * @property int $price
 * @property string $delivery_time
 * @property string $shipping_group
 * @property string $note
 * @property SellerTransfer $seller
 * @property int $shipping_rate
 *
 *
 */
class UnitTransfer extends AbstractTransfer
{
    /**
     * @return array
     */
    public function getProperties()
    {
        static $properties = array (
  'id_unit' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'id_item' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'condition' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'location' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'warehouse' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'amount' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'price' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'delivery_time' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'shipping_group' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'note' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
  'seller' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
    'type' => 'Hitmeister\\Component\\Api\\Transfers\\SellerTransfer',
  ),
  'shipping_rate' => 
  array (
    'embedded' => false,
    'is_multiple' => false,
  ),
);
        return $properties;
    }

    /**
     * @param array $data
     *
     * @return UnitTransfer
     */
    public static function make(array $data)
    {
        return AbstractTransfer::makeTransfer('Hitmeister\Component\Api\Transfers\UnitTransfer', $data);
    }
}
