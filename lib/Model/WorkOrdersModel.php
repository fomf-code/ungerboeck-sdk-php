<?php
/**
 * WorkOrdersModel
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
 * WorkOrdersModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkOrdersModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkOrdersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'order' => 'int',
        'department' => 'string',
        'event' => 'int',
        'function' => 'int',
        'assigned_to' => 'string',
        'issue_date' => '\DateTime',
        'issue_time' => '\DateTime',
        'printed_date' => '\DateTime',
        'printed_time' => '\DateTime',
        'printed_by' => 'string',
        'printed' => 'string',
        'status' => 'string',
        'revision_number' => 'int',
        'rush' => 'string',
        'entered_on' => '\DateTime',
        'entered_by' => 'string',
        'changed_on' => '\DateTime',
        'changed_by' => 'string',
        'due_date' => '\DateTime',
        'due_time' => '\DateTime',
        'completed_on' => '\DateTime',
        'completed_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'order' => 'int32',
        'department' => null,
        'event' => 'int32',
        'function' => 'int32',
        'assigned_to' => null,
        'issue_date' => 'date-time',
        'issue_time' => 'date-time',
        'printed_date' => 'date-time',
        'printed_time' => 'date-time',
        'printed_by' => null,
        'printed' => null,
        'status' => null,
        'revision_number' => 'int32',
        'rush' => null,
        'entered_on' => 'date-time',
        'entered_by' => null,
        'changed_on' => 'date-time',
        'changed_by' => null,
        'due_date' => 'date-time',
        'due_time' => 'date-time',
        'completed_on' => 'date-time',
        'completed_by' => null
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
        'order' => 'Order',
        'department' => 'Department',
        'event' => 'Event',
        'function' => 'Function',
        'assigned_to' => 'AssignedTo',
        'issue_date' => 'IssueDate',
        'issue_time' => 'IssueTime',
        'printed_date' => 'PrintedDate',
        'printed_time' => 'PrintedTime',
        'printed_by' => 'PrintedBy',
        'printed' => 'Printed',
        'status' => 'Status',
        'revision_number' => 'RevisionNumber',
        'rush' => 'Rush',
        'entered_on' => 'EnteredOn',
        'entered_by' => 'EnteredBy',
        'changed_on' => 'ChangedOn',
        'changed_by' => 'ChangedBy',
        'due_date' => 'DueDate',
        'due_time' => 'DueTime',
        'completed_on' => 'CompletedOn',
        'completed_by' => 'CompletedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'order' => 'setOrder',
        'department' => 'setDepartment',
        'event' => 'setEvent',
        'function' => 'setFunction',
        'assigned_to' => 'setAssignedTo',
        'issue_date' => 'setIssueDate',
        'issue_time' => 'setIssueTime',
        'printed_date' => 'setPrintedDate',
        'printed_time' => 'setPrintedTime',
        'printed_by' => 'setPrintedBy',
        'printed' => 'setPrinted',
        'status' => 'setStatus',
        'revision_number' => 'setRevisionNumber',
        'rush' => 'setRush',
        'entered_on' => 'setEnteredOn',
        'entered_by' => 'setEnteredBy',
        'changed_on' => 'setChangedOn',
        'changed_by' => 'setChangedBy',
        'due_date' => 'setDueDate',
        'due_time' => 'setDueTime',
        'completed_on' => 'setCompletedOn',
        'completed_by' => 'setCompletedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'order' => 'getOrder',
        'department' => 'getDepartment',
        'event' => 'getEvent',
        'function' => 'getFunction',
        'assigned_to' => 'getAssignedTo',
        'issue_date' => 'getIssueDate',
        'issue_time' => 'getIssueTime',
        'printed_date' => 'getPrintedDate',
        'printed_time' => 'getPrintedTime',
        'printed_by' => 'getPrintedBy',
        'printed' => 'getPrinted',
        'status' => 'getStatus',
        'revision_number' => 'getRevisionNumber',
        'rush' => 'getRush',
        'entered_on' => 'getEnteredOn',
        'entered_by' => 'getEnteredBy',
        'changed_on' => 'getChangedOn',
        'changed_by' => 'getChangedBy',
        'due_date' => 'getDueDate',
        'due_time' => 'getDueTime',
        'completed_on' => 'getCompletedOn',
        'completed_by' => 'getCompletedBy'
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
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['assigned_to'] = isset($data['assigned_to']) ? $data['assigned_to'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['issue_time'] = isset($data['issue_time']) ? $data['issue_time'] : null;
        $this->container['printed_date'] = isset($data['printed_date']) ? $data['printed_date'] : null;
        $this->container['printed_time'] = isset($data['printed_time']) ? $data['printed_time'] : null;
        $this->container['printed_by'] = isset($data['printed_by']) ? $data['printed_by'] : null;
        $this->container['printed'] = isset($data['printed']) ? $data['printed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['revision_number'] = isset($data['revision_number']) ? $data['revision_number'] : null;
        $this->container['rush'] = isset($data['rush']) ? $data['rush'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['due_time'] = isset($data['due_time']) ? $data['due_time'] : null;
        $this->container['completed_on'] = isset($data['completed_on']) ? $data['completed_on'] : null;
        $this->container['completed_by'] = isset($data['completed_by']) ? $data['completed_by'] : null;
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
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['department'] === null) {
            $invalidProperties[] = "'department' can't be null";
        }
        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
        }
        if ($this->container['function'] === null) {
            $invalidProperties[] = "'function' can't be null";
        }
        if ($this->container['assigned_to'] === null) {
            $invalidProperties[] = "'assigned_to' can't be null";
        }
        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['issue_time'] === null) {
            $invalidProperties[] = "'issue_time' can't be null";
        }
        if ($this->container['printed_date'] === null) {
            $invalidProperties[] = "'printed_date' can't be null";
        }
        if ($this->container['printed_time'] === null) {
            $invalidProperties[] = "'printed_time' can't be null";
        }
        if ($this->container['printed_by'] === null) {
            $invalidProperties[] = "'printed_by' can't be null";
        }
        if ($this->container['printed'] === null) {
            $invalidProperties[] = "'printed' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['revision_number'] === null) {
            $invalidProperties[] = "'revision_number' can't be null";
        }
        if ($this->container['rush'] === null) {
            $invalidProperties[] = "'rush' can't be null";
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
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['due_time'] === null) {
            $invalidProperties[] = "'due_time' can't be null";
        }
        if ($this->container['completed_on'] === null) {
            $invalidProperties[] = "'completed_on' can't be null";
        }
        if ($this->container['completed_by'] === null) {
            $invalidProperties[] = "'completed_by' can't be null";
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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ORD_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_DEPT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 6  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

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
     * @param int $event <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_EVT_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets function
     *
     * @return int
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param int $function <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_FUNC_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets assigned_to
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param string $assigned_to <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ACCOUNT_2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAssignedTo($assigned_to)
    {
        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime $issue_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ISSUE_DATE_ISO <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets issue_time
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->container['issue_time'];
    }

    /**
     * Sets issue_time
     *
     * @param \DateTime $issue_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ISSUE_TIME_ISO <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setIssueTime($issue_time)
    {
        $this->container['issue_time'] = $issue_time;

        return $this;
    }

    /**
     * Gets printed_date
     *
     * @return \DateTime
     */
    public function getPrintedDate()
    {
        return $this->container['printed_date'];
    }

    /**
     * Sets printed_date
     *
     * @param \DateTime $printed_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_PRT_DATE_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPrintedDate($printed_date)
    {
        $this->container['printed_date'] = $printed_date;

        return $this;
    }

    /**
     * Gets printed_time
     *
     * @return \DateTime
     */
    public function getPrintedTime()
    {
        return $this->container['printed_time'];
    }

    /**
     * Sets printed_time
     *
     * @param \DateTime $printed_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_PRT_TIME_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPrintedTime($printed_time)
    {
        $this->container['printed_time'] = $printed_time;

        return $this;
    }

    /**
     * Gets printed_by
     *
     * @return string
     */
    public function getPrintedBy()
    {
        return $this->container['printed_by'];
    }

    /**
     * Sets printed_by
     *
     * @param string $printed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_PRT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPrintedBy($printed_by)
    {
        $this->container['printed_by'] = $printed_by;

        return $this;
    }

    /**
     * Gets printed
     *
     * @return string
     */
    public function getPrinted()
    {
        return $this->container['printed'];
    }

    /**
     * Sets printed
     *
     * @param string $printed <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_PRT_STATUS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPrinted($printed)
    {
        $this->container['printed'] = $printed;

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
     * @param string $status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_STATUS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets revision_number
     *
     * @return int
     */
    public function getRevisionNumber()
    {
        return $this->container['revision_number'];
    }

    /**
     * Sets revision_number
     *
     * @param int $revision_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_PRT_REV_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRevisionNumber($revision_number)
    {
        $this->container['revision_number'] = $revision_number;

        return $this;
    }

    /**
     * Gets rush
     *
     * @return string
     */
    public function getRush()
    {
        return $this->container['rush'];
    }

    /**
     * Sets rush
     *
     * @param string $rush <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_STS_2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRush($rush)
    {
        $this->container['rush'] = $rush;

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
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ENT_DATE_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_UPD_DATE_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_DUE_DATE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets due_time
     *
     * @return \DateTime
     */
    public function getDueTime()
    {
        return $this->container['due_time'];
    }

    /**
     * Sets due_time
     *
     * @param \DateTime $due_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_DUE_TIME  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDueTime($due_time)
    {
        $this->container['due_time'] = $due_time;

        return $this;
    }

    /**
     * Gets completed_on
     *
     * @return \DateTime
     */
    public function getCompletedOn()
    {
        return $this->container['completed_on'];
    }

    /**
     * Sets completed_on
     *
     * @param \DateTime $completed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_CLOSE_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCompletedOn($completed_on)
    {
        $this->container['completed_on'] = $completed_on;

        return $this;
    }

    /**
     * Gets completed_by
     *
     * @return string
     */
    public function getCompletedBy()
    {
        return $this->container['completed_by'];
    }

    /**
     * Sets completed_by
     *
     * @param string $completed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> EV701_CLOSE_USER_ID <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCompletedBy($completed_by)
    {
        $this->container['completed_by'] = $completed_by;

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


