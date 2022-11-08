<?php namespace Cyclos;

/**
 * Service interface used to handle user phones
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PhoneService extends Service {

    function __construct() {
        parent::__construct('phoneService');
    }
    
    /**
     * Disables the given mobile phone to operate via SMS
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#disableForSms(java.lang.Long,%20java.lang.String)
     */
    public function disableForSms($id, $confirmationPassword) {
        $this->__run('disableForSms', array($id, $confirmationPassword));
    }
    
    /**
     * Enables the given mobile phone to operate via SMS
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#enableForSms(java.lang.Long)
     */
    public function enableForSms($id) {
        $this->__run('enableForSms', array($id));
    }
    
    /**
     * Returns data for the confirmation password needed to disable a phone
     * by sms
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#getConfirmationPasswordInputForDisableSms(java.lang.Long)
     */
    public function getConfirmationPasswordInputForDisableSms($id) {
        return $this->__run('getConfirmationPasswordInputForDisableSms', array($id));
    }
    
    /**
     * Returns the PasswordInputDTO for the confirmation password that would
     * be required if removing the entity with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#getConfirmationPasswordInputForRemove(java.lang.Long)
     */
    public function getConfirmationPasswordInputForRemove($id) {
        return $this->__run('getConfirmationPasswordInputForRemove', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data containing all phones belonging to the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.phones.PhoneListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#getPhoneListData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getPhoneListData($locator) {
        return $this->__run('getPhoneListData', array($locator));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Returns a mobile phone by number, making sure it is visible
     * @param number Java type: java.lang.String
     * @return Java type: org.cyclos.model.users.phones.PhoneVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#loadByNumber(java.lang.String)
     */
    public function loadByNumber($number) {
        return $this->__run('loadByNumber', array($number));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the entities associated with the given identifiers, checking
     * the confirmation password first (if enabled)
     * @param ids Java type: java.util.Collection     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#removeAllWithConfirmationPassword(java.util.Collection,%20java.lang.String)
     */
    public function removeAllWithConfirmationPassword($ids, $confirmationPassword) {
        $this->__run('removeAllWithConfirmationPassword', array($ids, $confirmationPassword));
    }
    
    /**
     * Removes an entity, checking the confirmation password first (if
     * enabled)
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#removeWithConfirmationPassword(java.lang.Long,%20java.lang.String)
     */
    public function removeWithConfirmationPassword($id, $confirmationPassword) {
        $this->__run('removeWithConfirmationPassword', array($id, $confirmationPassword));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the given object, returning the generated identifier, checking
     * the confirmation password first (if enabled)
     * @param object Java type: DTO     * @param confirmationPassword Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#saveWithConfirmationPassword(DTO,%20java.lang.String)
     */
    public function saveWithConfirmationPassword($object, $confirmationPassword) {
        return $this->__run('saveWithConfirmationPassword', array($object, $confirmationPassword));
    }
    
    /**
     * Sends a verification code to a mobile phone via SMS. The phone number
     * is returned.
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#sendVerificationCode(java.lang.Long)
     */
    public function sendVerificationCode($id) {
        return $this->__run('sendVerificationCode', array($id));
    }
    
    /**
     * Verifies a mobile phone with a code received via SMS.
     * @param id Java type: java.lang.Long     * @param verificationCode Java type: java.lang.String
     * @return Java type: org.cyclos.model.users.phones.CodeVerificationStatus
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/PhoneService.html#verify(java.lang.Long,%20java.lang.String)
     */
    public function verify($id, $verificationCode) {
        return $this->__run('verify', array($id, $verificationCode));
    }
    
}

?>