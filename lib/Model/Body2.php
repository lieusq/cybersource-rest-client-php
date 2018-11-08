<?php
/**
 * Body2
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
 * Body2 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body2 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Body_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\Tmsv1instrumentidentifiersLinks',
        'id' => 'string',
        'object' => 'string',
        'state' => 'string',
        'bankAccount' => '\CyberSource\Model\Tmsv1paymentinstrumentsBankAccount',
        'card' => '\CyberSource\Model\Tmsv1paymentinstrumentsCard',
        'buyerInformation' => '\CyberSource\Model\Tmsv1paymentinstrumentsBuyerInformation',
        'billTo' => '\CyberSource\Model\Tmsv1paymentinstrumentsBillTo',
        'processingInformation' => '\CyberSource\Model\Tmsv1paymentinstrumentsProcessingInformation',
        'merchantInformation' => '\CyberSource\Model\Tmsv1paymentinstrumentsMerchantInformation',
        'metaData' => '\CyberSource\Model\Tmsv1instrumentidentifiersMetadata',
        'instrumentIdentifier' => '\CyberSource\Model\Tmsv1paymentinstrumentsInstrumentIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'object' => null,
        'state' => null,
        'bankAccount' => null,
        'card' => null,
        'buyerInformation' => null,
        'billTo' => null,
        'processingInformation' => null,
        'merchantInformation' => null,
        'metaData' => null,
        'instrumentIdentifier' => null
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
        'links' => '_links',
        'id' => 'id',
        'object' => 'object',
        'state' => 'state',
        'bankAccount' => 'bankAccount',
        'card' => 'card',
        'buyerInformation' => 'buyerInformation',
        'billTo' => 'billTo',
        'processingInformation' => 'processingInformation',
        'merchantInformation' => 'merchantInformation',
        'metaData' => 'metaData',
        'instrumentIdentifier' => 'instrumentIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'object' => 'setObject',
        'state' => 'setState',
        'bankAccount' => 'setBankAccount',
        'card' => 'setCard',
        'buyerInformation' => 'setBuyerInformation',
        'billTo' => 'setBillTo',
        'processingInformation' => 'setProcessingInformation',
        'merchantInformation' => 'setMerchantInformation',
        'metaData' => 'setMetaData',
        'instrumentIdentifier' => 'setInstrumentIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'object' => 'getObject',
        'state' => 'getState',
        'bankAccount' => 'getBankAccount',
        'card' => 'getCard',
        'buyerInformation' => 'getBuyerInformation',
        'billTo' => 'getBillTo',
        'processingInformation' => 'getProcessingInformation',
        'merchantInformation' => 'getMerchantInformation',
        'metaData' => 'getMetaData',
        'instrumentIdentifier' => 'getInstrumentIdentifier'
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

    const OBJECT_PAYMENT_INSTRUMENT = 'paymentInstrument';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_PAYMENT_INSTRUMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_CLOSED,
        ];
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getObjectAllowableValues();
        if (!in_array($this->container['object'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'object', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getObjectAllowableValues();
        if (!in_array($this->container['object'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets links
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identification number assigned by CyberSource to the submitted request.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object Describes type of token. For example: customer, paymentInstrument or instrumentIdentifier.
     * @return $this
     */
    public function setObject($object)
    {
        $allowed_values = $this->getObjectAllowableValues();
        if (!is_null($object) && !in_array($object, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Current state of the token.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets bankAccount
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets metaData
     * @return \CyberSource\Model\Tmsv1instrumentidentifiersMetadata
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
     * Sets metaData
     * @param \CyberSource\Model\Tmsv1instrumentidentifiersMetadata $metaData
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\Tmsv1paymentinstrumentsInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\Tmsv1paymentinstrumentsInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

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


