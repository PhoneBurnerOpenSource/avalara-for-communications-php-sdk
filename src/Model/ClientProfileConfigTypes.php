<?php
/**
 * ClientProfileConfigTypes
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
use \PhoneBurner\AvalaraAFC\ObjectSerializer;

/**
 * ClientProfileConfigTypes Class Doc Comment
 *
 * @category Class
 * @description Choice of tax calculation setting types.
 * @package  PhoneBurner\AvalaraAFC
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClientProfileConfigTypes
{
    /**
     * Possible values of this enum
     */
    const ALL = 'All';
    const CONFIGURATION = 'Configuration';
    const BUNDLE = 'Bundle';
    const EXCLUSION = 'Exclusion';
    const OVERRIDE = 'Override';
    const NEXUS = 'Nexus';
    const EXEMPTION = 'Exemption';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::CONFIGURATION,
            self::BUNDLE,
            self::EXCLUSION,
            self::OVERRIDE,
            self::NEXUS,
            self::EXEMPTION,
        ];
    }
}

