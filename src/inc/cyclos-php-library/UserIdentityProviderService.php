<?php namespace Cyclos;

/**
 * Manages the link between users and identity providers
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/UserIdentityProviderService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserIdentityProviderService extends Service {

    function __construct() {
        parent::__construct('userIdentityProviderService');
    }
    
    /**
     * Marks the given identity provider as disabled for the user. This means
     * the provider cannot be used again for this user until it is marked as
     * unlinked or manually linked again.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO     * @param provider Java type: org.cyclos.model.access.identityproviders.IdentityProviderVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/UserIdentityProviderService.html#disable(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.identityproviders.IdentityProviderVO)
     */
    public function disable($user, $provider) {
        $this->__run('disable', array($user, $provider));
    }
    
    /**
     * Returns data with the current identity provider links, as well as
     * related permissions.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.useridentityproviders.UserIdentityProviderListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/UserIdentityProviderService.html#getListData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getListData($user) {
        return $this->__run('getListData', array($user));
    }
    
    /**
     * Removes the link between the user and the given provider. No-op if the
     * relation doesn't exist.
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO     * @param provider Java type: org.cyclos.model.access.identityproviders.IdentityProviderVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/UserIdentityProviderService.html#unlink(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.identityproviders.IdentityProviderVO)
     */
    public function unlink($user, $provider) {
        $this->__run('unlink', array($user, $provider));
    }
    
}

?>