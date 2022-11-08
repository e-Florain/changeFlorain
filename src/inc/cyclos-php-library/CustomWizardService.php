<?php namespace Cyclos;

/**
 * Service for managing custom wizards
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CustomWizardService extends Service {

    function __construct() {
        parent::__construct('customWizardService');
    }
    
    /**
     * Backs one or more steps
     * @param params Java type: org.cyclos.model.system.wizards.CustomWizardBackParams
     * @return Java type: org.cyclos.model.system.wizards.CustomWizardExecutionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#back(org.cyclos.model.system.wizards.CustomWizardBackParams)
     */
    public function back($params) {
        return $this->__run('back', array($params));
    }
    
    /**
     * Cancels the execution with the given key
     * @param key Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#cancel(java.lang.String)
     */
    public function cancel($key) {
        $this->__run('cancel', array($key));
    }
    
    /**
     * Returns the execution data for the current wizard step
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.wizards.CustomWizardExecutionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#current(java.lang.String)
     */
    public function current($key) {
        return $this->__run('current', array($key));
    }
    
    /**
     * Prepares the redirection of the user to an external system.
     * @param params Java type: org.cyclos.model.system.wizards.CustomWizardTransitionParams
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#externalRedirect(org.cyclos.model.system.wizards.CustomWizardTransitionParams)
     */
    public function externalRedirect($params) {
        return $this->__run('externalRedirect', array($params));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Lists all available custom wizards

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Runs the callback for a step which performs such operation
     * @param params Java type: org.cyclos.model.system.wizards.RunExternalRedirectCallbackParams
     * @return Java type: org.cyclos.model.system.wizards.CustomWizardExecutionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#runExternalRedirectCallback(org.cyclos.model.system.wizards.RunExternalRedirectCallbackParams)
     */
    public function runExternalRedirectCallback($params) {
        return $this->__run('runExternalRedirectCallback', array($params));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the order according to the given wizard ids
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->__run('saveOrder', array($ids));
    }
    
    /**
     * Sends the verification code to either via email or by SMS, in order to
     * verify the given data. Each send medium can only be used every 30
     * seconds.
     * @param params Java type: org.cyclos.model.system.wizards.CustomWizardVerificationCodeParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#sendVerificationCode(org.cyclos.model.system.wizards.CustomWizardVerificationCodeParams)
     */
    public function sendVerificationCode($params) {
        $this->__run('sendVerificationCode', array($params));
    }
    
    /**
     * Starts the execution of a given wizard
     * @param params Java type: org.cyclos.model.system.wizards.StartCustomWizardParams
     * @return Java type: org.cyclos.model.system.wizards.CustomWizardExecutionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#start(org.cyclos.model.system.wizards.StartCustomWizardParams)
     */
    public function start($params) {
        return $this->__run('start', array($params));
    }
    
    /**
     * Transition a wizard between steps or finishes the wizard
     * @param params Java type: org.cyclos.model.system.wizards.CustomWizardTransitionParams
     * @return Java type: org.cyclos.model.system.wizards.CustomWizardExecutionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardService.html#transition(org.cyclos.model.system.wizards.CustomWizardTransitionParams)
     */
    public function transition($params) {
        return $this->__run('transition', array($params));
    }
    
}

?>