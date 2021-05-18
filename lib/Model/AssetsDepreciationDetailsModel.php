<?php
/**
 * AssetsDepreciationDetailsModel
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
 * AssetsDepreciationDetailsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetsDepreciationDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetsDepreciationDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence' => 'int',
        'asset' => 'string',
        'revision' => 'int',
        'book' => 'string',
        'organization' => 'string',
        'fiscal_year' => 'int',
        'start_dat' => '\DateTime',
        'end_date' => '\DateTime',
        'book_value' => 'double',
        'beginning_depreciation' => 'double',
        'depreciation' => 'double',
        'ending_depreciation' => 'double',
        'bonus_depreciation' => 'double',
        'entered_by' => 'string',
        'entered_on' => '\DateTime',
        'changed_by' => 'string',
        'changed_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence' => 'int32',
        'asset' => null,
        'revision' => 'int32',
        'book' => null,
        'organization' => null,
        'fiscal_year' => 'int32',
        'start_dat' => 'date-time',
        'end_date' => 'date-time',
        'book_value' => 'double',
        'beginning_depreciation' => 'double',
        'depreciation' => 'double',
        'ending_depreciation' => 'double',
        'bonus_depreciation' => 'double',
        'entered_by' => null,
        'entered_on' => 'date-time',
        'changed_by' => null,
        'changed_on' => 'date-time'
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
        'sequence' => 'Sequence',
        'asset' => 'Asset',
        'revision' => 'Revision',
        'book' => 'Book',
        'organization' => 'Organization',
        'fiscal_year' => 'FiscalYear',
        'start_dat' => 'StartDat',
        'end_date' => 'EndDate',
        'book_value' => 'BookValue',
        'beginning_depreciation' => 'BeginningDepreciation',
        'depreciation' => 'Depreciation',
        'ending_depreciation' => 'EndingDepreciation',
        'bonus_depreciation' => 'BonusDepreciation',
        'entered_by' => 'EnteredBy',
        'entered_on' => 'EnteredOn',
        'changed_by' => 'ChangedBy',
        'changed_on' => 'ChangedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'asset' => 'setAsset',
        'revision' => 'setRevision',
        'book' => 'setBook',
        'organization' => 'setOrganization',
        'fiscal_year' => 'setFiscalYear',
        'start_dat' => 'setStartDat',
        'end_date' => 'setEndDate',
        'book_value' => 'setBookValue',
        'beginning_depreciation' => 'setBeginningDepreciation',
        'depreciation' => 'setDepreciation',
        'ending_depreciation' => 'setEndingDepreciation',
        'bonus_depreciation' => 'setBonusDepreciation',
        'entered_by' => 'setEnteredBy',
        'entered_on' => 'setEnteredOn',
        'changed_by' => 'setChangedBy',
        'changed_on' => 'setChangedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'asset' => 'getAsset',
        'revision' => 'getRevision',
        'book' => 'getBook',
        'organization' => 'getOrganization',
        'fiscal_year' => 'getFiscalYear',
        'start_dat' => 'getStartDat',
        'end_date' => 'getEndDate',
        'book_value' => 'getBookValue',
        'beginning_depreciation' => 'getBeginningDepreciation',
        'depreciation' => 'getDepreciation',
        'ending_depreciation' => 'getEndingDepreciation',
        'bonus_depreciation' => 'getBonusDepreciation',
        'entered_by' => 'getEnteredBy',
        'entered_on' => 'getEnteredOn',
        'changed_by' => 'getChangedBy',
        'changed_on' => 'getChangedOn'
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['book'] = isset($data['book']) ? $data['book'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['fiscal_year'] = isset($data['fiscal_year']) ? $data['fiscal_year'] : null;
        $this->container['start_dat'] = isset($data['start_dat']) ? $data['start_dat'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['book_value'] = isset($data['book_value']) ? $data['book_value'] : null;
        $this->container['beginning_depreciation'] = isset($data['beginning_depreciation']) ? $data['beginning_depreciation'] : null;
        $this->container['depreciation'] = isset($data['depreciation']) ? $data['depreciation'] : null;
        $this->container['ending_depreciation'] = isset($data['ending_depreciation']) ? $data['ending_depreciation'] : null;
        $this->container['bonus_depreciation'] = isset($data['bonus_depreciation']) ? $data['bonus_depreciation'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
        if ($this->container['revision'] === null) {
            $invalidProperties[] = "'revision' can't be null";
        }
        if ($this->container['book'] === null) {
            $invalidProperties[] = "'book' can't be null";
        }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['fiscal_year'] === null) {
            $invalidProperties[] = "'fiscal_year' can't be null";
        }
        if ($this->container['start_dat'] === null) {
            $invalidProperties[] = "'start_dat' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['book_value'] === null) {
            $invalidProperties[] = "'book_value' can't be null";
        }
        if ($this->container['beginning_depreciation'] === null) {
            $invalidProperties[] = "'beginning_depreciation' can't be null";
        }
        if ($this->container['depreciation'] === null) {
            $invalidProperties[] = "'depreciation' can't be null";
        }
        if ($this->container['ending_depreciation'] === null) {
            $invalidProperties[] = "'ending_depreciation' can't be null";
        }
        if ($this->container['bonus_depreciation'] === null) {
            $invalidProperties[] = "'bonus_depreciation' can't be null";
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
     * @param int $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_SEQUENCE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets asset
     *
     * @return string
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param string $asset <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_ASSET_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_REVISION  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets book
     *
     * @return string
     */
    public function getBook()
    {
        return $this->container['book'];
    }

    /**
     * Sets book
     *
     * @param string $book <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_BOOK_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBook($book)
    {
        $this->container['book'] = $book;

        return $this;
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
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets fiscal_year
     *
     * @return int
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     *
     * @param int $fiscal_year <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_FISCAL_YR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets start_dat
     *
     * @return \DateTime
     */
    public function getStartDat()
    {
        return $this->container['start_dat'];
    }

    /**
     * Sets start_dat
     *
     * @param \DateTime $start_dat <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_DEPR_START  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setStartDat($start_dat)
    {
        $this->container['start_dat'] = $start_dat;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_DEPR_END  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets book_value
     *
     * @return double
     */
    public function getBookValue()
    {
        return $this->container['book_value'];
    }

    /**
     * Sets book_value
     *
     * @param double $book_value <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_COST  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBookValue($book_value)
    {
        $this->container['book_value'] = $book_value;

        return $this;
    }

    /**
     * Gets beginning_depreciation
     *
     * @return double
     */
    public function getBeginningDepreciation()
    {
        return $this->container['beginning_depreciation'];
    }

    /**
     * Sets beginning_depreciation
     *
     * @param double $beginning_depreciation <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_BEG_ACCUM_DEPR <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBeginningDepreciation($beginning_depreciation)
    {
        $this->container['beginning_depreciation'] = $beginning_depreciation;

        return $this;
    }

    /**
     * Gets depreciation
     *
     * @return double
     */
    public function getDepreciation()
    {
        return $this->container['depreciation'];
    }

    /**
     * Sets depreciation
     *
     * @param double $depreciation <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_DEPR_AMT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDepreciation($depreciation)
    {
        $this->container['depreciation'] = $depreciation;

        return $this;
    }

    /**
     * Gets ending_depreciation
     *
     * @return double
     */
    public function getEndingDepreciation()
    {
        return $this->container['ending_depreciation'];
    }

    /**
     * Sets ending_depreciation
     *
     * @param double $ending_depreciation <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_END_ACCUM_DEPR <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEndingDepreciation($ending_depreciation)
    {
        $this->container['ending_depreciation'] = $ending_depreciation;

        return $this;
    }

    /**
     * Gets bonus_depreciation
     *
     * @return double
     */
    public function getBonusDepreciation()
    {
        return $this->container['bonus_depreciation'];
    }

    /**
     * Sets bonus_depreciation
     *
     * @param double $bonus_depreciation <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_BONUS_DEPR_AMT <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 132  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBonusDepreciation($bonus_depreciation)
    {
        $this->container['bonus_depreciation'] = $bonus_depreciation;

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
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> FX115_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

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


