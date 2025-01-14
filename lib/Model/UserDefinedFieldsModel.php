<?php
/**
 * UserDefinedFieldsModel
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
 * UserDefinedFieldsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDefinedFieldsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserDefinedFieldsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'issue_opportunity_class' => 'string',
        'issue_opportunity_type' => 'string',
        'sequence_number' => 'int',
        'display_line' => 'int',
        'description' => 'string',
        'characters' => 'int',
        'decimals' => 'int',
        'type' => 'string',
        'bold' => 'string',
        'underline' => 'string',
        'italicized' => 'string',
        'color' => 'string',
        'database_field' => 'string',
        'required' => 'string',
        'box_height' => 'int',
        'validation_list' => 'int',
        'box_width' => 'int',
        'alternate_description1' => 'string',
        'alternate_description2' => 'string',
        'alternate_description3' => 'string',
        'alternate_description4' => 'string',
        'alternate_description5' => 'string',
        'parent_field' => 'int',
        'allow_multiple_values' => 'string',
        'label_above_field' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'issue_opportunity_class' => null,
        'issue_opportunity_type' => null,
        'sequence_number' => 'int32',
        'display_line' => 'int32',
        'description' => null,
        'characters' => 'int32',
        'decimals' => 'int32',
        'type' => null,
        'bold' => null,
        'underline' => null,
        'italicized' => null,
        'color' => null,
        'database_field' => null,
        'required' => null,
        'box_height' => 'int32',
        'validation_list' => 'int32',
        'box_width' => 'int32',
        'alternate_description1' => null,
        'alternate_description2' => null,
        'alternate_description3' => null,
        'alternate_description4' => null,
        'alternate_description5' => null,
        'parent_field' => 'int32',
        'allow_multiple_values' => null,
        'label_above_field' => 'int32'
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
        'issue_opportunity_class' => 'IssueOpportunityClass',
        'issue_opportunity_type' => 'IssueOpportunityType',
        'sequence_number' => 'SequenceNumber',
        'display_line' => 'DisplayLine',
        'description' => 'Description',
        'characters' => 'Characters',
        'decimals' => 'Decimals',
        'type' => 'Type',
        'bold' => 'Bold',
        'underline' => 'Underline',
        'italicized' => 'Italicized',
        'color' => 'Color',
        'database_field' => 'DatabaseField',
        'required' => 'Required',
        'box_height' => 'BoxHeight',
        'validation_list' => 'ValidationList',
        'box_width' => 'BoxWidth',
        'alternate_description1' => 'AlternateDescription1',
        'alternate_description2' => 'AlternateDescription2',
        'alternate_description3' => 'AlternateDescription3',
        'alternate_description4' => 'AlternateDescription4',
        'alternate_description5' => 'AlternateDescription5',
        'parent_field' => 'ParentField',
        'allow_multiple_values' => 'AllowMultipleValues',
        'label_above_field' => 'LabelAboveField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'issue_opportunity_class' => 'setIssueOpportunityClass',
        'issue_opportunity_type' => 'setIssueOpportunityType',
        'sequence_number' => 'setSequenceNumber',
        'display_line' => 'setDisplayLine',
        'description' => 'setDescription',
        'characters' => 'setCharacters',
        'decimals' => 'setDecimals',
        'type' => 'setType',
        'bold' => 'setBold',
        'underline' => 'setUnderline',
        'italicized' => 'setItalicized',
        'color' => 'setColor',
        'database_field' => 'setDatabaseField',
        'required' => 'setRequired',
        'box_height' => 'setBoxHeight',
        'validation_list' => 'setValidationList',
        'box_width' => 'setBoxWidth',
        'alternate_description1' => 'setAlternateDescription1',
        'alternate_description2' => 'setAlternateDescription2',
        'alternate_description3' => 'setAlternateDescription3',
        'alternate_description4' => 'setAlternateDescription4',
        'alternate_description5' => 'setAlternateDescription5',
        'parent_field' => 'setParentField',
        'allow_multiple_values' => 'setAllowMultipleValues',
        'label_above_field' => 'setLabelAboveField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'issue_opportunity_class' => 'getIssueOpportunityClass',
        'issue_opportunity_type' => 'getIssueOpportunityType',
        'sequence_number' => 'getSequenceNumber',
        'display_line' => 'getDisplayLine',
        'description' => 'getDescription',
        'characters' => 'getCharacters',
        'decimals' => 'getDecimals',
        'type' => 'getType',
        'bold' => 'getBold',
        'underline' => 'getUnderline',
        'italicized' => 'getItalicized',
        'color' => 'getColor',
        'database_field' => 'getDatabaseField',
        'required' => 'getRequired',
        'box_height' => 'getBoxHeight',
        'validation_list' => 'getValidationList',
        'box_width' => 'getBoxWidth',
        'alternate_description1' => 'getAlternateDescription1',
        'alternate_description2' => 'getAlternateDescription2',
        'alternate_description3' => 'getAlternateDescription3',
        'alternate_description4' => 'getAlternateDescription4',
        'alternate_description5' => 'getAlternateDescription5',
        'parent_field' => 'getParentField',
        'allow_multiple_values' => 'getAllowMultipleValues',
        'label_above_field' => 'getLabelAboveField'
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
        $this->container['issue_opportunity_class'] = isset($data['issue_opportunity_class']) ? $data['issue_opportunity_class'] : null;
        $this->container['issue_opportunity_type'] = isset($data['issue_opportunity_type']) ? $data['issue_opportunity_type'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['display_line'] = isset($data['display_line']) ? $data['display_line'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['italicized'] = isset($data['italicized']) ? $data['italicized'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['database_field'] = isset($data['database_field']) ? $data['database_field'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['box_height'] = isset($data['box_height']) ? $data['box_height'] : null;
        $this->container['validation_list'] = isset($data['validation_list']) ? $data['validation_list'] : null;
        $this->container['box_width'] = isset($data['box_width']) ? $data['box_width'] : null;
        $this->container['alternate_description1'] = isset($data['alternate_description1']) ? $data['alternate_description1'] : null;
        $this->container['alternate_description2'] = isset($data['alternate_description2']) ? $data['alternate_description2'] : null;
        $this->container['alternate_description3'] = isset($data['alternate_description3']) ? $data['alternate_description3'] : null;
        $this->container['alternate_description4'] = isset($data['alternate_description4']) ? $data['alternate_description4'] : null;
        $this->container['alternate_description5'] = isset($data['alternate_description5']) ? $data['alternate_description5'] : null;
        $this->container['parent_field'] = isset($data['parent_field']) ? $data['parent_field'] : null;
        $this->container['allow_multiple_values'] = isset($data['allow_multiple_values']) ? $data['allow_multiple_values'] : null;
        $this->container['label_above_field'] = isset($data['label_above_field']) ? $data['label_above_field'] : null;
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
        if ($this->container['issue_opportunity_class'] === null) {
            $invalidProperties[] = "'issue_opportunity_class' can't be null";
        }
        if ($this->container['issue_opportunity_type'] === null) {
            $invalidProperties[] = "'issue_opportunity_type' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['display_line'] === null) {
            $invalidProperties[] = "'display_line' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['characters'] === null) {
            $invalidProperties[] = "'characters' can't be null";
        }
        if ($this->container['decimals'] === null) {
            $invalidProperties[] = "'decimals' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['bold'] === null) {
            $invalidProperties[] = "'bold' can't be null";
        }
        if ($this->container['underline'] === null) {
            $invalidProperties[] = "'underline' can't be null";
        }
        if ($this->container['italicized'] === null) {
            $invalidProperties[] = "'italicized' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['database_field'] === null) {
            $invalidProperties[] = "'database_field' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
        if ($this->container['box_height'] === null) {
            $invalidProperties[] = "'box_height' can't be null";
        }
        if ($this->container['validation_list'] === null) {
            $invalidProperties[] = "'validation_list' can't be null";
        }
        if ($this->container['box_width'] === null) {
            $invalidProperties[] = "'box_width' can't be null";
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
        if ($this->container['parent_field'] === null) {
            $invalidProperties[] = "'parent_field' can't be null";
        }
        if ($this->container['allow_multiple_values'] === null) {
            $invalidProperties[] = "'allow_multiple_values' can't be null";
        }
        if ($this->container['label_above_field'] === null) {
            $invalidProperties[] = "'label_above_field' can't be null";
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
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets issue_opportunity_class
     *
     * @return string
     */
    public function getIssueOpportunityClass()
    {
        return $this->container['issue_opportunity_class'];
    }

    /**
     * Sets issue_opportunity_class
     *
     * @param string $issue_opportunity_class <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ISSUE_CLASS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setIssueOpportunityClass($issue_opportunity_class)
    {
        $this->container['issue_opportunity_class'] = $issue_opportunity_class;

        return $this;
    }

    /**
     * Gets issue_opportunity_type
     *
     * @return string
     */
    public function getIssueOpportunityType()
    {
        return $this->container['issue_opportunity_type'];
    }

    /**
     * Sets issue_opportunity_type
     *
     * @param string $issue_opportunity_type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ISSUE_TYPE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setIssueOpportunityType($issue_opportunity_type)
    {
        $this->container['issue_opportunity_type'] = $issue_opportunity_type;

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
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_SEQ_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets display_line
     *
     * @return int
     */
    public function getDisplayLine()
    {
        return $this->container['display_line'];
    }

    /**
     * Sets display_line
     *
     * @param int $display_line <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_LINE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDisplayLine($display_line)
    {
        $this->container['display_line'] = $display_line;

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
     * @param string $description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_LABEL_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return int
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param int $characters <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_FLD_LENGTH  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return int
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param int $decimals <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_FLD_DECIMALS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_FLD_FORMAT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return string
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param string $bold <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_BOLD  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets underline
     *
     * @return string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     *
     * @param string $underline <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_UNDERLINE <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets italicized
     *
     * @return string
     */
    public function getItalicized()
    {
        return $this->container['italicized'];
    }

    /**
     * Sets italicized
     *
     * @param string $italicized <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_ITALICS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItalicized($italicized)
    {
        $this->container['italicized'] = $italicized;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_COLOR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets database_field
     *
     * @return string
     */
    public function getDatabaseField()
    {
        return $this->container['database_field'];
    }

    /**
     * Sets database_field
     *
     * @param string $database_field <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_FLD_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 30  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDatabaseField($database_field)
    {
        $this->container['database_field'] = $database_field;

        return $this;
    }

    /**
     * Gets required
     *
     * @return string
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param string $required <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ENTRY_REQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets box_height
     *
     * @return int
     */
    public function getBoxHeight()
    {
        return $this->container['box_height'];
    }

    /**
     * Sets box_height
     *
     * @param int $box_height <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_POSITION <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBoxHeight($box_height)
    {
        $this->container['box_height'] = $box_height;

        return $this;
    }

    /**
     * Gets validation_list
     *
     * @return int
     */
    public function getValidationList()
    {
        return $this->container['validation_list'];
    }

    /**
     * Sets validation_list
     *
     * @param int $validation_list <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_REF_TABLE_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setValidationList($validation_list)
    {
        $this->container['validation_list'] = $validation_list;

        return $this;
    }

    /**
     * Gets box_width
     *
     * @return int
     */
    public function getBoxWidth()
    {
        return $this->container['box_width'];
    }

    /**
     * Sets box_width
     *
     * @param int $box_width <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_DISP_COLUMN  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setBoxWidth($box_width)
    {
        $this->container['box_width'] = $box_width;

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
     * @param string $alternate_description1 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALT_DESC_1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $alternate_description2 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALT_DESC_2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $alternate_description3 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALT_DESC_3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $alternate_description4 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALT_DESC_4  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
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
     * @param string $alternate_description5 <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALT_DESC_5  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 100  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAlternateDescription5($alternate_description5)
    {
        $this->container['alternate_description5'] = $alternate_description5;

        return $this;
    }

    /**
     * Gets parent_field
     *
     * @return int
     */
    public function getParentField()
    {
        return $this->container['parent_field'];
    }

    /**
     * Sets parent_field
     *
     * @param int $parent_field <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_PARENT_SEQ_NBR <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setParentField($parent_field)
    {
        $this->container['parent_field'] = $parent_field;

        return $this;
    }

    /**
     * Gets allow_multiple_values
     *
     * @return string
     */
    public function getAllowMultipleValues()
    {
        return $this->container['allow_multiple_values'];
    }

    /**
     * Sets allow_multiple_values
     *
     * @param string $allow_multiple_values <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_ALLOW_MULTI_SEL <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAllowMultipleValues($allow_multiple_values)
    {
        $this->container['allow_multiple_values'] = $allow_multiple_values;

        return $this;
    }

    /**
     * Gets label_above_field
     *
     * @return int
     */
    public function getLabelAboveField()
    {
        return $this->container['label_above_field'];
    }

    /**
     * Sets label_above_field
     *
     * @param int $label_above_field <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CR159_LABEL_ABOVE_FIELD <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLabelAboveField($label_above_field)
    {
        $this->container['label_above_field'] = $label_above_field;

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


