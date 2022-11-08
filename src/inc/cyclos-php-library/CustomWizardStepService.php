<?php namespace Cyclos;

/**
 * Service for managing custom wizard seps
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CustomWizardStepService extends Service {

    function __construct() {
        parent::__construct('customWizardStepService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Lists all steps for the given wizard
     * @param wizard Java type: org.cyclos.model.system.wizards.CustomWizardVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#list(org.cyclos.model.system.wizards.CustomWizardVO)
     */
    public function _list($wizard) {
        return $this->__run('list', array($wizard));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the order according to the given steps ids. All must belong to
     * the same wizard
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomWizardStepService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->__run('saveOrder', array($ids));
    }
    
}

?>