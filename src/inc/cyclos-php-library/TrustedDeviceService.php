<?php namespace Cyclos;

/**
 * Service interface for trusted devices.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TrustedDeviceService extends Service {

    function __construct() {
        parent::__construct('trustedDeviceService');
    }
    
    /**
     * Activates a trusted device by code or if a trusted device is required
     * for activation then use the TrustedDeviceActivationParams#DEVICE_ID
     * and TrustedDeviceActivationParams#DEVICE_CONFIRMATION_ID to ensure the
     * corresponding device confirmation was already approved (using another
     * trusted device).
     * @param params Java type: org.cyclos.model.access.devices.TrustedDeviceActivationParams
     * @return Java type: org.cyclos.model.access.devices.ActivateTrustedDeviceDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#activate(org.cyclos.model.access.devices.TrustedDeviceActivationParams)
     */
    public function activate($params) {
        return $this->__run('activate', array($params));
    }
    
    /**
     * Returns data required to activate a device for the logged user.

     * @return Java type: org.cyclos.model.access.devices.TrustedDeviceActivationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#getActivationData()
     */
    public function getActivationData() {
        return $this->__run('getActivationData', array());
    }
    
    /**
     * Returns the PasswordInputDTO for the confirmation password that would
     * be required if removing the trusted device with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#getConfirmationPasswordInputForRemove(java.lang.Long)
     */
    public function getConfirmationPasswordInputForRemove($id) {
        return $this->__run('getConfirmationPasswordInputForRemove', array($id));
    }
    
    /**
     * Returns data about a trusted device.
     * @param id Java type: long
     * @return Java type: org.cyclos.model.access.devices.TrustedDeviceData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#getData(long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns the list of trusted devices for the given user (null resolves
     * to the logged user).<br> Manager users must have the
     * Permission#USER_TRUSTED_DEVICES_VIEW permission.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#list(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function _list($locator) {
        return $this->__run('list', array($locator));
    }
    
    /**
     * Removes a trusted device by id for the logged user.
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#remove(java.lang.Long,%20java.lang.String)
     */
    public function remove($id, $confirmationPassword) {
        $this->__run('remove', array($id, $confirmationPassword));
    }
    
    /**
     * Requests for an activation code. This method can be used to request a
     * code for the first time or as a new request for a given device. In
     * case a RequestDeviceActivationParams#DEVICE_ID is given then the same
     * existing code for that device will be send again and the the name
     * won't be changed (it's ignored if given). Otherwise, a new pending
     * trusted device will be created for the logged user and the code will
     * be sent (in that case the name is required). (phone / e-mail). If
     * RequestDeviceActivationParams#MEDIUM is SendMedium#SMS then the
     * message will be send to the (required)
     * RequestDeviceActivationParams#MOBILE_PHONE. @return A VO with the
     * following: <ul> <li>The final name assigned to the device. It could be
     * different to the input name if it's already in use</li> <li>The device
     * id (required to re-send the code)</li> <li>The e-mail or the
     * normalized mobile phone number that received the code</li> <li>The
     * creation date</li> </ul>
     * @param params Java type: org.cyclos.model.access.devices.RequestDeviceActivationParams
     * @return Java type: org.cyclos.model.access.devices.RequestActivationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#requestActivationCode(org.cyclos.model.access.devices.RequestDeviceActivationParams)
     */
    public function requestActivationCode($params) {
        return $this->__run('requestActivationCode', array($params));
    }
    
    /**
     * Updates a given trusted device for the logged user. It will be used
     * from the mobile in the settings page.
     * @param dto Java type: org.cyclos.model.access.devices.TrustedDeviceDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#save(org.cyclos.model.access.devices.TrustedDeviceDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
}

?>