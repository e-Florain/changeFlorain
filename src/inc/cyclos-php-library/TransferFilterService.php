<?php namespace Cyclos;

/**
 * Service interface for transfer filters. A transfer filter is a groups
 * of transfer types associated to an account type.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransferFilterService extends Service {

    function __construct() {
        parent::__construct('transferFilterService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns the transfer filters from the given source account type to the
     * given destination account type, taking into account the logged user
     * permissions over transfer filters
     * @param fromAccountTypeVO Java type: org.cyclos.model.banking.accounttypes.AccountTypeVO     * @param toAccountTypeVO Java type: org.cyclos.model.banking.accounttypes.AccountTypeVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#list(org.cyclos.model.banking.accounttypes.AccountTypeVO,%20org.cyclos.model.banking.accounttypes.AccountTypeVO)
     */
    public function _list($fromAccountTypeVO, $toAccountTypeVO) {
        return $this->__run('list', array($fromAccountTypeVO, $toAccountTypeVO));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for transfer filters, according to the given query
     * @param query Java type: org.cyclos.model.banking.transferfilters.TransferFilterQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferFilterService.html#search(org.cyclos.model.banking.transferfilters.TransferFilterQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>