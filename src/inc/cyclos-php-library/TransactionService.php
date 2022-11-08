<?php namespace Cyclos;

/**
 * Service interface to access generic transactions, be them payments or
 * scheduled payments
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionService extends Service {

    function __construct() {
        parent::__construct('transactionService');
    }
    
    /**
     * Creates a new pending for approval device confirmation for the payer.
     * It has the same security controls as for PaymentService#receive, that
     * is the logged user must be allowed to receive payments from the
     * specified payer.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformInternalTransactionDTO
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#createDeviceConfirmationForReceive(org.cyclos.model.banking.transactions.PerformInternalTransactionDTO)
     */
    public function createDeviceConfirmationForReceive($parameters) {
        return $this->__run('createDeviceConfirmationForReceive', array($parameters));
    }
    
    /**
     * Generates a two-dimensional barcode (QR code), only if the
     * confirmation was not already approved nor rejected for the given
     * payer. The logged use must be allowed to locate for receive the payer.
     * @param payer Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param params Java type: org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#deviceConfirmationBarcodeForReceive(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams)
     */
    public function deviceConfirmationBarcodeForReceive($payer, $params) {
        return $this->__run('deviceConfirmationBarcodeForReceive', array($payer, $params));
    }
    
    /**
     * Exports a installments search results to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.banking.transactions.InstallmentQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#exportInstallments(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transactions.InstallmentQuery)
     */
    public function exportInstallments($format, $query) {
        return $this->__run('exportInstallments', array($format, $query));
    }
    
    /**
     * Exports an installments overview search results to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.banking.transactions.InstallmentOverviewQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#exportInstallmentsOverview(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transactions.InstallmentOverviewQuery)
     */
    public function exportInstallmentsOverview($format, $query) {
        return $this->__run('exportInstallmentsOverview', array($format, $query));
    }
    
    /**
     * Exports a transaction overview search results to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.banking.transactions.TransactionOverviewQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#exportOverview(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transactions.TransactionOverviewQuery)
     */
    public function exportOverview($format, $query) {
        return $this->__run('exportOverview', array($format, $query));
    }
    
    /**
     * Exports the details of a given transaction to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#exportTransaction(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function exportTransaction($format, $transaction) {
        return $this->__run('exportTransaction', array($format, $transaction));
    }
    
    /**
     * Exports a transactions search results to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.banking.transactions.TransactionQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#exportTransactions(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.transactions.TransactionQuery)
     */
    public function exportTransactions($format, $query) {
        return $this->__run('exportTransactions', array($format, $query));
    }
    
    /**
     * Returns data for a transaction
     * @param vo Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.banking.transactions.TransactionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getData(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function getData($vo) {
        return $this->__run('getData', array($vo));
    }
    
    /**
     * Returns data for searching installments overview

     * @return Java type: org.cyclos.model.banking.transactions.InstallmentOverviewSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getInstallmentsOverviewSearchData()
     */
    public function getInstallmentsOverviewSearchData() {
        return $this->__run('getInstallmentsOverviewSearchData', array());
    }
    
    /**
     * Returns data for searching installments from an account owner
     * perspective
     * @param owner Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.InstallmentSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getInstallmentsSearchData(org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getInstallmentsSearchData($owner) {
        return $this->__run('getInstallmentsSearchData', array($owner));
    }
    
    /**
     * returns the maturity table which the user can view in case of paying
     * with a zero d-rate of an earlier account state, when
     * MaturityPolicy.HISTORY is valid.
     * @param query Java type: org.cyclos.model.banking.transactions.MaturityTableQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getMaturityTable(org.cyclos.model.banking.transactions.MaturityTableQuery)
     */
    public function getMaturityTable($query) {
        return $this->__run('getMaturityTable', array($query));
    }
    
    /**
     * Returns data used to search for transaction overview
     * @param pendingMyAuthorization Java type: boolean
     * @return Java type: org.cyclos.model.banking.transactions.TransactionOverviewSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getOverviewSearchData(boolean)
     */
    public function getOverviewSearchData($pendingMyAuthorization) {
        return $this->__run('getOverviewSearchData', array($pendingMyAuthorization));
    }
    
    /**
     * Returns data used to prepare a payment matching the given from / to
     * account owners. The given payment type is optional. If not passed in,
     * will return detailed data for the first available payment type. If
     * passed in, will return detailed data for that payment type, and must
     * be valid.
     * @param from Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getPaymentData($from, $to, $transferType) {
        return $this->__run('getPaymentData', array($from, $to, $transferType));
    }
    
    /**
     * Returns simplified data used to prepare a payment matching the given
     * arguments
     * @param from Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentToOwnerData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentToOwnerData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getPaymentToOwnerData($from, $to, $transferType) {
        return $this->__run('getPaymentToOwnerData', array($from, $to, $transferType));
    }
    
    /**
     * Returns the data related to a payment type for a payment
     * @param from Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.InternalAccountOwner     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentTypeData(org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.accounts.InternalAccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getPaymentTypeData($from, $to, $transferType) {
        return $this->__run('getPaymentTypeData', array($from, $to, $transferType));
    }
    
    /**
     * Returns data used to receive a payment

     * @return Java type: org.cyclos.model.banking.transactions.ReceivePaymentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getReceivePaymentData()
     */
    public function getReceivePaymentData() {
        return $this->__run('getReceivePaymentData', array());
    }
    
    /**
     * Returns data used to receive a payment from a specific user. The given
     * payment type is optional. If not passed in, will return detailed data
     * for the first available payment type. If passed in, will return
     * detailed data for that payment type, and must be valid.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.ReceivePaymentFromUserData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getReceivePaymentFromUserData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getReceivePaymentFromUserData($locator, $transferType) {
        return $this->__run('getReceivePaymentFromUserData', array($locator, $transferType));
    }
    
    /**
     * Returns the data related to a payment type for receiving a payment
     * from a specific user and payment type
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getReceivePaymentTypeData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getReceivePaymentTypeData($locator, $transferType) {
        return $this->__run('getReceivePaymentTypeData', array($locator, $transferType));
    }
    
    /**
     * Returns data used to search for transactions for the given owner
     * @param owner Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.TransactionSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getSearchData(org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getSearchData($owner) {
        return $this->__run('getSearchData', array($owner));
    }
    
    /**
     * Loads a transaction details by id, returning a proper detailed
     * implementation (for example, PaymentVO or ScheduledPaymentVO).
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Returns a transfer by transaction number, or throws
     * EntityNotFoundException if not found
     * @param transactionNumber Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#loadByTransactionNumber(java.lang.String)
     */
    public function loadByTransactionNumber($transactionNumber) {
        return $this->__run('loadByTransactionNumber', array($transactionNumber));
    }
    
    /**
     * Settles an installment. Currently only scheduled payment installments
     * can be settled.
     * @param action Java type: org.cyclos.model.banking.transactions.InstallmentActionDTO
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#processInstallment(org.cyclos.model.banking.transactions.InstallmentActionDTO)
     */
    public function processInstallment($action) {
        return $this->__run('processInstallment', array($action));
    }
    
    /**
     * Removes a confirmation for the payer. It has the same security
     * controls as for PaymentService#receive, that is the logged user must
     * be allowed to receive payments from the specified payer.
     * @param deviceConfirmationId Java type: java.lang.String     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformInternalTransactionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#removeDeviceConfirmationForReceive(java.lang.String,%20org.cyclos.model.banking.transactions.PerformInternalTransactionDTO)
     */
    public function removeDeviceConfirmationForReceive($deviceConfirmationId, $parameters) {
        $this->__run('removeDeviceConfirmationForReceive', array($deviceConfirmationId, $parameters));
    }
    
    /**
     * Generates a new OTP (removing any previous password, if any) and sends
     * it to the payer by the specified medium using the confirmation
     * password type for the BuiltInChannel#POS channel for the specified
     * payer.<br> It has the same security controls as for
     * PaymentService#receive, that is the logged user must be allowed to
     * receive payments from the specified payer.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformInternalTransactionDTO     * @param medium Java type: org.cyclos.model.utils.SendMedium
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#requestNewOTPForReceive(org.cyclos.model.banking.transactions.PerformInternalTransactionDTO,%20org.cyclos.model.utils.SendMedium)
     */
    public function requestNewOTPForReceive($parameters, $medium) {
        $this->__run('requestNewOTPForReceive', array($parameters, $medium));
    }
    
    /**
     * Searches for transactions from the point-of-view of a given account
     * owner, according to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.TransactionQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#search(org.cyclos.model.banking.transactions.TransactionQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Searches for installments from an account owner perspective, according
     * to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.InstallmentQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#searchInstallments(org.cyclos.model.banking.transactions.InstallmentQuery)
     */
    public function searchInstallments($query) {
        return $this->__run('searchInstallments', array($query));
    }
    
    /**
     * Searches for installments overview, according to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.InstallmentOverviewQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#searchInstallmentsOverview(org.cyclos.model.banking.transactions.InstallmentOverviewQuery)
     */
    public function searchInstallmentsOverview($query) {
        return $this->__run('searchInstallmentsOverview', array($query));
    }
    
    /**
     * Searches for transactions, according to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.TransactionOverviewQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#searchOverview(org.cyclos.model.banking.transactions.TransactionOverviewQuery)
     */
    public function searchOverview($query) {
        return $this->__run('searchOverview', array($query));
    }
    
    /**
     * Settles an installment. Currently only scheduled payment installments
     * can be settled.
     * @param action Java type: org.cyclos.model.banking.transactions.InstallmentActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#settleInstallment(org.cyclos.model.banking.transactions.InstallmentActionDTO)
     */
    public function settleInstallment($action) {
        $this->__run('settleInstallment', array($action));
    }
    
    /**
     * Loads the details of a confirmation belonging to the payment payer. It
     * has the same security controls as for PaymentService#receive, that is
     * the logged user must be allowed to receive payments from the specified
     * payer.
     * @param deviceConfirmationId Java type: java.lang.String     * @param dto Java type: org.cyclos.model.banking.transactions.PerformInternalTransactionDTO
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/TransactionService.html#viewDeviceConfirmationForReceive(java.lang.String,%20org.cyclos.model.banking.transactions.PerformInternalTransactionDTO)
     */
    public function viewDeviceConfirmationForReceive($deviceConfirmationId, $dto) {
        return $this->__run('viewDeviceConfirmationForReceive', array($deviceConfirmationId, $dto));
    }
    
}

?>