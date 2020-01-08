<?php
/**
 * CustomerAttributes
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
 * CustomerAttributes Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_id' => 'string',
'default_payment_method_id' => 'string',
'sales_channel_id' => 'string',
'language_id' => 'string',
'last_payment_method_id' => 'string',
'default_billing_address_id' => 'string',
'default_shipping_address_id' => 'string',
'auto_increment' => 'int',
'customer_number' => 'string',
'salutation_id' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'company' => 'string',
'email' => 'string',
'title' => 'string',
'affiliate_code' => 'string',
'campaign_code' => 'string',
'active' => 'bool',
'double_opt_in_registration' => 'bool',
'double_opt_in_email_sent_date' => '\DateTime',
'double_opt_in_confirm_date' => '\DateTime',
'hash' => 'string',
'guest' => 'bool',
'first_login' => '\DateTime',
'last_login' => '\DateTime',
'newsletter' => 'bool',
'birthday' => 'string',
'last_order_date' => '\DateTime',
'order_count' => 'int',
'custom_fields' => 'object',
'remote_address' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_id' => 'uuid',
'default_payment_method_id' => 'uuid',
'sales_channel_id' => 'uuid',
'language_id' => 'uuid',
'last_payment_method_id' => 'uuid',
'default_billing_address_id' => 'uuid',
'default_shipping_address_id' => 'uuid',
'auto_increment' => 'int64',
'customer_number' => null,
'salutation_id' => 'uuid',
'first_name' => null,
'last_name' => null,
'company' => null,
'email' => null,
'title' => null,
'affiliate_code' => null,
'campaign_code' => null,
'active' => null,
'double_opt_in_registration' => null,
'double_opt_in_email_sent_date' => 'date-time',
'double_opt_in_confirm_date' => 'date-time',
'hash' => null,
'guest' => null,
'first_login' => 'date-time',
'last_login' => 'date-time',
'newsletter' => null,
'birthday' => null,
'last_order_date' => 'date-time',
'order_count' => 'int64',
'custom_fields' => null,
'remote_address' => null,
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
        'group_id' => 'groupId',
'default_payment_method_id' => 'defaultPaymentMethodId',
'sales_channel_id' => 'salesChannelId',
'language_id' => 'languageId',
'last_payment_method_id' => 'lastPaymentMethodId',
'default_billing_address_id' => 'defaultBillingAddressId',
'default_shipping_address_id' => 'defaultShippingAddressId',
'auto_increment' => 'autoIncrement',
'customer_number' => 'customerNumber',
'salutation_id' => 'salutationId',
'first_name' => 'firstName',
'last_name' => 'lastName',
'company' => 'company',
'email' => 'email',
'title' => 'title',
'affiliate_code' => 'affiliateCode',
'campaign_code' => 'campaignCode',
'active' => 'active',
'double_opt_in_registration' => 'doubleOptInRegistration',
'double_opt_in_email_sent_date' => 'doubleOptInEmailSentDate',
'double_opt_in_confirm_date' => 'doubleOptInConfirmDate',
'hash' => 'hash',
'guest' => 'guest',
'first_login' => 'firstLogin',
'last_login' => 'lastLogin',
'newsletter' => 'newsletter',
'birthday' => 'birthday',
'last_order_date' => 'lastOrderDate',
'order_count' => 'orderCount',
'custom_fields' => 'customFields',
'remote_address' => 'remoteAddress',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
'default_payment_method_id' => 'setDefaultPaymentMethodId',
'sales_channel_id' => 'setSalesChannelId',
'language_id' => 'setLanguageId',
'last_payment_method_id' => 'setLastPaymentMethodId',
'default_billing_address_id' => 'setDefaultBillingAddressId',
'default_shipping_address_id' => 'setDefaultShippingAddressId',
'auto_increment' => 'setAutoIncrement',
'customer_number' => 'setCustomerNumber',
'salutation_id' => 'setSalutationId',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'company' => 'setCompany',
'email' => 'setEmail',
'title' => 'setTitle',
'affiliate_code' => 'setAffiliateCode',
'campaign_code' => 'setCampaignCode',
'active' => 'setActive',
'double_opt_in_registration' => 'setDoubleOptInRegistration',
'double_opt_in_email_sent_date' => 'setDoubleOptInEmailSentDate',
'double_opt_in_confirm_date' => 'setDoubleOptInConfirmDate',
'hash' => 'setHash',
'guest' => 'setGuest',
'first_login' => 'setFirstLogin',
'last_login' => 'setLastLogin',
'newsletter' => 'setNewsletter',
'birthday' => 'setBirthday',
'last_order_date' => 'setLastOrderDate',
'order_count' => 'setOrderCount',
'custom_fields' => 'setCustomFields',
'remote_address' => 'setRemoteAddress',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
'default_payment_method_id' => 'getDefaultPaymentMethodId',
'sales_channel_id' => 'getSalesChannelId',
'language_id' => 'getLanguageId',
'last_payment_method_id' => 'getLastPaymentMethodId',
'default_billing_address_id' => 'getDefaultBillingAddressId',
'default_shipping_address_id' => 'getDefaultShippingAddressId',
'auto_increment' => 'getAutoIncrement',
'customer_number' => 'getCustomerNumber',
'salutation_id' => 'getSalutationId',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'company' => 'getCompany',
'email' => 'getEmail',
'title' => 'getTitle',
'affiliate_code' => 'getAffiliateCode',
'campaign_code' => 'getCampaignCode',
'active' => 'getActive',
'double_opt_in_registration' => 'getDoubleOptInRegistration',
'double_opt_in_email_sent_date' => 'getDoubleOptInEmailSentDate',
'double_opt_in_confirm_date' => 'getDoubleOptInConfirmDate',
'hash' => 'getHash',
'guest' => 'getGuest',
'first_login' => 'getFirstLogin',
'last_login' => 'getLastLogin',
'newsletter' => 'getNewsletter',
'birthday' => 'getBirthday',
'last_order_date' => 'getLastOrderDate',
'order_count' => 'getOrderCount',
'custom_fields' => 'getCustomFields',
'remote_address' => 'getRemoteAddress',
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
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['default_payment_method_id'] = isset($data['default_payment_method_id']) ? $data['default_payment_method_id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['last_payment_method_id'] = isset($data['last_payment_method_id']) ? $data['last_payment_method_id'] : null;
        $this->container['default_billing_address_id'] = isset($data['default_billing_address_id']) ? $data['default_billing_address_id'] : null;
        $this->container['default_shipping_address_id'] = isset($data['default_shipping_address_id']) ? $data['default_shipping_address_id'] : null;
        $this->container['auto_increment'] = isset($data['auto_increment']) ? $data['auto_increment'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['salutation_id'] = isset($data['salutation_id']) ? $data['salutation_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['affiliate_code'] = isset($data['affiliate_code']) ? $data['affiliate_code'] : null;
        $this->container['campaign_code'] = isset($data['campaign_code']) ? $data['campaign_code'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['double_opt_in_registration'] = isset($data['double_opt_in_registration']) ? $data['double_opt_in_registration'] : null;
        $this->container['double_opt_in_email_sent_date'] = isset($data['double_opt_in_email_sent_date']) ? $data['double_opt_in_email_sent_date'] : null;
        $this->container['double_opt_in_confirm_date'] = isset($data['double_opt_in_confirm_date']) ? $data['double_opt_in_confirm_date'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['guest'] = isset($data['guest']) ? $data['guest'] : null;
        $this->container['first_login'] = isset($data['first_login']) ? $data['first_login'] : null;
        $this->container['last_login'] = isset($data['last_login']) ? $data['last_login'] : null;
        $this->container['newsletter'] = isset($data['newsletter']) ? $data['newsletter'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['last_order_date'] = isset($data['last_order_date']) ? $data['last_order_date'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['remote_address'] = isset($data['remote_address']) ? $data['remote_address'] : null;
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

        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['default_payment_method_id'] === null) {
            $invalidProperties[] = "'default_payment_method_id' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if ($this->container['default_billing_address_id'] === null) {
            $invalidProperties[] = "'default_billing_address_id' can't be null";
        }
        if ($this->container['default_shipping_address_id'] === null) {
            $invalidProperties[] = "'default_shipping_address_id' can't be null";
        }
        if ($this->container['customer_number'] === null) {
            $invalidProperties[] = "'customer_number' can't be null";
        }
        if ($this->container['salutation_id'] === null) {
            $invalidProperties[] = "'salutation_id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets default_payment_method_id
     *
     * @return string
     */
    public function getDefaultPaymentMethodId()
    {
        return $this->container['default_payment_method_id'];
    }

    /**
     * Sets default_payment_method_id
     *
     * @param string $default_payment_method_id default_payment_method_id
     *
     * @return $this
     */
    public function setDefaultPaymentMethodId($default_payment_method_id)
    {
        $this->container['default_payment_method_id'] = $default_payment_method_id;

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
     * Gets last_payment_method_id
     *
     * @return string
     */
    public function getLastPaymentMethodId()
    {
        return $this->container['last_payment_method_id'];
    }

    /**
     * Sets last_payment_method_id
     *
     * @param string $last_payment_method_id last_payment_method_id
     *
     * @return $this
     */
    public function setLastPaymentMethodId($last_payment_method_id)
    {
        $this->container['last_payment_method_id'] = $last_payment_method_id;

        return $this;
    }

    /**
     * Gets default_billing_address_id
     *
     * @return string
     */
    public function getDefaultBillingAddressId()
    {
        return $this->container['default_billing_address_id'];
    }

    /**
     * Sets default_billing_address_id
     *
     * @param string $default_billing_address_id default_billing_address_id
     *
     * @return $this
     */
    public function setDefaultBillingAddressId($default_billing_address_id)
    {
        $this->container['default_billing_address_id'] = $default_billing_address_id;

        return $this;
    }

    /**
     * Gets default_shipping_address_id
     *
     * @return string
     */
    public function getDefaultShippingAddressId()
    {
        return $this->container['default_shipping_address_id'];
    }

    /**
     * Sets default_shipping_address_id
     *
     * @param string $default_shipping_address_id default_shipping_address_id
     *
     * @return $this
     */
    public function setDefaultShippingAddressId($default_shipping_address_id)
    {
        $this->container['default_shipping_address_id'] = $default_shipping_address_id;

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
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return string
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param string $salutation_id salutation_id
     *
     * @return $this
     */
    public function setSalutationId($salutation_id)
    {
        $this->container['salutation_id'] = $salutation_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets double_opt_in_registration
     *
     * @return bool
     */
    public function getDoubleOptInRegistration()
    {
        return $this->container['double_opt_in_registration'];
    }

    /**
     * Sets double_opt_in_registration
     *
     * @param bool $double_opt_in_registration double_opt_in_registration
     *
     * @return $this
     */
    public function setDoubleOptInRegistration($double_opt_in_registration)
    {
        $this->container['double_opt_in_registration'] = $double_opt_in_registration;

        return $this;
    }

    /**
     * Gets double_opt_in_email_sent_date
     *
     * @return \DateTime
     */
    public function getDoubleOptInEmailSentDate()
    {
        return $this->container['double_opt_in_email_sent_date'];
    }

    /**
     * Sets double_opt_in_email_sent_date
     *
     * @param \DateTime $double_opt_in_email_sent_date double_opt_in_email_sent_date
     *
     * @return $this
     */
    public function setDoubleOptInEmailSentDate($double_opt_in_email_sent_date)
    {
        $this->container['double_opt_in_email_sent_date'] = $double_opt_in_email_sent_date;

        return $this;
    }

    /**
     * Gets double_opt_in_confirm_date
     *
     * @return \DateTime
     */
    public function getDoubleOptInConfirmDate()
    {
        return $this->container['double_opt_in_confirm_date'];
    }

    /**
     * Sets double_opt_in_confirm_date
     *
     * @param \DateTime $double_opt_in_confirm_date double_opt_in_confirm_date
     *
     * @return $this
     */
    public function setDoubleOptInConfirmDate($double_opt_in_confirm_date)
    {
        $this->container['double_opt_in_confirm_date'] = $double_opt_in_confirm_date;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets guest
     *
     * @return bool
     */
    public function getGuest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     *
     * @param bool $guest guest
     *
     * @return $this
     */
    public function setGuest($guest)
    {
        $this->container['guest'] = $guest;

        return $this;
    }

    /**
     * Gets first_login
     *
     * @return \DateTime
     */
    public function getFirstLogin()
    {
        return $this->container['first_login'];
    }

    /**
     * Sets first_login
     *
     * @param \DateTime $first_login first_login
     *
     * @return $this
     */
    public function setFirstLogin($first_login)
    {
        $this->container['first_login'] = $first_login;

        return $this;
    }

    /**
     * Gets last_login
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime $last_login last_login
     *
     * @return $this
     */
    public function setLastLogin($last_login)
    {
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     *
     * @param bool $newsletter newsletter
     *
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets last_order_date
     *
     * @return \DateTime
     */
    public function getLastOrderDate()
    {
        return $this->container['last_order_date'];
    }

    /**
     * Sets last_order_date
     *
     * @param \DateTime $last_order_date last_order_date
     *
     * @return $this
     */
    public function setLastOrderDate($last_order_date)
    {
        $this->container['last_order_date'] = $last_order_date;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count order_count
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

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
     * Gets remote_address
     *
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param string $remote_address remote_address
     *
     * @return $this
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

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
