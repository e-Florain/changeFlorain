<?php namespace Cyclos;

/**
 * Service used to provide login for users via web services
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class LoginService extends Service {

    function __construct() {
        parent::__construct('loginService');
    }
    
    /**
     * Validate the secondary password for the logged user
     * @param password Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#checkSecondaryPassword(java.lang.String)
     */
    public function checkSecondaryPassword($password) {
        $this->__run('checkSecondaryPassword', array($password));
    }
    
    /**
     * Returns the currently authenticated user

     * @return Java type: org.cyclos.model.access.login.UserAuthVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#getAuthenticatedUser()
     */
    public function getAuthenticatedUser() {
        return $this->__run('getAuthenticatedUser', array());
    }
    
    /**
     * Returns the data for user login according to the given channel name
     * and based in the current session configuration.
     * @param channelName Java type: java.lang.String     * @param deviceId Java type: java.lang.Long     * @param pinLocator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.LoginData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#getLoginData(java.lang.String,%20java.lang.Long,%20org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function getLoginData($channelName, $deviceId, $pinLocator) {
        return $this->__run('getLoginData', array($channelName, $deviceId, $pinLocator));
    }
    
    /**
     * Returns the input for the secondary password for the logged user.

     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#getSecondaryPasswordInput()
     */
    public function getSecondaryPasswordInput() {
        return $this->__run('getSecondaryPasswordInput', array());
    }
    
    /**
     * Creates a session for the currently authenticated user and optionally
     * sets a timeout for it. Also, if an identity provider state id is
     * given, and such state exists, the user that performed the login will
     * be linked to that provider
     * @param params Java type: org.cyclos.model.users.users.LoginDTO
     * @return Java type: org.cyclos.model.users.users.UserLoginResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#login(org.cyclos.model.users.users.LoginDTO)
     */
    public function login($params) {
        return $this->__run('login', array($params));
    }
    
    /**
     * Creates a session for a user, indicating a remote address (from the
     * client connection) a channel and optionally a timeout.<br> Must be
     * called by administrators with permissions to login other users, and is
     * used when there is a system which relays logins to Cyclos.
     * @param params Java type: org.cyclos.model.users.users.UserLoginDTO
     * @return Java type: org.cyclos.model.users.users.UserLoginDetailedResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#loginUser(org.cyclos.model.users.users.UserLoginDTO)
     */
    public function loginUser($params) {
        return $this->__run('loginUser', array($params));
    }
    
    /**
     * Invalidates the current user session, if the current request was
     * authenticated with a session

     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#logout()
     */
    public function logout() {
        $this->__run('logout', array());
    }
    
    /**
     * Removes the session with the given token, returning whether the
     * sessions was actually removed
     * @param token Java type: java.lang.String
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#logoutUser(java.lang.String)
     */
    public function logoutUser($token) {
        return $this->__run('logoutUser', array($token));
    }
    
    /**
     * Replaces the current session token with another one. Only works if the
     * current authentication is done via a session. The current session will
     * have a new token generated, and that token is returned. If not
     * connected as a session, will return null.

     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/LoginService.html#replaceSession()
     */
    public function replaceSession() {
        return $this->__run('replaceSession', array());
    }
    
}

?>