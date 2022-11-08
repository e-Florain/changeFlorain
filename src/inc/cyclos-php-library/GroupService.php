<?php namespace Cyclos;

/**
 * Service interface for group operations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class GroupService extends Service {

    function __construct() {
        parent::__construct('groupService');
    }
    
    /**
     * Changes the configuration for the specified BasicGroup by assigning a
     * new Configuration. As a result, the configuration formerly assigned is
     * not assigned anymore to the group.
     * @param basicGroup Java type: org.cyclos.model.users.groups.BasicGroupVO     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#changeConfiguration(org.cyclos.model.users.groups.BasicGroupVO,%20org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function changeConfiguration($basicGroup, $configuration) {
        $this->__run('changeConfiguration', array($basicGroup, $configuration));
    }
    
    /**
     * Returns the ActiveConfigurationForGroupsData, containing all the
     * actual configuration for the given group or group set
     * @param basicGroup Java type: org.cyclos.model.users.groups.BasicGroupVO
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationForGroupsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#getActiveConfiguration(org.cyclos.model.users.groups.BasicGroupVO)
     */
    public function getActiveConfiguration($basicGroup) {
        return $this->__run('getActiveConfiguration', array($basicGroup));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns the data for searching groups

     * @return Java type: org.cyclos.model.users.groups.GroupSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for groups, returning results hierarchically
     * @param query Java type: org.cyclos.model.users.groups.BasicGroupQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/GroupService.html#search(org.cyclos.model.users.groups.BasicGroupQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>