<?php
/**
 * CmsBlockRelationships
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
 * CmsBlockRelationships Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CmsBlockRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cms_block_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'section' => '\ShopwareSDK6\Model\CmsBlockRelationshipsSection',
'background_media' => '\ShopwareSDK6\Model\CmsBlockRelationshipsBackgroundMedia',
'slots' => '\ShopwareSDK6\Model\CmsBlockRelationshipsSlots'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'section' => null,
'background_media' => null,
'slots' => null    ];

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
        'section' => 'section',
'background_media' => 'backgroundMedia',
'slots' => 'slots'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'section' => 'setSection',
'background_media' => 'setBackgroundMedia',
'slots' => 'setSlots'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'section' => 'getSection',
'background_media' => 'getBackgroundMedia',
'slots' => 'getSlots'    ];

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
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['background_media'] = isset($data['background_media']) ? $data['background_media'] : null;
        $this->container['slots'] = isset($data['slots']) ? $data['slots'] : null;
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
     * Gets section
     *
     * @return \ShopwareSDK6\Model\CmsBlockRelationshipsSection
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     *
     * @param \ShopwareSDK6\Model\CmsBlockRelationshipsSection $section section
     *
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;

        return $this;
    }

    /**
     * Gets background_media
     *
     * @return \ShopwareSDK6\Model\CmsBlockRelationshipsBackgroundMedia
     */
    public function getBackgroundMedia()
    {
        return $this->container['background_media'];
    }

    /**
     * Sets background_media
     *
     * @param \ShopwareSDK6\Model\CmsBlockRelationshipsBackgroundMedia $background_media background_media
     *
     * @return $this
     */
    public function setBackgroundMedia($background_media)
    {
        $this->container['background_media'] = $background_media;

        return $this;
    }

    /**
     * Gets slots
     *
     * @return \ShopwareSDK6\Model\CmsBlockRelationshipsSlots
     */
    public function getSlots()
    {
        return $this->container['slots'];
    }

    /**
     * Sets slots
     *
     * @param \ShopwareSDK6\Model\CmsBlockRelationshipsSlots $slots slots
     *
     * @return $this
     */
    public function setSlots($slots)
    {
        $this->container['slots'] = $slots;

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
