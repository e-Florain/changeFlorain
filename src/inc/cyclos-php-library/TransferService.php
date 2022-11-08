<?php namespace Cyclos;

/**
 * Service which allows access to transfers and scheduled payments. Not
 * to confuse with PaymentService, which is used to perform the payments.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransferService extends Service {

    function __construct() {
        parent::__construct('transferService');
    }
    
    /**
     * Exports the given transfer to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param transfer Java type: org.cyclos.model.banking.transfers.TransferVO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferService.html#exportTransfer(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transfers.TransferVO)
     */
    public function exportTransfer($format, $transfer) {
        return $this->__run('exportTransfer', array($format, $transfer));
    }
    
    /**
     * Returns details data for a transfer
     * @param vo Java type: org.cyclos.model.banking.transfers.TransferVO
     * @return Java type: org.cyclos.model.banking.transfers.TransferData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferService.html#getData(org.cyclos.model.banking.transfers.TransferVO)
     */
    public function getData($vo) {
        return $this->__run('getData', array($vo));
    }
    
    /**
     * Returns a transfer by id, or throws EntityNotFoundException if not
     * found
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Returns a transfer by transaction number, or throws
     * EntityNotFoundException if not found
     * @param transactionNumber Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransferService.html#loadByTransactionNumber(java.lang.String)
     */
    public function loadByTransactionNumber($transactionNumber) {
        return $this->__run('loadByTransactionNumber', array($transactionNumber));
    }
    
}

?>