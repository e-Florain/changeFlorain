<?php namespace Cyclos;

/**
 * Service interface for principal types. Principal types can be: <ul>
 * <li>Built-in: The ones defined in ExistingBuiltInPrincipalType</li>
 * <li>Custom field: Using an unique custom field as principal</li>
 * <li>Token: Using a token (card, NFC tag, etc) as principal</li> </ul>
 * Principals are used to identify users. Together with a credential,
 * which is used to authenticate the user, users can access channels in
 * Cyclos.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PrincipalTypeService extends Service {

    function __construct() {
        parent::__construct('principalTypeService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * List all available principal types

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Returns the permissions over tokens for the given user. If the user is
     * null, returns permissions over other managed users.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#listUserTokenPermissions(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function listUserTokenPermissions($user) {
        return $this->__run('listUserTokenPermissions', array($user));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PrincipalTypeService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
}

?>