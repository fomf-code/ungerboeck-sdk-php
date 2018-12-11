<?php
/**
 * AccountAffiliationsModel
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
 * Swagger Codegen version: 2.4.1-SNAPSHOT
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
 * AccountAffiliationsModel Class Doc Comment
 *
 * @category Class
 * @description This represents an affiliation attachment to an account
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountAffiliationsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountAffiliationsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'account_code' => 'string',
        'affiliation_code' => 'string',
        'last_changed_date_time' => '\DateTime',
        'last_changed_by_user_id' => 'string',
        'entered_date_time' => '\DateTime',
        'entered_by_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'account_code' => null,
        'affiliation_code' => null,
        'last_changed_date_time' => 'date-time',
        'last_changed_by_user_id' => null,
        'entered_date_time' => 'date-time',
        'entered_by_user_id' => null
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
        'account_code' => 'AccountCode',
        'affiliation_code' => 'AffiliationCode',
        'last_changed_date_time' => 'LastChangedDateTime',
        'last_changed_by_user_id' => 'LastChangedByUserID',
        'entered_date_time' => 'EnteredDateTime',
        'entered_by_user_id' => 'EnteredByUserID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'account_code' => 'setAccountCode',
        'affiliation_code' => 'setAffiliationCode',
        'last_changed_date_time' => 'setLastChangedDateTime',
        'last_changed_by_user_id' => 'setLastChangedByUserId',
        'entered_date_time' => 'setEnteredDateTime',
        'entered_by_user_id' => 'setEnteredByUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'account_code' => 'getAccountCode',
        'affiliation_code' => 'getAffiliationCode',
        'last_changed_date_time' => 'getLastChangedDateTime',
        'last_changed_by_user_id' => 'getLastChangedByUserId',
        'entered_date_time' => 'getEnteredDateTime',
        'entered_by_user_id' => 'getEnteredByUserId'
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
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['affiliation_code'] = isset($data['affiliation_code']) ? $data['affiliation_code'] : null;
        $this->container['last_changed_date_time'] = isset($data['last_changed_date_time']) ? $data['last_changed_date_time'] : null;
        $this->container['last_changed_by_user_id'] = isset($data['last_changed_by_user_id']) ? $data['last_changed_by_user_id'] : null;
        $this->container['entered_date_time'] = isset($data['entered_date_time']) ? $data['entered_date_time'] : null;
        $this->container['entered_by_user_id'] = isset($data['entered_by_user_id']) ? $data['entered_by_user_id'] : null;
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
        if ($this->container['account_code'] === null) {
            $invalidProperties[] = "'account_code' can't be null";
        }
        if ($this->container['affiliation_code'] === null) {
            $invalidProperties[] = "'affiliation_code' can't be null";
        }
        if ($this->container['last_changed_date_time'] === null) {
            $invalidProperties[] = "'last_changed_date_time' can't be null";
        }
        if ($this->container['last_changed_by_user_id'] === null) {
            $invalidProperties[] = "'last_changed_by_user_id' can't be null";
        }
        if ($this->container['entered_date_time'] === null) {
            $invalidProperties[] = "'entered_date_time' can't be null";
        }
        if ($this->container['entered_by_user_id'] === null) {
            $invalidProperties[] = "'entered_by_user_id' can't be null";
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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Indentifier - Use for GET and PUT URLs  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets account_code
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string $account_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Indentifier - Use for GET and PUT URLs  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_EXT_ACCT_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->container['account_code'] = $account_code;

        return $this;
    }

    /**
     * Gets affiliation_code
     *
     * @return string
     */
    public function getAffiliationCode()
    {
        return $this->container['affiliation_code'];
    }

    /**
     * Sets affiliation_code
     *
     * @param string $affiliation_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Indentifier - Use for GET and PUT URLs  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_AFFIL_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAffiliationCode($affiliation_code)
    {
        $this->container['affiliation_code'] = $affiliation_code;

        return $this;
    }

    /**
     * Gets last_changed_date_time
     *
     * @return \DateTime
     */
    public function getLastChangedDateTime()
    {
        return $this->container['last_changed_date_time'];
    }

    /**
     * Sets last_changed_date_time
     *
     * @param \DateTime $last_changed_date_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Automatically set by API.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_UPD_DATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLastChangedDateTime($last_changed_date_time)
    {
        $this->container['last_changed_date_time'] = $last_changed_date_time;

        return $this;
    }

    /**
     * Gets last_changed_by_user_id
     *
     * @return string
     */
    public function getLastChangedByUserId()
    {
        return $this->container['last_changed_by_user_id'];
    }

    /**
     * Sets last_changed_by_user_id
     *
     * @param string $last_changed_by_user_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Automatically set by API.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLastChangedByUserId($last_changed_by_user_id)
    {
        $this->container['last_changed_by_user_id'] = $last_changed_by_user_id;

        return $this;
    }

    /**
     * Gets entered_date_time
     *
     * @return \DateTime
     */
    public function getEnteredDateTime()
    {
        return $this->container['entered_date_time'];
    }

    /**
     * Sets entered_date_time
     *
     * @param \DateTime $entered_date_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Automatically set by API.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_ENT_DATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredDateTime($entered_date_time)
    {
        $this->container['entered_date_time'] = $entered_date_time;

        return $this;
    }

    /**
     * Gets entered_by_user_id
     *
     * @return string
     */
    public function getEnteredByUserId()
    {
        return $this->container['entered_by_user_id'];
    }

    /**
     * Sets entered_by_user_id
     *
     * @param string $entered_by_user_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Automatically set by API.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> EV897_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredByUserId($entered_by_user_id)
    {
        $this->container['entered_by_user_id'] = $entered_by_user_id;

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


