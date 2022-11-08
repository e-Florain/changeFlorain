<?php namespace Cyclos;

/**
 * Service interface for alerts
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/AlertService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AlertService extends Service {

    function __construct() {
        parent::__construct('alertService');
    }
    
    /**
     * Returns data for searching the system alerts history

     * @return Java type: org.cyclos.model.messaging.alerts.SystemAlertSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/AlertService.html#getSystemSearchData()
     */
    public function getSystemSearchData() {
        return $this->__run('getSystemSearchData', array());
    }
    
    /**
     * Returns data for searching the user alerts history

     * @return Java type: org.cyclos.model.messaging.alerts.UserAlertSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/AlertService.html#getUserSearchData()
     */
    public function getUserSearchData() {
        return $this->__run('getUserSearchData', array());
    }
    
    /**
     * Searches for system alerts history
     * @param alertQuery Java type: org.cyclos.model.messaging.alerts.SystemAlertQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/AlertService.html#searchSystem(org.cyclos.model.messaging.alerts.SystemAlertQuery)
     */
    public function searchSystem($alertQuery) {
        return $this->__run('searchSystem', array($alertQuery));
    }
    
    /**
     * Searches for user alerts history
     * @param alertQuery Java type: org.cyclos.model.messaging.alerts.UserAlertQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/AlertService.html#searchUser(org.cyclos.model.messaging.alerts.UserAlertQuery)
     */
    public function searchUser($alertQuery) {
        return $this->__run('searchUser', array($alertQuery));
    }
    
}

?>