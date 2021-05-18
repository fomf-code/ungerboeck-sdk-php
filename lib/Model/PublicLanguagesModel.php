<?php
/**
 * PublicLanguagesModel
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
 * PublicLanguagesModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicLanguagesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicLanguagesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence' => 'int',
        'application_code' => 'string',
        'configuration_code' => 'string',
        'organization' => 'string',
        'language' => 'string',
        'dictionary' => 'int',
        'region' => 'string',
        'description_to_use' => 'string',
        'web_skin' => 'int',
        'default_language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence' => 'int32',
        'application_code' => null,
        'configuration_code' => null,
        'organization' => null,
        'language' => null,
        'dictionary' => 'int32',
        'region' => null,
        'description_to_use' => null,
        'web_skin' => 'int32',
        'default_language' => null
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
        'application_code' => 'ApplicationCode',
        'configuration_code' => 'ConfigurationCode',
        'organization' => 'Organization',
        'language' => 'Language',
        'dictionary' => 'Dictionary',
        'region' => 'Region',
        'description_to_use' => 'DescriptionToUse',
        'web_skin' => 'WebSkin',
        'default_language' => 'DefaultLanguage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'application_code' => 'setApplicationCode',
        'configuration_code' => 'setConfigurationCode',
        'organization' => 'setOrganization',
        'language' => 'setLanguage',
        'dictionary' => 'setDictionary',
        'region' => 'setRegion',
        'description_to_use' => 'setDescriptionToUse',
        'web_skin' => 'setWebSkin',
        'default_language' => 'setDefaultLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'application_code' => 'getApplicationCode',
        'configuration_code' => 'getConfigurationCode',
        'organization' => 'getOrganization',
        'language' => 'getLanguage',
        'dictionary' => 'getDictionary',
        'region' => 'getRegion',
        'description_to_use' => 'getDescriptionToUse',
        'web_skin' => 'getWebSkin',
        'default_language' => 'getDefaultLanguage'
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
        $this->container['application_code'] = isset($data['application_code']) ? $data['application_code'] : null;
        $this->container['configuration_code'] = isset($data['configuration_code']) ? $data['configuration_code'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['dictionary'] = isset($data['dictionary']) ? $data['dictionary'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['description_to_use'] = isset($data['description_to_use']) ? $data['description_to_use'] : null;
        $this->container['web_skin'] = isset($data['web_skin']) ? $data['web_skin'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
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
        if ($this->container['application_code'] === null) {
            $invalidProperties[] = "'application_code' can't be null";
        }
        if ($this->container['configuration_code'] === null) {
            $invalidProperties[] = "'configuration_code' can't be null";
        }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['dictionary'] === null) {
            $invalidProperties[] = "'dictionary' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['description_to_use'] === null) {
            $invalidProperties[] = "'description_to_use' can't be null";
        }
        if ($this->container['web_skin'] === null) {
            $invalidProperties[] = "'web_skin' can't be null";
        }
        if ($this->container['default_language'] === null) {
            $invalidProperties[] = "'default_language' can't be null";
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
     * @param int $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Indentifier - Use for GET and PUT URLs  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> MM630_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets application_code
     *
     * @return string
     */
    public function getApplicationCode()
    {
        return $this->container['application_code'];
    }

    /**
     * Sets application_code
     *
     * @param string $application_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_APP_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Add Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setApplicationCode($application_code)
    {
        $this->container['application_code'] = $application_code;

        return $this;
    }

    /**
     * Gets configuration_code
     *
     * @return string
     */
    public function getConfigurationCode()
    {
        return $this->container['configuration_code'];
    }

    /**
     * Sets configuration_code
     *
     * @param string $configuration_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_APP_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Add Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setConfigurationCode($configuration_code)
    {
        $this->container['configuration_code'] = $configuration_code;

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
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_LANG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets dictionary
     *
     * @return int
     */
    public function getDictionary()
    {
        return $this->container['dictionary'];
    }

    /**
     * Sets dictionary
     *
     * @param int $dictionary <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_DICT_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDictionary($dictionary)
    {
        $this->container['dictionary'] = $dictionary;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> MM630_REGION  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 11  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets description_to_use
     *
     * @return string
     */
    public function getDescriptionToUse()
    {
        return $this->container['description_to_use'];
    }

    /**
     * Sets description_to_use
     *
     * @param string $description_to_use <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Description field to be used for user entered data, like descriptions where you manually type in alternate description translations.  <div class=\"TooltipSpace\"></div> <span class=\"tooltipHeader\">Database column:</span> MM630_DESC_TO_USE <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDescriptionToUse($description_to_use)
    {
        $this->container['description_to_use'] = $description_to_use;

        return $this;
    }

    /**
     * Gets web_skin
     *
     * @return int
     */
    public function getWebSkin()
    {
        return $this->container['web_skin'];
    }

    /**
     * Sets web_skin
     *
     * @param int $web_skin <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Webskin to be used when this language is selected. This is useful when you have text in your images and you need to replace the image for each language.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> MM630_WEB_SKIN_ID  <div class=\"TooltipSpace\"></div> <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setWebSkin($web_skin)
    {
        $this->container['web_skin'] = $web_skin;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string $default_language <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Select the default language to be used when usersland on the site for the first time, using the base link that has no language information predefined.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span> MM630_DEFAULT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

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


