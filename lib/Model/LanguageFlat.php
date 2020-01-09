<?php
/**
 * LanguageFlat
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
 * LanguageFlat Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LanguageFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'language_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'parent_id' => 'string',
'locale_id' => 'string',
'translation_code_id' => 'string',
'name' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'parent' => '\Shopware6SDK\Model\LanguageFlat',
'locale' => '\Shopware6SDK\Model\LocaleFlat',
'translation_code' => '\Shopware6SDK\Model\LocaleFlat',
'children' => '\Shopware6SDK\Model\LanguageFlat',
'sales_channels' => '\Shopware6SDK\Model\SalesChannelFlat',
'sales_channel_default_assignments' => '\Shopware6SDK\Model\SalesChannelFlat',
'sales_channel_domains' => '\Shopware6SDK\Model\SalesChannelDomainFlat',
'customers' => '\Shopware6SDK\Model\CustomerFlat',
'newsletter_recipients' => '\Shopware6SDK\Model\NewsletterRecipientFlat',
'orders' => '\Shopware6SDK\Model\OrderFlat',
'product_search_keywords' => '\Shopware6SDK\Model\ProductSearchKeywordFlat',
'product_keyword_dictionaries' => '\Shopware6SDK\Model\ProductKeywordDictionaryFlat',
'product_reviews' => '\Shopware6SDK\Model\ProductReviewFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'parent_id' => 'uuid',
'locale_id' => 'uuid',
'translation_code_id' => 'uuid',
'name' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'parent' => null,
'locale' => null,
'translation_code' => null,
'children' => null,
'sales_channels' => null,
'sales_channel_default_assignments' => null,
'sales_channel_domains' => null,
'customers' => null,
'newsletter_recipients' => null,
'orders' => null,
'product_search_keywords' => null,
'product_keyword_dictionaries' => null,
'product_reviews' => null    ];

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
'parent_id' => 'parentId',
'locale_id' => 'localeId',
'translation_code_id' => 'translationCodeId',
'name' => 'name',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'parent' => 'parent',
'locale' => 'locale',
'translation_code' => 'translationCode',
'children' => 'children',
'sales_channels' => 'salesChannels',
'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'sales_channel_domains' => 'salesChannelDomains',
'customers' => 'customers',
'newsletter_recipients' => 'newsletterRecipients',
'orders' => 'orders',
'product_search_keywords' => 'productSearchKeywords',
'product_keyword_dictionaries' => 'productKeywordDictionaries',
'product_reviews' => 'productReviews'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'parent_id' => 'setParentId',
'locale_id' => 'setLocaleId',
'translation_code_id' => 'setTranslationCodeId',
'name' => 'setName',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'parent' => 'setParent',
'locale' => 'setLocale',
'translation_code' => 'setTranslationCode',
'children' => 'setChildren',
'sales_channels' => 'setSalesChannels',
'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'sales_channel_domains' => 'setSalesChannelDomains',
'customers' => 'setCustomers',
'newsletter_recipients' => 'setNewsletterRecipients',
'orders' => 'setOrders',
'product_search_keywords' => 'setProductSearchKeywords',
'product_keyword_dictionaries' => 'setProductKeywordDictionaries',
'product_reviews' => 'setProductReviews'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'parent_id' => 'getParentId',
'locale_id' => 'getLocaleId',
'translation_code_id' => 'getTranslationCodeId',
'name' => 'getName',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'parent' => 'getParent',
'locale' => 'getLocale',
'translation_code' => 'getTranslationCode',
'children' => 'getChildren',
'sales_channels' => 'getSalesChannels',
'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'sales_channel_domains' => 'getSalesChannelDomains',
'customers' => 'getCustomers',
'newsletter_recipients' => 'getNewsletterRecipients',
'orders' => 'getOrders',
'product_search_keywords' => 'getProductSearchKeywords',
'product_keyword_dictionaries' => 'getProductKeywordDictionaries',
'product_reviews' => 'getProductReviews'    ];

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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['locale_id'] = isset($data['locale_id']) ? $data['locale_id'] : null;
        $this->container['translation_code_id'] = isset($data['translation_code_id']) ? $data['translation_code_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['translation_code'] = isset($data['translation_code']) ? $data['translation_code'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['sales_channel_domains'] = isset($data['sales_channel_domains']) ? $data['sales_channel_domains'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['newsletter_recipients'] = isset($data['newsletter_recipients']) ? $data['newsletter_recipients'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['product_search_keywords'] = isset($data['product_search_keywords']) ? $data['product_search_keywords'] : null;
        $this->container['product_keyword_dictionaries'] = isset($data['product_keyword_dictionaries']) ? $data['product_keyword_dictionaries'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale_id'] === null) {
            $invalidProperties[] = "'locale_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets locale_id
     *
     * @return string
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /**
     * Sets locale_id
     *
     * @param string $locale_id locale_id
     *
     * @return $this
     */
    public function setLocaleId($locale_id)
    {
        $this->container['locale_id'] = $locale_id;

        return $this;
    }

    /**
     * Gets translation_code_id
     *
     * @return string
     */
    public function getTranslationCodeId()
    {
        return $this->container['translation_code_id'];
    }

    /**
     * Sets translation_code_id
     *
     * @param string $translation_code_id translation_code_id
     *
     * @return $this
     */
    public function setTranslationCodeId($translation_code_id)
    {
        $this->container['translation_code_id'] = $translation_code_id;

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
     * Gets parent
     *
     * @return \Shopware6SDK\Model\LanguageFlat
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Shopware6SDK\Model\LanguageFlat $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \Shopware6SDK\Model\LocaleFlat
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \Shopware6SDK\Model\LocaleFlat $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets translation_code
     *
     * @return \Shopware6SDK\Model\LocaleFlat
     */
    public function getTranslationCode()
    {
        return $this->container['translation_code'];
    }

    /**
     * Sets translation_code
     *
     * @param \Shopware6SDK\Model\LocaleFlat $translation_code translation_code
     *
     * @return $this
     */
    public function setTranslationCode($translation_code)
    {
        $this->container['translation_code'] = $translation_code;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Shopware6SDK\Model\LanguageFlat
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Shopware6SDK\Model\LanguageFlat $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Shopware6SDK\Model\SalesChannelFlat
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Shopware6SDK\Model\SalesChannelFlat $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \Shopware6SDK\Model\SalesChannelFlat
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \Shopware6SDK\Model\SalesChannelFlat $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets sales_channel_domains
     *
     * @return \Shopware6SDK\Model\SalesChannelDomainFlat
     */
    public function getSalesChannelDomains()
    {
        return $this->container['sales_channel_domains'];
    }

    /**
     * Sets sales_channel_domains
     *
     * @param \Shopware6SDK\Model\SalesChannelDomainFlat $sales_channel_domains sales_channel_domains
     *
     * @return $this
     */
    public function setSalesChannelDomains($sales_channel_domains)
    {
        $this->container['sales_channel_domains'] = $sales_channel_domains;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Shopware6SDK\Model\CustomerFlat
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Shopware6SDK\Model\CustomerFlat $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets newsletter_recipients
     *
     * @return \Shopware6SDK\Model\NewsletterRecipientFlat
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \Shopware6SDK\Model\NewsletterRecipientFlat $newsletter_recipients newsletter_recipients
     *
     * @return $this
     */
    public function setNewsletterRecipients($newsletter_recipients)
    {
        $this->container['newsletter_recipients'] = $newsletter_recipients;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Shopware6SDK\Model\OrderFlat
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Shopware6SDK\Model\OrderFlat $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets product_search_keywords
     *
     * @return \Shopware6SDK\Model\ProductSearchKeywordFlat
     */
    public function getProductSearchKeywords()
    {
        return $this->container['product_search_keywords'];
    }

    /**
     * Sets product_search_keywords
     *
     * @param \Shopware6SDK\Model\ProductSearchKeywordFlat $product_search_keywords product_search_keywords
     *
     * @return $this
     */
    public function setProductSearchKeywords($product_search_keywords)
    {
        $this->container['product_search_keywords'] = $product_search_keywords;

        return $this;
    }

    /**
     * Gets product_keyword_dictionaries
     *
     * @return \Shopware6SDK\Model\ProductKeywordDictionaryFlat
     */
    public function getProductKeywordDictionaries()
    {
        return $this->container['product_keyword_dictionaries'];
    }

    /**
     * Sets product_keyword_dictionaries
     *
     * @param \Shopware6SDK\Model\ProductKeywordDictionaryFlat $product_keyword_dictionaries product_keyword_dictionaries
     *
     * @return $this
     */
    public function setProductKeywordDictionaries($product_keyword_dictionaries)
    {
        $this->container['product_keyword_dictionaries'] = $product_keyword_dictionaries;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Shopware6SDK\Model\ProductReviewFlat
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Shopware6SDK\Model\ProductReviewFlat $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

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
