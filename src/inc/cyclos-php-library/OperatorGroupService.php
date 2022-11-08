<?php namespace Cyclos;

/**
 * Service interface for operator groups
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class OperatorGroupService extends Service {

    function __construct() {
        parent::__construct('operatorGroupService');
    }
    
    /**
     * Changes the group of an operator, returning the identifier of the
     * group change log
     * @param dto Java type: org.cyclos.model.users.operatorgroups.ChangeOperatorGroupDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#changeGroup(org.cyclos.model.users.operatorgroups.ChangeOperatorGroupDTO)
     */
    public function changeGroup($dto) {
        return $this->__run('changeGroup', array($dto));
    }
    
    /**
     * Gets the data needed to change the group of an operator.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.operatorgroups.ChangeOperatorGroupData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#getChangeGroupData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getChangeGroupData($locator) {
        return $this->__run('getChangeGroupData', array($locator));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns the operator groups of the given user, plus additional
     * information
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.operatorgroups.OperatorGroupListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#getListData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getListData($locator) {
        return $this->__run('getListData', array($locator));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/OperatorGroupService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
}

?>