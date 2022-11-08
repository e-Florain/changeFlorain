<?php namespace Cyclos;

/**
 * Service interface for web shop settings
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdWebShopSettingService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AdWebShopSettingService extends Service {

    function __construct() {
        parent::__construct('adWebShopSettingService');
    }
    
    /**
     * Returns the settings for the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.marketplace.webshopsettings.AdWebShopSettingData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdWebShopSettingService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Saves the settings
     * @param dto Java type: org.cyclos.model.marketplace.webshopsettings.AdWebShopSettingDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdWebShopSettingService.html#save(org.cyclos.model.marketplace.webshopsettings.AdWebShopSettingDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
}

?>