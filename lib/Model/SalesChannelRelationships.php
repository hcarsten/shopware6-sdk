<?php
/**
 * SalesChannelRelationships
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
 * SalesChannelRelationships Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesChannelRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales_channel_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencies' => '\Shopware6SDK\Model\SalesChannelRelationshipsCurrencies',
'languages' => '\Shopware6SDK\Model\SalesChannelRelationshipsLanguages',
'countries' => '\Shopware6SDK\Model\SalesChannelRelationshipsCountries',
'payment_methods' => '\Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethods',
'shipping_methods' => '\Shopware6SDK\Model\SalesChannelRelationshipsShippingMethods',
'type' => '\Shopware6SDK\Model\SalesChannelRelationshipsType',
'language' => '\Shopware6SDK\Model\SalesChannelRelationshipsLanguage',
'customer_group' => '\Shopware6SDK\Model\SalesChannelRelationshipsCustomerGroup',
'currency' => '\Shopware6SDK\Model\SalesChannelRelationshipsCurrency',
'payment_method' => '\Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethod',
'shipping_method' => '\Shopware6SDK\Model\SalesChannelRelationshipsShippingMethod',
'country' => '\Shopware6SDK\Model\SalesChannelRelationshipsCountry',
'orders' => '\Shopware6SDK\Model\SalesChannelRelationshipsOrders',
'customers' => '\Shopware6SDK\Model\SalesChannelRelationshipsCustomers',
'domains' => '\Shopware6SDK\Model\SalesChannelRelationshipsDomains',
'system_configs' => '\Shopware6SDK\Model\SalesChannelRelationshipsSystemConfigs',
'navigation_category' => '\Shopware6SDK\Model\SalesChannelRelationshipsNavigationCategory',
'footer_category' => '\Shopware6SDK\Model\SalesChannelRelationshipsFooterCategory',
'service_category' => '\Shopware6SDK\Model\SalesChannelRelationshipsServiceCategory',
'product_visibilities' => '\Shopware6SDK\Model\SalesChannelRelationshipsProductVisibilities',
'mail_header_footer' => '\Shopware6SDK\Model\SalesChannelRelationshipsMailHeaderFooter',
'newsletter_recipients' => '\Shopware6SDK\Model\SalesChannelRelationshipsNewsletterRecipients',
'mail_templates' => '\Shopware6SDK\Model\SalesChannelRelationshipsMailTemplates',
'number_range_sales_channels' => '\Shopware6SDK\Model\SalesChannelRelationshipsNumberRangeSalesChannels',
'promotion_sales_channels' => '\Shopware6SDK\Model\SalesChannelRelationshipsPromotionSalesChannels',
'document_base_config_sales_channels' => '\Shopware6SDK\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels',
'product_reviews' => '\Shopware6SDK\Model\SalesChannelRelationshipsProductReviews',
'seo_urls' => '\Shopware6SDK\Model\SalesChannelRelationshipsSeoUrls',
'seo_url_templates' => '\Shopware6SDK\Model\SalesChannelRelationshipsSeoUrlTemplates',
'main_categories' => '\Shopware6SDK\Model\SalesChannelRelationshipsMainCategories',
'product_exports' => '\Shopware6SDK\Model\SalesChannelRelationshipsProductExports'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencies' => null,
'languages' => null,
'countries' => null,
'payment_methods' => null,
'shipping_methods' => null,
'type' => null,
'language' => null,
'customer_group' => null,
'currency' => null,
'payment_method' => null,
'shipping_method' => null,
'country' => null,
'orders' => null,
'customers' => null,
'domains' => null,
'system_configs' => null,
'navigation_category' => null,
'footer_category' => null,
'service_category' => null,
'product_visibilities' => null,
'mail_header_footer' => null,
'newsletter_recipients' => null,
'mail_templates' => null,
'number_range_sales_channels' => null,
'promotion_sales_channels' => null,
'document_base_config_sales_channels' => null,
'product_reviews' => null,
'seo_urls' => null,
'seo_url_templates' => null,
'main_categories' => null,
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
        'currencies' => 'currencies',
'languages' => 'languages',
'countries' => 'countries',
'payment_methods' => 'paymentMethods',
'shipping_methods' => 'shippingMethods',
'type' => 'type',
'language' => 'language',
'customer_group' => 'customerGroup',
'currency' => 'currency',
'payment_method' => 'paymentMethod',
'shipping_method' => 'shippingMethod',
'country' => 'country',
'orders' => 'orders',
'customers' => 'customers',
'domains' => 'domains',
'system_configs' => 'systemConfigs',
'navigation_category' => 'navigationCategory',
'footer_category' => 'footerCategory',
'service_category' => 'serviceCategory',
'product_visibilities' => 'productVisibilities',
'mail_header_footer' => 'mailHeaderFooter',
'newsletter_recipients' => 'newsletterRecipients',
'mail_templates' => 'mailTemplates',
'number_range_sales_channels' => 'numberRangeSalesChannels',
'promotion_sales_channels' => 'promotionSalesChannels',
'document_base_config_sales_channels' => 'documentBaseConfigSalesChannels',
'product_reviews' => 'productReviews',
'seo_urls' => 'seoUrls',
'seo_url_templates' => 'seoUrlTemplates',
'main_categories' => 'mainCategories',
'product_exports' => 'productExports'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencies' => 'setCurrencies',
'languages' => 'setLanguages',
'countries' => 'setCountries',
'payment_methods' => 'setPaymentMethods',
'shipping_methods' => 'setShippingMethods',
'type' => 'setType',
'language' => 'setLanguage',
'customer_group' => 'setCustomerGroup',
'currency' => 'setCurrency',
'payment_method' => 'setPaymentMethod',
'shipping_method' => 'setShippingMethod',
'country' => 'setCountry',
'orders' => 'setOrders',
'customers' => 'setCustomers',
'domains' => 'setDomains',
'system_configs' => 'setSystemConfigs',
'navigation_category' => 'setNavigationCategory',
'footer_category' => 'setFooterCategory',
'service_category' => 'setServiceCategory',
'product_visibilities' => 'setProductVisibilities',
'mail_header_footer' => 'setMailHeaderFooter',
'newsletter_recipients' => 'setNewsletterRecipients',
'mail_templates' => 'setMailTemplates',
'number_range_sales_channels' => 'setNumberRangeSalesChannels',
'promotion_sales_channels' => 'setPromotionSalesChannels',
'document_base_config_sales_channels' => 'setDocumentBaseConfigSalesChannels',
'product_reviews' => 'setProductReviews',
'seo_urls' => 'setSeoUrls',
'seo_url_templates' => 'setSeoUrlTemplates',
'main_categories' => 'setMainCategories',
'product_exports' => 'setProductExports'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencies' => 'getCurrencies',
'languages' => 'getLanguages',
'countries' => 'getCountries',
'payment_methods' => 'getPaymentMethods',
'shipping_methods' => 'getShippingMethods',
'type' => 'getType',
'language' => 'getLanguage',
'customer_group' => 'getCustomerGroup',
'currency' => 'getCurrency',
'payment_method' => 'getPaymentMethod',
'shipping_method' => 'getShippingMethod',
'country' => 'getCountry',
'orders' => 'getOrders',
'customers' => 'getCustomers',
'domains' => 'getDomains',
'system_configs' => 'getSystemConfigs',
'navigation_category' => 'getNavigationCategory',
'footer_category' => 'getFooterCategory',
'service_category' => 'getServiceCategory',
'product_visibilities' => 'getProductVisibilities',
'mail_header_footer' => 'getMailHeaderFooter',
'newsletter_recipients' => 'getNewsletterRecipients',
'mail_templates' => 'getMailTemplates',
'number_range_sales_channels' => 'getNumberRangeSalesChannels',
'promotion_sales_channels' => 'getPromotionSalesChannels',
'document_base_config_sales_channels' => 'getDocumentBaseConfigSalesChannels',
'product_reviews' => 'getProductReviews',
'seo_urls' => 'getSeoUrls',
'seo_url_templates' => 'getSeoUrlTemplates',
'main_categories' => 'getMainCategories',
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
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['shipping_methods'] = isset($data['shipping_methods']) ? $data['shipping_methods'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['customer_group'] = isset($data['customer_group']) ? $data['customer_group'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['system_configs'] = isset($data['system_configs']) ? $data['system_configs'] : null;
        $this->container['navigation_category'] = isset($data['navigation_category']) ? $data['navigation_category'] : null;
        $this->container['footer_category'] = isset($data['footer_category']) ? $data['footer_category'] : null;
        $this->container['service_category'] = isset($data['service_category']) ? $data['service_category'] : null;
        $this->container['product_visibilities'] = isset($data['product_visibilities']) ? $data['product_visibilities'] : null;
        $this->container['mail_header_footer'] = isset($data['mail_header_footer']) ? $data['mail_header_footer'] : null;
        $this->container['newsletter_recipients'] = isset($data['newsletter_recipients']) ? $data['newsletter_recipients'] : null;
        $this->container['mail_templates'] = isset($data['mail_templates']) ? $data['mail_templates'] : null;
        $this->container['number_range_sales_channels'] = isset($data['number_range_sales_channels']) ? $data['number_range_sales_channels'] : null;
        $this->container['promotion_sales_channels'] = isset($data['promotion_sales_channels']) ? $data['promotion_sales_channels'] : null;
        $this->container['document_base_config_sales_channels'] = isset($data['document_base_config_sales_channels']) ? $data['document_base_config_sales_channels'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
        $this->container['seo_urls'] = isset($data['seo_urls']) ? $data['seo_urls'] : null;
        $this->container['seo_url_templates'] = isset($data['seo_url_templates']) ? $data['seo_url_templates'] : null;
        $this->container['main_categories'] = isset($data['main_categories']) ? $data['main_categories'] : null;
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
     * Gets currencies
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCurrencies
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCurrencies $currencies currencies
     *
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsLanguages
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsLanguages $languages languages
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCountries
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCountries $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethods $payment_methods payment_methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets shipping_methods
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsShippingMethods
     */
    public function getShippingMethods()
    {
        return $this->container['shipping_methods'];
    }

    /**
     * Sets shipping_methods
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsShippingMethods $shipping_methods shipping_methods
     *
     * @return $this
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->container['shipping_methods'] = $shipping_methods;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsLanguage
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsLanguage $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets customer_group
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCustomerGroup
     */
    public function getCustomerGroup()
    {
        return $this->container['customer_group'];
    }

    /**
     * Sets customer_group
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCustomerGroup $customer_group customer_group
     *
     * @return $this
     */
    public function setCustomerGroup($customer_group)
    {
        $this->container['customer_group'] = $customer_group;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCurrency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsPaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsShippingMethod
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsShippingMethod $shipping_method shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCountry
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCountry $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsOrders
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsOrders $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsCustomers
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsCustomers $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsDomains
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsDomains $domains domains
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets system_configs
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsSystemConfigs
     */
    public function getSystemConfigs()
    {
        return $this->container['system_configs'];
    }

    /**
     * Sets system_configs
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsSystemConfigs $system_configs system_configs
     *
     * @return $this
     */
    public function setSystemConfigs($system_configs)
    {
        $this->container['system_configs'] = $system_configs;

        return $this;
    }

    /**
     * Gets navigation_category
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsNavigationCategory
     */
    public function getNavigationCategory()
    {
        return $this->container['navigation_category'];
    }

    /**
     * Sets navigation_category
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsNavigationCategory $navigation_category navigation_category
     *
     * @return $this
     */
    public function setNavigationCategory($navigation_category)
    {
        $this->container['navigation_category'] = $navigation_category;

        return $this;
    }

    /**
     * Gets footer_category
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsFooterCategory
     */
    public function getFooterCategory()
    {
        return $this->container['footer_category'];
    }

    /**
     * Sets footer_category
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsFooterCategory $footer_category footer_category
     *
     * @return $this
     */
    public function setFooterCategory($footer_category)
    {
        $this->container['footer_category'] = $footer_category;

        return $this;
    }

    /**
     * Gets service_category
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsServiceCategory
     */
    public function getServiceCategory()
    {
        return $this->container['service_category'];
    }

    /**
     * Sets service_category
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsServiceCategory $service_category service_category
     *
     * @return $this
     */
    public function setServiceCategory($service_category)
    {
        $this->container['service_category'] = $service_category;

        return $this;
    }

    /**
     * Gets product_visibilities
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsProductVisibilities
     */
    public function getProductVisibilities()
    {
        return $this->container['product_visibilities'];
    }

    /**
     * Sets product_visibilities
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsProductVisibilities $product_visibilities product_visibilities
     *
     * @return $this
     */
    public function setProductVisibilities($product_visibilities)
    {
        $this->container['product_visibilities'] = $product_visibilities;

        return $this;
    }

    /**
     * Gets mail_header_footer
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsMailHeaderFooter
     */
    public function getMailHeaderFooter()
    {
        return $this->container['mail_header_footer'];
    }

    /**
     * Sets mail_header_footer
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsMailHeaderFooter $mail_header_footer mail_header_footer
     *
     * @return $this
     */
    public function setMailHeaderFooter($mail_header_footer)
    {
        $this->container['mail_header_footer'] = $mail_header_footer;

        return $this;
    }

    /**
     * Gets newsletter_recipients
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsNewsletterRecipients
     */
    public function getNewsletterRecipients()
    {
        return $this->container['newsletter_recipients'];
    }

    /**
     * Sets newsletter_recipients
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsNewsletterRecipients $newsletter_recipients newsletter_recipients
     *
     * @return $this
     */
    public function setNewsletterRecipients($newsletter_recipients)
    {
        $this->container['newsletter_recipients'] = $newsletter_recipients;

        return $this;
    }

    /**
     * Gets mail_templates
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsMailTemplates
     */
    public function getMailTemplates()
    {
        return $this->container['mail_templates'];
    }

    /**
     * Sets mail_templates
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsMailTemplates $mail_templates mail_templates
     *
     * @return $this
     */
    public function setMailTemplates($mail_templates)
    {
        $this->container['mail_templates'] = $mail_templates;

        return $this;
    }

    /**
     * Gets number_range_sales_channels
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsNumberRangeSalesChannels
     */
    public function getNumberRangeSalesChannels()
    {
        return $this->container['number_range_sales_channels'];
    }

    /**
     * Sets number_range_sales_channels
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsNumberRangeSalesChannels $number_range_sales_channels number_range_sales_channels
     *
     * @return $this
     */
    public function setNumberRangeSalesChannels($number_range_sales_channels)
    {
        $this->container['number_range_sales_channels'] = $number_range_sales_channels;

        return $this;
    }

    /**
     * Gets promotion_sales_channels
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsPromotionSalesChannels
     */
    public function getPromotionSalesChannels()
    {
        return $this->container['promotion_sales_channels'];
    }

    /**
     * Sets promotion_sales_channels
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsPromotionSalesChannels $promotion_sales_channels promotion_sales_channels
     *
     * @return $this
     */
    public function setPromotionSalesChannels($promotion_sales_channels)
    {
        $this->container['promotion_sales_channels'] = $promotion_sales_channels;

        return $this;
    }

    /**
     * Gets document_base_config_sales_channels
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels
     */
    public function getDocumentBaseConfigSalesChannels()
    {
        return $this->container['document_base_config_sales_channels'];
    }

    /**
     * Sets document_base_config_sales_channels
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsDocumentBaseConfigSalesChannels $document_base_config_sales_channels document_base_config_sales_channels
     *
     * @return $this
     */
    public function setDocumentBaseConfigSalesChannels($document_base_config_sales_channels)
    {
        $this->container['document_base_config_sales_channels'] = $document_base_config_sales_channels;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsProductReviews
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsProductReviews $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets seo_urls
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsSeoUrls
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsSeoUrls $seo_urls seo_urls
     *
     * @return $this
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

        return $this;
    }

    /**
     * Gets seo_url_templates
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsSeoUrlTemplates
     */
    public function getSeoUrlTemplates()
    {
        return $this->container['seo_url_templates'];
    }

    /**
     * Sets seo_url_templates
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsSeoUrlTemplates $seo_url_templates seo_url_templates
     *
     * @return $this
     */
    public function setSeoUrlTemplates($seo_url_templates)
    {
        $this->container['seo_url_templates'] = $seo_url_templates;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsMainCategories
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsMainCategories $main_categories main_categories
     *
     * @return $this
     */
    public function setMainCategories($main_categories)
    {
        $this->container['main_categories'] = $main_categories;

        return $this;
    }

    /**
     * Gets product_exports
     *
     * @return \Shopware6SDK\Model\SalesChannelRelationshipsProductExports
     */
    public function getProductExports()
    {
        return $this->container['product_exports'];
    }

    /**
     * Sets product_exports
     *
     * @param \Shopware6SDK\Model\SalesChannelRelationshipsProductExports $product_exports product_exports
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
