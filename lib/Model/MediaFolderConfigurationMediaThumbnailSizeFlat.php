<?php
/**
 * MediaFolderConfigurationMediaThumbnailSizeFlat
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
 * MediaFolderConfigurationMediaThumbnailSizeFlat Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaFolderConfigurationMediaThumbnailSizeFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'media_folder_configuration_media_thumbnail_size_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'media_folder_configuration_id' => 'string',
'media_thumbnail_size_id' => 'string',
'media_folder_configuration' => '\ShopwareSDK6\Model\MediaFolderConfigurationFlat',
'media_thumbnail_size' => '\ShopwareSDK6\Model\MediaThumbnailSizeFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'media_folder_configuration_id' => 'uuid',
'media_thumbnail_size_id' => 'uuid',
'media_folder_configuration' => null,
'media_thumbnail_size' => null    ];

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
'media_folder_configuration_id' => 'mediaFolderConfigurationId',
'media_thumbnail_size_id' => 'mediaThumbnailSizeId',
'media_folder_configuration' => 'mediaFolderConfiguration',
'media_thumbnail_size' => 'mediaThumbnailSize'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'media_folder_configuration_id' => 'setMediaFolderConfigurationId',
'media_thumbnail_size_id' => 'setMediaThumbnailSizeId',
'media_folder_configuration' => 'setMediaFolderConfiguration',
'media_thumbnail_size' => 'setMediaThumbnailSize'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'media_folder_configuration_id' => 'getMediaFolderConfigurationId',
'media_thumbnail_size_id' => 'getMediaThumbnailSizeId',
'media_folder_configuration' => 'getMediaFolderConfiguration',
'media_thumbnail_size' => 'getMediaThumbnailSize'    ];

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
        $this->container['media_folder_configuration_id'] = isset($data['media_folder_configuration_id']) ? $data['media_folder_configuration_id'] : null;
        $this->container['media_thumbnail_size_id'] = isset($data['media_thumbnail_size_id']) ? $data['media_thumbnail_size_id'] : null;
        $this->container['media_folder_configuration'] = isset($data['media_folder_configuration']) ? $data['media_folder_configuration'] : null;
        $this->container['media_thumbnail_size'] = isset($data['media_thumbnail_size']) ? $data['media_thumbnail_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['media_folder_configuration_id'] === null) {
            $invalidProperties[] = "'media_folder_configuration_id' can't be null";
        }
        if ($this->container['media_thumbnail_size_id'] === null) {
            $invalidProperties[] = "'media_thumbnail_size_id' can't be null";
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
     * Gets media_folder_configuration_id
     *
     * @return string
     */
    public function getMediaFolderConfigurationId()
    {
        return $this->container['media_folder_configuration_id'];
    }

    /**
     * Sets media_folder_configuration_id
     *
     * @param string $media_folder_configuration_id media_folder_configuration_id
     *
     * @return $this
     */
    public function setMediaFolderConfigurationId($media_folder_configuration_id)
    {
        $this->container['media_folder_configuration_id'] = $media_folder_configuration_id;

        return $this;
    }

    /**
     * Gets media_thumbnail_size_id
     *
     * @return string
     */
    public function getMediaThumbnailSizeId()
    {
        return $this->container['media_thumbnail_size_id'];
    }

    /**
     * Sets media_thumbnail_size_id
     *
     * @param string $media_thumbnail_size_id media_thumbnail_size_id
     *
     * @return $this
     */
    public function setMediaThumbnailSizeId($media_thumbnail_size_id)
    {
        $this->container['media_thumbnail_size_id'] = $media_thumbnail_size_id;

        return $this;
    }

    /**
     * Gets media_folder_configuration
     *
     * @return \ShopwareSDK6\Model\MediaFolderConfigurationFlat
     */
    public function getMediaFolderConfiguration()
    {
        return $this->container['media_folder_configuration'];
    }

    /**
     * Sets media_folder_configuration
     *
     * @param \ShopwareSDK6\Model\MediaFolderConfigurationFlat $media_folder_configuration media_folder_configuration
     *
     * @return $this
     */
    public function setMediaFolderConfiguration($media_folder_configuration)
    {
        $this->container['media_folder_configuration'] = $media_folder_configuration;

        return $this;
    }

    /**
     * Gets media_thumbnail_size
     *
     * @return \ShopwareSDK6\Model\MediaThumbnailSizeFlat
     */
    public function getMediaThumbnailSize()
    {
        return $this->container['media_thumbnail_size'];
    }

    /**
     * Sets media_thumbnail_size
     *
     * @param \ShopwareSDK6\Model\MediaThumbnailSizeFlat $media_thumbnail_size media_thumbnail_size
     *
     * @return $this
     */
    public function setMediaThumbnailSize($media_thumbnail_size)
    {
        $this->container['media_thumbnail_size'] = $media_thumbnail_size;

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
