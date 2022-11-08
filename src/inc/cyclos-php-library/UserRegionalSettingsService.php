<?php namespace Cyclos;

/**
 * Service used to manage a user's regional settings
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserRegionalSettingsService extends Service {

    function __construct() {
        parent::__construct('userRegionalSettingsService');
    }
    
    /**
     * Returns the regional settings for the current user

     * @return Java type: org.cyclos.model.users.users.RegionalSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html#get()
     */
    public function get() {
        return $this->__run('get', array());
    }
    
    /**
     * Returns the currently selected locale, as well as the allowed ones

     * @return Java type: org.cyclos.model.utils.LocalesData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html#getLocalesData()
     */
    public function getLocalesData() {
        return $this->__run('getLocalesData', array());
    }
    
    /**
     * Saves the regional settings for the current user
     * @param settings Java type: org.cyclos.model.users.users.RegionalSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html#save(org.cyclos.model.users.users.RegionalSettingsDTO)
     */
    public function save($settings) {
        $this->__run('save', array($settings));
    }
    
}

?>