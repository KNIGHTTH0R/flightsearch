<?php
/**
 * PointOfInterestResult
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
 * PointOfInterestResult Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PointOfInterestResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PointOfInterestResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'main_image' => 'string',
        'location' => '\Swagger\Client\Model\Geolocation',
        'grades' => '\Swagger\Client\Model\PointOfInterestResultGrades',
        'categories' => 'string[]',
        'details' => '\Swagger\Client\Model\PointOfInterestDetails',
        'contextual_images' => '\Swagger\Client\Model\ImageSize[]',
        'geoname_id' => 'int',
        'walk_time' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'main_image' => null,
        'location' => null,
        'grades' => null,
        'categories' => null,
        'details' => null,
        'contextual_images' => null,
        'geoname_id' => null,
        'walk_time' => null
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
        'title' => 'title',
        'main_image' => 'main_image',
        'location' => 'location',
        'grades' => 'grades',
        'categories' => 'categories',
        'details' => 'details',
        'contextual_images' => 'contextual_images',
        'geoname_id' => 'geoname_id',
        'walk_time' => 'walk_time'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'main_image' => 'setMainImage',
        'location' => 'setLocation',
        'grades' => 'setGrades',
        'categories' => 'setCategories',
        'details' => 'setDetails',
        'contextual_images' => 'setContextualImages',
        'geoname_id' => 'setGeonameId',
        'walk_time' => 'setWalkTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'main_image' => 'getMainImage',
        'location' => 'getLocation',
        'grades' => 'getGrades',
        'categories' => 'getCategories',
        'details' => 'getDetails',
        'contextual_images' => 'getContextualImages',
        'geoname_id' => 'getGeonameId',
        'walk_time' => 'getWalkTime'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['main_image'] = isset($data['main_image']) ? $data['main_image'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['grades'] = isset($data['grades']) ? $data['grades'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['contextual_images'] = isset($data['contextual_images']) ? $data['contextual_images'] : null;
        $this->container['geoname_id'] = isset($data['geoname_id']) ? $data['geoname_id'] : null;
        $this->container['walk_time'] = isset($data['walk_time']) ? $data['walk_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['main_image'] === null) {
            $invalid_properties[] = "'main_image' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalid_properties[] = "'location' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalid_properties[] = "'categories' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['main_image'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['categories'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Display name of a given point of interest
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets main_image
     * @return string
     */
    public function getMainImage()
    {
        return $this->container['main_image'];
    }

    /**
     * Sets main_image
     * @param string $main_image A link to an image of the given location
     * @return $this
     */
    public function setMainImage($main_image)
    {
        $this->container['main_image'] = $main_image;

        return $this;
    }

    /**
     * Gets location
     * @return \Swagger\Client\Model\Geolocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \Swagger\Client\Model\Geolocation $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets grades
     * @return \Swagger\Client\Model\PointOfInterestResultGrades
     */
    public function getGrades()
    {
        return $this->container['grades'];
    }

    /**
     * Sets grades
     * @param \Swagger\Client\Model\PointOfInterestResultGrades $grades
     * @return $this
     */
    public function setGrades($grades)
    {
        $this->container['grades'] = $grades;

        return $this;
    }

    /**
     * Gets categories
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param string[] $categories Array of descriptions indicating what type of point of interest this is. You can filter the results to include only certain categories of point of interest using the category input parameter.
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets details
     * @return \Swagger\Client\Model\PointOfInterestDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \Swagger\Client\Model\PointOfInterestDetails $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets contextual_images
     * @return \Swagger\Client\Model\ImageSize[]
     */
    public function getContextualImages()
    {
        return $this->container['contextual_images'];
    }

    /**
     * Sets contextual_images
     * @param \Swagger\Client\Model\ImageSize[] $contextual_images Images taken at this point of interest. Note that these images might have nothing to do with the point itself, particularly if you have enabled the social_media parameter
     * @return $this
     */
    public function setContextualImages($contextual_images)
    {
        $this->container['contextual_images'] = $contextual_images;

        return $this;
    }

    /**
     * Gets geoname_id
     * @return int
     */
    public function getGeonameId()
    {
        return $this->container['geoname_id'];
    }

    /**
     * Sets geoname_id
     * @param int $geoname_id The GeonamesID of this point of interest, if available
     * @return $this
     */
    public function setGeonameId($geoname_id)
    {
        $this->container['geoname_id'] = $geoname_id;

        return $this;
    }

    /**
     * Gets walk_time
     * @return float
     */
    public function getWalkTime()
    {
        return $this->container['walk_time'];
    }

    /**
     * Sets walk_time
     * @param float $walk_time Time in minutes that it takes to walk from the searched coordinates to this Point of Interest
     * @return $this
     */
    public function setWalkTime($walk_time)
    {
        $this->container['walk_time'] = $walk_time;

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


