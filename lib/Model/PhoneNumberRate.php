<?php
/**
 * PhoneNumberRate
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

use Brick\Math\BigDecimal;

/**
 * PhoneNumberRate Class Doc Comment
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhoneNumberRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhoneNumber_rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inbound_sms' => 'BigDecimal',
        'rental' => 'BigDecimal',
        'setup' => 'BigDecimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inbound_sms' => 'number',
        'rental' => 'number',
        'setup' => 'number'
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
        'inbound_sms' => 'inbound_sms',
        'rental' => 'rental',
        'setup' => 'setup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbound_sms' => 'setInboundSms',
        'rental' => 'setRental',
        'setup' => 'setSetup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbound_sms' => 'getInboundSms',
        'rental' => 'getRental',
        'setup' => 'getSetup'
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
        $this->container['inbound_sms'] = isset($data['inbound_sms']) ? $data['inbound_sms'] : null;
        $this->container['rental'] = isset($data['rental']) ? $data['rental'] : null;
        $this->container['setup'] = isset($data['setup']) ? $data['setup'] : null;
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
     * Gets inbound_sms
     *
     * @return BigDecimal
     */
    public function getInboundSms()
    {
        return $this->container['inbound_sms'];
    }

    /**
     * Sets inbound_sms
     *
     * @param BigDecimal $inbound_sms Rate per part of an incoming message
     *
     * @return $this
     */
    public function setInboundSms($inbound_sms)
    {
        $this->container['inbound_sms'] = $inbound_sms;

        return $this;
    }

    /**
     * Gets rental
     *
     * @return BigDecimal
     */
    public function getRental()
    {
        return $this->container['rental'];
    }

    /**
     * Sets rental
     *
     * @param BigDecimal $rental Monthly rental rate for this number. When the number is bought a prorated rental rate is deducted from balance
     *
     * @return $this
     */
    public function setRental($rental)
    {
        $this->container['rental'] = $rental;

        return $this;
    }

    /**
     * Gets setup
     *
     * @return BigDecimal
     */
    public function getSetup()
    {
        return $this->container['setup'];
    }

    /**
     * Sets setup
     *
     * @param BigDecimal $setup One time setup fees for this number
     *
     * @return $this
     */
    public function setSetup($setup)
    {
        $this->container['setup'] = $setup;

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


