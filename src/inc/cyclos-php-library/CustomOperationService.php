<?php namespace Cyclos;

/**
 * Service for managing custom operations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CustomOperationService extends Service {

    function __construct() {
        parent::__construct('customOperationService');
    }
    
    /**
     * Returns the PasswordInputDTO for the confirmation password that would
     * be required if executing the given custom operation.
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDataParams
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getConfirmationPasswordInputForRun(org.cyclos.model.system.operations.RunCustomOperationDataParams)
     */
    public function getConfirmationPasswordInputForRun($params) {
        return $this->__run('getConfirmationPasswordInputForRun', array($params));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data to run a custom operation. Depending on the custom
     * operation scope, the input parameters must be a subclass of
     * RunCustomOperationDataParams with the specific parmeters set (for
     * example, a RunRecordCustomOperationDataParams with the record set if
     * the scope is CustomOperationScope#RECORD) The result will also be a
     * subclass of RunCustomOperationData depending on the custom operation
     * scope, for example a RunRecordCustomOperationData.
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDataParams
     * @return Java type: org.cyclos.model.system.operations.RunCustomOperationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunData(org.cyclos.model.system.operations.RunCustomOperationDataParams)
     */
    public function getRunData($params) {
        return $this->__run('getRunData', array($params));
    }
    
    /**
     * Lists the user custom operations scope =
     * CustomOperationScope#ADVERTISEMENT the logged user can run over the
     * given advertisement
     * @param ad Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForAd(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function getRunnableOperationsForAd($ad) {
        return $this->__run('getRunnableOperationsForAd', array($ad));
    }
    
    /**
     * Lists the user custom operations scope = CustomOperationScope#CONTACT
     * the logged user can run over the given contact
     * @param contact Java type: org.cyclos.model.users.contacts.ContactVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForContact(org.cyclos.model.users.contacts.ContactVO)
     */
    public function getRunnableOperationsForContact($contact) {
        return $this->__run('getRunnableOperationsForContact', array($contact));
    }
    
    /**
     * Lists the user custom operations scope =
     * CustomOperationScope#CONTACT_INFO the logged user can run over the
     * given additional contact information
     * @param contactInfo Java type: org.cyclos.model.users.contactinfos.ContactInfoVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForContactInfo(org.cyclos.model.users.contactinfos.ContactInfoVO)
     */
    public function getRunnableOperationsForContactInfo($contactInfo) {
        return $this->__run('getRunnableOperationsForContactInfo', array($contactInfo));
    }
    
    /**
     * Lists the user custom operations scope = CustomOperationScope#RECORD
     * the logged user can run over the given record
     * @param record Java type: org.cyclos.model.users.records.RecordVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForRecord(org.cyclos.model.users.records.RecordVO)
     */
    public function getRunnableOperationsForRecord($record) {
        return $this->__run('getRunnableOperationsForRecord', array($record));
    }
    
    /**
     * Lists the custom operations with scope = CustomOperationScope#SYSTEM
     * the logged user can run

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForSystem()
     */
    public function getRunnableOperationsForSystem() {
        return $this->__run('getRunnableOperationsForSystem', array());
    }
    
    /**
     * Lists the custom operations with scope = CustomOperationScope#TRANSFER
     * the logged user can run over the given transfer
     * @param transfer Java type: org.cyclos.model.banking.transfers.TransferVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForTransfer(org.cyclos.model.banking.transfers.TransferVO)
     */
    public function getRunnableOperationsForTransfer($transfer) {
        return $this->__run('getRunnableOperationsForTransfer', array($transfer));
    }
    
    /**
     * Lists the user custom operations scope = CustomOperationScope#USER the
     * logged user can run over the given user (or self if null)
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunnableOperationsForUser(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getRunnableOperationsForUser($locator) {
        return $this->__run('getRunnableOperationsForUser', array($locator));
    }
    
    /**
     * Lists all available custom operations

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Runs a custom operation, returning the result with all type
     * information
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDTO
     * @return Java type: org.cyclos.model.system.operations.RunCustomOperationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#run(org.cyclos.model.system.operations.RunCustomOperationDTO)
     */
    public function run($params) {
        return $this->__run('run', array($params));
    }
    
    /**
     * Runs the callback for a custom operation of type external redirect.
     * The result is currently always sent with result type =
     * CustomOperationResultType#NOTIFICATION.
     * @param params Java type: org.cyclos.model.system.operations.RunExternalRedirectCallbackParams
     * @return Java type: org.cyclos.model.system.operations.RunCustomOperationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#runExternalRedirectCallback(org.cyclos.model.system.operations.RunExternalRedirectCallbackParams)
     */
    public function runExternalRedirectCallback($params) {
        return $this->__run('runExternalRedirectCallback', array($params));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the order according to the given operation ids
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->__run('saveOrder', array($ids));
    }
    
}

?>