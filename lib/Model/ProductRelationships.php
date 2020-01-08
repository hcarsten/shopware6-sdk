<?php
/**
 * ProductRelationships
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
 * ProductRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categories_ro' => '\Swagger\Client\Model\ProductRelationshipsCategoriesRo',
'delivery_time' => '\Swagger\Client\Model\ProductRelationshipsDeliveryTime',
'parent' => '\Swagger\Client\Model\ProductRelationshipsParent',
'children' => '\Swagger\Client\Model\ProductRelationshipsChildren',
'tax' => '\Swagger\Client\Model\ProductRelationshipsTax',
'manufacturer' => '\Swagger\Client\Model\ProductRelationshipsManufacturer',
'unit' => '\Swagger\Client\Model\ProductRelationshipsUnit',
'cover' => '\Swagger\Client\Model\ProductRelationshipsCover',
'prices' => '\Swagger\Client\Model\ProductRelationshipsPrices',
'media' => '\Swagger\Client\Model\ProductRelationshipsMedia',
'cross_sellings' => '\Swagger\Client\Model\ProductRelationshipsCrossSellings',
'properties' => '\Swagger\Client\Model\ProductRelationshipsProperties',
'categories' => '\Swagger\Client\Model\ProductRelationshipsCategories',
'tags' => '\Swagger\Client\Model\ProductRelationshipsTags',
'configurator_settings' => '\Swagger\Client\Model\ProductRelationshipsConfiguratorSettings',
'options' => '\Swagger\Client\Model\ProductRelationshipsOptions',
'visibilities' => '\Swagger\Client\Model\ProductRelationshipsVisibilities',
'search_keywords' => '\Swagger\Client\Model\ProductRelationshipsSearchKeywords',
'product_reviews' => '\Swagger\Client\Model\ProductRelationshipsProductReviews',
'main_categories' => '\Swagger\Client\Model\ProductRelationshipsMainCategories',
'seo_urls' => '\Swagger\Client\Model\ProductRelationshipsSeoUrls',
'order_line_items' => '\Swagger\Client\Model\ProductRelationshipsOrderLineItems'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'categories_ro' => null,
'delivery_time' => null,
'parent' => null,
'children' => null,
'tax' => null,
'manufacturer' => null,
'unit' => null,
'cover' => null,
'prices' => null,
'media' => null,
'cross_sellings' => null,
'properties' => null,
'categories' => null,
'tags' => null,
'configurator_settings' => null,
'options' => null,
'visibilities' => null,
'search_keywords' => null,
'product_reviews' => null,
'main_categories' => null,
'seo_urls' => null,
'order_line_items' => null    ];

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
        'categories_ro' => 'categoriesRo',
'delivery_time' => 'deliveryTime',
'parent' => 'parent',
'children' => 'children',
'tax' => 'tax',
'manufacturer' => 'manufacturer',
'unit' => 'unit',
'cover' => 'cover',
'prices' => 'prices',
'media' => 'media',
'cross_sellings' => 'crossSellings',
'properties' => 'properties',
'categories' => 'categories',
'tags' => 'tags',
'configurator_settings' => 'configuratorSettings',
'options' => 'options',
'visibilities' => 'visibilities',
'search_keywords' => 'searchKeywords',
'product_reviews' => 'productReviews',
'main_categories' => 'mainCategories',
'seo_urls' => 'seoUrls',
'order_line_items' => 'orderLineItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categories_ro' => 'setCategoriesRo',
'delivery_time' => 'setDeliveryTime',
'parent' => 'setParent',
'children' => 'setChildren',
'tax' => 'setTax',
'manufacturer' => 'setManufacturer',
'unit' => 'setUnit',
'cover' => 'setCover',
'prices' => 'setPrices',
'media' => 'setMedia',
'cross_sellings' => 'setCrossSellings',
'properties' => 'setProperties',
'categories' => 'setCategories',
'tags' => 'setTags',
'configurator_settings' => 'setConfiguratorSettings',
'options' => 'setOptions',
'visibilities' => 'setVisibilities',
'search_keywords' => 'setSearchKeywords',
'product_reviews' => 'setProductReviews',
'main_categories' => 'setMainCategories',
'seo_urls' => 'setSeoUrls',
'order_line_items' => 'setOrderLineItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories_ro' => 'getCategoriesRo',
'delivery_time' => 'getDeliveryTime',
'parent' => 'getParent',
'children' => 'getChildren',
'tax' => 'getTax',
'manufacturer' => 'getManufacturer',
'unit' => 'getUnit',
'cover' => 'getCover',
'prices' => 'getPrices',
'media' => 'getMedia',
'cross_sellings' => 'getCrossSellings',
'properties' => 'getProperties',
'categories' => 'getCategories',
'tags' => 'getTags',
'configurator_settings' => 'getConfiguratorSettings',
'options' => 'getOptions',
'visibilities' => 'getVisibilities',
'search_keywords' => 'getSearchKeywords',
'product_reviews' => 'getProductReviews',
'main_categories' => 'getMainCategories',
'seo_urls' => 'getSeoUrls',
'order_line_items' => 'getOrderLineItems'    ];

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
        $this->container['categories_ro'] = isset($data['categories_ro']) ? $data['categories_ro'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['cross_sellings'] = isset($data['cross_sellings']) ? $data['cross_sellings'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['configurator_settings'] = isset($data['configurator_settings']) ? $data['configurator_settings'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['visibilities'] = isset($data['visibilities']) ? $data['visibilities'] : null;
        $this->container['search_keywords'] = isset($data['search_keywords']) ? $data['search_keywords'] : null;
        $this->container['product_reviews'] = isset($data['product_reviews']) ? $data['product_reviews'] : null;
        $this->container['main_categories'] = isset($data['main_categories']) ? $data['main_categories'] : null;
        $this->container['seo_urls'] = isset($data['seo_urls']) ? $data['seo_urls'] : null;
        $this->container['order_line_items'] = isset($data['order_line_items']) ? $data['order_line_items'] : null;
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
     * Gets categories_ro
     *
     * @return \Swagger\Client\Model\ProductRelationshipsCategoriesRo
     */
    public function getCategoriesRo()
    {
        return $this->container['categories_ro'];
    }

    /**
     * Sets categories_ro
     *
     * @param \Swagger\Client\Model\ProductRelationshipsCategoriesRo $categories_ro categories_ro
     *
     * @return $this
     */
    public function setCategoriesRo($categories_ro)
    {
        $this->container['categories_ro'] = $categories_ro;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \Swagger\Client\Model\ProductRelationshipsDeliveryTime
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \Swagger\Client\Model\ProductRelationshipsDeliveryTime $delivery_time delivery_time
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Swagger\Client\Model\ProductRelationshipsParent
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Swagger\Client\Model\ProductRelationshipsParent $parent parent
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
     * @return \Swagger\Client\Model\ProductRelationshipsChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Swagger\Client\Model\ProductRelationshipsChildren $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\ProductRelationshipsTax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\ProductRelationshipsTax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return \Swagger\Client\Model\ProductRelationshipsManufacturer
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param \Swagger\Client\Model\ProductRelationshipsManufacturer $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \Swagger\Client\Model\ProductRelationshipsUnit
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \Swagger\Client\Model\ProductRelationshipsUnit $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return \Swagger\Client\Model\ProductRelationshipsCover
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \Swagger\Client\Model\ProductRelationshipsCover $cover cover
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Swagger\Client\Model\ProductRelationshipsPrices
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Swagger\Client\Model\ProductRelationshipsPrices $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\ProductRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\ProductRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets cross_sellings
     *
     * @return \Swagger\Client\Model\ProductRelationshipsCrossSellings
     */
    public function getCrossSellings()
    {
        return $this->container['cross_sellings'];
    }

    /**
     * Sets cross_sellings
     *
     * @param \Swagger\Client\Model\ProductRelationshipsCrossSellings $cross_sellings cross_sellings
     *
     * @return $this
     */
    public function setCrossSellings($cross_sellings)
    {
        $this->container['cross_sellings'] = $cross_sellings;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\ProductRelationshipsProperties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\ProductRelationshipsProperties $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\ProductRelationshipsCategories
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\ProductRelationshipsCategories $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\ProductRelationshipsTags
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\ProductRelationshipsTags $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets configurator_settings
     *
     * @return \Swagger\Client\Model\ProductRelationshipsConfiguratorSettings
     */
    public function getConfiguratorSettings()
    {
        return $this->container['configurator_settings'];
    }

    /**
     * Sets configurator_settings
     *
     * @param \Swagger\Client\Model\ProductRelationshipsConfiguratorSettings $configurator_settings configurator_settings
     *
     * @return $this
     */
    public function setConfiguratorSettings($configurator_settings)
    {
        $this->container['configurator_settings'] = $configurator_settings;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\ProductRelationshipsOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\ProductRelationshipsOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets visibilities
     *
     * @return \Swagger\Client\Model\ProductRelationshipsVisibilities
     */
    public function getVisibilities()
    {
        return $this->container['visibilities'];
    }

    /**
     * Sets visibilities
     *
     * @param \Swagger\Client\Model\ProductRelationshipsVisibilities $visibilities visibilities
     *
     * @return $this
     */
    public function setVisibilities($visibilities)
    {
        $this->container['visibilities'] = $visibilities;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return \Swagger\Client\Model\ProductRelationshipsSearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param \Swagger\Client\Model\ProductRelationshipsSearchKeywords $search_keywords search_keywords
     *
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \Swagger\Client\Model\ProductRelationshipsProductReviews
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \Swagger\Client\Model\ProductRelationshipsProductReviews $product_reviews product_reviews
     *
     * @return $this
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \Swagger\Client\Model\ProductRelationshipsMainCategories
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \Swagger\Client\Model\ProductRelationshipsMainCategories $main_categories main_categories
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
     * @return \Swagger\Client\Model\ProductRelationshipsSeoUrls
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \Swagger\Client\Model\ProductRelationshipsSeoUrls $seo_urls seo_urls
     *
     * @return $this
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \Swagger\Client\Model\ProductRelationshipsOrderLineItems
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \Swagger\Client\Model\ProductRelationshipsOrderLineItems $order_line_items order_line_items
     *
     * @return $this
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

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