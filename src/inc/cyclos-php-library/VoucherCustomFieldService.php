<?php namespace Cyclos;

/**
 * Service for voucher custom fields
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class VoucherCustomFieldService extends Service {

    function __construct() {
        parent::__construct('voucherCustomFieldService');
    }
    
    /**
     * Relates the given voucher type with the given custom field
     * @param voucherType Java type: org.cyclos.model.banking.vouchertypes.VoucherTypeVO     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#addRelation(org.cyclos.model.banking.vouchertypes.VoucherTypeVO,%20org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function addRelation($voucherType, $customField) {
        $this->__run('addRelation', array($voucherType, $customField));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Lists all voucher custom fields with detailed information

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Returns all the custom fields which are related to the given voucher
     * type
     * @param voucherType Java type: org.cyclos.model.banking.vouchertypes.VoucherTypeVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#listAllRelated(org.cyclos.model.banking.vouchertypes.VoucherTypeVO)
     */
    public function listAllRelated($voucherType) {
        return $this->__run('listAllRelated', array($voucherType));
    }
    
    /**
     * Returns the custom fields which are visible (according to the
     * products) and related to the given voucher type
     * @param voucherType Java type: org.cyclos.model.banking.vouchertypes.VoucherTypeVO     * @param userVO Java type: org.cyclos.model.users.users.UserVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#listRelated(org.cyclos.model.banking.vouchertypes.VoucherTypeVO,%20org.cyclos.model.users.users.UserVO)
     */
    public function listRelated($voucherType, $userVO) {
        return $this->__run('listRelated', array($voucherType, $userVO));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the given voucher type with the given custom field
     * @param voucherType Java type: org.cyclos.model.banking.vouchertypes.VoucherTypeVO     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#removeRelation(org.cyclos.model.banking.vouchertypes.VoucherTypeVO,%20org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function removeRelation($voucherType, $customField) {
        $this->__run('removeRelation', array($voucherType, $customField));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves a custom field order.
     * @param customFieldIds Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->__run('saveOrder', array($customFieldIds));
    }
    
}

?>