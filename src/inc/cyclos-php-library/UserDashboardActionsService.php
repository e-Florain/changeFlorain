<?php namespace Cyclos;

/**
 * Service interface for user dashboard actions preferences
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserDashboardActionsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserDashboardActionsService extends Service {

    function __construct() {
        parent::__construct('userDashboardActionsService');
    }
    
    /**
     * Returns data about the logged user's dashboard actions

     * @return Java type: org.cyclos.model.users.dashboardsettings.UserDashboardActionsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserDashboardActionsService.html#getData()
     */
    public function getData() {
        return $this->__run('getData', array());
    }
    
    /**
     * Restore the default dashboard actions

     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserDashboardActionsService.html#restoreDefaultDashboardActions()
     */
    public function restoreDefaultDashboardActions() {
        $this->__run('restoreDefaultDashboardActions', array());
    }
    
    /**
     * Saves the available actions for the logged user
     * @param dashboardAction Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserDashboardActionsService.html#save(java.util.List)
     */
    public function save($dashboardAction) {
        $this->__run('save', array($dashboardAction));
    }
    
    /**
     * Updates the order field according to the given dashboard actions
     * sequence
     * @param dashboardActions Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserDashboardActionsService.html#saveOrder(java.util.List)
     */
    public function saveOrder($dashboardActions) {
        $this->__run('saveOrder', array($dashboardActions));
    }
    
}

?>