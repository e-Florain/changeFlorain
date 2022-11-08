<?php namespace Cyclos;

/**
 * Service implementing the Firebase Cloud Messaging registration tokens
 * of a user
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/FcmTokenService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class FcmTokenService extends Service {

    function __construct() {
        parent::__construct('fcmTokenService');
    }
    
    /**
     * Assigns the given registration token to the logged user. If the token
     * was already assigned then the used date is updated
     * @param token Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/FcmTokenService.html#assign(java.lang.String)
     */
    public function assign($token) {
        $this->__run('assign', array($token));
    }
    
    /**
     * Removed a token from the given users. Can be invoked as guest.
     * @param token Java type: java.lang.String     * @param users Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/FcmTokenService.html#remove(java.lang.String,%20java.util.Set)
     */
    public function remove($token, $users) {
        $this->__run('remove', array($token, $users));
    }
    
    /**
     * Replace a token with it's new value. Can be invoked as guest.
     * @param oldToken Java type: java.lang.String     * @param newToken Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/FcmTokenService.html#replace(java.lang.String,%20java.lang.String)
     */
    public function replace($oldToken, $newToken) {
        $this->__run('replace', array($oldToken, $newToken));
    }
    
}

?>