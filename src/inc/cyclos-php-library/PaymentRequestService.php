<?php namespace Cyclos;

/**
 * Service interface to perform payment requests and for searching and
 * retrieve information about payment requests.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PaymentRequestService extends Service {

    function __construct() {
        parent::__construct('paymentRequestService');
    }
    
    /**
     * Accepts a payment request. May process immediately or schedule for
     * processing in a future date. Returns the updated payment request
     * information.
     * @param params Java type: org.cyclos.model.banking.transactions.AcceptPaymentRequestDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentRequestVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#accept(org.cyclos.model.banking.transactions.AcceptPaymentRequestDTO)
     */
    public function accept($params) {
        return $this->__run('accept', array($params));
    }
    
    /**
     * Cancels a payment request (as payee)
     * @param params Java type: org.cyclos.model.banking.transactions.PaymentRequestActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#cancel(org.cyclos.model.banking.transactions.PaymentRequestActionDTO)
     */
    public function cancel($params) {
        $this->__run('cancel', array($params));
    }
    
    /**
     * Changes the payment request's expiration date as payee, admin or
     * broker only if permissions are granted.
     * @param params Java type: org.cyclos.model.banking.transactions.ChangePaymentRequestExpirationDateDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#changeExpirationDate(org.cyclos.model.banking.transactions.ChangePaymentRequestExpirationDateDTO)
     */
    public function changeExpirationDate($params) {
        $this->__run('changeExpirationDate', array($params));
    }
    
    /**
     * Denies a payment request (as payer)
     * @param params Java type: org.cyclos.model.banking.transactions.PaymentRequestActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#deny(org.cyclos.model.banking.transactions.PaymentRequestActionDTO)
     */
    public function deny($params) {
        $this->__run('deny', array($params));
    }
    
    /**
     * Returns data about a payment request
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.PaymentRequestData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data used to request a payment
     * @param payee Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param payer Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param paymentType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.RequestPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#getRequestData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getRequestData($payee, $payer, $paymentType) {
        return $this->__run('getRequestData', array($payee, $payer, $paymentType));
    }
    
    /**
     * Returns data used to request a payment from a specific owner
     * @param payee Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param payer Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.RequestPaymentPayerData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#getRequestPaymentPayerData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getRequestPaymentPayerData($payee, $payer) {
        return $this->__run('getRequestPaymentPayerData', array($payee, $payer));
    }
    
    /**
     * Returns the data for a specific payment type on a payment request from
     * / to the given owners
     * @param payee Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param payer Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.RequestPaymentTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#getRequestPaymentTypeData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getRequestPaymentTypeData($payee, $payer, $transferType) {
        return $this->__run('getRequestPaymentTypeData', array($payee, $payer, $transferType));
    }
    
    /**
     * Previews the payment which would be performed when accepting the given
     * payment request
     * @param paymentRequest Java type: org.cyclos.model.banking.transactions.PaymentRequestVO
     * @return Java type: org.cyclos.model.banking.transactions.AcceptPaymentRequestPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#previewAccept(org.cyclos.model.banking.transactions.PaymentRequestVO)
     */
    public function previewAccept($paymentRequest) {
        return $this->__run('previewAccept', array($paymentRequest));
    }
    
    /**
     * Reschedules a payment request. If the new processing date is null,
     * will process the payment request immediately. Otherwise, changes the
     * processing date for the given one.
     * @param params Java type: org.cyclos.model.banking.transactions.AcceptPaymentRequestDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentRequestVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#reschedule(org.cyclos.model.banking.transactions.AcceptPaymentRequestDTO)
     */
    public function reschedule($params) {
        return $this->__run('reschedule', array($params));
    }
    
    /**
     * Sends a payment request
     * @param parameters Java type: org.cyclos.model.banking.transactions.SendPaymentRequestDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentRequestVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentRequestService.html#send(org.cyclos.model.banking.transactions.SendPaymentRequestDTO)
     */
    public function send($parameters) {
        return $this->__run('send', array($parameters));
    }
    
}

?>