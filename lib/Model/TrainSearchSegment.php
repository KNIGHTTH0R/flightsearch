<?php
/**
 * TrainSearchSegment
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
 * TrainSearchSegment Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrainSearchSegment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TrainSearchSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'departs_at' => 'string',
        'arrives_at' => 'string',
        'departure_station' => '\Swagger\Client\Model\Station',
        'arrival_station' => '\Swagger\Client\Model\Airport',
        'marketing_company' => 'string',
        'operating_company' => 'string',
        'train_number' => 'string',
        'train_type' => 'string',
        'prices' => '\Swagger\Client\Model\TrainSearchPricing[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'departs_at' => null,
        'arrives_at' => null,
        'departure_station' => null,
        'arrival_station' => null,
        'marketing_company' => null,
        'operating_company' => null,
        'train_number' => null,
        'train_type' => null,
        'prices' => null
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
        'departs_at' => 'departs_at',
        'arrives_at' => 'arrives_at',
        'departure_station' => 'departure_station',
        'arrival_station' => 'arrival_station',
        'marketing_company' => 'marketing_company',
        'operating_company' => 'operating_company',
        'train_number' => 'train_number',
        'train_type' => 'train_type',
        'prices' => 'prices'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'departs_at' => 'setDepartsAt',
        'arrives_at' => 'setArrivesAt',
        'departure_station' => 'setDepartureStation',
        'arrival_station' => 'setArrivalStation',
        'marketing_company' => 'setMarketingCompany',
        'operating_company' => 'setOperatingCompany',
        'train_number' => 'setTrainNumber',
        'train_type' => 'setTrainType',
        'prices' => 'setPrices'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'departs_at' => 'getDepartsAt',
        'arrives_at' => 'getArrivesAt',
        'departure_station' => 'getDepartureStation',
        'arrival_station' => 'getArrivalStation',
        'marketing_company' => 'getMarketingCompany',
        'operating_company' => 'getOperatingCompany',
        'train_number' => 'getTrainNumber',
        'train_type' => 'getTrainType',
        'prices' => 'getPrices'
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
        $this->container['departs_at'] = isset($data['departs_at']) ? $data['departs_at'] : null;
        $this->container['arrives_at'] = isset($data['arrives_at']) ? $data['arrives_at'] : null;
        $this->container['departure_station'] = isset($data['departure_station']) ? $data['departure_station'] : null;
        $this->container['arrival_station'] = isset($data['arrival_station']) ? $data['arrival_station'] : null;
        $this->container['marketing_company'] = isset($data['marketing_company']) ? $data['marketing_company'] : null;
        $this->container['operating_company'] = isset($data['operating_company']) ? $data['operating_company'] : null;
        $this->container['train_number'] = isset($data['train_number']) ? $data['train_number'] : null;
        $this->container['train_type'] = isset($data['train_type']) ? $data['train_type'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['departs_at'] === null) {
            $invalid_properties[] = "'departs_at' can't be null";
        }
        if ($this->container['arrives_at'] === null) {
            $invalid_properties[] = "'arrives_at' can't be null";
        }
        if ($this->container['departure_station'] === null) {
            $invalid_properties[] = "'departure_station' can't be null";
        }
        if ($this->container['arrival_station'] === null) {
            $invalid_properties[] = "'arrival_station' can't be null";
        }
        if ($this->container['marketing_company'] === null) {
            $invalid_properties[] = "'marketing_company' can't be null";
        }
        if ($this->container['operating_company'] === null) {
            $invalid_properties[] = "'operating_company' can't be null";
        }
        if ($this->container['train_number'] === null) {
            $invalid_properties[] = "'train_number' can't be null";
        }
        if ($this->container['prices'] === null) {
            $invalid_properties[] = "'prices' can't be null";
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

        if ($this->container['departs_at'] === null) {
            return false;
        }
        if ($this->container['arrives_at'] === null) {
            return false;
        }
        if ($this->container['departure_station'] === null) {
            return false;
        }
        if ($this->container['arrival_station'] === null) {
            return false;
        }
        if ($this->container['marketing_company'] === null) {
            return false;
        }
        if ($this->container['operating_company'] === null) {
            return false;
        }
        if ($this->container['train_number'] === null) {
            return false;
        }
        if ($this->container['prices'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets departs_at
     * @return string
     */
    public function getDepartsAt()
    {
        return $this->container['departs_at'];
    }

    /**
     * Sets departs_at
     * @param string $departs_at The <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> date-time of the train's departure in the local time zone of the departure station, in the format YYYY-MM-DDTHH:mm.
     * @return $this
     */
    public function setDepartsAt($departs_at)
    {
        $this->container['departs_at'] = $departs_at;

        return $this;
    }

    /**
     * Gets arrives_at
     * @return string
     */
    public function getArrivesAt()
    {
        return $this->container['arrives_at'];
    }

    /**
     * Sets arrives_at
     * @param string $arrives_at The <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> date-time of the train's arrival in the local time zone of the arrival station, in the format YYYY-MM-DDTHH:mm.
     * @return $this
     */
    public function setArrivesAt($arrives_at)
    {
        $this->container['arrives_at'] = $arrives_at;

        return $this;
    }

    /**
     * Gets departure_station
     * @return \Swagger\Client\Model\Station
     */
    public function getDepartureStation()
    {
        return $this->container['departure_station'];
    }

    /**
     * Sets departure_station
     * @param \Swagger\Client\Model\Station $departure_station The station object representing the station at which the passenger should board this train in order to complete this part of the itinerary.
     * @return $this
     */
    public function setDepartureStation($departure_station)
    {
        $this->container['departure_station'] = $departure_station;

        return $this;
    }

    /**
     * Gets arrival_station
     * @return \Swagger\Client\Model\Airport
     */
    public function getArrivalStation()
    {
        return $this->container['arrival_station'];
    }

    /**
     * Sets arrival_station
     * @param \Swagger\Client\Model\Airport $arrival_station The station object representing the station at which the passenger should disembark this train in order to complete this part of the itinerary.
     * @return $this
     */
    public function setArrivalStation($arrival_station)
    {
        $this->container['arrival_station'] = $arrival_station;

        return $this;
    }

    /**
     * Gets marketing_company
     * @return string
     */
    public function getMarketingCompany()
    {
        return $this->container['marketing_company'];
    }

    /**
     * Sets marketing_company
     * @param string $marketing_company The name of the train company selling this train journey. This is the name you should see printed on your ticket.
     * @return $this
     */
    public function setMarketingCompany($marketing_company)
    {
        $this->container['marketing_company'] = $marketing_company;

        return $this;
    }

    /**
     * Gets operating_company
     * @return string
     */
    public function getOperatingCompany()
    {
        return $this->container['operating_company'];
    }

    /**
     * Sets operating_company
     * @param string $operating_company The name of the train company operating this train journey. This is the name you should see written on the train.
     * @return $this
     */
    public function setOperatingCompany($operating_company)
    {
        $this->container['operating_company'] = $operating_company;

        return $this;
    }

    /**
     * Gets train_number
     * @return string
     */
    public function getTrainNumber()
    {
        return $this->container['train_number'];
    }

    /**
     * Sets train_number
     * @param string $train_number The identifying number of this train service. Usually the marketing company will only operate on train per day with this train number.
     * @return $this
     */
    public function setTrainNumber($train_number)
    {
        $this->container['train_number'] = $train_number;

        return $this;
    }

    /**
     * Gets train_type
     * @return string
     */
    public function getTrainType()
    {
        return $this->container['train_type'];
    }

    /**
     * Sets train_type
     * @param string $train_type The type of train that you may expect for this journey. For example&colon; InterCity, Regional...
     * @return $this
     */
    public function setTrainType($train_type)
    {
        $this->container['train_type'] = $train_type;

        return $this;
    }

    /**
     * Gets prices
     * @return \Swagger\Client\Model\TrainSearchPricing[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     * @param \Swagger\Client\Model\TrainSearchPricing[] $prices Possible pricing for this train journey.
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

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


