<?php namespace Cyclos;

/**
 * Service interface for agreement log operations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AgreementLogService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AgreementLogService extends Service {

    function __construct() {
        parent::__construct('agreementLogService');
    }
    
    /**
     * Marks the given pending agreements as accepted. It is validated that
     * all the currently pending agreements are accepted, ie, it is not
     * possible to accept a subset of the pending agreements
     * @param agreements Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AgreementLogService.html#acceptPending(java.util.Set)
     */
    public function acceptPending($agreements) {
        $this->__run('acceptPending', array($agreements));
    }
    
    /**
     * Returns agreements data for the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.agreements.UserAgreementsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AgreementLogService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Loads an AgreementLogVO by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.agreementlogs.AgreementLogVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AgreementLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Saves the accepted status for optional agreements
     * @param params Java type: org.cyclos.model.access.agreements.UserOptionalAgreementsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/AgreementLogService.html#saveOptional(org.cyclos.model.access.agreements.UserOptionalAgreementsDTO)
     */
    public function saveOptional($params) {
        $this->__run('saveOptional', array($params));
    }
    
}

?>