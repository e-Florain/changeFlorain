<?php namespace Cyclos;

/**
 * Service for managing custom scripts
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CustomScriptService extends Service {

    function __construct() {
        parent::__construct('customScriptService');
    }
    
    /**
     * Returns a ZIP file containing the code for debugging the given script
     * @param script Java type: org.cyclos.model.system.scripts.CustomScriptVO
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#getCodeForDebug(org.cyclos.model.system.scripts.CustomScriptVO)
     */
    public function getCodeForDebug($script) {
        return $this->__run('getCodeForDebug', array($script));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data to run arbitrary scripts

     * @return Java type: org.cyclos.model.system.scripts.RunScriptData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#getRunData()
     */
    public function getRunData() {
        return $this->__run('getRunData', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Runs an arbitrary script, returning the result
     * @param params Java type: org.cyclos.model.system.scripts.RunScriptParams
     * @return Java type: org.cyclos.model.system.scripts.ScriptResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#run(org.cyclos.model.system.scripts.RunScriptParams)
     */
    public function run($params) {
        return $this->__run('run', array($params));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Lists all available custom scripts
     * @param params Java type: org.cyclos.model.system.scripts.CustomScriptQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CustomScriptService.html#search(org.cyclos.model.system.scripts.CustomScriptQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>