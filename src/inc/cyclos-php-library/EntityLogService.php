<?php namespace Cyclos;

/**
 * Service for work with the generated entity logs.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/EntityLogService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class EntityLogService extends Service {

    function __construct() {
        parent::__construct('entityLogService');
    }
    
    /**
     * Loads an EntityPropertyLogVO by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.entitylogs.EntityPropertyLogVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/EntityLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Search for logs of an entity.<br> The EntityPropertyLogQuery#ENTITY_ID
     * and EntityPropertyLogQuery#TYPE are required.
     * @param params Java type: org.cyclos.model.system.entitylogs.EntityPropertyLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/EntityLogService.html#search(org.cyclos.model.system.entitylogs.EntityPropertyLogQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>