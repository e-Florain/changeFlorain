<?php namespace Cyclos;

/**
 * Service used to manage networks
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class NetworkService extends Service {

    function __construct() {
        parent::__construct('networkService');
    }
    
    /**
     * Creates a new network with initial data
     * @param network Java type: org.cyclos.model.system.networks.NetworkDTO     * @param data Java type: org.cyclos.model.system.networks.NetworkInitialDataDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#createWithData(org.cyclos.model.system.networks.NetworkDTO,%20org.cyclos.model.system.networks.NetworkInitialDataDTO)
     */
    public function createWithData($network, $data) {
        return $this->__run('createWithData', array($network, $data));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for creating a new network with initial data

     * @return Java type: org.cyclos.model.system.networks.NetworkWithInitialDataData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#getDataForNewWithData()
     */
    public function getDataForNewWithData() {
        return $this->__run('getDataForNewWithData', array());
    }
    
    /**
     * Returns an initial data pre-populated with fields according to the
     * given initial selections
     * @param basicData Java type: org.cyclos.model.system.networks.BasicNetworkInitialDataDTO
     * @return Java type: org.cyclos.model.system.networks.NetworkInitialDataDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#getInitialData(org.cyclos.model.system.networks.BasicNetworkInitialDataDTO)
     */
    public function getInitialData($basicData) {
        return $this->__run('getInitialData', array($basicData));
    }
    
    /**
     * Returns data for searching networks

     * @return Java type: org.cyclos.model.system.networks.NetworkSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Returns the URL a global admin can use to access the given network
     * @param network Java type: org.cyclos.model.system.networks.NetworkVO
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#resolveNetworkUrl(org.cyclos.model.system.networks.NetworkVO)
     */
    public function resolveNetworkUrl($network) {
        return $this->__run('resolveNetworkUrl', array($network));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for networks according to the given criteria
     * @param query Java type: org.cyclos.model.system.networks.NetworkQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/NetworkService.html#search(org.cyclos.model.system.networks.NetworkQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>