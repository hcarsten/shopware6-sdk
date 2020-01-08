<?php
/**
 * ProductExportAttributes
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
 * ProductExportAttributes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductExportAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_export_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_stream_id' => 'string',
'storefront_sales_channel_id' => 'string',
'sales_channel_id' => 'string',
'sales_channel_domain_id' => 'string',
'currency_id' => 'string',
'file_name' => 'string',
'access_key' => 'string',
'encoding' => 'string',
'file_format' => 'string',
'include_variants' => 'bool',
'generate_by_cronjob' => 'bool',
'generated_at' => '\DateTime',
'interval' => 'int',
'header_template' => 'string',
'body_template' => 'string',
'footer_template' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_stream_id' => 'uuid',
'storefront_sales_channel_id' => 'uuid',
'sales_channel_id' => 'uuid',
'sales_channel_domain_id' => 'uuid',
'currency_id' => 'uuid',
'file_name' => null,
'access_key' => null,
'encoding' => null,
'file_format' => null,
'include_variants' => null,
'generate_by_cronjob' => null,
'generated_at' => 'date-time',
'interval' => 'int64',
'header_template' => null,
'body_template' => null,
'footer_template' => null,
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
        'product_stream_id' => 'productStreamId',
'storefront_sales_channel_id' => 'storefrontSalesChannelId',
'sales_channel_id' => 'salesChannelId',
'sales_channel_domain_id' => 'salesChannelDomainId',
'currency_id' => 'currencyId',
'file_name' => 'fileName',
'access_key' => 'accessKey',
'encoding' => 'encoding',
'file_format' => 'fileFormat',
'include_variants' => 'includeVariants',
'generate_by_cronjob' => 'generateByCronjob',
'generated_at' => 'generatedAt',
'interval' => 'interval',
'header_template' => 'headerTemplate',
'body_template' => 'bodyTemplate',
'footer_template' => 'footerTemplate',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_stream_id' => 'setProductStreamId',
'storefront_sales_channel_id' => 'setStorefrontSalesChannelId',
'sales_channel_id' => 'setSalesChannelId',
'sales_channel_domain_id' => 'setSalesChannelDomainId',
'currency_id' => 'setCurrencyId',
'file_name' => 'setFileName',
'access_key' => 'setAccessKey',
'encoding' => 'setEncoding',
'file_format' => 'setFileFormat',
'include_variants' => 'setIncludeVariants',
'generate_by_cronjob' => 'setGenerateByCronjob',
'generated_at' => 'setGeneratedAt',
'interval' => 'setInterval',
'header_template' => 'setHeaderTemplate',
'body_template' => 'setBodyTemplate',
'footer_template' => 'setFooterTemplate',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_stream_id' => 'getProductStreamId',
'storefront_sales_channel_id' => 'getStorefrontSalesChannelId',
'sales_channel_id' => 'getSalesChannelId',
'sales_channel_domain_id' => 'getSalesChannelDomainId',
'currency_id' => 'getCurrencyId',
'file_name' => 'getFileName',
'access_key' => 'getAccessKey',
'encoding' => 'getEncoding',
'file_format' => 'getFileFormat',
'include_variants' => 'getIncludeVariants',
'generate_by_cronjob' => 'getGenerateByCronjob',
'generated_at' => 'getGeneratedAt',
'interval' => 'getInterval',
'header_template' => 'getHeaderTemplate',
'body_template' => 'getBodyTemplate',
'footer_template' => 'getFooterTemplate',
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
        $this->container['product_stream_id'] = isset($data['product_stream_id']) ? $data['product_stream_id'] : null;
        $this->container['storefront_sales_channel_id'] = isset($data['storefront_sales_channel_id']) ? $data['storefront_sales_channel_id'] : null;
        $this->container['sales_channel_id'] = isset($data['sales_channel_id']) ? $data['sales_channel_id'] : null;
        $this->container['sales_channel_domain_id'] = isset($data['sales_channel_domain_id']) ? $data['sales_channel_domain_id'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['access_key'] = isset($data['access_key']) ? $data['access_key'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['file_format'] = isset($data['file_format']) ? $data['file_format'] : null;
        $this->container['include_variants'] = isset($data['include_variants']) ? $data['include_variants'] : null;
        $this->container['generate_by_cronjob'] = isset($data['generate_by_cronjob']) ? $data['generate_by_cronjob'] : null;
        $this->container['generated_at'] = isset($data['generated_at']) ? $data['generated_at'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['header_template'] = isset($data['header_template']) ? $data['header_template'] : null;
        $this->container['body_template'] = isset($data['body_template']) ? $data['body_template'] : null;
        $this->container['footer_template'] = isset($data['footer_template']) ? $data['footer_template'] : null;
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

        if ($this->container['product_stream_id'] === null) {
            $invalidProperties[] = "'product_stream_id' can't be null";
        }
        if ($this->container['storefront_sales_channel_id'] === null) {
            $invalidProperties[] = "'storefront_sales_channel_id' can't be null";
        }
        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if ($this->container['sales_channel_domain_id'] === null) {
            $invalidProperties[] = "'sales_channel_domain_id' can't be null";
        }
        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ($this->container['access_key'] === null) {
            $invalidProperties[] = "'access_key' can't be null";
        }
        if ($this->container['encoding'] === null) {
            $invalidProperties[] = "'encoding' can't be null";
        }
        if ($this->container['file_format'] === null) {
            $invalidProperties[] = "'file_format' can't be null";
        }
        if ($this->container['generate_by_cronjob'] === null) {
            $invalidProperties[] = "'generate_by_cronjob' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
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
     * Gets product_stream_id
     *
     * @return string
     */
    public function getProductStreamId()
    {
        return $this->container['product_stream_id'];
    }

    /**
     * Sets product_stream_id
     *
     * @param string $product_stream_id product_stream_id
     *
     * @return $this
     */
    public function setProductStreamId($product_stream_id)
    {
        $this->container['product_stream_id'] = $product_stream_id;

        return $this;
    }

    /**
     * Gets storefront_sales_channel_id
     *
     * @return string
     */
    public function getStorefrontSalesChannelId()
    {
        return $this->container['storefront_sales_channel_id'];
    }

    /**
     * Sets storefront_sales_channel_id
     *
     * @param string $storefront_sales_channel_id storefront_sales_channel_id
     *
     * @return $this
     */
    public function setStorefrontSalesChannelId($storefront_sales_channel_id)
    {
        $this->container['storefront_sales_channel_id'] = $storefront_sales_channel_id;

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
     * Gets sales_channel_domain_id
     *
     * @return string
     */
    public function getSalesChannelDomainId()
    {
        return $this->container['sales_channel_domain_id'];
    }

    /**
     * Sets sales_channel_domain_id
     *
     * @param string $sales_channel_domain_id sales_channel_domain_id
     *
     * @return $this
     */
    public function setSalesChannelDomainId($sales_channel_domain_id)
    {
        $this->container['sales_channel_domain_id'] = $sales_channel_domain_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string $encoding encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string $file_format file_format
     *
     * @return $this
     */
    public function setFileFormat($file_format)
    {
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets include_variants
     *
     * @return bool
     */
    public function getIncludeVariants()
    {
        return $this->container['include_variants'];
    }

    /**
     * Sets include_variants
     *
     * @param bool $include_variants include_variants
     *
     * @return $this
     */
    public function setIncludeVariants($include_variants)
    {
        $this->container['include_variants'] = $include_variants;

        return $this;
    }

    /**
     * Gets generate_by_cronjob
     *
     * @return bool
     */
    public function getGenerateByCronjob()
    {
        return $this->container['generate_by_cronjob'];
    }

    /**
     * Sets generate_by_cronjob
     *
     * @param bool $generate_by_cronjob generate_by_cronjob
     *
     * @return $this
     */
    public function setGenerateByCronjob($generate_by_cronjob)
    {
        $this->container['generate_by_cronjob'] = $generate_by_cronjob;

        return $this;
    }

    /**
     * Gets generated_at
     *
     * @return \DateTime
     */
    public function getGeneratedAt()
    {
        return $this->container['generated_at'];
    }

    /**
     * Sets generated_at
     *
     * @param \DateTime $generated_at generated_at
     *
     * @return $this
     */
    public function setGeneratedAt($generated_at)
    {
        $this->container['generated_at'] = $generated_at;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets header_template
     *
     * @return string
     */
    public function getHeaderTemplate()
    {
        return $this->container['header_template'];
    }

    /**
     * Sets header_template
     *
     * @param string $header_template header_template
     *
     * @return $this
     */
    public function setHeaderTemplate($header_template)
    {
        $this->container['header_template'] = $header_template;

        return $this;
    }

    /**
     * Gets body_template
     *
     * @return string
     */
    public function getBodyTemplate()
    {
        return $this->container['body_template'];
    }

    /**
     * Sets body_template
     *
     * @param string $body_template body_template
     *
     * @return $this
     */
    public function setBodyTemplate($body_template)
    {
        $this->container['body_template'] = $body_template;

        return $this;
    }

    /**
     * Gets footer_template
     *
     * @return string
     */
    public function getFooterTemplate()
    {
        return $this->container['footer_template'];
    }

    /**
     * Sets footer_template
     *
     * @param string $footer_template footer_template
     *
     * @return $this
     */
    public function setFooterTemplate($footer_template)
    {
        $this->container['footer_template'] = $footer_template;

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
