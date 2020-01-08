<?php
/**
 * SalutationRelationships
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
 * SalutationRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalutationRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'salutation_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customers' => '\Swagger\Client\Model\SalutationRelationshipsCustomers',
'customer_addresses' => '\Swagger\Client\Model\SalutationRelationshipsCustomerAddresses',
'order_customers' => '\Swagger\Client\Model\SalutationRelationshipsOrderCustomers',
'order_addresses' => '\Swagger\Client\Model\SalutationRelationshipsOrderAddresses',
'newsletter_recipients' => '\Swagger\Client\Model\SalutationRelationshipsNewsletterRecipients'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customers' => null,
'customer_addresses' => null,
'order_customers' => null,
'order_addresses' => null,
'newsletter_recipients' => null    ];

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
        'customers' => 'customers',
'customer_addresses' => 'customerAddresses',
'order_customers' => 'orderCustomers',
'order_addresses' => 'orderAddresses',
'newsletter_recipients' => 'newsletterRecipients'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customers' => 'setCustomers',
'customer_addresses' => 'setCustomerAddresses',
'order_customers' => 'setOrderCustomers',
'order_addresses' => 'setOrderAddresses',
'newsletter_recipients' => 'setNewsletterRecipients'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customers' => 'getCustomers',
'customer_addresses' => 'getCustomerAddresses',
'order_customers' => 'getOrderCustomers',
'order_addresses' => 'getOrderAddresses',
'newsletter_recipients' => 'getNewsletterRecipients'    ];

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
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['customer_addresses'] = isset($data['customer_addresses']) ? $data['customer_addresses'] : null;
        $this->container['order_customers'] = isset($data['order_customers']) ? $data['order_customers'] : null;
        $this->container['order_addresses'] = isset($data['order_addresses']) ? $data['order_addresses'] : null;
        $this->container['newsletter_recipients'] = isset($data['newsletter_recipients']) ? $data['newsletter_recipients'] : null;
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
     * Gets customers
     *
     * @return \Swagger\Client\Model\SalutationRelationshipsCustomers
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Swagger\Client\Model\SalutationRelationshipsCustomers $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets customer_addresses
     *
     * @return \Swagger\Client\Model\SalutationRelationshipsCustomerAddresses
     */
    public function getCustomerAddresses()
    {
        return $this->container['customer_addresses'];
    }

    /**
     * Sets customer_addresses
     *
     * @param \Swagger\Client\Model\SalutationRelationshipsCustomerAddresses $customer_addresses customer_addresses
     *
     * @return $this
     */
    public function setCustomerAddresses($customer_addresses)
    {
        $this->container['customer_addresses'] = $customer_addresses;

        return $this;
    }

    /**
     * Gets order_customers
     *
     * @return \Swagger\Client\Model\SalutationRelationshipsOrderCustomers
     */
    public function getOrderCustomers()
    {
        return $this->container['order_customers'];
    }

    /**
     * Sets order_customers
     *
     * @param \Swagger\Client\Model\SalutationRelationshipsOrderCustomers $order_customers order_customers
     *
     * @return $this
     */
    public function setOrderCustomers($order_customers)
    {
        $this->container['order_customers'] = $order_customers;

        return $this;
    }

    /**
     * Gets order_addresses
     *
     * @return \Swagger\Client\Model\SalutationRelationshipsOrderAddresses
     */
    public function getOrderAddresses()
    {
        return $this->container['order_addresses'];
    }

    /**
     * Sets order_addresses
     *
     * @param \Swagger\Client\Model\SalutationRelationshipsOrderAddresses $order_addresses order_addresses
     *
     * @return $this
     */
    public function setOrderAddresses($order_addresses)
    {
        $this->container['order_addresses'] = $order_addresses;

        return $this;
    }

    /**
     * Gets newsletter_recipients
     *
     * @return \Swagger\Client\Model\SalutationRelationshipsNewsletterRecipients
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \Swagger\Client\Model\SalutationRelationshipsNewsletterRecipients $newsletter_recipients newsletter_recipients
     *
     * @return $this
     */
    public function setNewsletterRecipients($newsletter_recipients)
    {
        $this->container['newsletter_recipients'] = $newsletter_recipients;

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