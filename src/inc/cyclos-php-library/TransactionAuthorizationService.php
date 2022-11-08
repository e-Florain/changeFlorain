<?php namespace Cyclos;

/**
 * Service interface for transaction authorizations.<br> It allow
 * authorize, deny etc a transaction and search for transactions to
 * authorize and already authorized.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionAuthorizationService extends Service {

    function __construct() {
        parent::__construct('transactionAuthorizationService');
    }
    
    /**
     * Authorizes a payment pending authorization @return The next level, if
     * any, or null if authorized
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentAuthorizationLevelData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#authorize(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function authorize($transferAuthorizationDto) {
        return $this->__run('authorize', array($transferAuthorizationDto));
    }
    
    /**
     * Cancels a payment pending authorization
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#cancel(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function cancel($transferAuthorizationDto) {
        $this->__run('cancel', array($transferAuthorizationDto));
    }
    
    /**
     * Denies a payment pending authorization
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#deny(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function deny($transferAuthorizationDto) {
        $this->__run('deny', array($transferAuthorizationDto));
    }
    
}

?>