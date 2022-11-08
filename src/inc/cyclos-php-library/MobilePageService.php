<?php namespace Cyclos;

/**
 * Service for mobile pages
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class MobilePageService extends Service {

    function __construct() {
        parent::__construct('mobilePageService');
    }
    
    /**
     * Returns the content of a mobile page
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getContent(java.lang.Long)
     */
    public function getContent($id) {
        return $this->__run('getContent', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data with a list of mobile pages in a given configuration
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: org.cyclos.model.contentmanagement.mobilepages.MobilePagesListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getListData(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function getListData($configuration) {
        return $this->__run('getListData', array($configuration));
    }
    
    /**
     * Lists all mobile pages for the given configuration
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#list(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function _list($configuration) {
        return $this->__run('list', array($configuration));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Updates the order field according to the given ids sequence
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->__run('saveOrder', array($ids));
    }
    
}

?>