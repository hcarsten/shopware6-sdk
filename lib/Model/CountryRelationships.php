<?php
/**
 * CountryRelationships
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
 * CountryRelationships Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CountryRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'country_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'states' => '\Shopware6SDK\Model\CountryRelationshipsStates',
'customer_addresses' => '\Shopware6SDK\Model\CountryRelationshipsCustomerAddresses',
'order_addresses' => '\Shopware6SDK\Model\CountryRelationshipsOrderAddresses',
'sales_channel_default_assignments' => '\Shopware6SDK\Model\CountryRelationshipsSalesChannelDefaultAssignments',
'sales_channels' => '\Shopware6SDK\Model\CountryRelationshipsSalesChannels',
'tax_rules' => '\Shopware6SDK\Model\CountryRelationshipsTaxRules'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'states' => null,
'customer_addresses' => null,
'order_addresses' => null,
'sales_channel_default_assignments' => null,
'sales_channels' => null,
'tax_rules' => null    ];

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
        'states' => 'states',
'customer_addresses' => 'customerAddresses',
'order_addresses' => 'orderAddresses',
'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'sales_channels' => 'salesChannels',
'tax_rules' => 'taxRules'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'states' => 'setStates',
'customer_addresses' => 'setCustomerAddresses',
'order_addresses' => 'setOrderAddresses',
'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'sales_channels' => 'setSalesChannels',
'tax_rules' => 'setTaxRules'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'states' => 'getStates',
'customer_addresses' => 'getCustomerAddresses',
'order_addresses' => 'getOrderAddresses',
'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'sales_channels' => 'getSalesChannels',
'tax_rules' => 'getTaxRules'    ];

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
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['customer_addresses'] = isset($data['customer_addresses']) ? $data['customer_addresses'] : null;
        $this->container['order_addresses'] = isset($data['order_addresses']) ? $data['order_addresses'] : null;
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['tax_rules'] = isset($data['tax_rules']) ? $data['tax_rules'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets states
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsStates
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsStates $states states
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets customer_addresses
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsCustomerAddresses
     */
    public function getCustomerAddresses()
    {
        return $this->container['customer_addresses'];
    }

    /**
     * Sets customer_addresses
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsCustomerAddresses $customer_addresses customer_addresses
     *
     * @return $this
     */
    public function setCustomerAddresses($customer_addresses)
    {
        $this->container['customer_addresses'] = $customer_addresses;

        return $this;
    }

    /**
     * Gets order_addresses
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsOrderAddresses
     */
    public function getOrderAddresses()
    {
        return $this->container['order_addresses'];
    }

    /**
     * Sets order_addresses
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsOrderAddresses $order_addresses order_addresses
     *
     * @return $this
     */
    public function setOrderAddresses($order_addresses)
    {
        $this->container['order_addresses'] = $order_addresses;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsSalesChannelDefaultAssignments
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsSalesChannelDefaultAssignments $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets tax_rules
     *
     * @return \Shopware6SDK\Model\CountryRelationshipsTaxRules
     */
    public function getTaxRules()
    {
        return $this->container['tax_rules'];
    }

    /**
     * Sets tax_rules
     *
     * @param \Shopware6SDK\Model\CountryRelationshipsTaxRules $tax_rules tax_rules
     *
     * @return $this
     */
    public function setTaxRules($tax_rules)
    {
        $this->container['tax_rules'] = $tax_rules;

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
