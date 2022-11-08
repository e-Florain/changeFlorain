<?php namespace Cyclos;

/**
 * Service interface to perform scheduled payments and for searching and
 * retrieve information about a scheduled payment. A scheduled payment is
 * a transaction, and performing a scheduled payment normally starts by
 * using TransactionService#getPaymentData. Then, at a certain point, the
 * user can #calculateInstallments, #preview and eventually #perform the
 * scheduled payment.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ScheduledPaymentService extends Service {

    function __construct() {
        parent::__construct('scheduledPaymentService');
    }
    
    /**
     * Blocks the given scheduled payment, so installments won't be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#block(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function block($params) {
        $this->__run('block', array($params));
    }
    
    /**
     * Calculates future installments for the given parameters
     * @param dto Java type: org.cyclos.model.banking.transactions.CalculateInstallmentsDTO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#calculateInstallments(org.cyclos.model.banking.transactions.CalculateInstallmentsDTO)
     */
    public function calculateInstallments($dto) {
        return $this->__run('calculateInstallments', array($dto));
    }
    
    /**
     * Calculates future installments for the given parameters on a receive
     * payment
     * @param dto Java type: org.cyclos.model.banking.transactions.CalculateInstallmentsDTO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#calculateInstallmentsReceive(org.cyclos.model.banking.transactions.CalculateInstallmentsDTO)
     */
    public function calculateInstallmentsReceive($dto) {
        return $this->__run('calculateInstallmentsReceive', array($dto));
    }
    
    /**
     * Permanently cancels the given scheduled payment, so installments will
     * never be processed
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#cancel(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function cancel($params) {
        $this->__run('cancel', array($params));
    }
    
    /**
     * Returns data about a scheduled payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Performs an scheduled payment, returning its data
     * @param scheduledPayment Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#perform(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function perform($scheduledPayment) {
        return $this->__run('perform', array($scheduledPayment));
    }
    
    /**
     * Previews a scheduled payment to be performed
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#preview(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
    /**
     * Previews a scheduled payment to be received
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#previewReceive(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function previewReceive($parameters) {
        return $this->__run('previewReceive', array($parameters));
    }
    
    /**
     * Process the given installment if it's status is not terminal,
     * returning the resulting transfer id
     * @param params Java type: org.cyclos.model.banking.transactions.InstallmentActionDTO
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#processInstallment(org.cyclos.model.banking.transactions.InstallmentActionDTO)
     */
    public function processInstallment($params) {
        return $this->__run('processInstallment', array($params));
    }
    
    /**
     * Receives a scheduled payment, returning its data
     * @param scheduledPayment Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#receive(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function receive($scheduledPayment) {
        return $this->__run('receive', array($scheduledPayment));
    }
    
    /**
     * Marks the given installment status as InstallmentStatus#SETTLED if the
     * status is not terminal.
     * @param params Java type: org.cyclos.model.banking.transactions.InstallmentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#settleInstallment(org.cyclos.model.banking.transactions.InstallmentActionDTO)
     */
    public function settleInstallment($params) {
        $this->__run('settleInstallment', array($params));
    }
    
    /**
     * Marks all installments whose status is not terminal as
     * InstallmentStatus#SETTLED, and closes the scheduled payment
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#settleRemaining(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function settleRemaining($params) {
        $this->__run('settleRemaining', array($params));
    }
    
    /**
     * Unlocks the given scheduled payment, so installments will be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#unblock(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function unblock($params) {
        $this->__run('unblock', array($params));
    }
    
}

?>