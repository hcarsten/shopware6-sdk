<?php
/**
 * CategoryAttributes
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
 * CategoryAttributes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'category_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version_id' => 'string',
'parent_id' => 'string',
'parent_version_id' => 'string',
'after_category_id' => 'string',
'after_category_version_id' => 'string',
'media_id' => 'string',
'display_nested_products' => 'bool',
'auto_increment' => 'int',
'breadcrumb' => 'string[]',
'level' => 'int',
'path' => 'string',
'child_count' => 'int',
'type' => 'string',
'visible' => 'bool',
'active' => 'bool',
'name' => 'string',
'custom_fields' => 'object',
'slot_config' => 'object',
'external_link' => 'string',
'description' => 'string',
'meta_title' => 'string',
'meta_description' => 'string',
'keywords' => 'string',
'cms_page_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version_id' => 'uuid',
'parent_id' => 'uuid',
'parent_version_id' => 'uuid',
'after_category_id' => 'uuid',
'after_category_version_id' => 'uuid',
'media_id' => 'uuid',
'display_nested_products' => null,
'auto_increment' => 'int64',
'breadcrumb' => null,
'level' => 'int64',
'path' => null,
'child_count' => 'int64',
'type' => null,
'visible' => null,
'active' => null,
'name' => null,
'custom_fields' => null,
'slot_config' => null,
'external_link' => null,
'description' => null,
'meta_title' => null,
'meta_description' => null,
'keywords' => null,
'cms_page_id' => 'uuid',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null    ];

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
        'version_id' => 'versionId',
'parent_id' => 'parentId',
'parent_version_id' => 'parentVersionId',
'after_category_id' => 'afterCategoryId',
'after_category_version_id' => 'afterCategoryVersionId',
'media_id' => 'mediaId',
'display_nested_products' => 'displayNestedProducts',
'auto_increment' => 'autoIncrement',
'breadcrumb' => 'breadcrumb',
'level' => 'level',
'path' => 'path',
'child_count' => 'childCount',
'type' => 'type',
'visible' => 'visible',
'active' => 'active',
'name' => 'name',
'custom_fields' => 'customFields',
'slot_config' => 'slotConfig',
'external_link' => 'externalLink',
'description' => 'description',
'meta_title' => 'metaTitle',
'meta_description' => 'metaDescription',
'keywords' => 'keywords',
'cms_page_id' => 'cmsPageId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version_id' => 'setVersionId',
'parent_id' => 'setParentId',
'parent_version_id' => 'setParentVersionId',
'after_category_id' => 'setAfterCategoryId',
'after_category_version_id' => 'setAfterCategoryVersionId',
'media_id' => 'setMediaId',
'display_nested_products' => 'setDisplayNestedProducts',
'auto_increment' => 'setAutoIncrement',
'breadcrumb' => 'setBreadcrumb',
'level' => 'setLevel',
'path' => 'setPath',
'child_count' => 'setChildCount',
'type' => 'setType',
'visible' => 'setVisible',
'active' => 'setActive',
'name' => 'setName',
'custom_fields' => 'setCustomFields',
'slot_config' => 'setSlotConfig',
'external_link' => 'setExternalLink',
'description' => 'setDescription',
'meta_title' => 'setMetaTitle',
'meta_description' => 'setMetaDescription',
'keywords' => 'setKeywords',
'cms_page_id' => 'setCmsPageId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version_id' => 'getVersionId',
'parent_id' => 'getParentId',
'parent_version_id' => 'getParentVersionId',
'after_category_id' => 'getAfterCategoryId',
'after_category_version_id' => 'getAfterCategoryVersionId',
'media_id' => 'getMediaId',
'display_nested_products' => 'getDisplayNestedProducts',
'auto_increment' => 'getAutoIncrement',
'breadcrumb' => 'getBreadcrumb',
'level' => 'getLevel',
'path' => 'getPath',
'child_count' => 'getChildCount',
'type' => 'getType',
'visible' => 'getVisible',
'active' => 'getActive',
'name' => 'getName',
'custom_fields' => 'getCustomFields',
'slot_config' => 'getSlotConfig',
'external_link' => 'getExternalLink',
'description' => 'getDescription',
'meta_title' => 'getMetaTitle',
'meta_description' => 'getMetaDescription',
'keywords' => 'getKeywords',
'cms_page_id' => 'getCmsPageId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated'    ];

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
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['parent_version_id'] = isset($data['parent_version_id']) ? $data['parent_version_id'] : null;
        $this->container['after_category_id'] = isset($data['after_category_id']) ? $data['after_category_id'] : null;
        $this->container['after_category_version_id'] = isset($data['after_category_version_id']) ? $data['after_category_version_id'] : null;
        $this->container['media_id'] = isset($data['media_id']) ? $data['media_id'] : null;
        $this->container['display_nested_products'] = isset($data['display_nested_products']) ? $data['display_nested_products'] : null;
        $this->container['auto_increment'] = isset($data['auto_increment']) ? $data['auto_increment'] : null;
        $this->container['breadcrumb'] = isset($data['breadcrumb']) ? $data['breadcrumb'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['child_count'] = isset($data['child_count']) ? $data['child_count'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['slot_config'] = isset($data['slot_config']) ? $data['slot_config'] : null;
        $this->container['external_link'] = isset($data['external_link']) ? $data['external_link'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['cms_page_id'] = isset($data['cms_page_id']) ? $data['cms_page_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['display_nested_products'] === null) {
            $invalidProperties[] = "'display_nested_products' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

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
     * Gets parent_version_id
     *
     * @return string
     */
    public function getParentVersionId()
    {
        return $this->container['parent_version_id'];
    }

    /**
     * Sets parent_version_id
     *
     * @param string $parent_version_id parent_version_id
     *
     * @return $this
     */
    public function setParentVersionId($parent_version_id)
    {
        $this->container['parent_version_id'] = $parent_version_id;

        return $this;
    }

    /**
     * Gets after_category_id
     *
     * @return string
     */
    public function getAfterCategoryId()
    {
        return $this->container['after_category_id'];
    }

    /**
     * Sets after_category_id
     *
     * @param string $after_category_id after_category_id
     *
     * @return $this
     */
    public function setAfterCategoryId($after_category_id)
    {
        $this->container['after_category_id'] = $after_category_id;

        return $this;
    }

    /**
     * Gets after_category_version_id
     *
     * @return string
     */
    public function getAfterCategoryVersionId()
    {
        return $this->container['after_category_version_id'];
    }

    /**
     * Sets after_category_version_id
     *
     * @param string $after_category_version_id after_category_version_id
     *
     * @return $this
     */
    public function setAfterCategoryVersionId($after_category_version_id)
    {
        $this->container['after_category_version_id'] = $after_category_version_id;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string $media_id media_id
     *
     * @return $this
     */
    public function setMediaId($media_id)
    {
        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets display_nested_products
     *
     * @return bool
     */
    public function getDisplayNestedProducts()
    {
        return $this->container['display_nested_products'];
    }

    /**
     * Sets display_nested_products
     *
     * @param bool $display_nested_products display_nested_products
     *
     * @return $this
     */
    public function setDisplayNestedProducts($display_nested_products)
    {
        $this->container['display_nested_products'] = $display_nested_products;

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
     * Gets breadcrumb
     *
     * @return string[]
     */
    public function getBreadcrumb()
    {
        return $this->container['breadcrumb'];
    }

    /**
     * Sets breadcrumb
     *
     * @param string[] $breadcrumb breadcrumb
     *
     * @return $this
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->container['breadcrumb'] = $breadcrumb;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return int
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param int $child_count child_count
     *
     * @return $this
     */
    public function setChildCount($child_count)
    {
        $this->container['child_count'] = $child_count;

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
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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
     * Gets slot_config
     *
     * @return object
     */
    public function getSlotConfig()
    {
        return $this->container['slot_config'];
    }

    /**
     * Sets slot_config
     *
     * @param object $slot_config slot_config
     *
     * @return $this
     */
    public function setSlotConfig($slot_config)
    {
        $this->container['slot_config'] = $slot_config;

        return $this;
    }

    /**
     * Gets external_link
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->container['external_link'];
    }

    /**
     * Sets external_link
     *
     * @param string $external_link external_link
     *
     * @return $this
     */
    public function setExternalLink($external_link)
    {
        $this->container['external_link'] = $external_link;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets meta_title
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     *
     * @param string $meta_title meta_title
     *
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string $meta_description meta_description
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets cms_page_id
     *
     * @return string
     */
    public function getCmsPageId()
    {
        return $this->container['cms_page_id'];
    }

    /**
     * Sets cms_page_id
     *
     * @param string $cms_page_id cms_page_id
     *
     * @return $this
     */
    public function setCmsPageId($cms_page_id)
    {
        $this->container['cms_page_id'] = $cms_page_id;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

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
