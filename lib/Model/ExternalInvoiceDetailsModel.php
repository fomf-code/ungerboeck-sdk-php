<?php
/**
 * ExternalInvoiceDetailsModel
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
 * ExternalInvoiceDetailsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalInvoiceDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalInvoiceDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'detail_id_ext' => 'int',
        'header_id_ext' => 'int',
        'item_code_external_ext' => 'string',
        'item_description_ext' => 'string',
        'exernal_quantity_ext' => 'double',
        'uom_ext' => 'string',
        'tax_rate_ext' => 'double',
        'item_tax_ext' => 'double',
        'amount_ext' => 'double',
        'amount_base_ext' => 'double',
        'amount_total_ext' => 'double',
        'amount_total_base_ext' => 'double',
        'other_ext' => 'string',
        'entered_by' => 'string',
        'entered_on' => '\DateTime',
        'changed_by' => 'string',
        'changed_on' => '\DateTime',
        'amount' => 'double',
        'quantity' => 'double',
        'po_number' => 'string',
        'po_line' => 'int',
        'reference' => 'string',
        'event' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'detail_id_ext' => 'int32',
        'header_id_ext' => 'int32',
        'item_code_external_ext' => null,
        'item_description_ext' => null,
        'exernal_quantity_ext' => 'double',
        'uom_ext' => null,
        'tax_rate_ext' => 'double',
        'item_tax_ext' => 'double',
        'amount_ext' => 'double',
        'amount_base_ext' => 'double',
        'amount_total_ext' => 'double',
        'amount_total_base_ext' => 'double',
        'other_ext' => null,
        'entered_by' => null,
        'entered_on' => 'date-time',
        'changed_by' => null,
        'changed_on' => 'date-time',
        'amount' => 'double',
        'quantity' => 'double',
        'po_number' => null,
        'po_line' => 'int32',
        'reference' => null,
        'event' => 'int32'
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
        'detail_id_ext' => 'DetailIDExt',
        'header_id_ext' => 'HeaderIDExt',
        'item_code_external_ext' => 'ItemCodeExternalExt',
        'item_description_ext' => 'ItemDescriptionExt',
        'exernal_quantity_ext' => 'ExernalQuantityExt',
        'uom_ext' => 'UOMExt',
        'tax_rate_ext' => 'TaxRateExt',
        'item_tax_ext' => 'ItemTaxExt',
        'amount_ext' => 'AmountExt',
        'amount_base_ext' => 'AmountBaseExt',
        'amount_total_ext' => 'AmountTotalExt',
        'amount_total_base_ext' => 'AmountTotalBaseExt',
        'other_ext' => 'OtherExt',
        'entered_by' => 'EnteredBy',
        'entered_on' => 'EnteredOn',
        'changed_by' => 'ChangedBy',
        'changed_on' => 'ChangedOn',
        'amount' => 'Amount',
        'quantity' => 'Quantity',
        'po_number' => 'PONumber',
        'po_line' => 'POLine',
        'reference' => 'Reference',
        'event' => 'Event'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detail_id_ext' => 'setDetailIdExt',
        'header_id_ext' => 'setHeaderIdExt',
        'item_code_external_ext' => 'setItemCodeExternalExt',
        'item_description_ext' => 'setItemDescriptionExt',
        'exernal_quantity_ext' => 'setExernalQuantityExt',
        'uom_ext' => 'setUomExt',
        'tax_rate_ext' => 'setTaxRateExt',
        'item_tax_ext' => 'setItemTaxExt',
        'amount_ext' => 'setAmountExt',
        'amount_base_ext' => 'setAmountBaseExt',
        'amount_total_ext' => 'setAmountTotalExt',
        'amount_total_base_ext' => 'setAmountTotalBaseExt',
        'other_ext' => 'setOtherExt',
        'entered_by' => 'setEnteredBy',
        'entered_on' => 'setEnteredOn',
        'changed_by' => 'setChangedBy',
        'changed_on' => 'setChangedOn',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'po_number' => 'setPoNumber',
        'po_line' => 'setPoLine',
        'reference' => 'setReference',
        'event' => 'setEvent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detail_id_ext' => 'getDetailIdExt',
        'header_id_ext' => 'getHeaderIdExt',
        'item_code_external_ext' => 'getItemCodeExternalExt',
        'item_description_ext' => 'getItemDescriptionExt',
        'exernal_quantity_ext' => 'getExernalQuantityExt',
        'uom_ext' => 'getUomExt',
        'tax_rate_ext' => 'getTaxRateExt',
        'item_tax_ext' => 'getItemTaxExt',
        'amount_ext' => 'getAmountExt',
        'amount_base_ext' => 'getAmountBaseExt',
        'amount_total_ext' => 'getAmountTotalExt',
        'amount_total_base_ext' => 'getAmountTotalBaseExt',
        'other_ext' => 'getOtherExt',
        'entered_by' => 'getEnteredBy',
        'entered_on' => 'getEnteredOn',
        'changed_by' => 'getChangedBy',
        'changed_on' => 'getChangedOn',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'po_number' => 'getPoNumber',
        'po_line' => 'getPoLine',
        'reference' => 'getReference',
        'event' => 'getEvent'
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
        $this->container['detail_id_ext'] = isset($data['detail_id_ext']) ? $data['detail_id_ext'] : null;
        $this->container['header_id_ext'] = isset($data['header_id_ext']) ? $data['header_id_ext'] : null;
        $this->container['item_code_external_ext'] = isset($data['item_code_external_ext']) ? $data['item_code_external_ext'] : null;
        $this->container['item_description_ext'] = isset($data['item_description_ext']) ? $data['item_description_ext'] : null;
        $this->container['exernal_quantity_ext'] = isset($data['exernal_quantity_ext']) ? $data['exernal_quantity_ext'] : null;
        $this->container['uom_ext'] = isset($data['uom_ext']) ? $data['uom_ext'] : null;
        $this->container['tax_rate_ext'] = isset($data['tax_rate_ext']) ? $data['tax_rate_ext'] : null;
        $this->container['item_tax_ext'] = isset($data['item_tax_ext']) ? $data['item_tax_ext'] : null;
        $this->container['amount_ext'] = isset($data['amount_ext']) ? $data['amount_ext'] : null;
        $this->container['amount_base_ext'] = isset($data['amount_base_ext']) ? $data['amount_base_ext'] : null;
        $this->container['amount_total_ext'] = isset($data['amount_total_ext']) ? $data['amount_total_ext'] : null;
        $this->container['amount_total_base_ext'] = isset($data['amount_total_base_ext']) ? $data['amount_total_base_ext'] : null;
        $this->container['other_ext'] = isset($data['other_ext']) ? $data['other_ext'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['po_line'] = isset($data['po_line']) ? $data['po_line'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['detail_id_ext'] === null) {
            $invalidProperties[] = "'detail_id_ext' can't be null";
        }
        if ($this->container['header_id_ext'] === null) {
            $invalidProperties[] = "'header_id_ext' can't be null";
        }
        if ($this->container['item_code_external_ext'] === null) {
            $invalidProperties[] = "'item_code_external_ext' can't be null";
        }
        if ($this->container['item_description_ext'] === null) {
            $invalidProperties[] = "'item_description_ext' can't be null";
        }
        if ($this->container['exernal_quantity_ext'] === null) {
            $invalidProperties[] = "'exernal_quantity_ext' can't be null";
        }
        if ($this->container['uom_ext'] === null) {
            $invalidProperties[] = "'uom_ext' can't be null";
        }
        if ($this->container['tax_rate_ext'] === null) {
            $invalidProperties[] = "'tax_rate_ext' can't be null";
        }
        if ($this->container['item_tax_ext'] === null) {
            $invalidProperties[] = "'item_tax_ext' can't be null";
        }
        if ($this->container['amount_ext'] === null) {
            $invalidProperties[] = "'amount_ext' can't be null";
        }
        if ($this->container['amount_base_ext'] === null) {
            $invalidProperties[] = "'amount_base_ext' can't be null";
        }
        if ($this->container['amount_total_ext'] === null) {
            $invalidProperties[] = "'amount_total_ext' can't be null";
        }
        if ($this->container['amount_total_base_ext'] === null) {
            $invalidProperties[] = "'amount_total_base_ext' can't be null";
        }
        if ($this->container['other_ext'] === null) {
            $invalidProperties[] = "'other_ext' can't be null";
        }
        if ($this->container['entered_by'] === null) {
            $invalidProperties[] = "'entered_by' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['po_number'] === null) {
            $invalidProperties[] = "'po_number' can't be null";
        }
        if ($this->container['po_line'] === null) {
            $invalidProperties[] = "'po_line' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
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
     * Gets detail_id_ext
     *
     * @return int
     */
    public function getDetailIdExt()
    {
        return $this->container['detail_id_ext'];
    }

    /**
     * Sets detail_id_ext
     *
     * @param int $detail_id_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EXT_INV_DTL_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDetailIdExt($detail_id_ext)
    {
        $this->container['detail_id_ext'] = $detail_id_ext;

        return $this;
    }

    /**
     * Gets header_id_ext
     *
     * @return int
     */
    public function getHeaderIdExt()
    {
        return $this->container['header_id_ext'];
    }

    /**
     * Sets header_id_ext
     *
     * @param int $header_id_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EXT_INV_HDR_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setHeaderIdExt($header_id_ext)
    {
        $this->container['header_id_ext'] = $header_id_ext;

        return $this;
    }

    /**
     * Gets item_code_external_ext
     *
     * @return string
     */
    public function getItemCodeExternalExt()
    {
        return $this->container['item_code_external_ext'];
    }

    /**
     * Sets item_code_external_ext
     *
     * @param string $item_code_external_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ITEM_CODE_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 15  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemCodeExternalExt($item_code_external_ext)
    {
        $this->container['item_code_external_ext'] = $item_code_external_ext;

        return $this;
    }

    /**
     * Gets item_description_ext
     *
     * @return string
     */
    public function getItemDescriptionExt()
    {
        return $this->container['item_description_ext'];
    }

    /**
     * Sets item_description_ext
     *
     * @param string $item_description_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> DESC_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemDescriptionExt($item_description_ext)
    {
        $this->container['item_description_ext'] = $item_description_ext;

        return $this;
    }

    /**
     * Gets exernal_quantity_ext
     *
     * @return double
     */
    public function getExernalQuantityExt()
    {
        return $this->container['exernal_quantity_ext'];
    }

    /**
     * Sets exernal_quantity_ext
     *
     * @param double $exernal_quantity_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> QTY_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setExernalQuantityExt($exernal_quantity_ext)
    {
        $this->container['exernal_quantity_ext'] = $exernal_quantity_ext;

        return $this;
    }

    /**
     * Gets uom_ext
     *
     * @return string
     */
    public function getUomExt()
    {
        return $this->container['uom_ext'];
    }

    /**
     * Sets uom_ext
     *
     * @param string $uom_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> UOM_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUomExt($uom_ext)
    {
        $this->container['uom_ext'] = $uom_ext;

        return $this;
    }

    /**
     * Gets tax_rate_ext
     *
     * @return double
     */
    public function getTaxRateExt()
    {
        return $this->container['tax_rate_ext'];
    }

    /**
     * Sets tax_rate_ext
     *
     * @param double $tax_rate_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> TAX_RATE_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxRateExt($tax_rate_ext)
    {
        $this->container['tax_rate_ext'] = $tax_rate_ext;

        return $this;
    }

    /**
     * Gets item_tax_ext
     *
     * @return double
     */
    public function getItemTaxExt()
    {
        return $this->container['item_tax_ext'];
    }

    /**
     * Sets item_tax_ext
     *
     * @param double $item_tax_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> TAX_AMT_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemTaxExt($item_tax_ext)
    {
        $this->container['item_tax_ext'] = $item_tax_ext;

        return $this;
    }

    /**
     * Gets amount_ext
     *
     * @return double
     */
    public function getAmountExt()
    {
        return $this->container['amount_ext'];
    }

    /**
     * Sets amount_ext
     *
     * @param double $amount_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AMT_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmountExt($amount_ext)
    {
        $this->container['amount_ext'] = $amount_ext;

        return $this;
    }

    /**
     * Gets amount_base_ext
     *
     * @return double
     */
    public function getAmountBaseExt()
    {
        return $this->container['amount_base_ext'];
    }

    /**
     * Sets amount_base_ext
     *
     * @param double $amount_base_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AMT_BASE_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmountBaseExt($amount_base_ext)
    {
        $this->container['amount_base_ext'] = $amount_base_ext;

        return $this;
    }

    /**
     * Gets amount_total_ext
     *
     * @return double
     */
    public function getAmountTotalExt()
    {
        return $this->container['amount_total_ext'];
    }

    /**
     * Sets amount_total_ext
     *
     * @param double $amount_total_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AMT_TOT_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmountTotalExt($amount_total_ext)
    {
        $this->container['amount_total_ext'] = $amount_total_ext;

        return $this;
    }

    /**
     * Gets amount_total_base_ext
     *
     * @return double
     */
    public function getAmountTotalBaseExt()
    {
        return $this->container['amount_total_base_ext'];
    }

    /**
     * Sets amount_total_base_ext
     *
     * @param double $amount_total_base_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AMT_TOT_BASE_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmountTotalBaseExt($amount_total_base_ext)
    {
        $this->container['amount_total_base_ext'] = $amount_total_base_ext;

        return $this;
    }

    /**
     * Gets other_ext
     *
     * @return string
     */
    public function getOtherExt()
    {
        return $this->container['other_ext'];
    }

    /**
     * Sets other_ext
     *
     * @param string $other_ext <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> OTHER_EXT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 50  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOtherExt($other_ext)
    {
        $this->container['other_ext'] = $other_ext;

        return $this;
    }

    /**
     * Gets entered_by
     *
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->container['entered_by'];
    }

    /**
     * Sets entered_by
     *
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredBy($entered_by)
    {
        $this->container['entered_by'] = $entered_by;

        return $this;
    }

    /**
     * Gets entered_on
     *
     * @return \DateTime
     */
    public function getEnteredOn()
    {
        return $this->container['entered_on'];
    }

    /**
     * Sets entered_on
     *
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

        return $this;
    }

    /**
     * Gets changed_by
     *
     * @return string
     */
    public function getChangedBy()
    {
        return $this->container['changed_by'];
    }

    /**
     * Sets changed_by
     *
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

        return $this;
    }

    /**
     * Gets changed_on
     *
     * @return \DateTime
     */
    public function getChangedOn()
    {
        return $this->container['changed_on'];
    }

    /**
     * Sets changed_on
     *
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AMT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> QTY  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return string
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param string $po_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO_REQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 20  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

        return $this;
    }

    /**
     * Gets po_line
     *
     * @return int
     */
    public function getPoLine()
    {
        return $this->container['po_line'];
    }

    /**
     * Sets po_line
     *
     * @param int $po_line <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> PO_LINE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPoLine($po_line)
    {
        $this->container['po_line'] = $po_line;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> REFERENCE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 30  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets event
     *
     * @return int
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param int $event <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EVENT_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

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

