<?php namespace Cyclos;

/**
 * Service for managing a user's passwords
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PasswordService extends Service {

    function __construct() {
        parent::__construct('passwordService');
    }
    
    /**
     * Activates a password whose mode is PasswordMode#GENERATED creating a
     * new password for the current user.
     * @param passwordType Java type: org.cyclos.model.access.passwordtypes.PasswordTypeVO
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#activate(org.cyclos.model.access.passwordtypes.PasswordTypeVO)
     */
    public function activate($passwordType) {
        return $this->__run('activate', array($passwordType));
    }
    
    /**
     * Allows the given user to activate the given generated and pending
     * password
     * @param params Java type: org.cyclos.model.access.passwords.PasswordActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#allowActivation(org.cyclos.model.access.passwords.PasswordActionDTO)
     */
    public function allowActivation($params) {
        $this->__run('allowActivation', array($params));
    }
    
    /**
     * Manually changes a password
     * @param dto Java type: org.cyclos.model.access.passwords.ChangePasswordDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#change(org.cyclos.model.access.passwords.ChangePasswordDTO)
     */
    public function change($dto) {
        $this->__run('change', array($dto));
    }
    
    /**
     * Changes a manual password leaving as PasswordStatus#ACTIVE, or if
     * generated, send a new one (leaving as PasswordStatus#ACTIVE or
     * PasswordStatus#RESET whether the user has the change permission or
     * not)
     * @param dto Java type: org.cyclos.model.access.passwords.ChangeForgottenPasswordDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#changeForgottenPassword(org.cyclos.model.access.passwords.ChangeForgottenPasswordDTO)
     */
    public function changeForgottenPassword($dto) {
        $this->__run('changeForgottenPassword', array($dto));
    }
    
    /**
     * Disables a password. A disabled password cannot be used again, unless
     * re-enabled
     * @param params Java type: org.cyclos.model.access.passwords.PasswordActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#disable(org.cyclos.model.access.passwords.PasswordActionDTO)
     */
    public function disable($params) {
        $this->__run('disable', array($params));
    }
    
    /**
     * Enables a disabled password. A disabled password cannot be used again,
     * unless re-enabled
     * @param params Java type: org.cyclos.model.access.passwords.PasswordActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#enable(org.cyclos.model.access.passwords.PasswordActionDTO)
     */
    public function enable($params) {
        $this->__run('enable', array($params));
    }
    
    /**
     * Initiates the forgot password operation, sending a code either by
     * e-mail or SMS to the user. May also require a security question
     * verification. Returns the e-mail address of phone numbers the code was
     * sent to. The value will be masked if not the same one as requested in
     * the params.
     * @param params Java type: org.cyclos.model.access.passwords.ForgotPasswordRequestDTO
     * @return Java type: org.cyclos.model.access.passwords.ForgotPasswordRequestResponse
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#forgotPasswordRequest(org.cyclos.model.access.passwords.ForgotPasswordRequestDTO)
     */
    public function forgotPasswordRequest($params) {
        return $this->__run('forgotPasswordRequest', array($params));
    }
    
    /**
     * Allows to change a generated password by generating a new one
     * @param params Java type: org.cyclos.model.access.passwords.ChangeGeneratedPasswordDTO
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#generateNew(org.cyclos.model.access.passwords.ChangeGeneratedPasswordDTO)
     */
    public function generateNew($params) {
        return $this->__run('generateNew', array($params));
    }
    
    /**
     * Returns data for a forgot password change request
     * @param params Java type: org.cyclos.model.access.passwords.GetChangeForgottenPasswordDataParams
     * @return Java type: org.cyclos.model.access.passwords.ChangeForgottenPasswordData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#getChangeForgottenPasswordData(org.cyclos.model.access.passwords.GetChangeForgottenPasswordDataParams)
     */
    public function getChangeForgottenPasswordData($params) {
        return $this->__run('getChangeForgottenPasswordData', array($params));
    }
    
    /**
     * Returns data for change the main/secondary access password (manual or
     * generated)
     * @param changeSecondaryPassword Java type: boolean
     * @return Java type: org.cyclos.model.access.passwords.ChangePasswordData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#getChangePasswordData(boolean)
     */
    public function getChangePasswordData($changeSecondaryPassword) {
        return $this->__run('getChangePasswordData', array($changeSecondaryPassword));
    }
    
    /**
     * Returns data for user passwords
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.passwords.UserPasswordsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Returns data for a given password of the given user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param type Java type: org.cyclos.model.access.passwordtypes.PasswordTypeVO
     * @return Java type: org.cyclos.model.access.passwords.PasswordData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#getPasswordData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.passwordtypes.PasswordTypeVO)
     */
    public function getPasswordData($locator, $type) {
        return $this->__run('getPasswordData', array($locator, $type));
    }
    
    /**
     * Returns data used to set the security question

     * @return Java type: org.cyclos.model.access.passwords.SetSecurityQuestionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#getSetSecurityQuestionData()
     */
    public function getSetSecurityQuestionData() {
        return $this->__run('getSetSecurityQuestionData', array());
    }
    
    /**
     * Generates a new OTP (removing any previous password, if any) and sends
     * it by the specified medium using the confirmation mode configured the
     * given channel for the logged user. If the channel is null then it use
     * the current channel.
     * @param medium Java type: org.cyclos.model.utils.SendMedium     * @param channel Java type: java.lang.String     * @param mobilePhonesIds Java type: java.util.List
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#requestNewOTP(org.cyclos.model.utils.SendMedium,%20java.lang.String,%20java.util.List)
     */
    public function requestNewOTP($medium, $channel, $mobilePhonesIds) {
        return $this->__run('requestNewOTP', array($medium, $channel, $mobilePhonesIds));
    }
    
    /**
     * Same as #requestNewOTP but using the secondary password type
     * configured in the current channel for the logged user.
     * @param medium Java type: org.cyclos.model.utils.SendMedium     * @param mobilePhonesIds Java type: java.util.List
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#requestNewOTPForSecondaryPassword(org.cyclos.model.utils.SendMedium,%20java.util.List)
     */
    public function requestNewOTPForSecondaryPassword($medium, $mobilePhonesIds) {
        return $this->__run('requestNewOTPForSecondaryPassword', array($medium, $mobilePhonesIds));
    }
    
    /**
     * Resets the given generated password and allow it to be activated again
     * @param params Java type: org.cyclos.model.access.passwords.PasswordActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#reset(org.cyclos.model.access.passwords.PasswordActionDTO)
     */
    public function reset($params) {
        $this->__run('reset', array($params));
    }
    
    /**
     * Generates a new value of a manual password and send it to the user
     * (for example, via e-mail). If the password is generated, it will be
     * initially active. If it is manual, it will keep the status
     * PasswordStatus#RESET, forcing the user to change it.
     * @param params Java type: org.cyclos.model.access.passwords.ResetAndSendPasswordDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#resetAndSend(org.cyclos.model.access.passwords.ResetAndSendPasswordDTO)
     */
    public function resetAndSend($params) {
        $this->__run('resetAndSend', array($params));
    }
    
    /**
     * Resets the security question, forcing the user to set a new one in the
     * next login
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#resetSecurityQuestion(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function resetSecurityQuestion($locator) {
        $this->__run('resetSecurityQuestion', array($locator));
    }
    
    /**
     * Sets the security question's answer for the logged user
     * @param params Java type: org.cyclos.model.access.passwords.SetSecurityQuestionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#setSecurityQuestion(org.cyclos.model.access.passwords.SetSecurityQuestionDTO)
     */
    public function setSecurityQuestion($params) {
        $this->__run('setSecurityQuestion', array($params));
    }
    
    /**
     * Unblocks the given user password
     * @param params Java type: org.cyclos.model.access.passwords.PasswordActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/PasswordService.html#unblock(org.cyclos.model.access.passwords.PasswordActionDTO)
     */
    public function unblock($params) {
        $this->__run('unblock', array($params));
    }
    
}

?>