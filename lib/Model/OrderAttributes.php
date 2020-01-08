<?php
/**
 * OrderAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderAttributes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'order_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version_id' => 'string',
'auto_increment' => 'int',
'order_number' => 'string',
'billing_address_id' => 'string',
'billing_address_version_id' => 'string',
'currency_id' => 'string',
'language_id' => 'string',
'sales_channel_id' => 'string',
'order_date_time' => '\DateTime',
'order_date' => 'string',
'price' => '\Swagger\Client\Model\OrderAttributesPrice',
'amount_total' => 'float',
'amount_net' => 'float',
'position_price' => 'float',
'tax_status' => 'string',
'shipping_costs' => '\Swagger\Client\Model\OrderAttributesShippingCosts',
'shipping_total' => 'float',
'currency_factor' => 'float',
'deep_link_code' => 'string',
'affiliate_code' => 'string',
'campaign_code' => 'string',
'state_id' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version_id' => 'uuid',
'auto_increment' => 'int64',
'order_number' => null,
'billing_address_id' => 'uuid',
'billing_address_version_id' => 'uuid',
'currency_id' => 'uuid',
'language_id' => 'uuid',
'sales_channel_id' => 'uuid',
'order_date_time' => 'date-time',
'order_date' => null,
'price' => null,
'amount_total' => 'float',
'amount_net' => 'float',
'position_price' => 'float',
'tax_status' => null,
'shipping_costs' => null,
'shipping_total' => 'float',
'currency_factor' => 'float',
'deep_link_code' => null,
'affiliate_code' => null,
'campaign_code' => null,
'state_id' => 'uuid',
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
        'version_id' => 'versionId',
'auto_increment' => 'autoIncrement',
'order_number' => 'orderNumber',
'billing_address_id' => 'billingAddressId',
'billing_address_version_id' => 'billingAddressVersionId',
'currency_id' => 'currencyId',
'language_id' => 'languageId',
'sales_channel_id' => 'salesChannelId',
'order_date_time' => 'orderDateTime',
'order_date' => 'orderDate',
'price' => 'price',
'amount_total' => 'amountTotal',
'amount_net' => 'amountNet',
'position_price' => 'positionPrice',
'tax_status' => 'taxStatus',
'shipping_costs' => 'shippingCosts',
'shipping_total' => 'shippingTotal',
'currency_factor' => 'currencyFactor',
'deep_link_code' => 'deepLinkCode',
'affiliate_code' => 'affiliateCode',
'campaign_code' => 'campaignCode',
'state_id' => 'stateId',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version_id' => 'setVersionId',
'auto_increment' => 'setAutoIncrement',
'order_number' => 'setOrderNumber',
'billing_address_id' => 'setBillingAddressId',
'billing_address_version_id' => 'setBillingAddressVersionId',
'currency_id' => 'setCurrencyId',
'language_id' => 'setLanguageId',
'sales_channel_id' => 'setSalesChannelId',
'order_date_time' => 'setOrderDateTime',
'order_date' => 'setOrderDate',
'price' => 'setPrice',
'amount_total' => 'setAmountTotal',
'amount_net' => 'setAmountNet',
'position_price' => 'setPositionPrice',
'tax_status' => 'setTaxStatus',
'shipping_costs' => 'setShippingCosts',
'shipping_total' => 'setShippingTotal',
'currency_factor' => 'setCurrencyFactor',
'deep_link_code' => 'setDeepLinkCode',
'affiliate_code' => 'setAffiliateCode',
'campaign_code' => 'setCampaignCode',
'state_id' => 'setStateId',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version_id' => 'getVersionId',
'auto_increment' => 'getAutoIncrement',
'order_number' => 'getOrderNumber',
'billing_address_id' => 'getBillingAddressId',
'billing_address_version_id' => 'getBillingAddressVersionId',
'currency_id' => 'getCurrencyId',
'language_id' => 'getLanguageId',
'sales_channel_id' => 'getSalesChannelId',
'order_date_time' => 'getOrderDateTime',
'order_date' => 'getOrderDate',
'price' => 'getPrice',
'amount_total' => 'getAmountTotal',
'amount_net' => 'getAmountNet',
'position_price' => 'getPositionPrice',
'tax_status' => 'getTaxStatus',
'shipping_costs' => 'getShippingCosts',
'shipping_total' => 'getShippingTotal',
'currency_factor' => 'getCurrencyFactor',
'deep_link_code' => 'getDeepLinkCode',
'affiliate_code' => 'getAffiliateCode',
'campaign_code' => 'getCampaignCode',
'state_id' => 'getStateId',
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
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['auto_increment'] = isset($data['auto_increment']) ? $data['auto_increment'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['billing_address_id'] = isset($data['billing_address_id']) ? $data['billing_address_id'] : null;
        $this->container['billing_address_version_id'] = isset($data['billing_address_version_id']) ? $data['billing_address_version_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['order_date_time'] = isset($data['order_date_time']) ? $data['order_date_time'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['amount_total'] = isset($data['amount_total']) ? $data['amount_total'] : null;
        $this->container['amount_net'] = isset($data['amount_net']) ? $data['amount_net'] : null;
        $this->container['position_price'] = isset($data['position_price']) ? $data['position_price'] : null;
        $this->container['tax_status'] = isset($data['tax_status']) ? $data['tax_status'] : null;
        $this->container['shipping_costs'] = isset($data['shipping_costs']) ? $data['shipping_costs'] : null;
        $this->container['shipping_total'] = isset($data['shipping_total']) ? $data['shipping_total'] : null;
        $this->container['currency_factor'] = isset($data['currency_factor']) ? $data['currency_factor'] : null;
        $this->container['deep_link_code'] = isset($data['deep_link_code']) ? $data['deep_link_code'] : null;
        $this->container['affiliate_code'] = isset($data['affiliate_code']) ? $data['affiliate_code'] : null;
        $this->container['campaign_code'] = isset($data['campaign_code']) ? $data['campaign_code'] : null;
        $this->container['state_id'] = isset($data['state_id']) ? $data['state_id'] : null;
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

        if ($this->container['billing_address_id'] === null) {
            $invalidProperties[] = "'billing_address_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if ($this->container['order_date_time'] === null) {
            $invalidProperties[] = "'order_date_time' can't be null";
        }
        if ($this->container['currency_factor'] === null) {
            $invalidProperties[] = "'currency_factor' can't be null";
        }
        if ($this->container['state_id'] === null) {
            $invalidProperties[] = "'state_id' can't be null";
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
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets auto_increment
     *
     * @return int
     */
    public function getAutoIncrement()
    {
        return $this->container['auto_increment'];
    }

    /**
     * Sets auto_increment
     *
     * @param int $auto_increment auto_increment
     *
     * @return $this
     */
    public function setAutoIncrement($auto_increment)
    {
        $this->container['auto_increment'] = $auto_increment;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets billing_address_id
     *
     * @return string
     */
    public function getBillingAddressId()
    {
        return $this->container['billing_address_id'];
    }

    /**
     * Sets billing_address_id
     *
     * @param string $billing_address_id billing_address_id
     *
     * @return $this
     */
    public function setBillingAddressId($billing_address_id)
    {
        $this->container['billing_address_id'] = $billing_address_id;

        return $this;
    }

    /**
     * Gets billing_address_version_id
     *
     * @return string
     */
    public function getBillingAddressVersionId()
    {
        return $this->container['billing_address_version_id'];
    }

    /**
     * Sets billing_address_version_id
     *
     * @param string $billing_address_version_id billing_address_version_id
     *
     * @return $this
     */
    public function setBillingAddressVersionId($billing_address_version_id)
    {
        $this->container['billing_address_version_id'] = $billing_address_version_id;

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
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id language_id
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return $this
     */
    public function setSalesChannelId($sales_channel_id)
    {
        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets order_date_time
     *
     * @return \DateTime
     */
    public function getOrderDateTime()
    {
        return $this->container['order_date_time'];
    }

    /**
     * Sets order_date_time
     *
     * @param \DateTime $order_date_time order_date_time
     *
     * @return $this
     */
    public function setOrderDateTime($order_date_time)
    {
        $this->container['order_date_time'] = $order_date_time;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Swagger\Client\Model\OrderAttributesPrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Swagger\Client\Model\OrderAttributesPrice $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets amount_total
     *
     * @return float
     */
    public function getAmountTotal()
    {
        return $this->container['amount_total'];
    }

    /**
     * Sets amount_total
     *
     * @param float $amount_total amount_total
     *
     * @return $this
     */
    public function setAmountTotal($amount_total)
    {
        $this->container['amount_total'] = $amount_total;

        return $this;
    }

    /**
     * Gets amount_net
     *
     * @return float
     */
    public function getAmountNet()
    {
        return $this->container['amount_net'];
    }

    /**
     * Sets amount_net
     *
     * @param float $amount_net amount_net
     *
     * @return $this
     */
    public function setAmountNet($amount_net)
    {
        $this->container['amount_net'] = $amount_net;

        return $this;
    }

    /**
     * Gets position_price
     *
     * @return float
     */
    public function getPositionPrice()
    {
        return $this->container['position_price'];
    }

    /**
     * Sets position_price
     *
     * @param float $position_price position_price
     *
     * @return $this
     */
    public function setPositionPrice($position_price)
    {
        $this->container['position_price'] = $position_price;

        return $this;
    }

    /**
     * Gets tax_status
     *
     * @return string
     */
    public function getTaxStatus()
    {
        return $this->container['tax_status'];
    }

    /**
     * Sets tax_status
     *
     * @param string $tax_status tax_status
     *
     * @return $this
     */
    public function setTaxStatus($tax_status)
    {
        $this->container['tax_status'] = $tax_status;

        return $this;
    }

    /**
     * Gets shipping_costs
     *
     * @return \Swagger\Client\Model\OrderAttributesShippingCosts
     */
    public function getShippingCosts()
    {
        return $this->container['shipping_costs'];
    }

    /**
     * Sets shipping_costs
     *
     * @param \Swagger\Client\Model\OrderAttributesShippingCosts $shipping_costs shipping_costs
     *
     * @return $this
     */
    public function setShippingCosts($shipping_costs)
    {
        $this->container['shipping_costs'] = $shipping_costs;

        return $this;
    }

    /**
     * Gets shipping_total
     *
     * @return float
     */
    public function getShippingTotal()
    {
        return $this->container['shipping_total'];
    }

    /**
     * Sets shipping_total
     *
     * @param float $shipping_total shipping_total
     *
     * @return $this
     */
    public function setShippingTotal($shipping_total)
    {
        $this->container['shipping_total'] = $shipping_total;

        return $this;
    }

    /**
     * Gets currency_factor
     *
     * @return float
     */
    public function getCurrencyFactor()
    {
        return $this->container['currency_factor'];
    }

    /**
     * Sets currency_factor
     *
     * @param float $currency_factor currency_factor
     *
     * @return $this
     */
    public function setCurrencyFactor($currency_factor)
    {
        $this->container['currency_factor'] = $currency_factor;

        return $this;
    }

    /**
     * Gets deep_link_code
     *
     * @return string
     */
    public function getDeepLinkCode()
    {
        return $this->container['deep_link_code'];
    }

    /**
     * Sets deep_link_code
     *
     * @param string $deep_link_code deep_link_code
     *
     * @return $this
     */
    public function setDeepLinkCode($deep_link_code)
    {
        $this->container['deep_link_code'] = $deep_link_code;

        return $this;
    }

    /**
     * Gets affiliate_code
     *
     * @return string
     */
    public function getAffiliateCode()
    {
        return $this->container['affiliate_code'];
    }

    /**
     * Sets affiliate_code
     *
     * @param string $affiliate_code affiliate_code
     *
     * @return $this
     */
    public function setAffiliateCode($affiliate_code)
    {
        $this->container['affiliate_code'] = $affiliate_code;

        return $this;
    }

    /**
     * Gets campaign_code
     *
     * @return string
     */
    public function getCampaignCode()
    {
        return $this->container['campaign_code'];
    }

    /**
     * Sets campaign_code
     *
     * @param string $campaign_code campaign_code
     *
     * @return $this
     */
    public function setCampaignCode($campaign_code)
    {
        $this->container['campaign_code'] = $campaign_code;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string $state_id state_id
     *
     * @return $this
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

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