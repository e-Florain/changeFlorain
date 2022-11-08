<?php namespace Cyclos;

/**
 * Service interface to perform payments and for searching and retrieve
 * information about a payment. A payment is a transaction, and
 * performing a payment normally starts by using
 * TransactionService#getPaymentData. Then, at a certain point, the user
 * can #preview and eventually #perform the payment.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PaymentService extends Service {

    function __construct() {
        parent::__construct('paymentService');
    }
    
    /**
     * Returns data about a payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.PaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Performs a payment, according to the given parameters, returning the
     * resulting payment.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#perform(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function perform($parameters) {
        return $this->__run('perform', array($parameters));
    }
    
    /**
     * Previews a payment to be performed
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#preview(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
    /**
     * Previews a payment to be received
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#previewReceive(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function previewReceive($parameters) {
        return $this->__run('previewReceive', array($parameters));
    }
    
    /**
     * Receives a payment, according to the given parameters, returning the
     * resulting payment.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#receive(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function receive($parameters) {
        return $this->__run('receive', array($parameters));
    }
    
    /**
     * Validates the parameters to perform a payment without actually
     * performing the payment. Attention: will only validate for required /
     * invalid fields, but will not check for balance, maximum amount per day
     * or other validations that require access to actual accounts.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/PaymentService.html#validate(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function validate($parameters) {
        $this->__run('validate', array($parameters));
    }
    
}

?>