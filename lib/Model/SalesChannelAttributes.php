<?php
/**
 * SalesChannelAttributes
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
 * SalesChannelAttributes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesChannelAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales_channel_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_id' => 'string',
'language_id' => 'string',
'customer_group_id' => 'string',
'currency_id' => 'string',
'payment_method_id' => 'string',
'shipping_method_id' => 'string',
'country_id' => 'string',
'navigation_category_id' => 'string',
'navigation_category_version_id' => 'string',
'footer_category_id' => 'string',
'footer_category_version_id' => 'string',
'service_category_id' => 'string',
'service_category_version_id' => 'string',
'mail_header_footer_id' => 'string',
'name' => 'string',
'short_name' => 'string',
'access_key' => 'string',
'configuration' => 'object',
'active' => 'bool',
'maintenance' => 'bool',
'maintenance_ip_whitelist' => 'array',
'custom_fields' => 'object',
'payment_method_ids' => 'string[]',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'extensions' => '\Swagger\Client\Model\SalesChannelAttributesExtensions'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_id' => 'uuid',
'language_id' => 'uuid',
'customer_group_id' => 'uuid',
'currency_id' => 'uuid',
'payment_method_id' => 'uuid',
'shipping_method_id' => 'uuid',
'country_id' => 'uuid',
'navigation_category_id' => 'uuid',
'navigation_category_version_id' => 'uuid',
'footer_category_id' => 'uuid',
'footer_category_version_id' => 'uuid',
'service_category_id' => 'uuid',
'service_category_version_id' => 'uuid',
'mail_header_footer_id' => 'uuid',
'name' => null,
'short_name' => null,
'access_key' => null,
'configuration' => null,
'active' => null,
'maintenance' => null,
'maintenance_ip_whitelist' => null,
'custom_fields' => null,
'payment_method_ids' => 'uuid',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'extensions' => null    ];

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
        'type_id' => 'typeId',
'language_id' => 'languageId',
'customer_group_id' => 'customerGroupId',
'currency_id' => 'currencyId',
'payment_method_id' => 'paymentMethodId',
'shipping_method_id' => 'shippingMethodId',
'country_id' => 'countryId',
'navigation_category_id' => 'navigationCategoryId',
'navigation_category_version_id' => 'navigationCategoryVersionId',
'footer_category_id' => 'footerCategoryId',
'footer_category_version_id' => 'footerCategoryVersionId',
'service_category_id' => 'serviceCategoryId',
'service_category_version_id' => 'serviceCategoryVersionId',
'mail_header_footer_id' => 'mailHeaderFooterId',
'name' => 'name',
'short_name' => 'shortName',
'access_key' => 'accessKey',
'configuration' => 'configuration',
'active' => 'active',
'maintenance' => 'maintenance',
'maintenance_ip_whitelist' => 'maintenanceIpWhitelist',
'custom_fields' => 'customFields',
'payment_method_ids' => 'paymentMethodIds',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'extensions' => 'extensions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_id' => 'setTypeId',
'language_id' => 'setLanguageId',
'customer_group_id' => 'setCustomerGroupId',
'currency_id' => 'setCurrencyId',
'payment_method_id' => 'setPaymentMethodId',
'shipping_method_id' => 'setShippingMethodId',
'country_id' => 'setCountryId',
'navigation_category_id' => 'setNavigationCategoryId',
'navigation_category_version_id' => 'setNavigationCategoryVersionId',
'footer_category_id' => 'setFooterCategoryId',
'footer_category_version_id' => 'setFooterCategoryVersionId',
'service_category_id' => 'setServiceCategoryId',
'service_category_version_id' => 'setServiceCategoryVersionId',
'mail_header_footer_id' => 'setMailHeaderFooterId',
'name' => 'setName',
'short_name' => 'setShortName',
'access_key' => 'setAccessKey',
'configuration' => 'setConfiguration',
'active' => 'setActive',
'maintenance' => 'setMaintenance',
'maintenance_ip_whitelist' => 'setMaintenanceIpWhitelist',
'custom_fields' => 'setCustomFields',
'payment_method_ids' => 'setPaymentMethodIds',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'extensions' => 'setExtensions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_id' => 'getTypeId',
'language_id' => 'getLanguageId',
'customer_group_id' => 'getCustomerGroupId',
'currency_id' => 'getCurrencyId',
'payment_method_id' => 'getPaymentMethodId',
'shipping_method_id' => 'getShippingMethodId',
'country_id' => 'getCountryId',
'navigation_category_id' => 'getNavigationCategoryId',
'navigation_category_version_id' => 'getNavigationCategoryVersionId',
'footer_category_id' => 'getFooterCategoryId',
'footer_category_version_id' => 'getFooterCategoryVersionId',
'service_category_id' => 'getServiceCategoryId',
'service_category_version_id' => 'getServiceCategoryVersionId',
'mail_header_footer_id' => 'getMailHeaderFooterId',
'name' => 'getName',
'short_name' => 'getShortName',
'access_key' => 'getAccessKey',
'configuration' => 'getConfiguration',
'active' => 'getActive',
'maintenance' => 'getMaintenance',
'maintenance_ip_whitelist' => 'getMaintenanceIpWhitelist',
'custom_fields' => 'getCustomFields',
'payment_method_ids' => 'getPaymentMethodIds',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'extensions' => 'getExtensions'    ];

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
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['customer_group_id'] = isset($data['customer_group_id']) ? $data['customer_group_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['shipping_method_id'] = isset($data['shipping_method_id']) ? $data['shipping_method_id'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['navigation_category_id'] = isset($data['navigation_category_id']) ? $data['navigation_category_id'] : null;
        $this->container['navigation_category_version_id'] = isset($data['navigation_category_version_id']) ? $data['navigation_category_version_id'] : null;
        $this->container['footer_category_id'] = isset($data['footer_category_id']) ? $data['footer_category_id'] : null;
        $this->container['footer_category_version_id'] = isset($data['footer_category_version_id']) ? $data['footer_category_version_id'] : null;
        $this->container['service_category_id'] = isset($data['service_category_id']) ? $data['service_category_id'] : null;
        $this->container['service_category_version_id'] = isset($data['service_category_version_id']) ? $data['service_category_version_id'] : null;
        $this->container['mail_header_footer_id'] = isset($data['mail_header_footer_id']) ? $data['mail_header_footer_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['access_key'] = isset($data['access_key']) ? $data['access_key'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['maintenance'] = isset($data['maintenance']) ? $data['maintenance'] : null;
        $this->container['maintenance_ip_whitelist'] = isset($data['maintenance_ip_whitelist']) ? $data['maintenance_ip_whitelist'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['payment_method_ids'] = isset($data['payment_method_ids']) ? $data['payment_method_ids'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if ($this->container['customer_group_id'] === null) {
            $invalidProperties[] = "'customer_group_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['payment_method_id'] === null) {
            $invalidProperties[] = "'payment_method_id' can't be null";
        }
        if ($this->container['shipping_method_id'] === null) {
            $invalidProperties[] = "'shipping_method_id' can't be null";
        }
        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if ($this->container['navigation_category_id'] === null) {
            $invalidProperties[] = "'navigation_category_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['access_key'] === null) {
            $invalidProperties[] = "'access_key' can't be null";
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
     * Gets type_id
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
     * Gets customer_group_id
     *
     * @return string
     */
    public function getCustomerGroupId()
    {
        return $this->container['customer_group_id'];
    }

    /**
     * Sets customer_group_id
     *
     * @param string $customer_group_id customer_group_id
     *
     * @return $this
     */
    public function setCustomerGroupId($customer_group_id)
    {
        $this->container['customer_group_id'] = $customer_group_id;

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
     * Gets payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
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
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id country_id
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets navigation_category_id
     *
     * @return string
     */
    public function getNavigationCategoryId()
    {
        return $this->container['navigation_category_id'];
    }

    /**
     * Sets navigation_category_id
     *
     * @param string $navigation_category_id navigation_category_id
     *
     * @return $this
     */
    public function setNavigationCategoryId($navigation_category_id)
    {
        $this->container['navigation_category_id'] = $navigation_category_id;

        return $this;
    }

    /**
     * Gets navigation_category_version_id
     *
     * @return string
     */
    public function getNavigationCategoryVersionId()
    {
        return $this->container['navigation_category_version_id'];
    }

    /**
     * Sets navigation_category_version_id
     *
     * @param string $navigation_category_version_id navigation_category_version_id
     *
     * @return $this
     */
    public function setNavigationCategoryVersionId($navigation_category_version_id)
    {
        $this->container['navigation_category_version_id'] = $navigation_category_version_id;

        return $this;
    }

    /**
     * Gets footer_category_id
     *
     * @return string
     */
    public function getFooterCategoryId()
    {
        return $this->container['footer_category_id'];
    }

    /**
     * Sets footer_category_id
     *
     * @param string $footer_category_id footer_category_id
     *
     * @return $this
     */
    public function setFooterCategoryId($footer_category_id)
    {
        $this->container['footer_category_id'] = $footer_category_id;

        return $this;
    }

    /**
     * Gets footer_category_version_id
     *
     * @return string
     */
    public function getFooterCategoryVersionId()
    {
        return $this->container['footer_category_version_id'];
    }

    /**
     * Sets footer_category_version_id
     *
     * @param string $footer_category_version_id footer_category_version_id
     *
     * @return $this
     */
    public function setFooterCategoryVersionId($footer_category_version_id)
    {
        $this->container['footer_category_version_id'] = $footer_category_version_id;

        return $this;
    }

    /**
     * Gets service_category_id
     *
     * @return string
     */
    public function getServiceCategoryId()
    {
        return $this->container['service_category_id'];
    }

    /**
     * Sets service_category_id
     *
     * @param string $service_category_id service_category_id
     *
     * @return $this
     */
    public function setServiceCategoryId($service_category_id)
    {
        $this->container['service_category_id'] = $service_category_id;

        return $this;
    }

    /**
     * Gets service_category_version_id
     *
     * @return string
     */
    public function getServiceCategoryVersionId()
    {
        return $this->container['service_category_version_id'];
    }

    /**
     * Sets service_category_version_id
     *
     * @param string $service_category_version_id service_category_version_id
     *
     * @return $this
     */
    public function setServiceCategoryVersionId($service_category_version_id)
    {
        $this->container['service_category_version_id'] = $service_category_version_id;

        return $this;
    }

    /**
     * Gets mail_header_footer_id
     *
     * @return string
     */
    public function getMailHeaderFooterId()
    {
        return $this->container['mail_header_footer_id'];
    }

    /**
     * Sets mail_header_footer_id
     *
     * @param string $mail_header_footer_id mail_header_footer_id
     *
     * @return $this
     */
    public function setMailHeaderFooterId($mail_header_footer_id)
    {
        $this->container['mail_header_footer_id'] = $mail_header_footer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name short_name
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return object
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param object $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets maintenance
     *
     * @return bool
     */
    public function getMaintenance()
    {
        return $this->container['maintenance'];
    }

    /**
     * Sets maintenance
     *
     * @param bool $maintenance maintenance
     *
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->container['maintenance'] = $maintenance;

        return $this;
    }

    /**
     * Gets maintenance_ip_whitelist
     *
     * @return array
     */
    public function getMaintenanceIpWhitelist()
    {
        return $this->container['maintenance_ip_whitelist'];
    }

    /**
     * Sets maintenance_ip_whitelist
     *
     * @param array $maintenance_ip_whitelist maintenance_ip_whitelist
     *
     * @return $this
     */
    public function setMaintenanceIpWhitelist($maintenance_ip_whitelist)
    {
        $this->container['maintenance_ip_whitelist'] = $maintenance_ip_whitelist;

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
     * Gets payment_method_ids
     *
     * @return string[]
     */
    public function getPaymentMethodIds()
    {
        return $this->container['payment_method_ids'];
    }

    /**
     * Sets payment_method_ids
     *
     * @param string[] $payment_method_ids payment_method_ids
     *
     * @return $this
     */
    public function setPaymentMethodIds($payment_method_ids)
    {
        $this->container['payment_method_ids'] = $payment_method_ids;

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
     * Gets extensions
     *
     * @return \Swagger\Client\Model\SalesChannelAttributesExtensions
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param \Swagger\Client\Model\SalesChannelAttributesExtensions $extensions extensions
     *
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

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
