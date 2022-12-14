<?php namespace Cyclos;

/**
 * Service used to perform the initial instance setup
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SetupService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class SetupService extends Service {

    function __construct() {
        parent::__construct('setupService');
    }
    
    /**
     * Performs the Cyclos instance setup
     * @param params Java type: org.cyclos.model.system.setup.SetupDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SetupService.html#setup(org.cyclos.model.system.setup.SetupDTO)
     */
    public function setup($params) {
        $this->__run('setup', array($params));
    }
    
}

?>