<?php
/**
 * ThemeSalesChannelFlat
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
 * ThemeSalesChannelFlat Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThemeSalesChannelFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'theme_sales_channel_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'sales_channel_id' => 'string',
'theme_id' => 'string',
'theme' => '\Shopware6SDK\Model\ThemeFlat',
'sales_channel' => '\Shopware6SDK\Model\SalesChannelFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'sales_channel_id' => 'uuid',
'theme_id' => 'uuid',
'theme' => null,
'sales_channel' => null    ];

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
'sales_channel_id' => 'salesChannelId',
'theme_id' => 'themeId',
'theme' => 'theme',
'sales_channel' => 'salesChannel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sales_channel_id' => 'setSalesChannelId',
'theme_id' => 'setThemeId',
'theme' => 'setTheme',
'sales_channel' => 'setSalesChannel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sales_channel_id' => 'getSalesChannelId',
'theme_id' => 'getThemeId',
'theme' => 'getTheme',
'sales_channel' => 'getSalesChannel'    ];

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
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['theme_id'] = isset($data['theme_id']) ? $data['theme_id'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if ($this->container['theme_id'] === null) {
            $invalidProperties[] = "'theme_id' can't be null";
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
     * Gets theme_id
     *
     * @return string
     */
    public function getThemeId()
    {
        return $this->container['theme_id'];
    }

    /**
     * Sets theme_id
     *
     * @param string $theme_id theme_id
     *
     * @return $this
     */
    public function setThemeId($theme_id)
    {
        $this->container['theme_id'] = $theme_id;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \Shopware6SDK\Model\ThemeFlat
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \Shopware6SDK\Model\ThemeFlat $theme theme
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \Shopware6SDK\Model\SalesChannelFlat
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \Shopware6SDK\Model\SalesChannelFlat $sales_channel sales_channel
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

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
