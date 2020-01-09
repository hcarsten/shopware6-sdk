<?php
/**
 * CategoryRelationships
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
 * CategoryRelationships Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'category_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent' => '\Shopware6SDK\Model\CategoryRelationshipsParent',
'children' => '\Shopware6SDK\Model\CategoryRelationshipsChildren',
'media' => '\Shopware6SDK\Model\CategoryRelationshipsMedia',
'products' => '\Shopware6SDK\Model\CategoryRelationshipsProducts',
'nested_products' => '\Shopware6SDK\Model\CategoryRelationshipsNestedProducts',
'tags' => '\Shopware6SDK\Model\CategoryRelationshipsTags',
'cms_page' => '\Shopware6SDK\Model\CategoryRelationshipsCmsPage',
'navigation_sales_channels' => '\Shopware6SDK\Model\CategoryRelationshipsNavigationSalesChannels',
'footer_sales_channels' => '\Shopware6SDK\Model\CategoryRelationshipsFooterSalesChannels',
'service_sales_channels' => '\Shopware6SDK\Model\CategoryRelationshipsServiceSalesChannels',
'main_categories' => '\Shopware6SDK\Model\CategoryRelationshipsMainCategories',
'seo_urls' => '\Shopware6SDK\Model\CategoryRelationshipsSeoUrls'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent' => null,
'children' => null,
'media' => null,
'products' => null,
'nested_products' => null,
'tags' => null,
'cms_page' => null,
'navigation_sales_channels' => null,
'footer_sales_channels' => null,
'service_sales_channels' => null,
'main_categories' => null,
'seo_urls' => null    ];

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
        'parent' => 'parent',
'children' => 'children',
'media' => 'media',
'products' => 'products',
'nested_products' => 'nestedProducts',
'tags' => 'tags',
'cms_page' => 'cmsPage',
'navigation_sales_channels' => 'navigationSalesChannels',
'footer_sales_channels' => 'footerSalesChannels',
'service_sales_channels' => 'serviceSalesChannels',
'main_categories' => 'mainCategories',
'seo_urls' => 'seoUrls'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent' => 'setParent',
'children' => 'setChildren',
'media' => 'setMedia',
'products' => 'setProducts',
'nested_products' => 'setNestedProducts',
'tags' => 'setTags',
'cms_page' => 'setCmsPage',
'navigation_sales_channels' => 'setNavigationSalesChannels',
'footer_sales_channels' => 'setFooterSalesChannels',
'service_sales_channels' => 'setServiceSalesChannels',
'main_categories' => 'setMainCategories',
'seo_urls' => 'setSeoUrls'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent' => 'getParent',
'children' => 'getChildren',
'media' => 'getMedia',
'products' => 'getProducts',
'nested_products' => 'getNestedProducts',
'tags' => 'getTags',
'cms_page' => 'getCmsPage',
'navigation_sales_channels' => 'getNavigationSalesChannels',
'footer_sales_channels' => 'getFooterSalesChannels',
'service_sales_channels' => 'getServiceSalesChannels',
'main_categories' => 'getMainCategories',
'seo_urls' => 'getSeoUrls'    ];

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
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['nested_products'] = isset($data['nested_products']) ? $data['nested_products'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['cms_page'] = isset($data['cms_page']) ? $data['cms_page'] : null;
        $this->container['navigation_sales_channels'] = isset($data['navigation_sales_channels']) ? $data['navigation_sales_channels'] : null;
        $this->container['footer_sales_channels'] = isset($data['footer_sales_channels']) ? $data['footer_sales_channels'] : null;
        $this->container['service_sales_channels'] = isset($data['service_sales_channels']) ? $data['service_sales_channels'] : null;
        $this->container['main_categories'] = isset($data['main_categories']) ? $data['main_categories'] : null;
        $this->container['seo_urls'] = isset($data['seo_urls']) ? $data['seo_urls'] : null;
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
     * Gets parent
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsParent
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsParent $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsChildren $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsProducts
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsProducts $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets nested_products
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsNestedProducts
     */
    public function getNestedProducts()
    {
        return $this->container['nested_products'];
    }

    /**
     * Sets nested_products
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsNestedProducts $nested_products nested_products
     *
     * @return $this
     */
    public function setNestedProducts($nested_products)
    {
        $this->container['nested_products'] = $nested_products;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets cms_page
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsCmsPage
     */
    public function getCmsPage()
    {
        return $this->container['cms_page'];
    }

    /**
     * Sets cms_page
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsCmsPage $cms_page cms_page
     *
     * @return $this
     */
    public function setCmsPage($cms_page)
    {
        $this->container['cms_page'] = $cms_page;

        return $this;
    }

    /**
     * Gets navigation_sales_channels
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsNavigationSalesChannels
     */
    public function getNavigationSalesChannels()
    {
        return $this->container['navigation_sales_channels'];
    }

    /**
     * Sets navigation_sales_channels
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsNavigationSalesChannels $navigation_sales_channels navigation_sales_channels
     *
     * @return $this
     */
    public function setNavigationSalesChannels($navigation_sales_channels)
    {
        $this->container['navigation_sales_channels'] = $navigation_sales_channels;

        return $this;
    }

    /**
     * Gets footer_sales_channels
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsFooterSalesChannels
     */
    public function getFooterSalesChannels()
    {
        return $this->container['footer_sales_channels'];
    }

    /**
     * Sets footer_sales_channels
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsFooterSalesChannels $footer_sales_channels footer_sales_channels
     *
     * @return $this
     */
    public function setFooterSalesChannels($footer_sales_channels)
    {
        $this->container['footer_sales_channels'] = $footer_sales_channels;

        return $this;
    }

    /**
     * Gets service_sales_channels
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsServiceSalesChannels
     */
    public function getServiceSalesChannels()
    {
        return $this->container['service_sales_channels'];
    }

    /**
     * Sets service_sales_channels
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsServiceSalesChannels $service_sales_channels service_sales_channels
     *
     * @return $this
     */
    public function setServiceSalesChannels($service_sales_channels)
    {
        $this->container['service_sales_channels'] = $service_sales_channels;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsMainCategories
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsMainCategories $main_categories main_categories
     *
     * @return $this
     */
    public function setMainCategories($main_categories)
    {
        $this->container['main_categories'] = $main_categories;

        return $this;
    }

    /**
     * Gets seo_urls
     *
     * @return \Shopware6SDK\Model\CategoryRelationshipsSeoUrls
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \Shopware6SDK\Model\CategoryRelationshipsSeoUrls $seo_urls seo_urls
     *
     * @return $this
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

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
