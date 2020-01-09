<?php
/**
 * ShippingMethodPriceAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Management API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.15
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Shopware6SDK\Model;

use \ArrayAccess;
use \Shopware6SDK\ObjectSerializer;

/**
 * ShippingMethodPriceAttributes Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingMethodPriceAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipping_method_price_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_method_id' => 'string',
'currency_id' => 'string',
'rule_id' => 'string',
'calculation' => 'int',
'calculation_rule_id' => 'string',
'quantity_start' => 'float',
'quantity_end' => 'float',
'price' => 'float',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_method_id' => 'uuid',
'currency_id' => 'uuid',
'rule_id' => 'uuid',
'calculation' => 'int64',
'calculation_rule_id' => 'uuid',
'quantity_start' => 'float',
'quantity_end' => 'float',
'price' => 'float',
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_method_id' => 'shippingMethodId',
'currency_id' => 'currencyId',
'rule_id' => 'ruleId',
'calculation' => 'calculation',
'calculation_rule_id' => 'calculationRuleId',
'quantity_start' => 'quantityStart',
'quantity_end' => 'quantityEnd',
'price' => 'price',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_method_id' => 'setShippingMethodId',
'currency_id' => 'setCurrencyId',
'rule_id' => 'setRuleId',
'calculation' => 'setCalculation',
'calculation_rule_id' => 'setCalculationRuleId',
'quantity_start' => 'setQuantityStart',
'quantity_end' => 'setQuantityEnd',
'price' => 'setPrice',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_method_id' => 'getShippingMethodId',
'currency_id' => 'getCurrencyId',
'rule_id' => 'getRuleId',
'calculation' => 'getCalculation',
'calculation_rule_id' => 'getCalculationRuleId',
'quantity_start' => 'getQuantityStart',
'quantity_end' => 'getQuantityEnd',
'price' => 'getPrice',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipping_method_id'] = isset($data['shipping_method_id']) ? $data['shipping_method_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['calculation'] = isset($data['calculation']) ? $data['calculation'] : null;
        $this->container['calculation_rule_id'] = isset($data['calculation_rule_id']) ? $data['calculation_rule_id'] : null;
        $this->container['quantity_start'] = isset($data['quantity_start']) ? $data['quantity_start'] : null;
        $this->container['quantity_end'] = isset($data['quantity_end']) ? $data['quantity_end'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_method_id'] === null) {
            $invalidProperties[] = "'shipping_method_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipping_method_id
     *
     * @return string
     */
    public function getShippingMethodId()
    {
        return $this->container['shipping_method_id'];
    }

    /**
     * Sets shipping_method_id
     *
     * @param string $shipping_method_id shipping_method_id
     *
     * @return $this
     */
    public function setShippingMethodId($shipping_method_id)
    {
        $this->container['shipping_method_id'] = $shipping_method_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets calculation
     *
     * @return int
     */
    public function getCalculation()
    {
        return $this->container['calculation'];
    }

    /**
     * Sets calculation
     *
     * @param int $calculation calculation
     *
     * @return $this
     */
    public function setCalculation($calculation)
    {
        $this->container['calculation'] = $calculation;

        return $this;
    }

    /**
     * Gets calculation_rule_id
     *
     * @return string
     */
    public function getCalculationRuleId()
    {
        return $this->container['calculation_rule_id'];
    }

    /**
     * Sets calculation_rule_id
     *
     * @param string $calculation_rule_id calculation_rule_id
     *
     * @return $this
     */
    public function setCalculationRuleId($calculation_rule_id)
    {
        $this->container['calculation_rule_id'] = $calculation_rule_id;

        return $this;
    }

    /**
     * Gets quantity_start
     *
     * @return float
     */
    public function getQuantityStart()
    {
        return $this->container['quantity_start'];
    }

    /**
     * Sets quantity_start
     *
     * @param float $quantity_start quantity_start
     *
     * @return $this
     */
    public function setQuantityStart($quantity_start)
    {
        $this->container['quantity_start'] = $quantity_start;

        return $this;
    }

    /**
     * Gets quantity_end
     *
     * @return float
     */
    public function getQuantityEnd()
    {
        return $this->container['quantity_end'];
    }

    /**
     * Sets quantity_end
     *
     * @param float $quantity_end quantity_end
     *
     * @return $this
     */
    public function setQuantityEnd($quantity_end)
    {
        $this->container['quantity_end'] = $quantity_end;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
