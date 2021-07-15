<?php
/**
 * HudsonMasterComputer
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
 * HudsonMasterComputer Class Doc Comment
 *
 * @category Class
 * @package  App\DevOps\JenkinsAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class HudsonMasterComputer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HudsonMasterComputer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_class' => 'string',
        'display_name' => 'string',
        'executors' => '\App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputerexecutors[]',
        'icon' => 'string',
        'icon_class_name' => 'string',
        'idle' => 'bool',
        'jnlp_agent' => 'bool',
        'launch_supported' => 'bool',
        'load_statistics' => '\App\DevOps\JenkinsAPI\Client\Model\Label1',
        'manual_launch_allowed' => 'bool',
        'monitor_data' => '\App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputermonitorData',
        'num_executors' => 'int',
        'offline' => 'bool',
        'offline_cause' => 'string',
        'offline_cause_reason' => 'string',
        'temporarily_offline' => 'bool'
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
        'executors' => null,
        'icon' => null,
        'icon_class_name' => null,
        'idle' => null,
        'jnlp_agent' => null,
        'launch_supported' => null,
        'load_statistics' => null,
        'manual_launch_allowed' => null,
        'monitor_data' => null,
        'num_executors' => null,
        'offline' => null,
        'offline_cause' => null,
        'offline_cause_reason' => null,
        'temporarily_offline' => null
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
        'executors' => 'executors',
        'icon' => 'icon',
        'icon_class_name' => 'iconClassName',
        'idle' => 'idle',
        'jnlp_agent' => 'jnlpAgent',
        'launch_supported' => 'launchSupported',
        'load_statistics' => 'loadStatistics',
        'manual_launch_allowed' => 'manualLaunchAllowed',
        'monitor_data' => 'monitorData',
        'num_executors' => 'numExecutors',
        'offline' => 'offline',
        'offline_cause' => 'offlineCause',
        'offline_cause_reason' => 'offlineCauseReason',
        'temporarily_offline' => 'temporarilyOffline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_class' => 'setClass',
        'display_name' => 'setDisplayName',
        'executors' => 'setExecutors',
        'icon' => 'setIcon',
        'icon_class_name' => 'setIconClassName',
        'idle' => 'setIdle',
        'jnlp_agent' => 'setJnlpAgent',
        'launch_supported' => 'setLaunchSupported',
        'load_statistics' => 'setLoadStatistics',
        'manual_launch_allowed' => 'setManualLaunchAllowed',
        'monitor_data' => 'setMonitorData',
        'num_executors' => 'setNumExecutors',
        'offline' => 'setOffline',
        'offline_cause' => 'setOfflineCause',
        'offline_cause_reason' => 'setOfflineCauseReason',
        'temporarily_offline' => 'setTemporarilyOffline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_class' => 'getClass',
        'display_name' => 'getDisplayName',
        'executors' => 'getExecutors',
        'icon' => 'getIcon',
        'icon_class_name' => 'getIconClassName',
        'idle' => 'getIdle',
        'jnlp_agent' => 'getJnlpAgent',
        'launch_supported' => 'getLaunchSupported',
        'load_statistics' => 'getLoadStatistics',
        'manual_launch_allowed' => 'getManualLaunchAllowed',
        'monitor_data' => 'getMonitorData',
        'num_executors' => 'getNumExecutors',
        'offline' => 'getOffline',
        'offline_cause' => 'getOfflineCause',
        'offline_cause_reason' => 'getOfflineCauseReason',
        'temporarily_offline' => 'getTemporarilyOffline'
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
        $this->container['executors'] = $data['executors'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['icon_class_name'] = $data['icon_class_name'] ?? null;
        $this->container['idle'] = $data['idle'] ?? null;
        $this->container['jnlp_agent'] = $data['jnlp_agent'] ?? null;
        $this->container['launch_supported'] = $data['launch_supported'] ?? null;
        $this->container['load_statistics'] = $data['load_statistics'] ?? null;
        $this->container['manual_launch_allowed'] = $data['manual_launch_allowed'] ?? null;
        $this->container['monitor_data'] = $data['monitor_data'] ?? null;
        $this->container['num_executors'] = $data['num_executors'] ?? null;
        $this->container['offline'] = $data['offline'] ?? null;
        $this->container['offline_cause'] = $data['offline_cause'] ?? null;
        $this->container['offline_cause_reason'] = $data['offline_cause_reason'] ?? null;
        $this->container['temporarily_offline'] = $data['temporarily_offline'] ?? null;
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
     * Gets executors
     *
     * @return \App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputerexecutors[]|null
     */
    public function getExecutors()
    {
        return $this->container['executors'];
    }

    /**
     * Sets executors
     *
     * @param \App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputerexecutors[]|null $executors executors
     *
     * @return self
     */
    public function setExecutors($executors)
    {
        $this->container['executors'] = $executors;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets icon_class_name
     *
     * @return string|null
     */
    public function getIconClassName()
    {
        return $this->container['icon_class_name'];
    }

    /**
     * Sets icon_class_name
     *
     * @param string|null $icon_class_name icon_class_name
     *
     * @return self
     */
    public function setIconClassName($icon_class_name)
    {
        $this->container['icon_class_name'] = $icon_class_name;

        return $this;
    }

    /**
     * Gets idle
     *
     * @return bool|null
     */
    public function getIdle()
    {
        return $this->container['idle'];
    }

    /**
     * Sets idle
     *
     * @param bool|null $idle idle
     *
     * @return self
     */
    public function setIdle($idle)
    {
        $this->container['idle'] = $idle;

        return $this;
    }

    /**
     * Gets jnlp_agent
     *
     * @return bool|null
     */
    public function getJnlpAgent()
    {
        return $this->container['jnlp_agent'];
    }

    /**
     * Sets jnlp_agent
     *
     * @param bool|null $jnlp_agent jnlp_agent
     *
     * @return self
     */
    public function setJnlpAgent($jnlp_agent)
    {
        $this->container['jnlp_agent'] = $jnlp_agent;

        return $this;
    }

    /**
     * Gets launch_supported
     *
     * @return bool|null
     */
    public function getLaunchSupported()
    {
        return $this->container['launch_supported'];
    }

    /**
     * Sets launch_supported
     *
     * @param bool|null $launch_supported launch_supported
     *
     * @return self
     */
    public function setLaunchSupported($launch_supported)
    {
        $this->container['launch_supported'] = $launch_supported;

        return $this;
    }

    /**
     * Gets load_statistics
     *
     * @return \App\DevOps\JenkinsAPI\Client\Model\Label1|null
     */
    public function getLoadStatistics()
    {
        return $this->container['load_statistics'];
    }

    /**
     * Sets load_statistics
     *
     * @param \App\DevOps\JenkinsAPI\Client\Model\Label1|null $load_statistics load_statistics
     *
     * @return self
     */
    public function setLoadStatistics($load_statistics)
    {
        $this->container['load_statistics'] = $load_statistics;

        return $this;
    }

    /**
     * Gets manual_launch_allowed
     *
     * @return bool|null
     */
    public function getManualLaunchAllowed()
    {
        return $this->container['manual_launch_allowed'];
    }

    /**
     * Sets manual_launch_allowed
     *
     * @param bool|null $manual_launch_allowed manual_launch_allowed
     *
     * @return self
     */
    public function setManualLaunchAllowed($manual_launch_allowed)
    {
        $this->container['manual_launch_allowed'] = $manual_launch_allowed;

        return $this;
    }

    /**
     * Gets monitor_data
     *
     * @return \App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputermonitorData|null
     */
    public function getMonitorData()
    {
        return $this->container['monitor_data'];
    }

    /**
     * Sets monitor_data
     *
     * @param \App\DevOps\JenkinsAPI\Client\Model\HudsonMasterComputermonitorData|null $monitor_data monitor_data
     *
     * @return self
     */
    public function setMonitorData($monitor_data)
    {
        $this->container['monitor_data'] = $monitor_data;

        return $this;
    }

    /**
     * Gets num_executors
     *
     * @return int|null
     */
    public function getNumExecutors()
    {
        return $this->container['num_executors'];
    }

    /**
     * Sets num_executors
     *
     * @param int|null $num_executors num_executors
     *
     * @return self
     */
    public function setNumExecutors($num_executors)
    {
        $this->container['num_executors'] = $num_executors;

        return $this;
    }

    /**
     * Gets offline
     *
     * @return bool|null
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     *
     * @param bool|null $offline offline
     *
     * @return self
     */
    public function setOffline($offline)
    {
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets offline_cause
     *
     * @return string|null
     */
    public function getOfflineCause()
    {
        return $this->container['offline_cause'];
    }

    /**
     * Sets offline_cause
     *
     * @param string|null $offline_cause offline_cause
     *
     * @return self
     */
    public function setOfflineCause($offline_cause)
    {
        $this->container['offline_cause'] = $offline_cause;

        return $this;
    }

    /**
     * Gets offline_cause_reason
     *
     * @return string|null
     */
    public function getOfflineCauseReason()
    {
        return $this->container['offline_cause_reason'];
    }

    /**
     * Sets offline_cause_reason
     *
     * @param string|null $offline_cause_reason offline_cause_reason
     *
     * @return self
     */
    public function setOfflineCauseReason($offline_cause_reason)
    {
        $this->container['offline_cause_reason'] = $offline_cause_reason;

        return $this;
    }

    /**
     * Gets temporarily_offline
     *
     * @return bool|null
     */
    public function getTemporarilyOffline()
    {
        return $this->container['temporarily_offline'];
    }

    /**
     * Sets temporarily_offline
     *
     * @param bool|null $temporarily_offline temporarily_offline
     *
     * @return self
     */
    public function setTemporarilyOffline($temporarily_offline)
    {
        $this->container['temporarily_offline'] = $temporarily_offline;

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


