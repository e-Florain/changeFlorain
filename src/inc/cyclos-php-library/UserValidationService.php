<?php namespace Cyclos;

/**
 * Service interface for validating a user or operator
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserValidationService extends Service {

    function __construct() {
        parent::__construct('userValidationService');
    }
    
    /**
     * Makes a pending e-mail change as done
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#manuallyValidateEmailChange(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function manuallyValidateEmailChange($locator) {
        $this->__run('manuallyValidateEmailChange', array($locator));
    }
    
    /**
     * Makes a pending user to be active
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.UserValidationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#manuallyValidateRegistration(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function manuallyValidateRegistration($locator) {
        return $this->__run('manuallyValidateRegistration', array($locator));
    }
    
    /**
     * Re-sends the e-mail change e-mail to a user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#resendEmailChangeMail(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function resendEmailChangeMail($locator) {
        $this->__run('resendEmailChangeMail', array($locator));
    }
    
    /**
     * Re-sends the validation mail to a pending user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#resendRegistrationValidationMail(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function resendRegistrationValidationMail($locator) {
        $this->__run('resendRegistrationValidationMail', array($locator));
    }
    
    /**
     * Updates user information status according to the given activity
     * @param type Java type: org.cyclos.model.users.users.UserActivityType
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#updateUserActivity(org.cyclos.model.users.users.UserActivityType)
     */
    public function updateUserActivity($type) {
        $this->__run('updateUserActivity', array($type));
    }
    
    /**
     * Validate an e-mail change for the given validation key, returning the
     * affected user identifier
     * @param validationKey Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#validateEmailChange(java.lang.String)
     */
    public function validateEmailChange($validationKey) {
        return $this->__run('validateEmailChange', array($validationKey));
    }
    
    /**
     * Validate user registration which was pending e-mail verification, via
     * a provided key
     * @param validationKey Java type: java.lang.String
     * @return Java type: org.cyclos.model.users.users.UserValidationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserValidationService.html#validateRegistration(java.lang.String)
     */
    public function validateRegistration($validationKey) {
        return $this->__run('validateRegistration', array($validationKey));
    }
    
}

?>