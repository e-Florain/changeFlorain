<?php namespace Cyclos;

/**
 * Service used to access and set the privacy access to personal data
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PrivacySettingsService extends Service {

    function __construct() {
        parent::__construct('privacySettingsService');
    }
    
    /**
     * Returns data for the given user's privacy settings. If the given user
     * is null, assumes the logged user.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.privacysettings.PrivacySettingsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($user) {
        return $this->__run('getData', array($user));
    }
    
    /**
     * Saves the given privacy settings
     * @param settings Java type: org.cyclos.model.users.privacysettings.PrivacySettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html#save(org.cyclos.model.users.privacysettings.PrivacySettingsDTO)
     */
    public function save($settings) {
        $this->__run('save', array($settings));
    }
    
}

?>