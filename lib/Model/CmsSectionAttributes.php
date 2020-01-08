<?php
/**
 * CmsSectionAttributes
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
 * CmsSectionAttributes Class Doc Comment
 *
 * @category Class
 * @package  ShopwareSDK6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CmsSectionAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cms_section_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'position' => 'int',
'type' => 'string',
'locked' => 'bool',
'name' => 'string',
'sizing_mode' => 'string',
'mobile_behavior' => 'string',
'background_color' => 'string',
'background_media_id' => 'string',
'background_media_mode' => 'string',
'css_class' => 'string',
'page_id' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'position' => 'int64',
'type' => null,
'locked' => null,
'name' => null,
'sizing_mode' => null,
'mobile_behavior' => null,
'background_color' => null,
'background_media_id' => 'uuid',
'background_media_mode' => null,
'css_class' => null,
'page_id' => 'uuid',
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
        'position' => 'position',
'type' => 'type',
'locked' => 'locked',
'name' => 'name',
'sizing_mode' => 'sizingMode',
'mobile_behavior' => 'mobileBehavior',
'background_color' => 'backgroundColor',
'background_media_id' => 'backgroundMediaId',
'background_media_mode' => 'backgroundMediaMode',
'css_class' => 'cssClass',
'page_id' => 'pageId',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
'type' => 'setType',
'locked' => 'setLocked',
'name' => 'setName',
'sizing_mode' => 'setSizingMode',
'mobile_behavior' => 'setMobileBehavior',
'background_color' => 'setBackgroundColor',
'background_media_id' => 'setBackgroundMediaId',
'background_media_mode' => 'setBackgroundMediaMode',
'css_class' => 'setCssClass',
'page_id' => 'setPageId',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
'type' => 'getType',
'locked' => 'getLocked',
'name' => 'getName',
'sizing_mode' => 'getSizingMode',
'mobile_behavior' => 'getMobileBehavior',
'background_color' => 'getBackgroundColor',
'background_media_id' => 'getBackgroundMediaId',
'background_media_mode' => 'getBackgroundMediaMode',
'css_class' => 'getCssClass',
'page_id' => 'getPageId',
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sizing_mode'] = isset($data['sizing_mode']) ? $data['sizing_mode'] : null;
        $this->container['mobile_behavior'] = isset($data['mobile_behavior']) ? $data['mobile_behavior'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['background_media_id'] = isset($data['background_media_id']) ? $data['background_media_id'] : null;
        $this->container['background_media_mode'] = isset($data['background_media_mode']) ? $data['background_media_mode'] : null;
        $this->container['css_class'] = isset($data['css_class']) ? $data['css_class'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
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

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['page_id'] === null) {
            $invalidProperties[] = "'page_id' can't be null";
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
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked locked
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

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
     * Gets sizing_mode
     *
     * @return string
     */
    public function getSizingMode()
    {
        return $this->container['sizing_mode'];
    }

    /**
     * Sets sizing_mode
     *
     * @param string $sizing_mode sizing_mode
     *
     * @return $this
     */
    public function setSizingMode($sizing_mode)
    {
        $this->container['sizing_mode'] = $sizing_mode;

        return $this;
    }

    /**
     * Gets mobile_behavior
     *
     * @return string
     */
    public function getMobileBehavior()
    {
        return $this->container['mobile_behavior'];
    }

    /**
     * Sets mobile_behavior
     *
     * @param string $mobile_behavior mobile_behavior
     *
     * @return $this
     */
    public function setMobileBehavior($mobile_behavior)
    {
        $this->container['mobile_behavior'] = $mobile_behavior;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color background_color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets background_media_id
     *
     * @return string
     */
    public function getBackgroundMediaId()
    {
        return $this->container['background_media_id'];
    }

    /**
     * Sets background_media_id
     *
     * @param string $background_media_id background_media_id
     *
     * @return $this
     */
    public function setBackgroundMediaId($background_media_id)
    {
        $this->container['background_media_id'] = $background_media_id;

        return $this;
    }

    /**
     * Gets background_media_mode
     *
     * @return string
     */
    public function getBackgroundMediaMode()
    {
        return $this->container['background_media_mode'];
    }

    /**
     * Sets background_media_mode
     *
     * @param string $background_media_mode background_media_mode
     *
     * @return $this
     */
    public function setBackgroundMediaMode($background_media_mode)
    {
        $this->container['background_media_mode'] = $background_media_mode;

        return $this;
    }

    /**
     * Gets css_class
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string $css_class css_class
     *
     * @return $this
     */
    public function setCssClass($css_class)
    {
        $this->container['css_class'] = $css_class;

        return $this;
    }

    /**
     * Gets page_id
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param string $page_id page_id
     *
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

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
