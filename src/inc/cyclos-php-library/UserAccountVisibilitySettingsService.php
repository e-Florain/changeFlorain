<?php namespace Cyclos;

/**
 * Service for managing account visibility settings
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountVisibilitySettingsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserAccountVisibilitySettingsService extends Service {

    function __construct() {
        parent::__construct('userAccountVisibilitySettingsService');
    }
    
    /**
     * Returns data for the given user or the logged if locator is null.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.accounts.UserAccountVisibilitySettingsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountVisibilitySettingsService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param visibleAccountTypes Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountVisibilitySettingsService.html#save(org.cyclos.model.users.users.UserLocatorVO,%20java.util.Set)
     */
    public function save($locator, $visibleAccountTypes) {
        $this->__run('save', array($locator, $visibleAccountTypes));
    }
    
    /**
     * Sets a list of account types as visible/hidden for a user. If the
     * locator is null then it sets the account types for the logged user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param accountType Java type: org.cyclos.model.banking.accounttypes.UserAccountTypeVO     * @param visible Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountVisibilitySettingsService.html#setAsVisible(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.accounttypes.UserAccountTypeVO,%20boolean)
     */
    public function setAsVisible($locator, $accountType, $visible) {
        $this->__run('setAsVisible', array($locator, $accountType, $visible));
    }
    
}

?>