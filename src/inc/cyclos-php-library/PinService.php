<?php namespace Cyclos;

/**
 * Service interface for device pins.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PinService extends Service {

    function __construct() {
        parent::__construct('pinService');
    }
    
    /**
     * Returns data regarding pins for the given user (null resolves to the
     * logged user).
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.pins.UserPinsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Returns data for editing a pin.
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.pins.PinData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#getEditData(org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function getEditData($locator) {
        return $this->__run('getEditData', array($locator));
    }
    
    /**
     * Return the password input required to create a pin for the logged
     * user.

     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#getPasswordInputForCreate()
     */
    public function getPasswordInputForCreate() {
        return $this->__run('getPasswordInputForCreate', array());
    }
    
    /**
     * Returns the list of device pins for the given user (null resolves to
     * the logged user).<br> Manager users must have the
     * Permission#USER_PINS_VIEW permission.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#list(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function _list($locator) {
        return $this->__run('list', array($locator));
    }
    
    /**
     * Locates a device pin, either by id or principal. For users other than
     * the pin's owner (admin / brokers) the Permission#USER_PINS_VIEW
     * permission must be granted
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.pins.PinDetailedVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#locate(org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function locate($locator) {
        return $this->__run('locate', array($locator));
    }
    
    /**
     * Removes the given pin. For managers (admin / brokers) the
     * Permission#USER_PINS_MANAGE permission must be granted. For the pin
     * owner the action must be confirmed with the current login password for
     * the current channel or the current pin. Only one of these is mandatory
     * to be given.
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO     * @param currentCredentials Java type: org.cyclos.model.access.pins.CurrentCredentialsForPinManage
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#remove(org.cyclos.model.access.pins.PinLocatorVO,%20org.cyclos.model.access.pins.CurrentCredentialsForPinManage)
     */
    public function remove($locator, $currentCredentials) {
        $this->__run('remove', array($locator, $currentCredentials));
    }
    
    /**
     * Updates a given device pin for the logged user. It will be used from
     * the mobile in the settings page. The given pin's name must be unique,
     * otherwise it throws a ValidationException
     * @param dto Java type: org.cyclos.model.access.pins.PinDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#save(org.cyclos.model.access.pins.PinDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
    /**
     * Creates a new pin or modify an existing for the logged user and
     * associates it to the current principal type and password type. The
     * result will contain the generated principal and a salt that must be
     * prepended to the pin entered by the user when login. In case of a
     * modification the current pin or login password must be given.
     * @param params Java type: org.cyclos.model.access.pins.SetPinParams
     * @return Java type: org.cyclos.model.access.pins.CreatePinDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#set(org.cyclos.model.access.pins.SetPinParams)
     */
    public function set($params) {
        return $this->__run('set', array($params));
    }
    
    /**
     * Validates a value to be used as a pin for the logged user and the
     * current channel. @return null if the value is valid. Otherwise return
     * the validation error.
     * @param value Java type: java.lang.String
     * @return Java type: org.cyclos.utils.ValidationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PinService.html#validate(java.lang.String)
     */
    public function validate($value) {
        return $this->__run('validate', array($value));
    }
    
}

?>