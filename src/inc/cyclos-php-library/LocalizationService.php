<?php namespace Cyclos;

/**
 * Service used to retrieve general localization elements, like time
 * zones
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/LocalizationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class LocalizationService extends Service {

    function __construct() {
        parent::__construct('localizationService');
    }
    
    /**
     * Returns a list of country codes with their respective names

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/LocalizationService.html#listCountries()
     */
    public function listCountries() {
        return $this->__run('listCountries', array());
    }
    
    /**
     * Returns a list with all time zones

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/LocalizationService.html#listTimeZones()
     */
    public function listTimeZones() {
        return $this->__run('listTimeZones', array());
    }
    
    /**
     * Returns a list of which time zones are available for a given country
     * @param countryCode Java type: java.lang.String
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/LocalizationService.html#listTimeZonesByCountry(java.lang.String)
     */
    public function listTimeZonesByCountry($countryCode) {
        return $this->__run('listTimeZonesByCountry', array($countryCode));
    }
    
}

?>