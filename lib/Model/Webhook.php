<?php
/**
 * Webhook
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform. It allows you to query your account, set up webhooks, send messages and buy phone numbers.
 *
 * OpenAPI spec version: 1.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Karix\Model;

use \ArrayAccess;
use \Karix\ObjectSerializer;

/**
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Webhook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sms_notification_url' => 'string',
        'sms_notification_method' => 'string',
        'sms_notification_fallback_url' => 'string',
        'sms_notification_fallback_method' => 'string',
        'name' => 'string',
        'uid' => 'string',
        'created_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'account_uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sms_notification_url' => null,
        'sms_notification_method' => null,
        'sms_notification_fallback_url' => null,
        'sms_notification_fallback_method' => null,
        'name' => null,
        'uid' => null,
        'created_time' => 'date-time',
        'updated_time' => 'date-time',
        'account_uid' => null
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
        'sms_notification_url' => 'sms_notification_url',
        'sms_notification_method' => 'sms_notification_method',
        'sms_notification_fallback_url' => 'sms_notification_fallback_url',
        'sms_notification_fallback_method' => 'sms_notification_fallback_method',
        'name' => 'name',
        'uid' => 'uid',
        'created_time' => 'created_time',
        'updated_time' => 'updated_time',
        'account_uid' => 'account_uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sms_notification_url' => 'setSmsNotificationUrl',
        'sms_notification_method' => 'setSmsNotificationMethod',
        'sms_notification_fallback_url' => 'setSmsNotificationFallbackUrl',
        'sms_notification_fallback_method' => 'setSmsNotificationFallbackMethod',
        'name' => 'setName',
        'uid' => 'setUid',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'account_uid' => 'setAccountUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sms_notification_url' => 'getSmsNotificationUrl',
        'sms_notification_method' => 'getSmsNotificationMethod',
        'sms_notification_fallback_url' => 'getSmsNotificationFallbackUrl',
        'sms_notification_fallback_method' => 'getSmsNotificationFallbackMethod',
        'name' => 'getName',
        'uid' => 'getUid',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'account_uid' => 'getAccountUid'
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
        $this->container['sms_notification_url'] = isset($data['sms_notification_url']) ? $data['sms_notification_url'] : null;
        $this->container['sms_notification_method'] = isset($data['sms_notification_method']) ? $data['sms_notification_method'] : null;
        $this->container['sms_notification_fallback_url'] = isset($data['sms_notification_fallback_url']) ? $data['sms_notification_fallback_url'] : null;
        $this->container['sms_notification_fallback_method'] = isset($data['sms_notification_fallback_method']) ? $data['sms_notification_fallback_method'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['account_uid'] = isset($data['account_uid']) ? $data['account_uid'] : null;
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
     * Gets sms_notification_url
     *
     * @return string
     */
    public function getSmsNotificationUrl()
    {
        return $this->container['sms_notification_url'];
    }

    /**
     * Sets sms_notification_url
     *
     * @param string $sms_notification_url API url to notify in case of inbound message
     *
     * @return $this
     */
    public function setSmsNotificationUrl($sms_notification_url)
    {
        $this->container['sms_notification_url'] = $sms_notification_url;

        return $this;
    }

    /**
     * Gets sms_notification_method
     *
     * @return string
     */
    public function getSmsNotificationMethod()
    {
        return $this->container['sms_notification_method'];
    }

    /**
     * Sets sms_notification_method
     *
     * @param string $sms_notification_method HTTP method to use for notifying API url in case of inbound message
     *
     * @return $this
     */
    public function setSmsNotificationMethod($sms_notification_method)
    {
        $this->container['sms_notification_method'] = $sms_notification_method;

        return $this;
    }

    /**
     * Gets sms_notification_fallback_url
     *
     * @return string
     */
    public function getSmsNotificationFallbackUrl()
    {
        return $this->container['sms_notification_fallback_url'];
    }

    /**
     * Sets sms_notification_fallback_url
     *
     * @param string $sms_notification_fallback_url In case the service for `sms_notification_url` is down Karix will hit the fallback url with the incoming message details
     *
     * @return $this
     */
    public function setSmsNotificationFallbackUrl($sms_notification_fallback_url)
    {
        $this->container['sms_notification_fallback_url'] = $sms_notification_fallback_url;

        return $this;
    }

    /**
     * Gets sms_notification_fallback_method
     *
     * @return string
     */
    public function getSmsNotificationFallbackMethod()
    {
        return $this->container['sms_notification_fallback_method'];
    }

    /**
     * Sets sms_notification_fallback_method
     *
     * @param string $sms_notification_fallback_method HTTP method to use for fallback notification url
     *
     * @return $this
     */
    public function setSmsNotificationFallbackMethod($sms_notification_fallback_method)
    {
        $this->container['sms_notification_fallback_method'] = $sms_notification_fallback_method;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Display name of the webhook
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid Unique ID of the webhook
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time Date when this webhook was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime $updated_time Date when this webhook was last updated
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets account_uid
     *
     * @return string
     */
    public function getAccountUid()
    {
        return $this->container['account_uid'];
    }

    /**
     * Sets account_uid
     *
     * @param string $account_uid UID of Account which created this webhook
     *
     * @return $this
     */
    public function setAccountUid($account_uid)
    {
        $this->container['account_uid'] = $account_uid;

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


