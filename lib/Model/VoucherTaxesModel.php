<?php
/**
 * VoucherTaxesModel
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
 * VoucherTaxesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherTaxesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherTaxesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => 'string',
        'voucher' => 'int',
        'sequence' => 'int',
        'tax_type' => 'string',
        'tax_resource' => 'string',
        'taxable_amount' => 'double',
        'tax_code' => 'double',
        'tax_withheld' => 'double',
        'rate' => 'double',
        'discount_tax_amount' => 'double',
        'discount_amount' => 'double',
        'gl_account' => 'string',
        'exclusive' => 'string',
        'tax_inclusive_amount' => 'double',
        'fc_invoice_amount_to_tax' => 'double',
        'fc_tax_amount' => 'double',
        'fc_tax_withheld_amount' => 'double',
        'fc_tax_amount_to_discount' => 'double',
        'fc_discount_amoount_to_tax' => 'double',
        'fc_invoice_amount_with_tax' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'voucher' => 'int32',
        'sequence' => 'int32',
        'tax_type' => null,
        'tax_resource' => null,
        'taxable_amount' => 'double',
        'tax_code' => 'double',
        'tax_withheld' => 'double',
        'rate' => 'double',
        'discount_tax_amount' => 'double',
        'discount_amount' => 'double',
        'gl_account' => null,
        'exclusive' => null,
        'tax_inclusive_amount' => 'double',
        'fc_invoice_amount_to_tax' => 'double',
        'fc_tax_amount' => 'double',
        'fc_tax_withheld_amount' => 'double',
        'fc_tax_amount_to_discount' => 'double',
        'fc_discount_amoount_to_tax' => 'double',
        'fc_invoice_amount_with_tax' => 'double'
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
        'voucher' => 'Voucher',
        'sequence' => 'Sequence',
        'tax_type' => 'TaxType',
        'tax_resource' => 'TaxResource',
        'taxable_amount' => 'TaxableAmount',
        'tax_code' => 'TaxCode',
        'tax_withheld' => 'TaxWithheld',
        'rate' => 'Rate',
        'discount_tax_amount' => 'DiscountTaxAmount',
        'discount_amount' => 'DiscountAmount',
        'gl_account' => 'GLAccount',
        'exclusive' => 'Exclusive',
        'tax_inclusive_amount' => 'TaxInclusiveAmount',
        'fc_invoice_amount_to_tax' => 'FCInvoiceAmountToTax',
        'fc_tax_amount' => 'FCTaxAmount',
        'fc_tax_withheld_amount' => 'FCTaxWithheldAmount',
        'fc_tax_amount_to_discount' => 'FCTaxAmountToDiscount',
        'fc_discount_amoount_to_tax' => 'FCDiscountAmoountToTax',
        'fc_invoice_amount_with_tax' => 'FCInvoiceAmountWithTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'voucher' => 'setVoucher',
        'sequence' => 'setSequence',
        'tax_type' => 'setTaxType',
        'tax_resource' => 'setTaxResource',
        'taxable_amount' => 'setTaxableAmount',
        'tax_code' => 'setTaxCode',
        'tax_withheld' => 'setTaxWithheld',
        'rate' => 'setRate',
        'discount_tax_amount' => 'setDiscountTaxAmount',
        'discount_amount' => 'setDiscountAmount',
        'gl_account' => 'setGlAccount',
        'exclusive' => 'setExclusive',
        'tax_inclusive_amount' => 'setTaxInclusiveAmount',
        'fc_invoice_amount_to_tax' => 'setFcInvoiceAmountToTax',
        'fc_tax_amount' => 'setFcTaxAmount',
        'fc_tax_withheld_amount' => 'setFcTaxWithheldAmount',
        'fc_tax_amount_to_discount' => 'setFcTaxAmountToDiscount',
        'fc_discount_amoount_to_tax' => 'setFcDiscountAmoountToTax',
        'fc_invoice_amount_with_tax' => 'setFcInvoiceAmountWithTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'voucher' => 'getVoucher',
        'sequence' => 'getSequence',
        'tax_type' => 'getTaxType',
        'tax_resource' => 'getTaxResource',
        'taxable_amount' => 'getTaxableAmount',
        'tax_code' => 'getTaxCode',
        'tax_withheld' => 'getTaxWithheld',
        'rate' => 'getRate',
        'discount_tax_amount' => 'getDiscountTaxAmount',
        'discount_amount' => 'getDiscountAmount',
        'gl_account' => 'getGlAccount',
        'exclusive' => 'getExclusive',
        'tax_inclusive_amount' => 'getTaxInclusiveAmount',
        'fc_invoice_amount_to_tax' => 'getFcInvoiceAmountToTax',
        'fc_tax_amount' => 'getFcTaxAmount',
        'fc_tax_withheld_amount' => 'getFcTaxWithheldAmount',
        'fc_tax_amount_to_discount' => 'getFcTaxAmountToDiscount',
        'fc_discount_amoount_to_tax' => 'getFcDiscountAmoountToTax',
        'fc_invoice_amount_with_tax' => 'getFcInvoiceAmountWithTax'
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
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tax_resource'] = isset($data['tax_resource']) ? $data['tax_resource'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_withheld'] = isset($data['tax_withheld']) ? $data['tax_withheld'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['discount_tax_amount'] = isset($data['discount_tax_amount']) ? $data['discount_tax_amount'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['gl_account'] = isset($data['gl_account']) ? $data['gl_account'] : null;
        $this->container['exclusive'] = isset($data['exclusive']) ? $data['exclusive'] : null;
        $this->container['tax_inclusive_amount'] = isset($data['tax_inclusive_amount']) ? $data['tax_inclusive_amount'] : null;
        $this->container['fc_invoice_amount_to_tax'] = isset($data['fc_invoice_amount_to_tax']) ? $data['fc_invoice_amount_to_tax'] : null;
        $this->container['fc_tax_amount'] = isset($data['fc_tax_amount']) ? $data['fc_tax_amount'] : null;
        $this->container['fc_tax_withheld_amount'] = isset($data['fc_tax_withheld_amount']) ? $data['fc_tax_withheld_amount'] : null;
        $this->container['fc_tax_amount_to_discount'] = isset($data['fc_tax_amount_to_discount']) ? $data['fc_tax_amount_to_discount'] : null;
        $this->container['fc_discount_amoount_to_tax'] = isset($data['fc_discount_amoount_to_tax']) ? $data['fc_discount_amoount_to_tax'] : null;
        $this->container['fc_invoice_amount_with_tax'] = isset($data['fc_invoice_amount_with_tax']) ? $data['fc_invoice_amount_with_tax'] : null;
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
        if ($this->container['voucher'] === null) {
            $invalidProperties[] = "'voucher' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        if ($this->container['tax_resource'] === null) {
            $invalidProperties[] = "'tax_resource' can't be null";
        }
        if ($this->container['taxable_amount'] === null) {
            $invalidProperties[] = "'taxable_amount' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['tax_withheld'] === null) {
            $invalidProperties[] = "'tax_withheld' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['discount_tax_amount'] === null) {
            $invalidProperties[] = "'discount_tax_amount' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['gl_account'] === null) {
            $invalidProperties[] = "'gl_account' can't be null";
        }
        if ($this->container['exclusive'] === null) {
            $invalidProperties[] = "'exclusive' can't be null";
        }
        if ($this->container['tax_inclusive_amount'] === null) {
            $invalidProperties[] = "'tax_inclusive_amount' can't be null";
        }
        if ($this->container['fc_invoice_amount_to_tax'] === null) {
            $invalidProperties[] = "'fc_invoice_amount_to_tax' can't be null";
        }
        if ($this->container['fc_tax_amount'] === null) {
            $invalidProperties[] = "'fc_tax_amount' can't be null";
        }
        if ($this->container['fc_tax_withheld_amount'] === null) {
            $invalidProperties[] = "'fc_tax_withheld_amount' can't be null";
        }
        if ($this->container['fc_tax_amount_to_discount'] === null) {
            $invalidProperties[] = "'fc_tax_amount_to_discount' can't be null";
        }
        if ($this->container['fc_discount_amoount_to_tax'] === null) {
            $invalidProperties[] = "'fc_discount_amoount_to_tax' can't be null";
        }
        if ($this->container['fc_invoice_amount_with_tax'] === null) {
            $invalidProperties[] = "'fc_invoice_amount_with_tax' can't be null";
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
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return int
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param int $voucher <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_VOUCHER  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_TYPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_resource
     *
     * @return string
     */
    public function getTaxResource()
    {
        return $this->container['tax_resource'];
    }

    /**
     * Sets tax_resource
     *
     * @param string $tax_resource <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxResource($tax_resource)
    {
        $this->container['tax_resource'] = $tax_resource;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return double
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param double $taxable_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_AMT_TO_TAX  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return double
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param double $tax_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_AMT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets tax_withheld
     *
     * @return double
     */
    public function getTaxWithheld()
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld
     *
     * @param double $tax_withheld <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_WITHHELD  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxWithheld($tax_withheld)
    {
        $this->container['tax_withheld'] = $tax_withheld;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_RATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 134  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets discount_tax_amount
     *
     * @return double
     */
    public function getDiscountTaxAmount()
    {
        return $this->container['discount_tax_amount'];
    }

    /**
     * Sets discount_tax_amount
     *
     * @param double $discount_tax_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_TAX_DISCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDiscountTaxAmount($discount_tax_amount)
    {
        $this->container['discount_tax_amount'] = $discount_tax_amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double $discount_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_DISCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets gl_account
     *
     * @return string
     */
    public function getGlAccount()
    {
        return $this->container['gl_account'];
    }

    /**
     * Sets gl_account
     *
     * @param string $gl_account <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_GL_ACCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 30  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setGlAccount($gl_account)
    {
        $this->container['gl_account'] = $gl_account;

        return $this;
    }

    /**
     * Gets exclusive
     *
     * @return string
     */
    public function getExclusive()
    {
        return $this->container['exclusive'];
    }

    /**
     * Sets exclusive
     *
     * @param string $exclusive <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_EXCLUSIVE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets tax_inclusive_amount
     *
     * @return double
     */
    public function getTaxInclusiveAmount()
    {
        return $this->container['tax_inclusive_amount'];
    }

    /**
     * Sets tax_inclusive_amount
     *
     * @param double $tax_inclusive_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_AMT_INC_TAX  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxInclusiveAmount($tax_inclusive_amount)
    {
        $this->container['tax_inclusive_amount'] = $tax_inclusive_amount;

        return $this;
    }

    /**
     * Gets fc_invoice_amount_to_tax
     *
     * @return double
     */
    public function getFcInvoiceAmountToTax()
    {
        return $this->container['fc_invoice_amount_to_tax'];
    }

    /**
     * Sets fc_invoice_amount_to_tax
     *
     * @param double $fc_invoice_amount_to_tax <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_AMT_TO_TAX <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcInvoiceAmountToTax($fc_invoice_amount_to_tax)
    {
        $this->container['fc_invoice_amount_to_tax'] = $fc_invoice_amount_to_tax;

        return $this;
    }

    /**
     * Gets fc_tax_amount
     *
     * @return double
     */
    public function getFcTaxAmount()
    {
        return $this->container['fc_tax_amount'];
    }

    /**
     * Sets fc_tax_amount
     *
     * @param double $fc_tax_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_TAX_AMT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcTaxAmount($fc_tax_amount)
    {
        $this->container['fc_tax_amount'] = $fc_tax_amount;

        return $this;
    }

    /**
     * Gets fc_tax_withheld_amount
     *
     * @return double
     */
    public function getFcTaxWithheldAmount()
    {
        return $this->container['fc_tax_withheld_amount'];
    }

    /**
     * Sets fc_tax_withheld_amount
     *
     * @param double $fc_tax_withheld_amount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_TAX_WITHHELD <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcTaxWithheldAmount($fc_tax_withheld_amount)
    {
        $this->container['fc_tax_withheld_amount'] = $fc_tax_withheld_amount;

        return $this;
    }

    /**
     * Gets fc_tax_amount_to_discount
     *
     * @return double
     */
    public function getFcTaxAmountToDiscount()
    {
        return $this->container['fc_tax_amount_to_discount'];
    }

    /**
     * Sets fc_tax_amount_to_discount
     *
     * @param double $fc_tax_amount_to_discount <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_TAX_DISCOUNT <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcTaxAmountToDiscount($fc_tax_amount_to_discount)
    {
        $this->container['fc_tax_amount_to_discount'] = $fc_tax_amount_to_discount;

        return $this;
    }

    /**
     * Gets fc_discount_amoount_to_tax
     *
     * @return double
     */
    public function getFcDiscountAmoountToTax()
    {
        return $this->container['fc_discount_amoount_to_tax'];
    }

    /**
     * Sets fc_discount_amoount_to_tax
     *
     * @param double $fc_discount_amoount_to_tax <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_DISCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcDiscountAmoountToTax($fc_discount_amoount_to_tax)
    {
        $this->container['fc_discount_amoount_to_tax'] = $fc_discount_amoount_to_tax;

        return $this;
    }

    /**
     * Gets fc_invoice_amount_with_tax
     *
     * @return double
     */
    public function getFcInvoiceAmountWithTax()
    {
        return $this->container['fc_invoice_amount_with_tax'];
    }

    /**
     * Sets fc_invoice_amount_with_tax
     *
     * @param double $fc_invoice_amount_with_tax <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP102_FC_AMT_INC_TAX <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcInvoiceAmountWithTax($fc_invoice_amount_with_tax)
    {
        $this->container['fc_invoice_amount_with_tax'] = $fc_invoice_amount_with_tax;

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


