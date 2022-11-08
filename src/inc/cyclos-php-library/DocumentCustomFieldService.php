<?php namespace Cyclos;

/**
 * Service interface for document custom fields
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class DocumentCustomFieldService extends Service {

    function __construct() {
        parent::__construct('documentCustomFieldService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Lists all fields for the given document
     * @param document Java type: org.cyclos.model.contentmanagement.documents.DocumentVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#list(org.cyclos.model.contentmanagement.documents.DocumentVO)
     */
    public function _list($document) {
        return $this->__run('list', array($document));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves a custom field order.
     * @param customFieldIds Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->__run('saveOrder', array($customFieldIds));
    }
    
}

?>