<?php namespace Cyclos;

/**
 * Service interface for direct/scheduled/recurring payment
 * feedbacks.<br> Feedbacks are intended only for
 * TransferTypeDirection#USER_TO_USER payments.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionFeedbackService extends Service {

    function __construct() {
        parent::__construct('transactionFeedbackService');
    }
    
    /**
     * Creates or edits the comments for the feedback of the given payment
     * (be it a direct/scheduled/recurring payment)
     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO     * @param level Java type: org.cyclos.model.users.references.ReferenceLevel     * @param comment Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#comment(org.cyclos.model.banking.transactions.TransactionVO,%20org.cyclos.model.users.references.ReferenceLevel,%20java.lang.String)
     */
    public function comment($transaction, $level, $comment) {
        return $this->__run('comment', array($transaction, $level, $comment));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Retrieve the data but from the transaction instead of using the
     * feedback's id
     * @param vo Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.users.references.TransactionFeedbackData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getDataFromTransaction(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function getDataFromTransaction($vo) {
        return $this->__run('getDataFromTransaction', array($vo));
    }
    
    /**
     * Return data for create or modify a feedback. This method is similar to
     * the #getDataForNew but it doesn't throw a PermissionDeniedException
     * The logged user must be the payment's payer.
     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.users.references.TransactionFeedbackData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getGiveData(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function getGiveData($transaction) {
        return $this->__run('getGiveData', array($transaction));
    }
    
    /**
     * Return data for reply for an already given feedback.<br> The logged
     * user must be the payment's receiver with
     * Permission#MY_TRANSACTION_FEEDBACKS_RECEIVE permission.
     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.users.references.TransactionFeedbackData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getReplyData(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function getReplyData($transaction) {
        return $this->__run('getReplyData', array($transaction));
    }
    
    /**
     * Returns data used for search, like results and statistics
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.references.TransactionFeedbackSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($locator) {
        return $this->__run('getSearchData', array($locator));
    }
    
    /**
     * Returns reference statistics for the given user. The params allows
     * periods. The order of the resulting periods is the same as the order
     * of the input periods. If no periods are specified, 3 statistics are
     * returned: all time and last 30 days. The maximum allowed number of
     * periods is 5.
     * @param params Java type: org.cyclos.model.users.references.ReferenceStatisticsParams
     * @return Java type: org.cyclos.model.users.references.ReferenceStatisticsVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getStatistics(org.cyclos.model.users.references.ReferenceStatisticsParams)
     */
    public function getStatistics($params) {
        return $this->__run('getStatistics', array($params));
    }
    
    /**
     * Returns the transaction feedback related to the given payment
     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @return Java type: org.cyclos.model.users.references.TransactionFeedbackVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#getTransactionFeedback(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function getTransactionFeedback($transaction) {
        return $this->__run('getTransactionFeedback', array($transaction));
    }
    
    /**
     * Returns all users ignored for feedbacks for the logged user

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#listIgnoredUsers()
     */
    public function listIgnoredUsers() {
        return $this->__run('listIgnoredUsers', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Adds/Removes the given user to/from the logged user's ignore list for
     * feedbacks. @return true if the user was not ignored and now is ignored
     * and vice versa.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param ignored Java type: boolean
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#markAsIgnored(org.cyclos.model.users.users.UserLocatorVO,%20boolean)
     */
    public function markAsIgnored($locator, $ignored) {
        return $this->__run('markAsIgnored', array($locator, $ignored));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes (logically) the feedback associated to the given transaction.
     * It's used only by the REST layer because the paymentFeedback REST API
     * works with transaction's id instead of feedback's id.<br> Only for
     * admin/brokers with manage permission.
     * @param asTrasaction Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#removeFromTransaction(org.cyclos.model.banking.transactions.TransactionVO)
     */
    public function removeFromTransaction($asTrasaction) {
        $this->__run('removeFromTransaction', array($asTrasaction));
    }
    
    /**
     * Creates or edits the comments for the feedback of the given payment
     * (be it a transfer os scheduled payment)
     * @param transaction Java type: org.cyclos.model.banking.transactions.TransactionVO     * @param replyComments Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#reply(org.cyclos.model.banking.transactions.TransactionVO,%20java.lang.String)
     */
    public function reply($transaction, $replyComments) {
        return $this->__run('reply', array($transaction, $replyComments));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for transaction feedbacks for a given owner, according to the
     * given query
     * @param query Java type: org.cyclos.model.users.references.TransactionFeedbackQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#search(org.cyclos.model.users.references.TransactionFeedbackQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Searches for transactions awaiting feedback by the given from user.
     * The logged must have permission to give feedback or manage feedback
     * (manager)
     * @param transactionAwaitingFeedbackQuery Java type: org.cyclos.model.users.references.TransactionsAwaitingFeedbackQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#searchTransactionsAwaitingFeedback(org.cyclos.model.users.references.TransactionsAwaitingFeedbackQuery)
     */
    public function searchTransactionsAwaitingFeedback($transactionAwaitingFeedbackQuery) {
        return $this->__run('searchTransactionsAwaitingFeedback', array($transactionAwaitingFeedbackQuery));
    }
    
    /**
     * Updates the feedback associated to the given transaction as an
     * admin/broker
     * @param vo Java type: org.cyclos.model.banking.transactions.TransactionVO     * @param update Java type: org.cyclos.model.users.references.TransactionFeedbackUpdateDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/TransactionFeedbackService.html#updateFeedbackFromTransaction(org.cyclos.model.banking.transactions.TransactionVO,%20org.cyclos.model.users.references.TransactionFeedbackUpdateDTO)
     */
    public function updateFeedbackFromTransaction($vo, $update) {
        $this->__run('updateFeedbackFromTransaction', array($vo, $update));
    }
    
}

?>