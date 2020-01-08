<?php
/**
 * SalutationFlat
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
 * SalutationFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalutationFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'salutation_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'salutation_key' => 'string',
'display_name' => 'string',
'letter_name' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'customers' => '\Swagger\Client\Model\CustomerFlat',
'customer_addresses' => '\Swagger\Client\Model\CustomerAddressFlat',
'order_customers' => '\Swagger\Client\Model\OrderCustomerFlat',
'order_addresses' => '\Swagger\Client\Model\OrderAddressFlat',
'newsletter_recipients' => '\Swagger\Client\Model\NewsletterRecipientFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'salutation_key' => null,
'display_name' => null,
'letter_name' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
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
        'id' => 'id',
'salutation_key' => 'salutationKey',
'display_name' => 'displayName',
'letter_name' => 'letterName',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
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
        'id' => 'setId',
'salutation_key' => 'setSalutationKey',
'display_name' => 'setDisplayName',
'letter_name' => 'setLetterName',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
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
        'id' => 'getId',
'salutation_key' => 'getSalutationKey',
'display_name' => 'getDisplayName',
'letter_name' => 'getLetterName',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['salutation_key'] = isset($data['salutation_key']) ? $data['salutation_key'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['letter_name'] = isset($data['letter_name']) ? $data['letter_name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
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

        if ($this->container['salutation_key'] === null) {
            $invalidProperties[] = "'salutation_key' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['letter_name'] === null) {
            $invalidProperties[] = "'letter_name' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets salutation_key
     *
     * @return string
     */
    public function getSalutationKey()
    {
        return $this->container['salutation_key'];
    }

    /**
     * Sets salutation_key
     *
     * @param string $salutation_key salutation_key
     *
     * @return $this
     */
    public function setSalutationKey($salutation_key)
    {
        $this->container['salutation_key'] = $salutation_key;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets letter_name
     *
     * @return string
     */
    public function getLetterName()
    {
        return $this->container['letter_name'];
    }

    /**
     * Sets letter_name
     *
     * @param string $letter_name letter_name
     *
     * @return $this
     */
    public function setLetterName($letter_name)
    {
        $this->container['letter_name'] = $letter_name;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Swagger\Client\Model\CustomerFlat
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Swagger\Client\Model\CustomerFlat $customers customers
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
     * @return \Swagger\Client\Model\CustomerAddressFlat
     */
    public function getCustomerAddresses()
    {
        return $this->container['customer_addresses'];
    }

    /**
     * Sets customer_addresses
     *
     * @param \Swagger\Client\Model\CustomerAddressFlat $customer_addresses customer_addresses
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
     * @return \Swagger\Client\Model\OrderCustomerFlat
     */
    public function getOrderCustomers()
    {
        return $this->container['order_customers'];
    }

    /**
     * Sets order_customers
     *
     * @param \Swagger\Client\Model\OrderCustomerFlat $order_customers order_customers
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
     * @return \Swagger\Client\Model\OrderAddressFlat
     */
    public function getOrderAddresses()
    {
        return $this->container['order_addresses'];
    }

    /**
     * Sets order_addresses
     *
     * @param \Swagger\Client\Model\OrderAddressFlat $order_addresses order_addresses
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
     * @return \Swagger\Client\Model\NewsletterRecipientFlat
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \Swagger\Client\Model\NewsletterRecipientFlat $newsletter_recipients newsletter_recipients
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
