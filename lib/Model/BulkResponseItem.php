<?php
/**
 * BulkResponseItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ungerboeck API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FomF\Ungerboeck\Client\Model;

use \ArrayAccess;
use \FomF\Ungerboeck\Client\ObjectSerializer;

/**
 * BulkResponseItem Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkResponseItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BulkResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bulk_item_index' => 'int',
        'item_keys' => 'map[string,string]',
        'status' => 'int',
        'error_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bulk_item_index' => 'int32',
        'item_keys' => null,
        'status' => 'int32',
        'error_message' => null
    ];

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
        'bulk_item_index' => 'BulkItemIndex',
        'item_keys' => 'ItemKeys',
        'status' => 'Status',
        'error_message' => 'ErrorMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulk_item_index' => 'setBulkItemIndex',
        'item_keys' => 'setItemKeys',
        'status' => 'setStatus',
        'error_message' => 'setErrorMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulk_item_index' => 'getBulkItemIndex',
        'item_keys' => 'getItemKeys',
        'status' => 'getStatus',
        'error_message' => 'getErrorMessage'
    ];

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
        $this->container['bulk_item_index'] = isset($data['bulk_item_index']) ? $data['bulk_item_index'] : null;
        $this->container['item_keys'] = isset($data['item_keys']) ? $data['item_keys'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bulk_item_index'] === null) {
            $invalidProperties[] = "'bulk_item_index' can't be null";
        }
        if ($this->container['item_keys'] === null) {
            $invalidProperties[] = "'item_keys' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['error_message'] === null) {
            $invalidProperties[] = "'error_message' can't be null";
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
     * Gets bulk_item_index
     *
     * @return int
     */
    public function getBulkItemIndex()
    {
        return $this->container['bulk_item_index'];
    }

    /**
     * Sets bulk_item_index
     *
     * @param int $bulk_item_index <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Contains the user assigned sequence for tracking purposes, set in the BulkRequestModel.BulkItemIndex property.  If no index is assigned, this will be blank.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> N/A  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setBulkItemIndex($bulk_item_index)
    {
        $this->container['bulk_item_index'] = $bulk_item_index;

        return $this;
    }

    /**
     * Gets item_keys
     *
     * @return map[string,string]
     */
    public function getItemKeys()
    {
        return $this->container['item_keys'];
    }

    /**
     * Sets item_keys
     *
     * @param map[string,string] $item_keys <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Contains the list of properties and values respresenting the primary keys of the item, including the auto sequenced value (if such exists).  This will allow you to retrieve the object in future calls.  For example, Bookigs will have a key containing [organization code], [event id] and [sequence number]. <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> N/A  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setItemKeys($item_keys)
    {
        $this->container['item_keys'] = $item_keys;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Contains the HTTP status code of the individual item's result.  <div class=\"TooltipSpace\"></div> <span class=\"tooltipHeader\">Database column:</span> N/A  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> If the item didn't save, this will contain the error.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> N/A  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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


