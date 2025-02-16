<?php
/**
 * EventJobClassesModel
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
 * EventJobClassesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventJobClassesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventJobClassesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'organization_code' => 'string',
        'description' => 'string',
        'scope' => 'string',
        'sequence' => 'string',
        'entered_on' => '\DateTime',
        'entered_by_code' => 'string',
        'retire' => 'string',
        'changed_on' => '\DateTime',
        'changed_by_code' => 'string',
        'alternate_description1' => 'string',
        'alternate_description2' => 'string',
        'alternate_description3' => 'string',
        'alternate_description4' => 'string',
        'alternate_description5' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'organization_code' => null,
        'description' => null,
        'scope' => null,
        'sequence' => null,
        'entered_on' => 'date-time',
        'entered_by_code' => null,
        'retire' => null,
        'changed_on' => 'date-time',
        'changed_by_code' => null,
        'alternate_description1' => null,
        'alternate_description2' => null,
        'alternate_description3' => null,
        'alternate_description4' => null,
        'alternate_description5' => null
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
        'code' => 'Code',
        'organization_code' => 'OrganizationCode',
        'description' => 'Description',
        'scope' => 'Scope',
        'sequence' => 'Sequence',
        'entered_on' => 'EnteredOn',
        'entered_by_code' => 'EnteredByCode',
        'retire' => 'Retire',
        'changed_on' => 'ChangedOn',
        'changed_by_code' => 'ChangedByCode',
        'alternate_description1' => 'AlternateDescription1',
        'alternate_description2' => 'AlternateDescription2',
        'alternate_description3' => 'AlternateDescription3',
        'alternate_description4' => 'AlternateDescription4',
        'alternate_description5' => 'AlternateDescription5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'organization_code' => 'setOrganizationCode',
        'description' => 'setDescription',
        'scope' => 'setScope',
        'sequence' => 'setSequence',
        'entered_on' => 'setEnteredOn',
        'entered_by_code' => 'setEnteredByCode',
        'retire' => 'setRetire',
        'changed_on' => 'setChangedOn',
        'changed_by_code' => 'setChangedByCode',
        'alternate_description1' => 'setAlternateDescription1',
        'alternate_description2' => 'setAlternateDescription2',
        'alternate_description3' => 'setAlternateDescription3',
        'alternate_description4' => 'setAlternateDescription4',
        'alternate_description5' => 'setAlternateDescription5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'organization_code' => 'getOrganizationCode',
        'description' => 'getDescription',
        'scope' => 'getScope',
        'sequence' => 'getSequence',
        'entered_on' => 'getEnteredOn',
        'entered_by_code' => 'getEnteredByCode',
        'retire' => 'getRetire',
        'changed_on' => 'getChangedOn',
        'changed_by_code' => 'getChangedByCode',
        'alternate_description1' => 'getAlternateDescription1',
        'alternate_description2' => 'getAlternateDescription2',
        'alternate_description3' => 'getAlternateDescription3',
        'alternate_description4' => 'getAlternateDescription4',
        'alternate_description5' => 'getAlternateDescription5'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['organization_code'] = isset($data['organization_code']) ? $data['organization_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['entered_by_code'] = isset($data['entered_by_code']) ? $data['entered_by_code'] : null;
        $this->container['retire'] = isset($data['retire']) ? $data['retire'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['changed_by_code'] = isset($data['changed_by_code']) ? $data['changed_by_code'] : null;
        $this->container['alternate_description1'] = isset($data['alternate_description1']) ? $data['alternate_description1'] : null;
        $this->container['alternate_description2'] = isset($data['alternate_description2']) ? $data['alternate_description2'] : null;
        $this->container['alternate_description3'] = isset($data['alternate_description3']) ? $data['alternate_description3'] : null;
        $this->container['alternate_description4'] = isset($data['alternate_description4']) ? $data['alternate_description4'] : null;
        $this->container['alternate_description5'] = isset($data['alternate_description5']) ? $data['alternate_description5'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['organization_code'] === null) {
            $invalidProperties[] = "'organization_code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['entered_by_code'] === null) {
            $invalidProperties[] = "'entered_by_code' can't be null";
        }
        if ($this->container['retire'] === null) {
            $invalidProperties[] = "'retire' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['changed_by_code'] === null) {
            $invalidProperties[] = "'changed_by_code' can't be null";
        }
        if ($this->container['alternate_description1'] === null) {
            $invalidProperties[] = "'alternate_description1' can't be null";
        }
        if ($this->container['alternate_description2'] === null) {
            $invalidProperties[] = "'alternate_description2' can't be null";
        }
        if ($this->container['alternate_description3'] === null) {
            $invalidProperties[] = "'alternate_description3' can't be null";
        }
        if ($this->container['alternate_description4'] === null) {
            $invalidProperties[] = "'alternate_description4' can't be null";
        }
        if ($this->container['alternate_description5'] === null) {
            $invalidProperties[] = "'alternate_description5' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLASS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 5  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_SCOPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_SEQUENCE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

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
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

        return $this;
    }

    /**
     * Gets entered_by_code
     *
     * @return string
     */
    public function getEnteredByCode()
    {
        return $this->container['entered_by_code'];
    }

    /**
     * Sets entered_by_code
     *
     * @param string $entered_by_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredByCode($entered_by_code)
    {
        $this->container['entered_by_code'] = $entered_by_code;

        return $this;
    }

    /**
     * Gets retire
     *
     * @return string
     */
    public function getRetire()
    {
        return $this->container['retire'];
    }

    /**
     * Sets retire
     *
     * @param string $retire <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_RETIRE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRetire($retire)
    {
        $this->container['retire'] = $retire;

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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets changed_by_code
     *
     * @return string
     */
    public function getChangedByCode()
    {
        return $this->container['changed_by_code'];
    }

    /**
     * Sets changed_by_code
     *
     * @param string $changed_by_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedByCode($changed_by_code)
    {
        $this->container['changed_by_code'] = $changed_by_code;

        return $this;
    }

    /**
     * Gets alternate_description1
     *
     * @return string
     */
    public function getAlternateDescription1()
    {
        return $this->container['alternate_description1'];
    }

    /**
     * Sets alternate_description1
     *
     * @param string $alternate_description1 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC_ALT1 <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription1($alternate_description1)
    {
        $this->container['alternate_description1'] = $alternate_description1;

        return $this;
    }

    /**
     * Gets alternate_description2
     *
     * @return string
     */
    public function getAlternateDescription2()
    {
        return $this->container['alternate_description2'];
    }

    /**
     * Sets alternate_description2
     *
     * @param string $alternate_description2 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC_ALT2 <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription2($alternate_description2)
    {
        $this->container['alternate_description2'] = $alternate_description2;

        return $this;
    }

    /**
     * Gets alternate_description3
     *
     * @return string
     */
    public function getAlternateDescription3()
    {
        return $this->container['alternate_description3'];
    }

    /**
     * Sets alternate_description3
     *
     * @param string $alternate_description3 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC_ALT3 <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription3($alternate_description3)
    {
        $this->container['alternate_description3'] = $alternate_description3;

        return $this;
    }

    /**
     * Gets alternate_description4
     *
     * @return string
     */
    public function getAlternateDescription4()
    {
        return $this->container['alternate_description4'];
    }

    /**
     * Sets alternate_description4
     *
     * @param string $alternate_description4 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC_ALT4 <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription4($alternate_description4)
    {
        $this->container['alternate_description4'] = $alternate_description4;

        return $this;
    }

    /**
     * Gets alternate_description5
     *
     * @return string
     */
    public function getAlternateDescription5()
    {
        return $this->container['alternate_description5'];
    }

    /**
     * Sets alternate_description5
     *
     * @param string $alternate_description5 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV210_EVT_CLS_DESC_ALT5 <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 60  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription5($alternate_description5)
    {
        $this->container['alternate_description5'] = $alternate_description5;

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


