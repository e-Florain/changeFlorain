<?php namespace Cyclos;

/**
 * Service used to manage settings in the Cyclos frontend
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserFrontendSettingsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserFrontendSettingsService extends Service {

    function __construct() {
        parent::__construct('userFrontendSettingsService');
    }
    
    /**
     * Returns the frontend settings for the current user

     * @return Java type: org.cyclos.model.users.users.FrontendSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserFrontendSettingsService.html#get()
     */
    public function get() {
        return $this->__run('get', array());
    }
    
    /**
     * Saves the frontend settings for the current user
     * @param settings Java type: org.cyclos.model.users.users.FrontendSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserFrontendSettingsService.html#save(org.cyclos.model.users.users.FrontendSettingsDTO)
     */
    public function save($settings) {
        $this->__run('save', array($settings));
    }
    
}

?>