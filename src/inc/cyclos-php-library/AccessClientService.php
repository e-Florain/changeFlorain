<?php namespace Cyclos;

/**
 * Service interface used for managing access clients
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AccessClientService extends Service {

    function __construct() {
        parent::__construct('accessClientService');
    }
    
    /**
     * Activates an access client for the current user, using the given
     * activation code. It is possible to pass in a prefix (optional) to have
     * it appended before the activation code itself. Returns a dto
     * containing the principal type and a token which is then used to
     * identify the remote application. The prefix is not returned. So, if
     * for example, "123" is passed as prefix, and "ABCDEF", the token needed
     * to be used on web service requests will be "123ABCDEF", but only
     * "ABCDEF" is returned. If the prefix is null, no prefix is used.
     * @param activationCode Java type: java.lang.String     * @param prefix Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.clients.ActivateAccessClientDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#activate(java.lang.String,%20java.lang.String)
     */
    public function activate($activationCode, $prefix) {
        return $this->__run('activate', array($activationCode, $prefix));
    }
    
    /**
     * Blocks the given an access client
     * @param params Java type: org.cyclos.model.access.clients.AccessClientActionParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#block(org.cyclos.model.access.clients.AccessClientActionParams)
     */
    public function block($params) {
        $this->__run('block', array($params));
    }
    
    /**
     * Returns the code which can be used to activate the access client,
     * connecting an application
     * @param params Java type: org.cyclos.model.access.clients.AccessClientActionParams
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getActivationCode(org.cyclos.model.access.clients.AccessClientActionParams)
     */
    public function getActivationCode($params) {
        return $this->__run('getActivationCode', array($params));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for listing access clients of a given type and user
     * @param principalType Java type: org.cyclos.model.access.principaltypes.PrincipalTypeVO     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.clients.AccessClientsListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getListData(org.cyclos.model.access.principaltypes.PrincipalTypeVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getListData($principalType, $user) {
        return $this->__run('getListData', array($principalType, $user));
    }
    
    /**
     * Returns data for searching access clients

     * @return Java type: org.cyclos.model.access.clients.AccessClientsSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Returns data each access client type the authenticated user can see
     * for the given user. If a channel is passed in, will only return types
     * that can be used to access it.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO     * @param channel Java type: org.cyclos.model.access.channels.ChannelVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#getTypeData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.channels.ChannelVO)
     */
    public function getTypeData($user, $channel) {
        return $this->__run('getTypeData', array($user, $channel));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Returns an access client by either id or token, but only if it belongs
     * (or is managed by) the authenticated user
     * @param locator Java type: org.cyclos.model.access.clients.AccessClientLocatorVO
     * @return Java type: org.cyclos.model.access.clients.AccessClientVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#locate(org.cyclos.model.access.clients.AccessClientLocatorVO)
     */
    public function locate($locator) {
        return $this->__run('locate', array($locator));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for access clients according to the given criteria
     * @param query Java type: org.cyclos.model.access.clients.AccessClientQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#search(org.cyclos.model.access.clients.AccessClientQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Unassigns the given access client from its connected application
     * @param params Java type: org.cyclos.model.access.clients.AccessClientActionParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#unassign(org.cyclos.model.access.clients.AccessClientActionParams)
     */
    public function unassign($params) {
        $this->__run('unassign', array($params));
    }
    
    /**
     * Unassigns the access client in the current authorization. No-op if not
     * authorized as an access client. Returns true if an access client was
     * found associated to the current session.
     * @param action Java type: org.cyclos.model.ActionWithConfirmationPassword
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#unassignCurrent(org.cyclos.model.ActionWithConfirmationPassword)
     */
    public function unassignCurrent($action) {
        return $this->__run('unassignCurrent', array($action));
    }
    
    /**
     * Unblocks the given access client
     * @param params Java type: org.cyclos.model.access.clients.AccessClientActionParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AccessClientService.html#unblock(org.cyclos.model.access.clients.AccessClientActionParams)
     */
    public function unblock($params) {
        $this->__run('unblock', array($params));
    }
    
}

?>