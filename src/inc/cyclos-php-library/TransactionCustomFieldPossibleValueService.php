<?php namespace Cyclos;

/**
 * Service used for managing possible values of transaction custom fields
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionCustomFieldPossibleValueService extends Service {

    function __construct() {
        parent::__construct('transactionCustomFieldPossibleValueService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Inserts a list of custom field possible values, optionally in a
     * category
     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO     * @param customFieldPossibleValueCategory Java type: org.cyclos.model.system.fields.CustomFieldPossibleValueCategoryVO     * @param possibleValues Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#insert(org.cyclos.model.system.fields.CustomFieldVO,%20org.cyclos.model.system.fields.CustomFieldPossibleValueCategoryVO,%20java.util.List)
     */
    public function insert($customField, $customFieldPossibleValueCategory, $possibleValues) {
        $this->__run('insert', array($customField, $customFieldPossibleValueCategory, $possibleValues));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Moves the given possible value in order, either up or down
     * @param id Java type: java.lang.Long     * @param up Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#move(java.lang.Long,%20boolean)
     */
    public function move($id, $up) {
        $this->__run('move', array($id, $up));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for possible values
     * @param query Java type: org.cyclos.model.system.fields.CustomFieldPossibleValueQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldPossibleValueService.html#search(org.cyclos.model.system.fields.CustomFieldPossibleValueQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>