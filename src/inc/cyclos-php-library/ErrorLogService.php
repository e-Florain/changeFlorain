<?php namespace Cyclos;

/**
 * Service used to access the error log
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ErrorLogService extends Service {

    function __construct() {
        parent::__construct('errorLogService');
    }
    
    /**
     * Searches the error log history

     * @return Java type: org.cyclos.model.messaging.errorlogs.ErrorLogSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Loads an entry by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.errorlogs.ErrorLogDetailedVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes a single entry
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given entries
     * @param ids Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#removeAll(java.util.Set)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Searches the error log history
     * @param query Java type: org.cyclos.model.messaging.errorlogs.ErrorLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#search(org.cyclos.model.messaging.errorlogs.ErrorLogQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>