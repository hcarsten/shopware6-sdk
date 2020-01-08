<?php
/**
 * DocumentRelationships
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
 * DocumentRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'document_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_type' => '\Swagger\Client\Model\DocumentRelationshipsDocumentType',
'order' => '\Swagger\Client\Model\DocumentRelationshipsOrder',
'referenced_document' => '\Swagger\Client\Model\DocumentRelationshipsReferencedDocument',
'dependent_documents' => '\Swagger\Client\Model\DocumentRelationshipsDependentDocuments',
'document_media_file' => '\Swagger\Client\Model\DocumentRelationshipsDocumentMediaFile'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
     * Gets document_type
     *
     * @return \Swagger\Client\Model\DocumentRelationshipsDocumentType
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \Swagger\Client\Model\DocumentRelationshipsDocumentType $document_type document_type
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
     * @return \Swagger\Client\Model\DocumentRelationshipsOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\DocumentRelationshipsOrder $order order
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
     * @return \Swagger\Client\Model\DocumentRelationshipsReferencedDocument
     */
    public function getReferencedDocument()
    {
        return $this->container['referenced_document'];
    }

    /**
     * Sets referenced_document
     *
     * @param \Swagger\Client\Model\DocumentRelationshipsReferencedDocument $referenced_document referenced_document
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
     * @return \Swagger\Client\Model\DocumentRelationshipsDependentDocuments
     */
    public function getDependentDocuments()
    {
        return $this->container['dependent_documents'];
    }

    /**
     * Sets dependent_documents
     *
     * @param \Swagger\Client\Model\DocumentRelationshipsDependentDocuments $dependent_documents dependent_documents
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
     * @return \Swagger\Client\Model\DocumentRelationshipsDocumentMediaFile
     */
    public function getDocumentMediaFile()
    {
        return $this->container['document_media_file'];
    }

    /**
     * Sets document_media_file
     *
     * @param \Swagger\Client\Model\DocumentRelationshipsDocumentMediaFile $document_media_file document_media_file
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
