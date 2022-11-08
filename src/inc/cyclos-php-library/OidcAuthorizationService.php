<?php namespace Cyclos;

/**
 * Provides access for searching and revoking authorizations for OpenID
 * Connect / OAuth2 applications
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/OidcAuthorizationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class OidcAuthorizationService extends Service {

    function __construct() {
        parent::__construct('oidcAuthorizationService');
    }
    
    /**
     * Returns data for searching authorizations. If the given user is null,
     * is an overview serach
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.oidcauthorizations.OidcAuthorizationSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/OidcAuthorizationService.html#getSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($user) {
        return $this->__run('getSearchData', array($user));
    }
    
    /**
     * Returns details of a specific authorization
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.oidcauthorizations.OidcAuthorizationDetailedVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/OidcAuthorizationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Revokes an authorization by id
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/OidcAuthorizationService.html#revoke(java.lang.Long)
     */
    public function revoke($id) {
        $this->__run('revoke', array($id));
    }
    
    /**
     * Searches for active authorizations according to the given filters
     * @param params Java type: org.cyclos.model.access.oidcauthorizations.OidcAuthorizationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/OidcAuthorizationService.html#search(org.cyclos.model.access.oidcauthorizations.OidcAuthorizationQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>