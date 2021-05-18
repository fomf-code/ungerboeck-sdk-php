<?php
/**
 * CurrencyRatesModel
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
 * CurrencyRatesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyRatesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CurrencyRatesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => 'string',
        'sequence_number' => 'int',
        'effective_date' => '\DateTime',
        'local_currency_rate' => 'double',
        'foreign_currency_rate' => 'double',
        'triangulation_currency_rate' => 'double',
        'exchange_rate_currency_code' => 'string',
        'exchange_rate_organization_code' => 'string',
        'fc_gain_main_account' => 'string',
        'fc_loss_main_account' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'sequence_number' => 'int32',
        'effective_date' => 'date-time',
        'local_currency_rate' => 'double',
        'foreign_currency_rate' => 'double',
        'triangulation_currency_rate' => 'double',
        'exchange_rate_currency_code' => null,
        'exchange_rate_organization_code' => null,
        'fc_gain_main_account' => null,
        'fc_loss_main_account' => null
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
        'currency_code' => 'CurrencyCode',
        'sequence_number' => 'SequenceNumber',
        'effective_date' => 'EffectiveDate',
        'local_currency_rate' => 'LocalCurrencyRate',
        'foreign_currency_rate' => 'ForeignCurrencyRate',
        'triangulation_currency_rate' => 'TriangulationCurrencyRate',
        'exchange_rate_currency_code' => 'ExchangeRateCurrencyCode',
        'exchange_rate_organization_code' => 'ExchangeRateOrganizationCode',
        'fc_gain_main_account' => 'FCGainMainAccount',
        'fc_loss_main_account' => 'FCLossMainAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'sequence_number' => 'setSequenceNumber',
        'effective_date' => 'setEffectiveDate',
        'local_currency_rate' => 'setLocalCurrencyRate',
        'foreign_currency_rate' => 'setForeignCurrencyRate',
        'triangulation_currency_rate' => 'setTriangulationCurrencyRate',
        'exchange_rate_currency_code' => 'setExchangeRateCurrencyCode',
        'exchange_rate_organization_code' => 'setExchangeRateOrganizationCode',
        'fc_gain_main_account' => 'setFcGainMainAccount',
        'fc_loss_main_account' => 'setFcLossMainAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'sequence_number' => 'getSequenceNumber',
        'effective_date' => 'getEffectiveDate',
        'local_currency_rate' => 'getLocalCurrencyRate',
        'foreign_currency_rate' => 'getForeignCurrencyRate',
        'triangulation_currency_rate' => 'getTriangulationCurrencyRate',
        'exchange_rate_currency_code' => 'getExchangeRateCurrencyCode',
        'exchange_rate_organization_code' => 'getExchangeRateOrganizationCode',
        'fc_gain_main_account' => 'getFcGainMainAccount',
        'fc_loss_main_account' => 'getFcLossMainAccount'
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
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['local_currency_rate'] = isset($data['local_currency_rate']) ? $data['local_currency_rate'] : null;
        $this->container['foreign_currency_rate'] = isset($data['foreign_currency_rate']) ? $data['foreign_currency_rate'] : null;
        $this->container['triangulation_currency_rate'] = isset($data['triangulation_currency_rate']) ? $data['triangulation_currency_rate'] : null;
        $this->container['exchange_rate_currency_code'] = isset($data['exchange_rate_currency_code']) ? $data['exchange_rate_currency_code'] : null;
        $this->container['exchange_rate_organization_code'] = isset($data['exchange_rate_organization_code']) ? $data['exchange_rate_organization_code'] : null;
        $this->container['fc_gain_main_account'] = isset($data['fc_gain_main_account']) ? $data['fc_gain_main_account'] : null;
        $this->container['fc_loss_main_account'] = isset($data['fc_loss_main_account']) ? $data['fc_loss_main_account'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['effective_date'] === null) {
            $invalidProperties[] = "'effective_date' can't be null";
        }
        if ($this->container['local_currency_rate'] === null) {
            $invalidProperties[] = "'local_currency_rate' can't be null";
        }
        if ($this->container['foreign_currency_rate'] === null) {
            $invalidProperties[] = "'foreign_currency_rate' can't be null";
        }
        if ($this->container['triangulation_currency_rate'] === null) {
            $invalidProperties[] = "'triangulation_currency_rate' can't be null";
        }
        if ($this->container['exchange_rate_currency_code'] === null) {
            $invalidProperties[] = "'exchange_rate_currency_code' can't be null";
        }
        if ($this->container['exchange_rate_organization_code'] === null) {
            $invalidProperties[] = "'exchange_rate_organization_code' can't be null";
        }
        if ($this->container['fc_gain_main_account'] === null) {
            $invalidProperties[] = "'fc_gain_main_account' can't be null";
        }
        if ($this->container['fc_loss_main_account'] === null) {
            $invalidProperties[] = "'fc_loss_main_account' can't be null";
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
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_EFFECTIVE_DATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets local_currency_rate
     *
     * @return double
     */
    public function getLocalCurrencyRate()
    {
        return $this->container['local_currency_rate'];
    }

    /**
     * Sets local_currency_rate
     *
     * @param double $local_currency_rate <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_RATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 125  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLocalCurrencyRate($local_currency_rate)
    {
        $this->container['local_currency_rate'] = $local_currency_rate;

        return $this;
    }

    /**
     * Gets foreign_currency_rate
     *
     * @return double
     */
    public function getForeignCurrencyRate()
    {
        return $this->container['foreign_currency_rate'];
    }

    /**
     * Sets foreign_currency_rate
     *
     * @param double $foreign_currency_rate <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_FOREIGN_RATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 125  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setForeignCurrencyRate($foreign_currency_rate)
    {
        $this->container['foreign_currency_rate'] = $foreign_currency_rate;

        return $this;
    }

    /**
     * Gets triangulation_currency_rate
     *
     * @return double
     */
    public function getTriangulationCurrencyRate()
    {
        return $this->container['triangulation_currency_rate'];
    }

    /**
     * Sets triangulation_currency_rate
     *
     * @param double $triangulation_currency_rate <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_TRIANGLE_RATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 125  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTriangulationCurrencyRate($triangulation_currency_rate)
    {
        $this->container['triangulation_currency_rate'] = $triangulation_currency_rate;

        return $this;
    }

    /**
     * Gets exchange_rate_currency_code
     *
     * @return string
     */
    public function getExchangeRateCurrencyCode()
    {
        return $this->container['exchange_rate_currency_code'];
    }

    /**
     * Sets exchange_rate_currency_code
     *
     * @param string $exchange_rate_currency_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_TO_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setExchangeRateCurrencyCode($exchange_rate_currency_code)
    {
        $this->container['exchange_rate_currency_code'] = $exchange_rate_currency_code;

        return $this;
    }

    /**
     * Gets exchange_rate_organization_code
     *
     * @return string
     */
    public function getExchangeRateOrganizationCode()
    {
        return $this->container['exchange_rate_organization_code'];
    }

    /**
     * Sets exchange_rate_organization_code
     *
     * @param string $exchange_rate_organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setExchangeRateOrganizationCode($exchange_rate_organization_code)
    {
        $this->container['exchange_rate_organization_code'] = $exchange_rate_organization_code;

        return $this;
    }

    /**
     * Gets fc_gain_main_account
     *
     * @return string
     */
    public function getFcGainMainAccount()
    {
        return $this->container['fc_gain_main_account'];
    }

    /**
     * Sets fc_gain_main_account
     *
     * @param string $fc_gain_main_account <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_FC_GAIN_MAIN_ACCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 15  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcGainMainAccount($fc_gain_main_account)
    {
        $this->container['fc_gain_main_account'] = $fc_gain_main_account;

        return $this;
    }

    /**
     * Gets fc_loss_main_account
     *
     * @return string
     */
    public function getFcLossMainAccount()
    {
        return $this->container['fc_loss_main_account'];
    }

    /**
     * Sets fc_loss_main_account
     *
     * @param string $fc_loss_main_account <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM021_FC_LOSS_MAIN_ACCOUNT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 15  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFcLossMainAccount($fc_loss_main_account)
    {
        $this->container['fc_loss_main_account'] = $fc_loss_main_account;

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


