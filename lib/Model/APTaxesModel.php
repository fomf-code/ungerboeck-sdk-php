<?php
/**
 * APTaxesModel
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
 * APTaxesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APTaxesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APTaxesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'supplier_account_code' => 'string',
        'sequence_number' => 'int',
        'tax_resource_type' => 'string',
        'tax_resource_code' => 'string',
        'withholding' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'supplier_account_code' => null,
        'sequence_number' => 'int32',
        'tax_resource_type' => null,
        'tax_resource_code' => null,
        'withholding' => null
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
        'organization_code' => 'OrganizationCode',
        'supplier_account_code' => 'SupplierAccountCode',
        'sequence_number' => 'SequenceNumber',
        'tax_resource_type' => 'TaxResourceType',
        'tax_resource_code' => 'TaxResourceCode',
        'withholding' => 'Withholding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'supplier_account_code' => 'setSupplierAccountCode',
        'sequence_number' => 'setSequenceNumber',
        'tax_resource_type' => 'setTaxResourceType',
        'tax_resource_code' => 'setTaxResourceCode',
        'withholding' => 'setWithholding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'supplier_account_code' => 'getSupplierAccountCode',
        'sequence_number' => 'getSequenceNumber',
        'tax_resource_type' => 'getTaxResourceType',
        'tax_resource_code' => 'getTaxResourceCode',
        'withholding' => 'getWithholding'
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
        $this->container['organization_code'] = isset($data['organization_code']) ? $data['organization_code'] : null;
        $this->container['supplier_account_code'] = isset($data['supplier_account_code']) ? $data['supplier_account_code'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['tax_resource_type'] = isset($data['tax_resource_type']) ? $data['tax_resource_type'] : null;
        $this->container['tax_resource_code'] = isset($data['tax_resource_code']) ? $data['tax_resource_code'] : null;
        $this->container['withholding'] = isset($data['withholding']) ? $data['withholding'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization_code'] === null) {
            $invalidProperties[] = "'organization_code' can't be null";
        }
        if ($this->container['supplier_account_code'] === null) {
            $invalidProperties[] = "'supplier_account_code' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['tax_resource_type'] === null) {
            $invalidProperties[] = "'tax_resource_type' can't be null";
        }
        if ($this->container['tax_resource_code'] === null) {
            $invalidProperties[] = "'tax_resource_code' can't be null";
        }
        if ($this->container['withholding'] === null) {
            $invalidProperties[] = "'withholding' can't be null";
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
     * Gets organization_code
     *
     * @return string
     */
    public function getOrganizationCode()
    {
        return $this->container['organization_code'];
    }

    /**
     * Sets organization_code
     *
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets supplier_account_code
     *
     * @return string
     */
    public function getSupplierAccountCode()
    {
        return $this->container['supplier_account_code'];
    }

    /**
     * Sets supplier_account_code
     *
     * @param string $supplier_account_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_EXT_ACCT_CODE <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplierAccountCode($supplier_account_code)
    {
        $this->container['supplier_account_code'] = $supplier_account_code;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets tax_resource_type
     *
     * @return string
     */
    public function getTaxResourceType()
    {
        return $this->container['tax_resource_type'];
    }

    /**
     * Sets tax_resource_type
     *
     * @param string $tax_resource_type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_RES_TYPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxResourceType($tax_resource_type)
    {
        $this->container['tax_resource_type'] = $tax_resource_type;

        return $this;
    }

    /**
     * Gets tax_resource_code
     *
     * @return string
     */
    public function getTaxResourceCode()
    {
        return $this->container['tax_resource_code'];
    }

    /**
     * Sets tax_resource_code
     *
     * @param string $tax_resource_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_RES_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxResourceCode($tax_resource_code)
    {
        $this->container['tax_resource_code'] = $tax_resource_code;

        return $this;
    }

    /**
     * Gets withholding
     *
     * @return string
     */
    public function getWithholding()
    {
        return $this->container['withholding'];
    }

    /**
     * Sets withholding
     *
     * @param string $withholding <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP004_WITHHOLDING  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setWithholding($withholding)
    {
        $this->container['withholding'] = $withholding;

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


