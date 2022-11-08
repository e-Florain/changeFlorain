<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class DeviceConfirmationService extends Service {

    function __construct() {
        parent::__construct('deviceConfirmationService');
    }
    
    /**
     * Approves a confirmation through a trusted device. This operation can
     * be invoked as guests or with a logged user, if guest the final user
     * running the approve will be the device's owner.
     * @param id Java type: java.lang.String     * @param deviceId Java type: long     * @param hmac Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#approve(java.lang.String,%20long,%20java.lang.String)
     */
    public function approve($id, $deviceId, $hmac) {
        $this->__run('approve', array($id, $deviceId, $hmac));
    }
    
    /**
     * Generates a two-dimensional barcode (QR code), only if the
     * confirmation was not already approved nor rejected, containing a URL
     * of the form:<br>
     * <code>cyclos://confirm?id=confirmation_id&amp;op=i18n_confirmation_type&amp;fields=Label1:Value1|Label2:Value2...</code><br>
     * <br> If any of the labels / values contains a ':' or '|' char then
     * they are escaped with a '\' (e.i 'Business One | Big' -&gt; 'Business
     * One \| Big') E.g<br>
     * <code>cyclos://confirm?id=-6959640208566238428&amp;op=Payment
     * confirmation&amp;fields=from:b1|to:b2|amount:50 units)</code>
     * @param params Java type: org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#barcode(org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * Creates a new pending for approval device confirmation for the logged
     * user.
     * @param params Java type: org.cyclos.model.access.devices.CreateDeviceConfirmationParams
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#create(org.cyclos.model.access.devices.CreateDeviceConfirmationParams)
     */
    public function create($params) {
        return $this->__run('create', array($params));
    }
    
    /**
     * Return data for approve / reject device confirmations for the given
     * device id @return
     * @param deviceId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationApprovalData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#getApprovalData(java.lang.Long)
     */
    public function getApprovalData($deviceId) {
        return $this->__run('getApprovalData', array($deviceId));
    }
    
    /**
     * Load a device confirmation by id for the logged user.
     * @param id Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#load(java.lang.String)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Same as #approve but for confirmation rejection.
     * @param id Java type: java.lang.String     * @param deviceId Java type: long     * @param hmac Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#reject(java.lang.String,%20long,%20java.lang.String)
     */
    public function reject($id, $deviceId, $hmac) {
        $this->__run('reject', array($id, $deviceId, $hmac));
    }
    
    /**
     * Removes a confirmation for the logged user.
     * @param id Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#remove(java.lang.String)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
}

?>