<?php
/**
 * BulletinApprovalModel
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
 * BulletinApprovalModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulletinApprovalModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BulletinApprovalModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meeting_sequence_number' => 'int',
        'bulletin_sequence_number' => 'int',
        'sequence_number' => 'int',
        'bulletin_file_id' => 'string',
        'organization_code' => 'string',
        'approved_by' => 'string',
        'approved_on' => '\DateTime',
        'approval_action' => 'string',
        'approval_note' => 'string',
        'approval_level' => 'int',
        'approval_level_from' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meeting_sequence_number' => 'int32',
        'bulletin_sequence_number' => 'int32',
        'sequence_number' => 'int32',
        'bulletin_file_id' => null,
        'organization_code' => null,
        'approved_by' => null,
        'approved_on' => 'date-time',
        'approval_action' => null,
        'approval_note' => null,
        'approval_level' => 'int32',
        'approval_level_from' => 'int32'
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
        'meeting_sequence_number' => 'MeetingSequenceNumber',
        'bulletin_sequence_number' => 'BulletinSequenceNumber',
        'sequence_number' => 'SequenceNumber',
        'bulletin_file_id' => 'BulletinFileID',
        'organization_code' => 'OrganizationCode',
        'approved_by' => 'ApprovedBy',
        'approved_on' => 'ApprovedOn',
        'approval_action' => 'ApprovalAction',
        'approval_note' => 'ApprovalNote',
        'approval_level' => 'ApprovalLevel',
        'approval_level_from' => 'ApprovalLevelFrom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_sequence_number' => 'setMeetingSequenceNumber',
        'bulletin_sequence_number' => 'setBulletinSequenceNumber',
        'sequence_number' => 'setSequenceNumber',
        'bulletin_file_id' => 'setBulletinFileId',
        'organization_code' => 'setOrganizationCode',
        'approved_by' => 'setApprovedBy',
        'approved_on' => 'setApprovedOn',
        'approval_action' => 'setApprovalAction',
        'approval_note' => 'setApprovalNote',
        'approval_level' => 'setApprovalLevel',
        'approval_level_from' => 'setApprovalLevelFrom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_sequence_number' => 'getMeetingSequenceNumber',
        'bulletin_sequence_number' => 'getBulletinSequenceNumber',
        'sequence_number' => 'getSequenceNumber',
        'bulletin_file_id' => 'getBulletinFileId',
        'organization_code' => 'getOrganizationCode',
        'approved_by' => 'getApprovedBy',
        'approved_on' => 'getApprovedOn',
        'approval_action' => 'getApprovalAction',
        'approval_note' => 'getApprovalNote',
        'approval_level' => 'getApprovalLevel',
        'approval_level_from' => 'getApprovalLevelFrom'
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
        $this->container['meeting_sequence_number'] = isset($data['meeting_sequence_number']) ? $data['meeting_sequence_number'] : null;
        $this->container['bulletin_sequence_number'] = isset($data['bulletin_sequence_number']) ? $data['bulletin_sequence_number'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['bulletin_file_id'] = isset($data['bulletin_file_id']) ? $data['bulletin_file_id'] : null;
        $this->container['organization_code'] = isset($data['organization_code']) ? $data['organization_code'] : null;
        $this->container['approved_by'] = isset($data['approved_by']) ? $data['approved_by'] : null;
        $this->container['approved_on'] = isset($data['approved_on']) ? $data['approved_on'] : null;
        $this->container['approval_action'] = isset($data['approval_action']) ? $data['approval_action'] : null;
        $this->container['approval_note'] = isset($data['approval_note']) ? $data['approval_note'] : null;
        $this->container['approval_level'] = isset($data['approval_level']) ? $data['approval_level'] : null;
        $this->container['approval_level_from'] = isset($data['approval_level_from']) ? $data['approval_level_from'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['meeting_sequence_number'] === null) {
            $invalidProperties[] = "'meeting_sequence_number' can't be null";
        }
        if ($this->container['bulletin_sequence_number'] === null) {
            $invalidProperties[] = "'bulletin_sequence_number' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['bulletin_file_id'] === null) {
            $invalidProperties[] = "'bulletin_file_id' can't be null";
        }
        if ($this->container['organization_code'] === null) {
            $invalidProperties[] = "'organization_code' can't be null";
        }
        if ($this->container['approved_by'] === null) {
            $invalidProperties[] = "'approved_by' can't be null";
        }
        if ($this->container['approved_on'] === null) {
            $invalidProperties[] = "'approved_on' can't be null";
        }
        if ($this->container['approval_action'] === null) {
            $invalidProperties[] = "'approval_action' can't be null";
        }
        if ($this->container['approval_note'] === null) {
            $invalidProperties[] = "'approval_note' can't be null";
        }
        if ($this->container['approval_level'] === null) {
            $invalidProperties[] = "'approval_level' can't be null";
        }
        if ($this->container['approval_level_from'] === null) {
            $invalidProperties[] = "'approval_level_from' can't be null";
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
     * Gets meeting_sequence_number
     *
     * @return int
     */
    public function getMeetingSequenceNumber()
    {
        return $this->container['meeting_sequence_number'];
    }

    /**
     * Sets meeting_sequence_number
     *
     * @param int $meeting_sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_BUL_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setMeetingSequenceNumber($meeting_sequence_number)
    {
        $this->container['meeting_sequence_number'] = $meeting_sequence_number;

        return $this;
    }

    /**
     * Gets bulletin_sequence_number
     *
     * @return int
     */
    public function getBulletinSequenceNumber()
    {
        return $this->container['bulletin_sequence_number'];
    }

    /**
     * Sets bulletin_sequence_number
     *
     * @param int $bulletin_sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_BUL_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBulletinSequenceNumber($bulletin_sequence_number)
    {
        $this->container['bulletin_sequence_number'] = $bulletin_sequence_number;

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
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_SEQ_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets bulletin_file_id
     *
     * @return string
     */
    public function getBulletinFileId()
    {
        return $this->container['bulletin_file_id'];
    }

    /**
     * Sets bulletin_file_id
     *
     * @param string $bulletin_file_id <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_BUL_FILE_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBulletinFileId($bulletin_file_id)
    {
        $this->container['bulletin_file_id'] = $bulletin_file_id;

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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets approved_by
     *
     * @return string
     */
    public function getApprovedBy()
    {
        return $this->container['approved_by'];
    }

    /**
     * Sets approved_by
     *
     * @param string $approved_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_APPR_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovedBy($approved_by)
    {
        $this->container['approved_by'] = $approved_by;

        return $this;
    }

    /**
     * Gets approved_on
     *
     * @return \DateTime
     */
    public function getApprovedOn()
    {
        return $this->container['approved_on'];
    }

    /**
     * Sets approved_on
     *
     * @param \DateTime $approved_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_APPR_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovedOn($approved_on)
    {
        $this->container['approved_on'] = $approved_on;

        return $this;
    }

    /**
     * Gets approval_action
     *
     * @return string
     */
    public function getApprovalAction()
    {
        return $this->container['approval_action'];
    }

    /**
     * Sets approval_action
     *
     * @param string $approval_action <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_ACTION  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovalAction($approval_action)
    {
        $this->container['approval_action'] = $approval_action;

        return $this;
    }

    /**
     * Gets approval_note
     *
     * @return string
     */
    public function getApprovalNote()
    {
        return $this->container['approval_note'];
    }

    /**
     * Sets approval_note
     *
     * @param string $approval_note <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_COMMENT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 255  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovalNote($approval_note)
    {
        $this->container['approval_note'] = $approval_note;

        return $this;
    }

    /**
     * Gets approval_level
     *
     * @return int
     */
    public function getApprovalLevel()
    {
        return $this->container['approval_level'];
    }

    /**
     * Sets approval_level
     *
     * @param int $approval_level <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_APPR_LVL  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovalLevel($approval_level)
    {
        $this->container['approval_level'] = $approval_level;

        return $this;
    }

    /**
     * Gets approval_level_from
     *
     * @return int
     */
    public function getApprovalLevelFrom()
    {
        return $this->container['approval_level_from'];
    }

    /**
     * Sets approval_level_from
     *
     * @param int $approval_level_from <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC226_APPR_LVL_FROM <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApprovalLevelFrom($approval_level_from)
    {
        $this->container['approval_level_from'] = $approval_level_from;

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


