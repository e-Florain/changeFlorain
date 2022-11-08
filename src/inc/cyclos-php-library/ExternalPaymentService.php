<?php namespace Cyclos;

/**
 * Service interface to perform external payments and for searching and
 * retrieving information about an external payment. An external payment
 * is a payment done to an external user (or a user that is not yet
 * registered). The external payments remain pending until the
 * destination user registers in the system.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ExternalPaymentService extends Service {

    function __construct() {
        parent::__construct('externalPaymentService');
    }
    
    /**
     * Cancels an external payment
     * @param params Java type: org.cyclos.model.banking.transactions.ExternalPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#cancel(org.cyclos.model.banking.transactions.ExternalPaymentActionDTO)
     */
    public function cancel($params) {
        $this->__run('cancel', array($params));
    }
    
    /**
     * Returns data about an external payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.ExternalPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data used to prepare an external payment matching the given
     * arguments
     * @param from Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.PerformExternalPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#getExternalPaymentData(org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getExternalPaymentData($from) {
        return $this->__run('getExternalPaymentData', array($from));
    }
    
    /**
     * Returns the data related to a payment type for an external payment
     * @param from Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformExternalPaymentTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#getExternalPaymentTypeData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getExternalPaymentTypeData($from, $transferType) {
        return $this->__run('getExternalPaymentTypeData', array($from, $transferType));
    }
    
    /**
     * Performs an external payment. Returns the resulting transaction
     * information.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformExternalPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ExternalPaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#perform(org.cyclos.model.banking.transactions.PerformExternalPaymentDTO)
     */
    public function perform($parameters) {
        return $this->__run('perform', array($parameters));
    }
    
    /**
     * Previews an external payment to be performed
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformExternalPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ExternalPaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ExternalPaymentService.html#preview(org.cyclos.model.banking.transactions.PerformExternalPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
}

?>