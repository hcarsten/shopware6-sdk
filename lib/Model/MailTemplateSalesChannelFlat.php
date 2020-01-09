<?php
/**
 * MailTemplateSalesChannelFlat
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
 * MailTemplateSalesChannelFlat Class Doc Comment
 *
 * @category Class
 * @package  Shopware6SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailTemplateSalesChannelFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mail_template_sales_channel_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'mail_template_id' => 'string',
'sales_channel_id' => 'string',
'mail_template_type_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'mail_template_type' => '\Shopware6SDK\Model\MailTemplateTypeFlat',
'mail_template' => '\Shopware6SDK\Model\MailTemplateFlat',
'sales_channel' => '\Shopware6SDK\Model\SalesChannelFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'mail_template_id' => 'uuid',
'sales_channel_id' => 'uuid',
'mail_template_type_id' => 'uuid',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'mail_template_type' => null,
'mail_template' => null,
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
'mail_template_id' => 'mailTemplateId',
'sales_channel_id' => 'salesChannelId',
'mail_template_type_id' => 'mailTemplateTypeId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'mail_template_type' => 'mailTemplateType',
'mail_template' => 'mailTemplate',
'sales_channel' => 'salesChannel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'mail_template_id' => 'setMailTemplateId',
'sales_channel_id' => 'setSalesChannelId',
'mail_template_type_id' => 'setMailTemplateTypeId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'mail_template_type' => 'setMailTemplateType',
'mail_template' => 'setMailTemplate',
'sales_channel' => 'setSalesChannel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'mail_template_id' => 'getMailTemplateId',
'sales_channel_id' => 'getSalesChannelId',
'mail_template_type_id' => 'getMailTemplateTypeId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'mail_template_type' => 'getMailTemplateType',
'mail_template' => 'getMailTemplate',
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
        $this->container['mail_template_id'] = isset($data['mail_template_id']) ? $data['mail_template_id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['mail_template_type_id'] = isset($data['mail_template_type_id']) ? $data['mail_template_type_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['mail_template_type'] = isset($data['mail_template_type']) ? $data['mail_template_type'] : null;
        $this->container['mail_template'] = isset($data['mail_template']) ? $data['mail_template'] : null;
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

        if ($this->container['mail_template_id'] === null) {
            $invalidProperties[] = "'mail_template_id' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
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
     * Gets mail_template_id
     *
     * @return string
     */
    public function getMailTemplateId()
    {
        return $this->container['mail_template_id'];
    }

    /**
     * Sets mail_template_id
     *
     * @param string $mail_template_id mail_template_id
     *
     * @return $this
     */
    public function setMailTemplateId($mail_template_id)
    {
        $this->container['mail_template_id'] = $mail_template_id;

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
     * Gets mail_template_type_id
     *
     * @return string
     */
    public function getMailTemplateTypeId()
    {
        return $this->container['mail_template_type_id'];
    }

    /**
     * Sets mail_template_type_id
     *
     * @param string $mail_template_type_id mail_template_type_id
     *
     * @return $this
     */
    public function setMailTemplateTypeId($mail_template_type_id)
    {
        $this->container['mail_template_type_id'] = $mail_template_type_id;

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
     * Gets mail_template_type
     *
     * @return \Shopware6SDK\Model\MailTemplateTypeFlat
     */
    public function getMailTemplateType()
    {
        return $this->container['mail_template_type'];
    }

    /**
     * Sets mail_template_type
     *
     * @param \Shopware6SDK\Model\MailTemplateTypeFlat $mail_template_type mail_template_type
     *
     * @return $this
     */
    public function setMailTemplateType($mail_template_type)
    {
        $this->container['mail_template_type'] = $mail_template_type;

        return $this;
    }

    /**
     * Gets mail_template
     *
     * @return \Shopware6SDK\Model\MailTemplateFlat
     */
    public function getMailTemplate()
    {
        return $this->container['mail_template'];
    }

    /**
     * Sets mail_template
     *
     * @param \Shopware6SDK\Model\MailTemplateFlat $mail_template mail_template
     *
     * @return $this
     */
    public function setMailTemplate($mail_template)
    {
        $this->container['mail_template'] = $mail_template;

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
