<?php
/**
 * SeoUrlAttributes
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
 * SeoUrlAttributes Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SeoUrlAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'seo_url_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_channel_id' => 'string',
'language_id' => 'string',
'foreign_key' => 'string',
'route_name' => 'string',
'path_info' => 'string',
'seo_path_info' => 'string',
'is_canonical' => 'bool',
'is_modified' => 'bool',
'is_deleted' => 'bool',
'url' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_channel_id' => 'uuid',
'language_id' => 'uuid',
'foreign_key' => 'uuid',
'route_name' => null,
'path_info' => null,
'seo_path_info' => null,
'is_canonical' => null,
'is_modified' => null,
'is_deleted' => null,
'url' => null,
'custom_fields' => null,
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
        'sales_channel_id' => 'salesChannelId',
'language_id' => 'languageId',
'foreign_key' => 'foreignKey',
'route_name' => 'routeName',
'path_info' => 'pathInfo',
'seo_path_info' => 'seoPathInfo',
'is_canonical' => 'isCanonical',
'is_modified' => 'isModified',
'is_deleted' => 'isDeleted',
'url' => 'url',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_channel_id' => 'setSalesChannelId',
'language_id' => 'setLanguageId',
'foreign_key' => 'setForeignKey',
'route_name' => 'setRouteName',
'path_info' => 'setPathInfo',
'seo_path_info' => 'setSeoPathInfo',
'is_canonical' => 'setIsCanonical',
'is_modified' => 'setIsModified',
'is_deleted' => 'setIsDeleted',
'url' => 'setUrl',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_channel_id' => 'getSalesChannelId',
'language_id' => 'getLanguageId',
'foreign_key' => 'getForeignKey',
'route_name' => 'getRouteName',
'path_info' => 'getPathInfo',
'seo_path_info' => 'getSeoPathInfo',
'is_canonical' => 'getIsCanonical',
'is_modified' => 'getIsModified',
'is_deleted' => 'getIsDeleted',
'url' => 'getUrl',
'custom_fields' => 'getCustomFields',
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
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['foreign_key'] = isset($data['foreign_key']) ? $data['foreign_key'] : null;
        $this->container['route_name'] = isset($data['route_name']) ? $data['route_name'] : null;
        $this->container['path_info'] = isset($data['path_info']) ? $data['path_info'] : null;
        $this->container['seo_path_info'] = isset($data['seo_path_info']) ? $data['seo_path_info'] : null;
        $this->container['is_canonical'] = isset($data['is_canonical']) ? $data['is_canonical'] : null;
        $this->container['is_modified'] = isset($data['is_modified']) ? $data['is_modified'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
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

        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if ($this->container['foreign_key'] === null) {
            $invalidProperties[] = "'foreign_key' can't be null";
        }
        if ($this->container['route_name'] === null) {
            $invalidProperties[] = "'route_name' can't be null";
        }
        if ($this->container['path_info'] === null) {
            $invalidProperties[] = "'path_info' can't be null";
        }
        if ($this->container['seo_path_info'] === null) {
            $invalidProperties[] = "'seo_path_info' can't be null";
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
     * Gets foreign_key
     *
     * @return string
     */
    public function getForeignKey()
    {
        return $this->container['foreign_key'];
    }

    /**
     * Sets foreign_key
     *
     * @param string $foreign_key foreign_key
     *
     * @return $this
     */
    public function setForeignKey($foreign_key)
    {
        $this->container['foreign_key'] = $foreign_key;

        return $this;
    }

    /**
     * Gets route_name
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->container['route_name'];
    }

    /**
     * Sets route_name
     *
     * @param string $route_name route_name
     *
     * @return $this
     */
    public function setRouteName($route_name)
    {
        $this->container['route_name'] = $route_name;

        return $this;
    }

    /**
     * Gets path_info
     *
     * @return string
     */
    public function getPathInfo()
    {
        return $this->container['path_info'];
    }

    /**
     * Sets path_info
     *
     * @param string $path_info path_info
     *
     * @return $this
     */
    public function setPathInfo($path_info)
    {
        $this->container['path_info'] = $path_info;

        return $this;
    }

    /**
     * Gets seo_path_info
     *
     * @return string
     */
    public function getSeoPathInfo()
    {
        return $this->container['seo_path_info'];
    }

    /**
     * Sets seo_path_info
     *
     * @param string $seo_path_info seo_path_info
     *
     * @return $this
     */
    public function setSeoPathInfo($seo_path_info)
    {
        $this->container['seo_path_info'] = $seo_path_info;

        return $this;
    }

    /**
     * Gets is_canonical
     *
     * @return bool
     */
    public function getIsCanonical()
    {
        return $this->container['is_canonical'];
    }

    /**
     * Sets is_canonical
     *
     * @param bool $is_canonical is_canonical
     *
     * @return $this
     */
    public function setIsCanonical($is_canonical)
    {
        $this->container['is_canonical'] = $is_canonical;

        return $this;
    }

    /**
     * Gets is_modified
     *
     * @return bool
     */
    public function getIsModified()
    {
        return $this->container['is_modified'];
    }

    /**
     * Sets is_modified
     *
     * @param bool $is_modified is_modified
     *
     * @return $this
     */
    public function setIsModified($is_modified)
    {
        $this->container['is_modified'] = $is_modified;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted is_deleted
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
