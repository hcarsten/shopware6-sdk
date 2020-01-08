<?php
/**
 * DocumentFlat
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
 * DocumentFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'document_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'document_type_id' => 'string',
'file_type' => 'string',
'referenced_document_id' => 'string',
'order_id' => 'string',
'document_media_file_id' => 'string',
'order_version_id' => 'string',
'config' => 'object',
'sent' => 'bool',
'static' => 'bool',
'deep_link_code' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'document_type' => '\Swagger\Client\Model\DocumentTypeFlat',
'order' => '\Swagger\Client\Model\OrderFlat',
'referenced_document' => '\Swagger\Client\Model\DocumentFlat',
'dependent_documents' => '\Swagger\Client\Model\DocumentFlat',
'document_media_file' => '\Swagger\Client\Model\MediaFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'document_type_id' => 'uuid',
'file_type' => null,
'referenced_document_id' => 'uuid',
'order_id' => 'uuid',
'document_media_file_id' => 'uuid',
'order_version_id' => 'uuid',
'config' => null,
'sent' => null,
'static' => null,
'deep_link_code' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'document_type' => null,
'order' => null,
'referenced_document' => null,
'dependent_documents' => null,
'document_media_file' => null    ];

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
'document_type_id' => 'documentTypeId',
'file_type' => 'fileType',
'referenced_document_id' => 'referencedDocumentId',
'order_id' => 'orderId',
'document_media_file_id' => 'documentMediaFileId',
'order_version_id' => 'orderVersionId',
'config' => 'config',
'sent' => 'sent',
'static' => 'static',
'deep_link_code' => 'deepLinkCode',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'document_type' => 'documentType',
'order' => 'order',
'referenced_document' => 'referencedDocument',
'dependent_documents' => 'dependentDocuments',
'document_media_file' => 'documentMediaFile'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'document_type_id' => 'setDocumentTypeId',
'file_type' => 'setFileType',
'referenced_document_id' => 'setReferencedDocumentId',
'order_id' => 'setOrderId',
'document_media_file_id' => 'setDocumentMediaFileId',
'order_version_id' => 'setOrderVersionId',
'config' => 'setConfig',
'sent' => 'setSent',
'static' => 'setStatic',
'deep_link_code' => 'setDeepLinkCode',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'document_type' => 'setDocumentType',
'order' => 'setOrder',
'referenced_document' => 'setReferencedDocument',
'dependent_documents' => 'setDependentDocuments',
'document_media_file' => 'setDocumentMediaFile'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'document_type_id' => 'getDocumentTypeId',
'file_type' => 'getFileType',
'referenced_document_id' => 'getReferencedDocumentId',
'order_id' => 'getOrderId',
'document_media_file_id' => 'getDocumentMediaFileId',
'order_version_id' => 'getOrderVersionId',
'config' => 'getConfig',
'sent' => 'getSent',
'static' => 'getStatic',
'deep_link_code' => 'getDeepLinkCode',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'document_type' => 'getDocumentType',
'order' => 'getOrder',
'referenced_document' => 'getReferencedDocument',
'dependent_documents' => 'getDependentDocuments',
'document_media_file' => 'getDocumentMediaFile'    ];

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
        $this->container['document_type_id'] = isset($data['document_type_id']) ? $data['document_type_id'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['referenced_document_id'] = isset($data['referenced_document_id']) ? $data['referenced_document_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['document_media_file_id'] = isset($data['document_media_file_id']) ? $data['document_media_file_id'] : null;
        $this->container['order_version_id'] = isset($data['order_version_id']) ? $data['order_version_id'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['sent'] = isset($data['sent']) ? $data['sent'] : null;
        $this->container['static'] = isset($data['static']) ? $data['static'] : null;
        $this->container['deep_link_code'] = isset($data['deep_link_code']) ? $data['deep_link_code'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['referenced_document'] = isset($data['referenced_document']) ? $data['referenced_document'] : null;
        $this->container['dependent_documents'] = isset($data['dependent_documents']) ? $data['dependent_documents'] : null;
        $this->container['document_media_file'] = isset($data['document_media_file']) ? $data['document_media_file'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if ($this->container['file_type'] === null) {
            $invalidProperties[] = "'file_type' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['deep_link_code'] === null) {
            $invalidProperties[] = "'deep_link_code' can't be null";
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
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id document_type_id
     *
     * @return $this
     */
    public function setDocumentTypeId($document_type_id)
    {
        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type file_type
     *
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets referenced_document_id
     *
     * @return string
     */
    public function getReferencedDocumentId()
    {
        return $this->container['referenced_document_id'];
    }

    /**
     * Sets referenced_document_id
     *
     * @param string $referenced_document_id referenced_document_id
     *
     * @return $this
     */
    public function setReferencedDocumentId($referenced_document_id)
    {
        $this->container['referenced_document_id'] = $referenced_document_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets document_media_file_id
     *
     * @return string
     */
    public function getDocumentMediaFileId()
    {
        return $this->container['document_media_file_id'];
    }

    /**
     * Sets document_media_file_id
     *
     * @param string $document_media_file_id document_media_file_id
     *
     * @return $this
     */
    public function setDocumentMediaFileId($document_media_file_id)
    {
        $this->container['document_media_file_id'] = $document_media_file_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string $order_version_id order_version_id
     *
     * @return $this
     */
    public function setOrderVersionId($order_version_id)
    {
        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets sent
     *
     * @return bool
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param bool $sent sent
     *
     * @return $this
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets static
     *
     * @return bool
     */
    public function getStatic()
    {
        return $this->container['static'];
    }

    /**
     * Sets static
     *
     * @param bool $static static
     *
     * @return $this
     */
    public function setStatic($static)
    {
        $this->container['static'] = $static;

        return $this;
    }

    /**
     * Gets deep_link_code
     *
     * @return string
     */
    public function getDeepLinkCode()
    {
        return $this->container['deep_link_code'];
    }

    /**
     * Sets deep_link_code
     *
     * @param string $deep_link_code deep_link_code
     *
     * @return $this
     */
    public function setDeepLinkCode($deep_link_code)
    {
        $this->container['deep_link_code'] = $deep_link_code;

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
     * Gets document_type
     *
     * @return \Swagger\Client\Model\DocumentTypeFlat
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \Swagger\Client\Model\DocumentTypeFlat $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Swagger\Client\Model\OrderFlat
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\OrderFlat $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets referenced_document
     *
     * @return \Swagger\Client\Model\DocumentFlat
     */
    public function getReferencedDocument()
    {
        return $this->container['referenced_document'];
    }

    /**
     * Sets referenced_document
     *
     * @param \Swagger\Client\Model\DocumentFlat $referenced_document referenced_document
     *
     * @return $this
     */
    public function setReferencedDocument($referenced_document)
    {
        $this->container['referenced_document'] = $referenced_document;

        return $this;
    }

    /**
     * Gets dependent_documents
     *
     * @return \Swagger\Client\Model\DocumentFlat
     */
    public function getDependentDocuments()
    {
        return $this->container['dependent_documents'];
    }

    /**
     * Sets dependent_documents
     *
     * @param \Swagger\Client\Model\DocumentFlat $dependent_documents dependent_documents
     *
     * @return $this
     */
    public function setDependentDocuments($dependent_documents)
    {
        $this->container['dependent_documents'] = $dependent_documents;

        return $this;
    }

    /**
     * Gets document_media_file
     *
     * @return \Swagger\Client\Model\MediaFlat
     */
    public function getDocumentMediaFile()
    {
        return $this->container['document_media_file'];
    }

    /**
     * Sets document_media_file
     *
     * @param \Swagger\Client\Model\MediaFlat $document_media_file document_media_file
     *
     * @return $this
     */
    public function setDocumentMediaFile($document_media_file)
    {
        $this->container['document_media_file'] = $document_media_file;

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
