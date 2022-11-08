<?php namespace Cyclos;

/**
 * Service for transaction custom fields
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionCustomFieldService extends Service {

    function __construct() {
        parent::__construct('transactionCustomFieldService');
    }
    
    /**
     * Relates the given transfer type with the given custom field
     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#addRelation(org.cyclos.model.banking.transfertypes.TransferTypeVO,%20org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function addRelation($transferType, $customField) {
        $this->__run('addRelation', array($transferType, $customField));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Lists all transaction custom fields with detailed information

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Returns all the custom fields which are related to the given transfer
     * type
     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#listAllRelated(org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function listAllRelated($transferType) {
        return $this->__run('listAllRelated', array($transferType));
    }
    
    /**
     * Returns the custom fields which are visible (according to the
     * products) and related to the given transfer type
     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#listRelated(org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function listRelated($transferType) {
        return $this->__run('listRelated', array($transferType));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the given transfer type with the given custom field
     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#removeRelation(org.cyclos.model.banking.transfertypes.TransferTypeVO,%20org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function removeRelation($transferType, $customField) {
        $this->__run('removeRelation', array($transferType, $customField));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves a custom field order.
     * @param customFieldIds Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->__run('saveOrder', array($customFieldIds));
    }
    
}

?>