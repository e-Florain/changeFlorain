<?php namespace Cyclos;

/**
 * Service interface for accounts
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AccountService extends Service {

    function __construct() {
        parent::__construct('accountService');
    }
    
    /**
     * Generates a file with the query result listing the account balance
     * limits
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.banking.accounts.AccountBalanceLimitsOverviewQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#exportAccountBalanceLimitsOverview(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.accounts.AccountBalanceLimitsOverviewQuery)
     */
    public function exportAccountBalanceLimitsOverview($format, $params) {
        return $this->__run('exportAccountBalanceLimitsOverview', array($format, $params));
    }
    
    /**
     * Exports the account histories overview result to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#exportAccountHistoriesOverview(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery)
     */
    public function exportAccountHistoriesOverview($format, $params) {
        return $this->__run('exportAccountHistoriesOverview', array($format, $params));
    }
    
    /**
     * Exports the account history result to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoryQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#exportAccountHistory(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.accounts.AccountHistoryQuery)
     */
    public function exportAccountHistory($format, $params) {
        return $this->__run('exportAccountHistory', array($format, $params));
    }
    
    /**
     * Generates a file with the query result listing the account balance
     * limits
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.banking.accounts.AccountPaymentAmountLimitsOverviewQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#exportAccountPaymentAmountLimitsOverview(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.accounts.AccountPaymentAmountLimitsOverviewQuery)
     */
    public function exportAccountPaymentAmountLimitsOverview($format, $params) {
        return $this->__run('exportAccountPaymentAmountLimitsOverview', array($format, $params));
    }
    
    /**
     * Generates a file with the query result listing the user balances
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.banking.accounts.UserWithBalanceQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#exportUsersWithBalances(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.accounts.UserWithBalanceQuery)
     */
    public function exportUsersWithBalances($format, $params) {
        return $this->__run('exportUsersWithBalances', array($format, $params));
    }
    
    /**
     * Returns the balance at each data point for a given account. The
     * account and status are also returned. For example, if the account had
     * 50 transfers over 1 month, but in 20 distinct days of the month, and
     * the request was to return for the month, with a balance per day, there
     * will be 21 entries (the balance on the first day, plus the 20 days
     * that had changed) When no period is given, or if the begin date was
     * before the account creation, it is assumed since the day the account
     * was created. The possible periods for data points are: - Months -
     * Weeks - Days The maximum number of data points cannot exceed {@value
     * #MAX_BALANCE_HISTORY_DATAPOINTS}. So, for example, if the requested
     * period is 1 year, it is possible to request balances per month or week
     * (there's about 52 weeks in a year), but not days.
     * @param params Java type: org.cyclos.model.banking.accounts.AccountBalanceHistoryParams
     * @return Java type: org.cyclos.model.banking.accounts.AccountBalanceHistoryVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountBalanceHistory(org.cyclos.model.banking.accounts.AccountBalanceHistoryParams)
     */
    public function getAccountBalanceHistory($params) {
        return $this->__run('getAccountBalanceHistory', array($params));
    }
    
    /**
     * Account limits (balance and payment amounts) overview data for
     * performing searches.

     * @return Java type: org.cyclos.model.banking.accounts.AccountLimitsOverviewData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountBalanceLimitsOverviewData()
     */
    public function getAccountBalanceLimitsOverviewData() {
        return $this->__run('getAccountBalanceLimitsOverviewData', array());
    }
    
    /**
     * Gets the details for viewing an account histories overview

     * @return Java type: org.cyclos.model.banking.accounts.AccountHistoriesOverviewData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountHistoriesOverviewData()
     */
    public function getAccountHistoriesOverviewData() {
        return $this->__run('getAccountHistoriesOverviewData', array());
    }
    
    /**
     * Returns the statuses by currency for the result of searching
     * transactions with the given parameters
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery
     * @return Java type: org.cyclos.model.banking.accounts.AccountHistoriesOverviewStatusVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountHistoriesOverviewStatus(org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery)
     */
    public function getAccountHistoriesOverviewStatus($params) {
        return $this->__run('getAccountHistoriesOverviewStatus', array($params));
    }
    
    /**
     * Gets the details for viewing an account history
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO     * @param rateVisibility Java type: org.cyclos.model.banking.rates.RateVisibility
     * @return Java type: org.cyclos.model.banking.accounts.AccountHistoryData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountHistoryData(org.cyclos.model.banking.accounts.AccountVO,%20org.cyclos.model.banking.rates.RateVisibility)
     */
    public function getAccountHistoryData($account, $rateVisibility) {
        return $this->__run('getAccountHistoryData', array($account, $rateVisibility));
    }
    
    /**
     * Returns historic status for the account
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoryQuery
     * @return Java type: org.cyclos.model.banking.accounts.AccountWithHistoryStatusVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountHistoryStatus(org.cyclos.model.banking.accounts.AccountHistoryQuery)
     */
    public function getAccountHistoryStatus($params) {
        return $this->__run('getAccountHistoryStatus', array($params));
    }
    
    /**
     * Account limits (balance and payment amounts) overview data for
     * performing searches.

     * @return Java type: org.cyclos.model.banking.accounts.AccountLimitsOverviewData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountPaymentAmountLimitsOverviewData()
     */
    public function getAccountPaymentAmountLimitsOverviewData() {
        return $this->__run('getAccountPaymentAmountLimitsOverviewData', array());
    }
    
    /**
     * Gets the status for the given account
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO     * @param dateTime Java type: org.cyclos.utils.DateTime     * @param rateVisibility Java type: org.cyclos.model.banking.rates.RateVisibility
     * @return Java type: org.cyclos.model.banking.accounts.AccountStatusVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountStatus(org.cyclos.model.banking.accounts.AccountVO,%20org.cyclos.utils.DateTime,%20org.cyclos.model.banking.rates.RateVisibility)
     */
    public function getAccountStatus($account, $dateTime, $rateVisibility) {
        return $this->__run('getAccountStatus', array($account, $dateTime, $rateVisibility));
    }
    
    /**
     * Returns the information of an account, with its status, by owner and
     * type
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO     * @param dateTime Java type: org.cyclos.utils.DateTime
     * @return Java type: org.cyclos.model.banking.accounts.AccountWithStatusVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountWithStatus(org.cyclos.model.banking.accounts.AccountVO,%20org.cyclos.utils.DateTime)
     */
    public function getAccountWithStatus($account, $dateTime) {
        return $this->__run('getAccountWithStatus', array($account, $dateTime));
    }
    
    /**
     * Lists the visible accounts summary for the given account owner, with
     * balances relative to the given date
     * @param owner Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param dateTime Java type: org.cyclos.utils.DateTime
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getAccountsSummary(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.utils.DateTime)
     */
    public function getAccountsSummary($owner, $dateTime) {
        return $this->__run('getAccountsSummary', array($owner, $dateTime));
    }
    
    /**
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO
     * @return Java type: org.cyclos.model.banking.accounts.AccountPermissionsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getPermissions(org.cyclos.model.banking.accounts.AccountVO)
     */
    public function getPermissions($account) {
        return $this->__run('getPermissions', array($account));
    }
    
    /**
     * Get an account limit data
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO
     * @return Java type: org.cyclos.model.banking.accounts.UserAccountBalanceLimitData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUserAccountBalanceLimitData(org.cyclos.model.banking.accounts.AccountVO)
     */
    public function getUserAccountBalanceLimitData($account) {
        return $this->__run('getUserAccountBalanceLimitData', array($account));
    }
    
    /**
     * Get an account payment amount limit data
     * @param account Java type: org.cyclos.model.banking.accounts.AccountVO
     * @return Java type: org.cyclos.model.banking.accounts.UserAccountPaymentAmountLimitData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUserAccountPaymentAmountLimitData(org.cyclos.model.banking.accounts.AccountVO)
     */
    public function getUserAccountPaymentAmountLimitData($account) {
        return $this->__run('getUserAccountPaymentAmountLimitData', array($account));
    }
    
    /**
     * Returns the user accounts with their upper and lower balance limits
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUserAccountsBalanceLimits(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserAccountsBalanceLimits($userLocator) {
        return $this->__run('getUserAccountsBalanceLimits', array($userLocator));
    }
    
    /**
     * Returns the user accounts with their upper and lower balance limits
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUserAccountsPaymentAmountLimits(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserAccountsPaymentAmountLimits($userLocator) {
        return $this->__run('getUserAccountsPaymentAmountLimits', array($userLocator));
    }
    
    /**
     * Returns data to search for users with balances

     * @return Java type: org.cyclos.model.banking.accounts.UserWithBalanceSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUserWithBalanceSearchData()
     */
    public function getUserWithBalanceSearchData() {
        return $this->__run('getUserWithBalanceSearchData', array());
    }
    
    /**
     * Returns the overview of users with balances according to the given
     * query
     * @param params Java type: org.cyclos.model.banking.accounts.UserWithBalanceQuery
     * @return Java type: org.cyclos.model.banking.accounts.UsersWithBalancesOverview
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#getUsersWithBalancesOverview(org.cyclos.model.banking.accounts.UserWithBalanceQuery)
     */
    public function getUsersWithBalancesOverview($params) {
        return $this->__run('getUsersWithBalancesOverview', array($params));
    }
    
    /**
     * Loads an account by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accounts.AccountWithCurrencyVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Overview search of account balance limits
     * @param params Java type: org.cyclos.model.banking.accounts.AccountBalanceLimitsOverviewQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#searchAccountBalanceLimitsOverview(org.cyclos.model.banking.accounts.AccountBalanceLimitsOverviewQuery)
     */
    public function searchAccountBalanceLimitsOverview($params) {
        return $this->__run('searchAccountBalanceLimitsOverview', array($params));
    }
    
    /**
     * Account histories overview filtered by the specified query parameters.
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#searchAccountHistoriesOverview(org.cyclos.model.banking.accounts.AccountHistoriesOverviewQuery)
     */
    public function searchAccountHistoriesOverview($params) {
        return $this->__run('searchAccountHistoriesOverview', array($params));
    }
    
    /**
     * Searches the history entries of a required visible account according
     * to the given query parameters. For searching on multiple accounts see
     * #searchAccountHistoriesOverview
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoryQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#searchAccountHistory(org.cyclos.model.banking.accounts.AccountHistoryQuery)
     */
    public function searchAccountHistory($params) {
        return $this->__run('searchAccountHistory', array($params));
    }
    
    /**
     * Overview search of account balance limits
     * @param params Java type: org.cyclos.model.banking.accounts.AccountPaymentAmountLimitsOverviewQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#searchAccountPaymentAmountLimitsOverview(org.cyclos.model.banking.accounts.AccountPaymentAmountLimitsOverviewQuery)
     */
    public function searchAccountPaymentAmountLimitsOverview($params) {
        return $this->__run('searchAccountPaymentAmountLimitsOverview', array($params));
    }
    
    /**
     * Searches for users together with their respective account balances
     * @param params Java type: org.cyclos.model.banking.accounts.UserWithBalanceQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#searchUsersWithBalances(org.cyclos.model.banking.accounts.UserWithBalanceQuery)
     */
    public function searchUsersWithBalances($params) {
        return $this->__run('searchUsersWithBalances', array($params));
    }
    
    /**
     * Change limits of an account
     * @param data Java type: org.cyclos.model.banking.accounts.AccountBalanceLimitDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#setBalanceLimit(org.cyclos.model.banking.accounts.AccountBalanceLimitDTO)
     */
    public function setBalanceLimit($data) {
        $this->__run('setBalanceLimit', array($data));
    }
    
    /**
     * Change limits of an account
     * @param data Java type: org.cyclos.model.banking.accounts.AccountPaymentAmountLimitDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/AccountService.html#setPaymentAmountLimit(org.cyclos.model.banking.accounts.AccountPaymentAmountLimitDTO)
     */
    public function setPaymentAmountLimit($data) {
        $this->__run('setPaymentAmountLimit', array($data));
    }
    
}

?>