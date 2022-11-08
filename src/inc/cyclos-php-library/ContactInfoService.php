<?php namespace Cyclos;

/**
 * Service interface for additional contact information
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ContactInfoService extends Service {

    function __construct() {
        parent::__construct('contactInfoService');
    }
    
    /**
     * Returns the PasswordInputDTO for the confirmation password that would
     * be required if removing the entity with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#getConfirmationPasswordInputForRemove(java.lang.Long)
     */
    public function getConfirmationPasswordInputForRemove($id) {
        return $this->__run('getConfirmationPasswordInputForRemove', array($id));
    }
    
    /**
     * Returns information for listing additional contact info, together with
     * the list itself
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO     * @param includeCustomOperations Java type: boolean
     * @return Java type: org.cyclos.model.users.contactinfos.ContactInfoListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#getContactInfoListData(org.cyclos.model.users.users.UserLocatorVO,%20boolean)
     */
    public function getContactInfoListData($user, $includeCustomOperations) {
        return $this->__run('getContactInfoListData', array($user, $includeCustomOperations));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the entities associated with the given identifiers, checking
     * the confirmation password first (if enabled)
     * @param ids Java type: java.util.Collection     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#removeAllWithConfirmationPassword(java.util.Collection,%20java.lang.String)
     */
    public function removeAllWithConfirmationPassword($ids, $confirmationPassword) {
        $this->__run('removeAllWithConfirmationPassword', array($ids, $confirmationPassword));
    }
    
    /**
     * Removes an entity, checking the confirmation password first (if
     * enabled)
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#removeWithConfirmationPassword(java.lang.Long,%20java.lang.String)
     */
    public function removeWithConfirmationPassword($id, $confirmationPassword) {
        $this->__run('removeWithConfirmationPassword', array($id, $confirmationPassword));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the given object, returning the generated identifier, checking
     * the confirmation password first (if enabled)
     * @param object Java type: DTO     * @param confirmationPassword Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ContactInfoService.html#saveWithConfirmationPassword(DTO,%20java.lang.String)
     */
    public function saveWithConfirmationPassword($object, $confirmationPassword) {
        return $this->__run('saveWithConfirmationPassword', array($object, $confirmationPassword));
    }
    
}

?>