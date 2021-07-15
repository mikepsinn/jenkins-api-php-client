<?php
/**
 * PipelineImpl
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  App\DevOps\JenkinsAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Swaggy Jenkins
 *
 * Jenkins API clients generated from Swagger / Open API specification
 *
 * The version of the OpenAPI document: 1.1.1
 * Contact: blah@cliffano.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace App\DevOps\JenkinsAPI\Client\Model;

use \ArrayAccess;
use \App\DevOps\JenkinsAPI\Client\ObjectSerializer;

/**
 * PipelineImpl Class Doc Comment
 *
 * @category Class
 * @package  App\DevOps\JenkinsAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PipelineImpl implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PipelineImpl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_class' => 'string',
        'display_name' => 'string',
        'estimated_duration_in_millis' => 'int',
        'full_name' => 'string',
        'latest_run' => 'string',
        'name' => 'string',
        'organization' => 'string',
        'weather_score' => 'int',
        '_links' => '\App\DevOps\JenkinsAPI\Client\Model\PipelineImpllinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_class' => null,
        'display_name' => null,
        'estimated_duration_in_millis' => null,
        'full_name' => null,
        'latest_run' => null,
        'name' => null,
        'organization' => null,
        'weather_score' => null,
        '_links' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_class' => '_class',
        'display_name' => 'displayName',
        'estimated_duration_in_millis' => 'estimatedDurationInMillis',
        'full_name' => 'fullName',
        'latest_run' => 'latestRun',
        'name' => 'name',
        'organization' => 'organization',
        'weather_score' => 'weatherScore',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_class' => 'setClass',
        'display_name' => 'setDisplayName',
        'estimated_duration_in_millis' => 'setEstimatedDurationInMillis',
        'full_name' => 'setFullName',
        'latest_run' => 'setLatestRun',
        'name' => 'setName',
        'organization' => 'setOrganization',
        'weather_score' => 'setWeatherScore',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_class' => 'getClass',
        'display_name' => 'getDisplayName',
        'estimated_duration_in_millis' => 'getEstimatedDurationInMillis',
        'full_name' => 'getFullName',
        'latest_run' => 'getLatestRun',
        'name' => 'getName',
        'organization' => 'getOrganization',
        'weather_score' => 'getWeatherScore',
        '_links' => 'getLinks'
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
        return self::$openAPIModelName;
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
        $this->container['_class'] = $data['_class'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['estimated_duration_in_millis'] = $data['estimated_duration_in_millis'] ?? null;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['latest_run'] = $data['latest_run'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['weather_score'] = $data['weather_score'] ?? null;
        $this->container['_links'] = $data['_links'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets _class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['_class'];
    }

    /**
     * Sets _class
     *
     * @param string|null $_class _class
     *
     * @return self
     */
    public function setClass($_class)
    {
        $this->container['_class'] = $_class;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets estimated_duration_in_millis
     *
     * @return int|null
     */
    public function getEstimatedDurationInMillis()
    {
        return $this->container['estimated_duration_in_millis'];
    }

    /**
     * Sets estimated_duration_in_millis
     *
     * @param int|null $estimated_duration_in_millis estimated_duration_in_millis
     *
     * @return self
     */
    public function setEstimatedDurationInMillis($estimated_duration_in_millis)
    {
        $this->container['estimated_duration_in_millis'] = $estimated_duration_in_millis;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets latest_run
     *
     * @return string|null
     */
    public function getLatestRun()
    {
        return $this->container['latest_run'];
    }

    /**
     * Sets latest_run
     *
     * @param string|null $latest_run latest_run
     *
     * @return self
     */
    public function setLatestRun($latest_run)
    {
        $this->container['latest_run'] = $latest_run;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets weather_score
     *
     * @return int|null
     */
    public function getWeatherScore()
    {
        return $this->container['weather_score'];
    }

    /**
     * Sets weather_score
     *
     * @param int|null $weather_score weather_score
     *
     * @return self
     */
    public function setWeatherScore($weather_score)
    {
        $this->container['weather_score'] = $weather_score;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \App\DevOps\JenkinsAPI\Client\Model\PipelineImpllinks|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \App\DevOps\JenkinsAPI\Client\Model\PipelineImpllinks|null $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

