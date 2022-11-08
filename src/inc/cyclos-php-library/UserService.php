<?php namespace Cyclos;

/**
 * Service interface for user operations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class UserService extends Service {

    function __construct() {
        parent::__construct('userService');
    }
    
    /**
     * Exports the user search results to a file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param params Java type: org.cyclos.model.users.users.UserQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#exportUsers(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.users.users.UserQuery)
     */
    public function exportUsers($format, $params) {
        return $this->__run('exportUsers', array($format, $params));
    }
    
    /**
     * Returns the ActiveConfigurationData, containing all the actual
     * configuration for the user matching the given locator
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getActiveConfiguration(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getActiveConfiguration($locator) {
        return $this->__run('getActiveConfiguration', array($locator));
    }
    
    /**
     * Returns the PasswordInputDTO for the confirmation password that would
     * be required if removing the entity with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getConfirmationPasswordInputForRemove(java.lang.Long)
     */
    public function getConfirmationPasswordInputForRemove($id) {
        return $this->__run('getConfirmationPasswordInputForRemove', array($id));
    }
    
    /**
     * Returns the current user logged in

     * @return Java type: org.cyclos.model.users.users.UserWithRolesVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getCurrentUser()
     */
    public function getCurrentUser() {
        return $this->__run('getCurrentUser', array());
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for registering a user from the public registration
     * @param group Java type: org.cyclos.model.users.groups.InitialGroupVO     * @param inviteToken Java type: java.lang.String
     * @return Java type: org.cyclos.model.users.users.PublicRegistrationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getPublicRegistrationData(org.cyclos.model.users.groups.InitialGroupVO,%20java.lang.String)
     */
    public function getPublicRegistrationData($group, $inviteToken) {
        return $this->__run('getPublicRegistrationData', array($group, $inviteToken));
    }
    
    /**
     * Return the list of groups guests user can register

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getPublicRegistrationGroups()
     */
    public function getPublicRegistrationGroups() {
        return $this->__run('getPublicRegistrationGroups', array());
    }
    
    /**
     * Gets data used on the search page, according to the given search type
     * @param context Java type: org.cyclos.model.users.users.UserSearchContext     * @param broker Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.UserSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getSearchData(org.cyclos.model.users.users.UserSearchContext,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($context, $broker) {
        return $this->__run('getSearchData', array($context, $broker));
    }
    
    /**
     * Return the list of groups the logged user can register new users.
     * @param asMember Java type: boolean
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getUserRegistrationGroups(boolean)
     */
    public function getUserRegistrationGroups($asMember) {
        return $this->__run('getUserRegistrationGroups', array($asMember));
    }
    
    /**
     * Return a ViewProfileData for the user matching the given locator
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.ViewProfileData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#getViewProfileData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getViewProfileData($locator) {
        return $this->__run('getViewProfileData', array($locator));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Locates a user by a customizable key. Fields are attempted in the
     * following order (<b>only</b> the first non-blank field will be used
     * for the search): <ul> <li>Id</li> <li>Username</li> <li>E-mail</li>
     * <li>Field value with field's id</li> <li>Field value with field's
     * internal name</li> <li>Mobile phone</li> </ul>
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.UserVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#locate(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function locate($locator) {
        return $this->__run('locate', array($locator));
    }
    
    /**
     * Registers a user from a public registration
     * @param user Java type: org.cyclos.model.users.users.PublicRegistrationDTO
     * @return Java type: org.cyclos.model.users.users.UserRegistrationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#publicRegister(org.cyclos.model.users.users.PublicRegistrationDTO)
     */
    public function publicRegister($user) {
        return $this->__run('publicRegister', array($user));
    }
    
    /**
     * Registers a user
     * @param user Java type: org.cyclos.model.users.users.UserRegistrationDTO
     * @return Java type: org.cyclos.model.users.users.UserRegistrationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#register(org.cyclos.model.users.users.UserRegistrationDTO)
     */
    public function register($user) {
        return $this->__run('register', array($user));
    }
    
    /**
     * Registers a user by a regular member.
     * @param user Java type: org.cyclos.model.users.users.UserRegistrationByMemberDTO
     * @return Java type: org.cyclos.model.users.users.UserRegistrationResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#registerByMember(org.cyclos.model.users.users.UserRegistrationByMemberDTO)
     */
    public function registerByMember($user) {
        return $this->__run('registerByMember', array($user));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the entities associated with the given identifiers, checking
     * the confirmation password first (if enabled)
     * @param ids Java type: java.util.Collection     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#removeAllWithConfirmationPassword(java.util.Collection,%20java.lang.String)
     */
    public function removeAllWithConfirmationPassword($ids, $confirmationPassword) {
        $this->__run('removeAllWithConfirmationPassword', array($ids, $confirmationPassword));
    }
    
    /**
     * Removes an entity, checking the confirmation password first (if
     * enabled)
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#removeWithConfirmationPassword(java.lang.Long,%20java.lang.String)
     */
    public function removeWithConfirmationPassword($id, $confirmationPassword) {
        $this->__run('removeWithConfirmationPassword', array($id, $confirmationPassword));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Saves the given object, returning the generated identifier, checking
     * the confirmation password first (if enabled)
     * @param object Java type: DTO     * @param confirmationPassword Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#saveWithConfirmationPassword(DTO,%20java.lang.String)
     */
    public function saveWithConfirmationPassword($object, $confirmationPassword) {
        return $this->__run('saveWithConfirmationPassword', array($object, $confirmationPassword));
    }
    
    /**
     * Search users according to the specified query parameters. The returned
     * objects will either contain the BasicUserVO#DISPLAY and
     * BasicUserVO#SHORT_DISPLAY properties filled in or specific profile
     * fields, depending on the products (permissions) of the viewing user.
     * If there are profile fields marked to be returned, display and short
     * display are not returned, as in most cases it would mean repeated
     * information.
     * @param query Java type: org.cyclos.model.users.users.UserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#search(org.cyclos.model.users.users.UserQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Validates a field for user registration. The group must be a group
     * allowed for registration. The field should be either an alias of a
     * BasicProfileField#getByAlias or the internal name of a custom field,
     * and must be valid for the given group. The value should be a valid
     * reference value, just as accepted by
     * CustomFieldValueDTO#setReferenceValue
     * @param params Java type: org.cyclos.model.users.users.ValidateRegistrationFieldParams
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/UserService.html#validateRegistrationField(org.cyclos.model.users.users.ValidateRegistrationFieldParams)
     */
    public function validateRegistrationField($params) {
        return $this->__run('validateRegistrationField', array($params));
    }
    
}

?>