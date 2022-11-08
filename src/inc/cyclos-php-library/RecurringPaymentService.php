<?php namespace Cyclos;

/**
 * Service interface to perform recurring payments and for searching and
 * retrieve information about a recurring payment. A recurring payment is
 * a transaction, and performing a recurring payment normally starts by
 * using TransactionService#getPaymentData. #preview and eventually
 * #perform the recurring payment.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class RecurringPaymentService extends Service {

    function __construct() {
        parent::__construct('recurringPaymentService');
    }
    
    /**
     * Blocks the given recurring payment, so installments won't be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.RecurringPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#block(org.cyclos.model.banking.transactions.RecurringPaymentActionDTO)
     */
    public function block($params) {
        $this->__run('block', array($params));
    }
    
    /**
     * Permanently cancels the given recurring payment, so installments will
     * never be processed
     * @param params Java type: org.cyclos.model.banking.transactions.RecurringPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#cancel(org.cyclos.model.banking.transactions.RecurringPaymentActionDTO)
     */
    public function cancel($params) {
        $this->__run('cancel', array($params));
    }
    
    /**
     * Returns data about a recurring payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for edition about a recurring payment
     * @param vo Java type: org.cyclos.model.banking.transactions.RecurringPaymentVO
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentEditData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#getEditData(org.cyclos.model.banking.transactions.RecurringPaymentVO)
     */
    public function getEditData($vo) {
        return $this->__run('getEditData', array($vo));
    }
    
    /**
     * Modifies the given recurring payment
     * @param recurringPayment Java type: org.cyclos.model.banking.transactions.RecurringPaymentDTO     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#modify(org.cyclos.model.banking.transactions.RecurringPaymentDTO,%20java.lang.String)
     */
    public function modify($recurringPayment, $confirmationPassword) {
        $this->__run('modify', array($recurringPayment, $confirmationPassword));
    }
    
    /**
     * Performs an recurring payment, returning its data
     * @param recurringPayment Java type: org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#perform(org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO)
     */
    public function perform($recurringPayment) {
        return $this->__run('perform', array($recurringPayment));
    }
    
    /**
     * Previews a recurring payment to be performed
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#preview(org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
    /**
     * Previews a recurring payment to be received
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#previewReceive(org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO)
     */
    public function previewReceive($parameters) {
        return $this->__run('previewReceive', array($parameters));
    }
    
    /**
     * Processes a failed occurrence
     * @param params Java type: org.cyclos.model.banking.transactions.InstallmentActionDTO
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#processFailure(org.cyclos.model.banking.transactions.InstallmentActionDTO)
     */
    public function processFailure($params) {
        return $this->__run('processFailure', array($params));
    }
    
    /**
     * Receives a recurring payment, returning its data
     * @param recurringPayment Java type: org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.RecurringPaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#receive(org.cyclos.model.banking.transactions.PerformRecurringPaymentDTO)
     */
    public function receive($recurringPayment) {
        return $this->__run('receive', array($recurringPayment));
    }
    
    /**
     * Unlocks the given recurring payment, so installments will be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.RecurringPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/RecurringPaymentService.html#unblock(org.cyclos.model.banking.transactions.RecurringPaymentActionDTO)
     */
    public function unblock($params) {
        $this->__run('unblock', array($params));
    }
    
}

?>