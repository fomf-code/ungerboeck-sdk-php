<?php
/**
 * EventProductsAndServicesModel
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
 * EventProductsAndServicesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventProductsAndServicesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventProductsAndServicesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'sequence_number' => 'int',
        'product_service_code' => 'string',
        'event_id' => 'int',
        'entered_date_time' => '\DateTime',
        'entered_by_user_id' => 'string',
        'last_changed_date_time' => '\DateTime',
        'last_changed_by_user_id' => 'string',
        'status' => 'string',
        'exhibitor_id' => 'int',
        'product_description' => 'string',
        'product_group' => 'string',
        'product_category' => 'string',
        'product_type' => 'string',
        'product_category_description' => 'string',
        'product_group_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'sequence_number' => 'int32',
        'product_service_code' => null,
        'event_id' => 'int32',
        'entered_date_time' => 'date-time',
        'entered_by_user_id' => null,
        'last_changed_date_time' => 'date-time',
        'last_changed_by_user_id' => null,
        'status' => null,
        'exhibitor_id' => 'int32',
        'product_description' => null,
        'product_group' => null,
        'product_category' => null,
        'product_type' => null,
        'product_category_description' => null,
        'product_group_description' => null
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
        'sequence_number' => 'SequenceNumber',
        'product_service_code' => 'ProductServiceCode',
        'event_id' => 'EventID',
        'entered_date_time' => 'EnteredDateTime',
        'entered_by_user_id' => 'EnteredByUserID',
        'last_changed_date_time' => 'LastChangedDateTime',
        'last_changed_by_user_id' => 'LastChangedByUserID',
        'status' => 'Status',
        'exhibitor_id' => 'ExhibitorID',
        'product_description' => 'ProductDescription',
        'product_group' => 'ProductGroup',
        'product_category' => 'ProductCategory',
        'product_type' => 'ProductType',
        'product_category_description' => 'ProductCategoryDescription',
        'product_group_description' => 'ProductGroupDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'sequence_number' => 'setSequenceNumber',
        'product_service_code' => 'setProductServiceCode',
        'event_id' => 'setEventId',
        'entered_date_time' => 'setEnteredDateTime',
        'entered_by_user_id' => 'setEnteredByUserId',
        'last_changed_date_time' => 'setLastChangedDateTime',
        'last_changed_by_user_id' => 'setLastChangedByUserId',
        'status' => 'setStatus',
        'exhibitor_id' => 'setExhibitorId',
        'product_description' => 'setProductDescription',
        'product_group' => 'setProductGroup',
        'product_category' => 'setProductCategory',
        'product_type' => 'setProductType',
        'product_category_description' => 'setProductCategoryDescription',
        'product_group_description' => 'setProductGroupDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'sequence_number' => 'getSequenceNumber',
        'product_service_code' => 'getProductServiceCode',
        'event_id' => 'getEventId',
        'entered_date_time' => 'getEnteredDateTime',
        'entered_by_user_id' => 'getEnteredByUserId',
        'last_changed_date_time' => 'getLastChangedDateTime',
        'last_changed_by_user_id' => 'getLastChangedByUserId',
        'status' => 'getStatus',
        'exhibitor_id' => 'getExhibitorId',
        'product_description' => 'getProductDescription',
        'product_group' => 'getProductGroup',
        'product_category' => 'getProductCategory',
        'product_type' => 'getProductType',
        'product_category_description' => 'getProductCategoryDescription',
        'product_group_description' => 'getProductGroupDescription'
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
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['product_service_code'] = isset($data['product_service_code']) ? $data['product_service_code'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['entered_date_time'] = isset($data['entered_date_time']) ? $data['entered_date_time'] : null;
        $this->container['entered_by_user_id'] = isset($data['entered_by_user_id']) ? $data['entered_by_user_id'] : null;
        $this->container['last_changed_date_time'] = isset($data['last_changed_date_time']) ? $data['last_changed_date_time'] : null;
        $this->container['last_changed_by_user_id'] = isset($data['last_changed_by_user_id']) ? $data['last_changed_by_user_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['exhibitor_id'] = isset($data['exhibitor_id']) ? $data['exhibitor_id'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['product_group'] = isset($data['product_group']) ? $data['product_group'] : null;
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['product_category_description'] = isset($data['product_category_description']) ? $data['product_category_description'] : null;
        $this->container['product_group_description'] = isset($data['product_group_description']) ? $data['product_group_description'] : null;
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
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['product_service_code'] === null) {
            $invalidProperties[] = "'product_service_code' can't be null";
        }
        if ($this->container['event_id'] === null) {
            $invalidProperties[] = "'event_id' can't be null";
        }
        if ($this->container['entered_date_time'] === null) {
            $invalidProperties[] = "'entered_date_time' can't be null";
        }
        if ($this->container['entered_by_user_id'] === null) {
            $invalidProperties[] = "'entered_by_user_id' can't be null";
        }
        if ($this->container['last_changed_date_time'] === null) {
            $invalidProperties[] = "'last_changed_date_time' can't be null";
        }
        if ($this->container['last_changed_by_user_id'] === null) {
            $invalidProperties[] = "'last_changed_by_user_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['exhibitor_id'] === null) {
            $invalidProperties[] = "'exhibitor_id' can't be null";
        }
        if ($this->container['product_description'] === null) {
            $invalidProperties[] = "'product_description' can't be null";
        }
        if ($this->container['product_group'] === null) {
            $invalidProperties[] = "'product_group' can't be null";
        }
        if ($this->container['product_category'] === null) {
            $invalidProperties[] = "'product_category' can't be null";
        }
        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['product_category_description'] === null) {
            $invalidProperties[] = "'product_category_description' can't be null";
        }
        if ($this->container['product_group_description'] === null) {
            $invalidProperties[] = "'product_group_description' can't be null";
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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

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
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_PROD_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets product_service_code
     *
     * @return string
     */
    public function getProductServiceCode()
    {
        return $this->container['product_service_code'];
    }

    /**
     * Sets product_service_code
     *
     * @param string $product_service_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_PROD_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 24  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Add Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductServiceCode($product_service_code)
    {
        $this->container['product_service_code'] = $product_service_code;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param int $event_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_EVT_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Add Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

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
     * @param \DateTime $entered_date_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $entered_by_user_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredByUserId($entered_by_user_id)
    {
        $this->container['entered_by_user_id'] = $entered_by_user_id;

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
     * @param \DateTime $last_changed_date_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $last_changed_by_user_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLastChangedByUserId($last_changed_by_user_id)
    {
        $this->container['last_changed_by_user_id'] = $last_changed_by_user_id;

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
     * @param string $status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_RCD_TYPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets exhibitor_id
     *
     * @return int
     */
    public function getExhibitorId()
    {
        return $this->container['exhibitor_id'];
    }

    /**
     * Sets exhibitor_id
     *
     * @param int $exhibitor_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV626_EXHIBITOR_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Add Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setExhibitorId($exhibitor_id)
    {
        $this->container['exhibitor_id'] = $exhibitor_id;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string $product_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_CR125_PROD_DESC_LONG  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 150  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets product_group
     *
     * @return string
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     *
     * @param string $product_group <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_CR125_PROD_GRP <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_CR125_PROD_CAT <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 4  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_CR125_PROD_TYPE <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_category_description
     *
     * @return string
     */
    public function getProductCategoryDescription()
    {
        return $this->container['product_category_description'];
    }

    /**
     * Sets product_category_description
     *
     * @param string $product_category_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_cPROD_CAT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductCategoryDescription($product_category_description)
    {
        $this->container['product_category_description'] = $product_category_description;

        return $this;
    }

    /**
     * Gets product_group_description
     *
     * @return string
     */
    public function getProductGroupDescription()
    {
        return $this->container['product_group_description'];
    }

    /**
     * Sets product_group_description
     *
     * @param string $product_group_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> Product_cPROD_GRP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setProductGroupDescription($product_group_description)
    {
        $this->container['product_group_description'] = $product_group_description;

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


