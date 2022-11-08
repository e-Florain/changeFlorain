<?php namespace Cyclos;

/**
 * A service to chargeback transfers and get data about chargebacks
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ChargebackService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ChargebackService extends Service {

    function __construct() {
        parent::__construct('chargebackService');
    }
    
    /**
     * Performs the chargeback for the given transfer, returning the
     * chargeback id. The chargeback transfer is from / to the same original
     * transfer, but the amount is negative
     * @param params Java type: org.cyclos.model.banking.transfers.TransferActionDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ChargebackService.html#chargeback(org.cyclos.model.banking.transfers.TransferActionDTO)
     */
    public function chargeback($params) {
        return $this->__run('chargeback', array($params));
    }
    
    /**
     * Returns details about a chargeback
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.ChargebackData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/ChargebackService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
}

?>