<?php
/**
 * LocationItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  PhoneBurner\AvalaraAFC
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.<br /><br />Effective January 1st, 2022 all Avalara products will be enforcing TLS 1.2 server-side. Please ensure that your implementation sets a minimal of TLS 1.2 encryption when making web requests to Avalara APIs.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PhoneBurner\AvalaraAFC\Model;

use \ArrayAccess;
use \PhoneBurner\AvalaraAFC\ObjectSerializer;

/**
 * LocationItem Class Doc Comment
 *
 * @category Class
 * @package  PhoneBurner\AvalaraAFC
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocationItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LocationItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_alternate' => 'bool',
        'country_iso' => 'string',
        'state' => 'string',
        'county' => 'string',
        'locality' => 'string',
        'p_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'is_alternate' => null,
        'country_iso' => null,
        'state' => null,
        'county' => null,
        'locality' => null,
        'p_code' => 'int32'
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
        'is_alternate' => 'IsAlternate',
        'country_iso' => 'CountryIso',
        'state' => 'State',
        'county' => 'County',
        'locality' => 'Locality',
        'p_code' => 'PCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_alternate' => 'setIsAlternate',
        'country_iso' => 'setCountryIso',
        'state' => 'setState',
        'county' => 'setCounty',
        'locality' => 'setLocality',
        'p_code' => 'setPCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_alternate' => 'getIsAlternate',
        'country_iso' => 'getCountryIso',
        'state' => 'getState',
        'county' => 'getCounty',
        'locality' => 'getLocality',
        'p_code' => 'getPCode'
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
        $this->container['is_alternate'] = isset($data['is_alternate']) ? $data['is_alternate'] : null;
        $this->container['country_iso'] = isset($data['country_iso']) ? $data['country_iso'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['p_code'] = isset($data['p_code']) ? $data['p_code'] : null;
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
     * Gets is_alternate
     *
     * @return bool|null
     */
    public function getIsAlternate()
    {
        return $this->container['is_alternate'];
    }

    /**
     * Sets is_alternate
     *
     * @param bool|null $is_alternate is_alternate
     *
     * @return $this
     */
    public function setIsAlternate($is_alternate)
    {
        $this->container['is_alternate'] = $is_alternate;

        return $this;
    }

    /**
     * Gets country_iso
     *
     * @return string|null
     */
    public function getCountryIso()
    {
        return $this->container['country_iso'];
    }

    /**
     * Sets country_iso
     *
     * @param string|null $country_iso country_iso
     *
     * @return $this
     */
    public function setCountryIso($country_iso)
    {
        $this->container['country_iso'] = $country_iso;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county county
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets p_code
     *
     * @return int|null
     */
    public function getPCode()
    {
        return $this->container['p_code'];
    }

    /**
     * Sets p_code
     *
     * @param int|null $p_code p_code
     *
     * @return $this
     */
    public function setPCode($p_code)
    {
        $this->container['p_code'] = $p_code;

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

