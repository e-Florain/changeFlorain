<?php namespace Cyclos;

/**
 * Service for general references, in which users can set references to
 * other users directly
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class GeneralReferenceService extends Service {

    function __construct() {
        parent::__construct('generalReferenceService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data used for search general references over the given user
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.references.GeneralReferenceSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($user) {
        return $this->__run('getSearchData', array($user));
    }
    
    /**
     * Returns reference statistics for the given user. The params allows
     * periods. The order of the resulting periods is the same as the order
     * of the input periods. If no periods are specified, 3 statistics are
     * returned: all time and last 30 days. The maximum allowed number of
     * periods is 5.
     * @param params Java type: org.cyclos.model.users.references.ReferenceStatisticsParams
     * @return Java type: org.cyclos.model.users.references.ReferenceStatisticsVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getStatistics(org.cyclos.model.users.references.ReferenceStatisticsParams)
     */
    public function getStatistics($params) {
        return $this->__run('getStatistics', array($params));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for references for a given owner, according to the specified
     * query parameters
     * @param query Java type: org.cyclos.model.users.references.GeneralReferenceQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#search(org.cyclos.model.users.references.GeneralReferenceQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>