<?php namespace Cyclos;

/**
 * Service interface for account fee log
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AccountFeeLogService extends Service {

    function __construct() {
        parent::__construct('accountFeeLogService');
    }
    
    /**
     * Returns data about an account fee execution
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeLogData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for searching account fee executions

     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeExecutionSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#getFeeExecutionsSearchData()
     */
    public function getFeeExecutionsSearchData() {
        return $this->__run('getFeeExecutionsSearchData', array());
    }
    
    /**
     * Returns data to search account fee logs of the given account fee
     * @param accountFee Java type: org.cyclos.model.banking.accountfees.AccountFeeVO
     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeLogsSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#getSearchData(org.cyclos.model.banking.accountfees.AccountFeeVO)
     */
    public function getSearchData($accountFee) {
        return $this->__run('getSearchData', array($accountFee));
    }
    
    /**
     * Starts recharging a fee which has finished and some failed users
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#rechargeFailed(java.lang.Long)
     */
    public function rechargeFailed($id) {
        $this->__run('rechargeFailed', array($id));
    }
    
    /**
     * Starts charging a manual fee, returning the resulting account fee log
     * id
     * @param accountFee Java type: org.cyclos.model.banking.accountfees.AccountFeeVO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#runNow(org.cyclos.model.banking.accountfees.AccountFeeVO)
     */
    public function runNow($accountFee) {
        return $this->__run('runNow', array($accountFee));
    }
    
    /**
     * Searches for account fee logs according to the given criteria
     * @param query Java type: org.cyclos.model.banking.accountfees.AccountFeeLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#search(org.cyclos.model.banking.accountfees.AccountFeeLogQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Search for visible account fees, together with the previous and next
     * execution data
     * @param query Java type: org.cyclos.model.banking.accountfees.AccountFeeQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#searchFeeExecutions(org.cyclos.model.banking.accountfees.AccountFeeQuery)
     */
    public function searchFeeExecutions($query) {
        return $this->__run('searchFeeExecutions', array($query));
    }
    
}

?>