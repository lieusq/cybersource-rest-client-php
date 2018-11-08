<?php
/**
 * TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsPost201Response__embedded_pointOfSaleInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminalId' => 'string',
        'terminalSerialNumber' => 'string',
        'deviceId' => 'string',
        'partner' => '\CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformationPartner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminalId' => null,
        'terminalSerialNumber' => null,
        'deviceId' => null,
        'partner' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'terminalId' => 'terminalId',
        'terminalSerialNumber' => 'terminalSerialNumber',
        'deviceId' => 'deviceId',
        'partner' => 'partner'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'terminalId' => 'setTerminalId',
        'terminalSerialNumber' => 'setTerminalSerialNumber',
        'deviceId' => 'setDeviceId',
        'partner' => 'setPartner'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'terminalId' => 'getTerminalId',
        'terminalSerialNumber' => 'getTerminalSerialNumber',
        'deviceId' => 'getDeviceId',
        'partner' => 'getPartner'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['terminalSerialNumber'] = isset($data['terminalSerialNumber']) ? $data['terminalSerialNumber'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['terminalId']) && (strlen($this->container['terminalId']) > 8)) {
            $invalid_properties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 8.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['terminalId']) > 8) {
            return false;
        }
        return true;
    }


    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId Identifier for the terminal at your retail location. You can define this value yourself, but consult the processor for requirements.  For Payouts: This field is applicable for CtV.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (strlen($terminalId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformation., must be smaller than or equal to 8.');
        }

        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets terminalSerialNumber
     * @return string
     */
    public function getTerminalSerialNumber()
    {
        return $this->container['terminalSerialNumber'];
    }

    /**
     * Sets terminalSerialNumber
     * @param string $terminalSerialNumber The description for this field is not available.
     * @return $this
     */
    public function setTerminalSerialNumber($terminalSerialNumber)
    {
        $this->container['terminalSerialNumber'] = $terminalSerialNumber;

        return $this;
    }

    /**
     * Gets deviceId
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
     * Sets deviceId
     * @param string $deviceId The description for this field is not available.
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;

        return $this;
    }

    /**
     * Gets partner
     * @return \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformationPartner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     * @param \CyberSource\Model\TssV2TransactionsPost201ResponseEmbeddedPointOfSaleInformationPartner $partner
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


