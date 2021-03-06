<?php
/**
 * ExtremeSearchResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Amadeus Travel Innovation Sandbox
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ExtremeSearchResult Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExtremeSearchResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExtremeSearchResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination' => 'string',
        'departure_date' => '\DateTime',
        'return_date' => '\DateTime',
        'price' => 'string',
        'airline' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination' => null,
        'departure_date' => 'date',
        'return_date' => 'date',
        'price' => null,
        'airline' => null
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
        'destination' => 'destination',
        'departure_date' => 'departure_date',
        'return_date' => 'return_date',
        'price' => 'price',
        'airline' => 'airline'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'destination' => 'setDestination',
        'departure_date' => 'setDepartureDate',
        'return_date' => 'setReturnDate',
        'price' => 'setPrice',
        'airline' => 'setAirline'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'destination' => 'getDestination',
        'departure_date' => 'getDepartureDate',
        'return_date' => 'getReturnDate',
        'price' => 'getPrice',
        'airline' => 'getAirline'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['return_date'] = isset($data['return_date']) ? $data['return_date'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['airline'] = isset($data['airline']) ? $data['airline'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['destination'] === null) {
            $invalid_properties[] = "'destination' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
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

        if ($this->container['destination'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets destination
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     * @param string $destination The <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city or airport to which the traveler may go, from the provided origin
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets departure_date
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     * @param \DateTime $departure_date The date departure at the origin, in <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> date format yyyy-MM-dd, to go to the above destination
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets return_date
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->container['return_date'];
    }

    /**
     * Sets return_date
     * @param \DateTime $return_date The date at which the flight from the destination to the origin will depart from the destination. The date is in <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> date format yyyy-MM-dd, in the local date of the origin. This field will not be present in the response if the one-way request parameter is set to true.
     * @return $this
     */
    public function setReturnDate($return_date)
    {
        $this->container['return_date'] = $return_date;

        return $this;
    }

    /**
     * Gets price
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param string $price The minimum total price for one adult passenger for a round trip from the origin to the destination and back. Always a string, formatted correctly for the provided currency
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets airline
     * @return string
     */
    public function getAirline()
    {
        return $this->container['airline'];
    }

    /**
     * Sets airline
     * @param string $airline The 2 character alphanumeric <a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a> of the airline that is responsible for selling the traveler this flight - also known as the Validating Carrier. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>
     * @return $this
     */
    public function setAirline($airline)
    {
        $this->container['airline'] = $airline;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


