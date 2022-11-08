<?php namespace Cyclos;

/**
 * Service used to manage a user status
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserStatusService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserStatusService extends Service {

    function __construct() {
        parent::__construct('userStatusService');
    }
    
    /**
     * Changes the status of a group
     * @param params Java type: org.cyclos.model.users.users.ChangeUserStatusParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserStatusService.html#changeStatus(org.cyclos.model.users.users.ChangeUserStatusParams)
     */
    public function changeStatus($params) {
        $this->__run('changeStatus', array($params));
    }
    
    /**
     * Returns data displayed when changing / viewing a user status
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.ChangeUserStatusData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserStatusService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
}

?>