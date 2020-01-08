<?php
/**
 * CurrencyRelationships
 *
 * PHP version 5
 *
 * @category Class
 * @package  ShopwareSDK6
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

namespace ShopwareSDK6\Model;

use \ArrayAccess;
use \ShopwareSDK6\ObjectSerializer;

/**
 * CurrencyRelationships Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'currency_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_channel_default_assignments' => '\ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDefaultAssignments',
'orders' => '\ShopwareSDK6\Model\CurrencyRelationshipsOrders',
'shipping_method_prices' => '\ShopwareSDK6\Model\CurrencyRelationshipsShippingMethodPrices',
'sales_channels' => '\ShopwareSDK6\Model\CurrencyRelationshipsSalesChannels',
'sales_channel_domains' => '\ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDomains',
'promotion_discount_prices' => '\ShopwareSDK6\Model\CurrencyRelationshipsPromotionDiscountPrices',
'product_exports' => '\ShopwareSDK6\Model\CurrencyRelationshipsProductExports'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_channel_default_assignments' => null,
'orders' => null,
'shipping_method_prices' => null,
'sales_channels' => null,
'sales_channel_domains' => null,
'promotion_discount_prices' => null,
'product_exports' => null    ];

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
        'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'orders' => 'orders',
'shipping_method_prices' => 'shippingMethodPrices',
'sales_channels' => 'salesChannels',
'sales_channel_domains' => 'salesChannelDomains',
'promotion_discount_prices' => 'promotionDiscountPrices',
'product_exports' => 'productExports'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'orders' => 'setOrders',
'shipping_method_prices' => 'setShippingMethodPrices',
'sales_channels' => 'setSalesChannels',
'sales_channel_domains' => 'setSalesChannelDomains',
'promotion_discount_prices' => 'setPromotionDiscountPrices',
'product_exports' => 'setProductExports'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'orders' => 'getOrders',
'shipping_method_prices' => 'getShippingMethodPrices',
'sales_channels' => 'getSalesChannels',
'sales_channel_domains' => 'getSalesChannelDomains',
'promotion_discount_prices' => 'getPromotionDiscountPrices',
'product_exports' => 'getProductExports'    ];

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
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['shipping_method_prices'] = isset($data['shipping_method_prices']) ? $data['shipping_method_prices'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['sales_channel_domains'] = isset($data['sales_channel_domains']) ? $data['sales_channel_domains'] : null;
        $this->container['promotion_discount_prices'] = isset($data['promotion_discount_prices']) ? $data['promotion_discount_prices'] : null;
        $this->container['product_exports'] = isset($data['product_exports']) ? $data['product_exports'] : null;
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
     * Gets sales_channel_default_assignments
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDefaultAssignments
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDefaultAssignments $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsOrders
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsOrders $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets shipping_method_prices
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsShippingMethodPrices
     */
    public function getShippingMethodPrices()
    {
        return $this->container['shipping_method_prices'];
    }

    /**
     * Sets shipping_method_prices
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsShippingMethodPrices $shipping_method_prices shipping_method_prices
     *
     * @return $this
     */
    public function setShippingMethodPrices($shipping_method_prices)
    {
        $this->container['shipping_method_prices'] = $shipping_method_prices;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets sales_channel_domains
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDomains
     */
    public function getSalesChannelDomains()
    {
        return $this->container['sales_channel_domains'];
    }

    /**
     * Sets sales_channel_domains
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsSalesChannelDomains $sales_channel_domains sales_channel_domains
     *
     * @return $this
     */
    public function setSalesChannelDomains($sales_channel_domains)
    {
        $this->container['sales_channel_domains'] = $sales_channel_domains;

        return $this;
    }

    /**
     * Gets promotion_discount_prices
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsPromotionDiscountPrices
     */
    public function getPromotionDiscountPrices()
    {
        return $this->container['promotion_discount_prices'];
    }

    /**
     * Sets promotion_discount_prices
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsPromotionDiscountPrices $promotion_discount_prices promotion_discount_prices
     *
     * @return $this
     */
    public function setPromotionDiscountPrices($promotion_discount_prices)
    {
        $this->container['promotion_discount_prices'] = $promotion_discount_prices;

        return $this;
    }

    /**
     * Gets product_exports
     *
     * @return \ShopwareSDK6\Model\CurrencyRelationshipsProductExports
     */
    public function getProductExports()
    {
        return $this->container['product_exports'];
    }

    /**
     * Sets product_exports
     *
     * @param \ShopwareSDK6\Model\CurrencyRelationshipsProductExports $product_exports product_exports
     *
     * @return $this
     */
    public function setProductExports($product_exports)
    {
        $this->container['product_exports'] = $product_exports;

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
