<?php namespace Cyclos;

/**
 * Service interface to manage tickets. <br> A ticket is a transaction
 * having a receiver user and represents a pending payment to be accepted
 * by any user (the payer) who want (and can) make the payment. It also
 * could be created to be accepted by a specific payer.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TicketService extends Service {

    function __construct() {
        parent::__construct('ticketService');
    }
    
    /**
     * Approves a ticket, as a payer, only if status is
     * TicketStatus#OPEN.<br> If there is no "success URL" defined then it
     * generates a new direct payment and the ticket goes to
     * TicketStatus#PROCESSED. Otherwise, no payment is generated and the
     * ticket goes to TicketStatus#APPROVED status. The payment will be
     * generated only after being processed by the receiver.
     * @param params Java type: org.cyclos.model.banking.transactions.ApproveTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#approve(org.cyclos.model.banking.transactions.ApproveTicketDTO)
     */
    public function approve($params) {
        return $this->__run('approve', array($params));
    }
    
    /**
     * Generates a two-dimensional barcode (aka QR code) only if status is
     * TicketStatus#OPEN containing a URL of the form: .../pay/ticket_id (e.g
     * https://www.cyclos.org/pay/1234567890123456789).
     * @param params Java type: org.cyclos.model.banking.transactions.TicketBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#barcode(org.cyclos.model.banking.transactions.TicketBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * Cancels the ticket only if status is TicketStatus#OPEN and the logged
     * user is the ticket's receiver or a manger of him.
     * @param ticket Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#cancel(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function cancel($ticket) {
        $this->__run('cancel', array($ticket));
    }
    
    /**
     * Creates a new ticket with status TicketStatus#OPEN for the logged user
     * (i.e setting it as the receiver).
     * @param params Java type: org.cyclos.model.banking.transactions.CreateTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#create(org.cyclos.model.banking.transactions.CreateTicketDTO)
     */
    public function create($params) {
        return $this->__run('create', array($params));
    }
    
    /**
     * Returns data used to crate a new ticket for the given user, optionally
     * with a fixed payer.
     * @param owner Java type: org.cyclos.model.users.users.UserLocatorVO     * @param payer Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.transactions.CreateTicketData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#getCreateData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getCreateData($owner, $payer) {
        return $this->__run('getCreateData', array($owner, $payer));
    }
    
    /**
     * Returns data to view the ticket's details.
     * @param vo Java type: org.cyclos.model.banking.transactions.TicketVO
     * @return Java type: org.cyclos.model.banking.transactions.TicketData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#getData(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function getData($vo) {
        return $this->__run('getData', array($vo));
    }
    
    /**
     * Returns the data for a specific payment type used to create a new
     * ticket
     * @param owner Java type: org.cyclos.model.users.users.UserLocatorVO     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.TicketPaymentTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#getTicketPaymentTypeData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getTicketPaymentTypeData($owner, $transferType) {
        return $this->__run('getTicketPaymentTypeData', array($owner, $transferType));
    }
    
    /**
     * Previews the payment which would be performed when approving the given
     * ticket as the payer. The ticket status must be TicketStatus#APPROVED
     * or TicketStatus#OPEN without a success url.
     * @param ticket Java type: org.cyclos.model.banking.transactions.TicketVO
     * @return Java type: org.cyclos.model.banking.transactions.ApproveTicketPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#previewApprove(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function previewApprove($ticket) {
        return $this->__run('previewApprove', array($ticket));
    }
    
    /**
     * Processes a ticket as the receiver of the payment (i.e the ticket
     * creator).<br> Only if the ticket status is TicketStatus#APPROVED a new
     * direct payment will be generated and the new ticket status will be:
     * TicketStatus#PROCESSED. There could be a case where this method is
     * invoked for an already processed ticket (e.g. the ticket has both a
     * success url and an success webhook), for it, only in case the given
     * process code is the correct one this method runs without errors and
     * returns the same result as the previous invocation (no payment is
     * generated) but with the TicketProcessResult#ACTUALLY_PROCESSED flag in
     * false.
     * @param params Java type: org.cyclos.model.banking.transactions.ProcessTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketProcessResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TicketService.html#process(org.cyclos.model.banking.transactions.ProcessTicketDTO)
     */
    public function process($params) {
        return $this->__run('process', array($params));
    }
    
}

?>