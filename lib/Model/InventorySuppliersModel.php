<?php
/**
 * InventorySuppliersModel
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
 * InventorySuppliersModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventorySuppliersModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventorySuppliersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => 'string',
        'inventory_item' => 'string',
        'supplier' => 'string',
        'preferred' => 'string',
        'vendor_item_code' => 'string',
        'supplier_minimum_units' => 'double',
        'supplier_maximum_units' => 'double',
        'supplier_um' => 'string',
        'um_conversion' => 'double',
        'unit_cost' => 'double',
        'supplier_item_description' => 'string',
        'lead_days' => 'int',
        'last_purchase_date' => '\DateTime',
        'status' => 'string',
        'entered_on' => '\DateTime',
        'entered_by' => 'string',
        'changed_on' => '\DateTime',
        'changed_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'inventory_item' => null,
        'supplier' => null,
        'preferred' => null,
        'vendor_item_code' => null,
        'supplier_minimum_units' => 'double',
        'supplier_maximum_units' => 'double',
        'supplier_um' => null,
        'um_conversion' => 'double',
        'unit_cost' => 'double',
        'supplier_item_description' => null,
        'lead_days' => 'int32',
        'last_purchase_date' => 'date-time',
        'status' => null,
        'entered_on' => 'date-time',
        'entered_by' => null,
        'changed_on' => 'date-time',
        'changed_by' => null
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
        'organization' => 'Organization',
        'inventory_item' => 'InventoryItem',
        'supplier' => 'Supplier',
        'preferred' => 'Preferred',
        'vendor_item_code' => 'VendorItemCode',
        'supplier_minimum_units' => 'SupplierMinimumUnits',
        'supplier_maximum_units' => 'SupplierMaximumUnits',
        'supplier_um' => 'SupplierUM',
        'um_conversion' => 'UMConversion',
        'unit_cost' => 'UnitCost',
        'supplier_item_description' => 'SupplierItemDescription',
        'lead_days' => 'LeadDays',
        'last_purchase_date' => 'LastPurchaseDate',
        'status' => 'Status',
        'entered_on' => 'EnteredOn',
        'entered_by' => 'EnteredBy',
        'changed_on' => 'ChangedOn',
        'changed_by' => 'ChangedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'inventory_item' => 'setInventoryItem',
        'supplier' => 'setSupplier',
        'preferred' => 'setPreferred',
        'vendor_item_code' => 'setVendorItemCode',
        'supplier_minimum_units' => 'setSupplierMinimumUnits',
        'supplier_maximum_units' => 'setSupplierMaximumUnits',
        'supplier_um' => 'setSupplierUm',
        'um_conversion' => 'setUmConversion',
        'unit_cost' => 'setUnitCost',
        'supplier_item_description' => 'setSupplierItemDescription',
        'lead_days' => 'setLeadDays',
        'last_purchase_date' => 'setLastPurchaseDate',
        'status' => 'setStatus',
        'entered_on' => 'setEnteredOn',
        'entered_by' => 'setEnteredBy',
        'changed_on' => 'setChangedOn',
        'changed_by' => 'setChangedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'inventory_item' => 'getInventoryItem',
        'supplier' => 'getSupplier',
        'preferred' => 'getPreferred',
        'vendor_item_code' => 'getVendorItemCode',
        'supplier_minimum_units' => 'getSupplierMinimumUnits',
        'supplier_maximum_units' => 'getSupplierMaximumUnits',
        'supplier_um' => 'getSupplierUm',
        'um_conversion' => 'getUmConversion',
        'unit_cost' => 'getUnitCost',
        'supplier_item_description' => 'getSupplierItemDescription',
        'lead_days' => 'getLeadDays',
        'last_purchase_date' => 'getLastPurchaseDate',
        'status' => 'getStatus',
        'entered_on' => 'getEnteredOn',
        'entered_by' => 'getEnteredBy',
        'changed_on' => 'getChangedOn',
        'changed_by' => 'getChangedBy'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['inventory_item'] = isset($data['inventory_item']) ? $data['inventory_item'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['preferred'] = isset($data['preferred']) ? $data['preferred'] : null;
        $this->container['vendor_item_code'] = isset($data['vendor_item_code']) ? $data['vendor_item_code'] : null;
        $this->container['supplier_minimum_units'] = isset($data['supplier_minimum_units']) ? $data['supplier_minimum_units'] : null;
        $this->container['supplier_maximum_units'] = isset($data['supplier_maximum_units']) ? $data['supplier_maximum_units'] : null;
        $this->container['supplier_um'] = isset($data['supplier_um']) ? $data['supplier_um'] : null;
        $this->container['um_conversion'] = isset($data['um_conversion']) ? $data['um_conversion'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['supplier_item_description'] = isset($data['supplier_item_description']) ? $data['supplier_item_description'] : null;
        $this->container['lead_days'] = isset($data['lead_days']) ? $data['lead_days'] : null;
        $this->container['last_purchase_date'] = isset($data['last_purchase_date']) ? $data['last_purchase_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['inventory_item'] === null) {
            $invalidProperties[] = "'inventory_item' can't be null";
        }
        if ($this->container['supplier'] === null) {
            $invalidProperties[] = "'supplier' can't be null";
        }
        if ($this->container['preferred'] === null) {
            $invalidProperties[] = "'preferred' can't be null";
        }
        if ($this->container['vendor_item_code'] === null) {
            $invalidProperties[] = "'vendor_item_code' can't be null";
        }
        if ($this->container['supplier_minimum_units'] === null) {
            $invalidProperties[] = "'supplier_minimum_units' can't be null";
        }
        if ($this->container['supplier_maximum_units'] === null) {
            $invalidProperties[] = "'supplier_maximum_units' can't be null";
        }
        if ($this->container['supplier_um'] === null) {
            $invalidProperties[] = "'supplier_um' can't be null";
        }
        if ($this->container['um_conversion'] === null) {
            $invalidProperties[] = "'um_conversion' can't be null";
        }
        if ($this->container['unit_cost'] === null) {
            $invalidProperties[] = "'unit_cost' can't be null";
        }
        if ($this->container['supplier_item_description'] === null) {
            $invalidProperties[] = "'supplier_item_description' can't be null";
        }
        if ($this->container['lead_days'] === null) {
            $invalidProperties[] = "'lead_days' can't be null";
        }
        if ($this->container['last_purchase_date'] === null) {
            $invalidProperties[] = "'last_purchase_date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['entered_by'] === null) {
            $invalidProperties[] = "'entered_by' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
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
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets inventory_item
     *
     * @return string
     */
    public function getInventoryItem()
    {
        return $this->container['inventory_item'];
    }

    /**
     * Sets inventory_item
     *
     * @param string $inventory_item <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_INV_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setInventoryItem($inventory_item)
    {
        $this->container['inventory_item'] = $inventory_item;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string $supplier <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_VENDOR_ACCT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets preferred
     *
     * @return string
     */
    public function getPreferred()
    {
        return $this->container['preferred'];
    }

    /**
     * Sets preferred
     *
     * @param string $preferred <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_VEND_PREF  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;

        return $this;
    }

    /**
     * Gets vendor_item_code
     *
     * @return string
     */
    public function getVendorItemCode()
    {
        return $this->container['vendor_item_code'];
    }

    /**
     * Sets vendor_item_code
     *
     * @param string $vendor_item_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_VEND_ITEM  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 24  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setVendorItemCode($vendor_item_code)
    {
        $this->container['vendor_item_code'] = $vendor_item_code;

        return $this;
    }

    /**
     * Gets supplier_minimum_units
     *
     * @return double
     */
    public function getSupplierMinimumUnits()
    {
        return $this->container['supplier_minimum_units'];
    }

    /**
     * Sets supplier_minimum_units
     *
     * @param double $supplier_minimum_units <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_MIN_QTY  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplierMinimumUnits($supplier_minimum_units)
    {
        $this->container['supplier_minimum_units'] = $supplier_minimum_units;

        return $this;
    }

    /**
     * Gets supplier_maximum_units
     *
     * @return double
     */
    public function getSupplierMaximumUnits()
    {
        return $this->container['supplier_maximum_units'];
    }

    /**
     * Sets supplier_maximum_units
     *
     * @param double $supplier_maximum_units <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_MAX_QTY  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplierMaximumUnits($supplier_maximum_units)
    {
        $this->container['supplier_maximum_units'] = $supplier_maximum_units;

        return $this;
    }

    /**
     * Gets supplier_um
     *
     * @return string
     */
    public function getSupplierUm()
    {
        return $this->container['supplier_um'];
    }

    /**
     * Sets supplier_um
     *
     * @param string $supplier_um <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_UOM  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplierUm($supplier_um)
    {
        $this->container['supplier_um'] = $supplier_um;

        return $this;
    }

    /**
     * Gets um_conversion
     *
     * @return double
     */
    public function getUmConversion()
    {
        return $this->container['um_conversion'];
    }

    /**
     * Sets um_conversion
     *
     * @param double $um_conversion <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_UNITS_PUR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUmConversion($um_conversion)
    {
        $this->container['um_conversion'] = $um_conversion;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return double
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param double $unit_cost <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_UNIT_COST  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets supplier_item_description
     *
     * @return string
     */
    public function getSupplierItemDescription()
    {
        return $this->container['supplier_item_description'];
    }

    /**
     * Sets supplier_item_description
     *
     * @param string $supplier_item_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_VEND_ITEM_DESC <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 255  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplierItemDescription($supplier_item_description)
    {
        $this->container['supplier_item_description'] = $supplier_item_description;

        return $this;
    }

    /**
     * Gets lead_days
     *
     * @return int
     */
    public function getLeadDays()
    {
        return $this->container['lead_days'];
    }

    /**
     * Sets lead_days
     *
     * @param int $lead_days <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_LEAD_DAYS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLeadDays($lead_days)
    {
        $this->container['lead_days'] = $lead_days;

        return $this;
    }

    /**
     * Gets last_purchase_date
     *
     * @return \DateTime
     */
    public function getLastPurchaseDate()
    {
        return $this->container['last_purchase_date'];
    }

    /**
     * Sets last_purchase_date
     *
     * @param \DateTime $last_purchase_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_LAST_PURCHASE <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLastPurchaseDate($last_purchase_date)
    {
        $this->container['last_purchase_date'] = $last_purchase_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_STATUS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_ENT_TIMESTAMP <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

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
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredBy($entered_by)
    {
        $this->container['entered_by'] = $entered_by;

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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_UPD_TIMESTAMP <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

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
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> IN500_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

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


