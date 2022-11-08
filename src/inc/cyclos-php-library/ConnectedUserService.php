<?php namespace Cyclos;

/**
 * Service interface for connected users
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ConnectedUserService extends Service {

    function __construct() {
        parent::__construct('connectedUserService');
    }
    
    /**
     * Disconnects the given user. Returns the number of sessions actually
     * removed
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#disconnect(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function disconnect($userLocator) {
        return $this->__run('disconnect', array($userLocator));
    }
    
    /**
     * Removes all sessions with the given tokens, returning the number of
     * sessions actually removed
     * @param sessionTokens Java type: java.util.Set
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#disconnectBySessionTokens(java.util.Set)
     */
    public function disconnectBySessionTokens($sessionTokens) {
        return $this->__run('disconnectBySessionTokens', array($sessionTokens));
    }
    
    /**
     * Returns data for searching connected users

     * @return Java type: org.cyclos.model.users.users.ConnectedUserSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Searches users connected to the application
     * @param query Java type: org.cyclos.model.users.users.ConnectedUserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#search(org.cyclos.model.users.users.ConnectedUserQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>