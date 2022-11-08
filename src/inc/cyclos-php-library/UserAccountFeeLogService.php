<?php namespace Cyclos;

/**
 * Service interface for searching users within an account fee log
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserAccountFeeLogService extends Service {

    function __construct() {
        parent::__construct('userAccountFeeLogService');
    }
    
    /**
     * Returns data to search users in the given account fee log
     * @param accountFeeLogId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accountfees.UserAccountFeeLogSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html#getSearchData(java.lang.Long)
     */
    public function getSearchData($accountFeeLogId) {
        return $this->__run('getSearchData', array($accountFeeLogId));
    }
    
    /**
     * Searches for charged users within an account fee execution
     * @param params Java type: org.cyclos.model.banking.accountfees.UserAccountFeeLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html#search(org.cyclos.model.banking.accountfees.UserAccountFeeLogQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>