<?php namespace Cyclos;

/**
 * Service for handling configurations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ConfigurationService extends Service {

    function __construct() {
        parent::__construct('configurationService');
    }
    
    /**
     * Returns the active configuration for the configuration with the given
     * id
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#getActiveConfiguration(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function getActiveConfiguration($configuration) {
        return $this->__run('getActiveConfiguration', array($configuration));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns the default configuration for the current network (or the
     * global default configuration)

     * @return Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#getDefault()
     */
    public function getDefault() {
        return $this->__run('getDefault', array());
    }
    
    /**
     * Gets data used on the search page

     * @return Java type: org.cyclos.model.system.configurations.ConfigurationSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Returns all visible configurations

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Search configurations according to the specified query parameters
     * @param params Java type: org.cyclos.model.system.configurations.ConfigurationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationService.html#search(org.cyclos.model.system.configurations.ConfigurationQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>