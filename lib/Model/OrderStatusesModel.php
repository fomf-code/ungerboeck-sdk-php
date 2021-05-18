<?php
/**
 * OrderStatusesModel
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
 * OrderStatusesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderStatusesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderStatusesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'description' => 'string',
        'weight' => 'string',
        'retire' => 'string',
        'background_color' => 'int',
        'class' => 'string',
        'entered_on' => '\DateTime',
        'changed_on' => '\DateTime',
        'text_color' => 'int',
        'item_status' => 'string',
        'update_exhibitor_statusto' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'description' => null,
        'weight' => null,
        'retire' => null,
        'background_color' => 'int32',
        'class' => null,
        'entered_on' => 'date-time',
        'changed_on' => 'date-time',
        'text_color' => 'int32',
        'item_status' => null,
        'update_exhibitor_statusto' => 'int32'
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
        'description' => 'Description',
        'weight' => 'Weight',
        'retire' => 'Retire',
        'background_color' => 'BackgroundColor',
        'class' => 'Class',
        'entered_on' => 'EnteredOn',
        'changed_on' => 'ChangedOn',
        'text_color' => 'TextColor',
        'item_status' => 'ItemStatus',
        'update_exhibitor_statusto' => 'UpdateExhibitorStatusto'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'weight' => 'setWeight',
        'retire' => 'setRetire',
        'background_color' => 'setBackgroundColor',
        'class' => 'setClass',
        'entered_on' => 'setEnteredOn',
        'changed_on' => 'setChangedOn',
        'text_color' => 'setTextColor',
        'item_status' => 'setItemStatus',
        'update_exhibitor_statusto' => 'setUpdateExhibitorStatusto'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'weight' => 'getWeight',
        'retire' => 'getRetire',
        'background_color' => 'getBackgroundColor',
        'class' => 'getClass',
        'entered_on' => 'getEnteredOn',
        'changed_on' => 'getChangedOn',
        'text_color' => 'getTextColor',
        'item_status' => 'getItemStatus',
        'update_exhibitor_statusto' => 'getUpdateExhibitorStatusto'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['retire'] = isset($data['retire']) ? $data['retire'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['text_color'] = isset($data['text_color']) ? $data['text_color'] : null;
        $this->container['item_status'] = isset($data['item_status']) ? $data['item_status'] : null;
        $this->container['update_exhibitor_statusto'] = isset($data['update_exhibitor_statusto']) ? $data['update_exhibitor_statusto'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['retire'] === null) {
            $invalidProperties[] = "'retire' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['text_color'] === null) {
            $invalidProperties[] = "'text_color' can't be null";
        }
        if ($this->container['item_status'] === null) {
            $invalidProperties[] = "'item_status' can't be null";
        }
        if ($this->container['update_exhibitor_statusto'] === null) {
            $invalidProperties[] = "'update_exhibitor_statusto' can't be null";
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
     * @param string $code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_ORD_STS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_STS_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 30  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_WEIGHT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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
     * @param string $retire <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_RETIRE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRetire($retire)
    {
        $this->container['retire'] = $retire;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return int
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param int $background_color <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_COLOR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_STS_CLASS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

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
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets text_color
     *
     * @return int
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     *
     * @param int $text_color <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_TEXT_COLOR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTextColor($text_color)
    {
        $this->container['text_color'] = $text_color;

        return $this;
    }

    /**
     * Gets item_status
     *
     * @return string
     */
    public function getItemStatus()
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status
     *
     * @param string $item_status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_ITEM_STS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemStatus($item_status)
    {
        $this->container['item_status'] = $item_status;

        return $this;
    }

    /**
     * Gets update_exhibitor_statusto
     *
     * @return int
     */
    public function getUpdateExhibitorStatusto()
    {
        return $this->container['update_exhibitor_statusto'];
    }

    /**
     * Sets update_exhibitor_statusto
     *
     * @param int $update_exhibitor_statusto <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> ER099_EXH_STATUS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUpdateExhibitorStatusto($update_exhibitor_statusto)
    {
        $this->container['update_exhibitor_statusto'] = $update_exhibitor_statusto;

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

