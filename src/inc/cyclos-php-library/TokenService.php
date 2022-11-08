<?php namespace Cyclos;

/**
 * Service for managing tokens, NFC tokens and NFC devices
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TokenService extends Service {

    function __construct() {
        parent::__construct('tokenService');
    }
    
    /**
     * Searches for a token with the given type and value specified in the
     * TokenActionDTO parameter.<br> The token's status must be
     * TokenStatus#UNASSIGNED orTokenStatus#PENDING_ACTIVATION but assigned
     * to the logged user or one of its operators.<br> If the token is
     * unassigned then this method assigns it to the user specified by the
     * UserLocatorVO parameter and change its status to
     * TokenStatus#ACTIVE.<br> Otherwise (the token is already assigned and
     * is pending by activation) it activates only.<br> This method can be
     * used only by members (i.e. not administrators) with permission to
     * activate the corresponding TokenPrincipalTypeVO. For administrators /
     * brokers, see #activatePending
     * @param dto Java type: org.cyclos.model.access.tokens.TokenActionDTO     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#activate(org.cyclos.model.access.tokens.TokenActionDTO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function activate($dto, $locator) {
        return $this->__run('activate', array($dto, $locator));
    }
    
    /**
     * Activates an already assigned token with status
     * TokenStatus#PENDING_ACTIVATION.<br> This operation can only be done by
     * admins/brokers over tokens of managed users or member over tokens of
     * its operators with permission to activate the corresponding
     * TokenPrincipalTypeVO.
     * @param tokenId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#activatePending(java.lang.Long)
     */
    public function activatePending($tokenId) {
        $this->__run('activatePending', array($tokenId));
    }
    
    /**
     * Assigns a pending token to a user, leaving it in pending status The
     * token status must be TokenStatus#UNASSIGNED.
     * @param tokenId Java type: java.lang.Long     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#assign(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function assign($tokenId, $user) {
        $this->__run('assign', array($tokenId, $user));
    }
    
    /**
     * Returns a barcode image of the token
     * @param params Java type: org.cyclos.model.access.tokens.TokenBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#barcode(org.cyclos.model.access.tokens.TokenBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * Blocks the given token
     * @param tokenId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#block(java.lang.Long)
     */
    public function block($tokenId) {
        $this->__run('block', array($tokenId));
    }
    
    /**
     * Cancels the given token
     * @param tokenId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#cancel(java.lang.Long)
     */
    public function cancel($tokenId) {
        $this->__run('cancel', array($tokenId));
    }
    
    /**
     * Cancels the given NFC token. Admins and brokers with permissions can
     * cancel a NFC token of type TokenType#NFC_TAG.<br> In case of a NFC
     * token of type TokenType#NFC_DEVICE only the logged user can cancel its
     * own token.
     * @param dto Java type: org.cyclos.model.access.tokens.TokenActionDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#cancelNFCToken(org.cyclos.model.access.tokens.TokenActionDTO)
     */
    public function cancelNFCToken($dto) {
        $this->__run('cancelNFCToken', array($dto));
    }
    
    /**
     * Creates a new pending device confirmation for the specified user. The
     * logged user will be notified after the confirmation was processed. It
     * has the same security controls as for TokenService#personalizeNFCTag,
     * that is the logged user must be allowed to personalize a NFC Tag for
     * the specified user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param tokenTypeVO Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#createDeviceConfirmationForPersonalizeNFCTag(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO)
     */
    public function createDeviceConfirmationForPersonalizeNFCTag($locator, $tokenTypeVO) {
        return $this->__run('createDeviceConfirmationForPersonalizeNFCTag', array($locator, $tokenTypeVO));
    }
    
    /**
     * Generates a two-dimensional barcode (QR code), only if the
     * confirmation was not already approved nor rejected for the given
     * payer. It has the same security controls as for
     * TokenService#personalizeNFCTag, that is the logged user must be
     * allowed to personalize a NFC Tag for the specified user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param tokenTypeVO Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param params Java type: org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#deviceConfirmationBarcodeForPersonalizeNFCTag(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams)
     */
    public function deviceConfirmationBarcodeForPersonalizeNFCTag($locator, $tokenTypeVO, $params) {
        return $this->__run('deviceConfirmationBarcodeForPersonalizeNFCTag', array($locator, $tokenTypeVO, $params));
    }
    
    /**
     * Exports the token search results to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.access.tokens.TokenQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#exportTokens(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.access.tokens.TokenQuery)
     */
    public function exportTokens($format, $query) {
        return $this->__run('exportTokens', array($format, $query));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data with the token types available to initialize a blank NFC
     * tag.<br> The available tokens to personalize the tag are returned too
     * to allow initialization and personalization at the same time. Only
     * allowed for managers (Brokers &amp; Administrators).

     * @return Java type: org.cyclos.model.access.tokens.InitializeNFCTagData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getInitializeNFCTagData()
     */
    public function getInitializeNFCTagData() {
        return $this->__run('getInitializeNFCTagData', array());
    }
    
    /**
     * Returns data for listing tokens of a given type and user
     * @param tokenType Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.tokens.TokensListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getListData(org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getListData($tokenType, $user) {
        return $this->__run('getListData', array($tokenType, $user));
    }
    
    /**
     * Returns data needed to personalize a NFC tag for the specified type
     * and user.<br> The PersonalizeNFCTagData#CONFIRMATION_PASSWORD_INPUT
     * will be null if the logged user manages the given user. The
     * PersonalizeNFCTagData#TOKEN_TYPE is the token principal type the tag
     * was initialized for.
     * @param tokenType Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.tokens.PersonalizeNFCTagData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getPersonalizeNFCTagData(org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getPersonalizeNFCTagData($tokenType, $locator) {
        return $this->__run('getPersonalizeNFCTagData', array($tokenType, $locator));
    }
    
    /**
     * Returns data for searching tokens
     * @param tokenType Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO
     * @return Java type: org.cyclos.model.access.tokens.TokenSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#getSearchData(org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO)
     */
    public function getSearchData($tokenType) {
        return $this->__run('getSearchData', array($tokenType));
    }
    
    /**
     * Initializes and optionally personalize a NFC tag with the given data.
     * If the NFCTagInitializeDTO#getUser is not null then the token will be
     * personalized for that user too. Returns the private keys (PICC Master
     * Key (i.e. PMK), Application Master Key (i.e. AMK) and Operational key)
     * to be stored into the tag.<br> Only allowed for managers (Brokers
     * &amp; Administrators).
     * @param dto Java type: org.cyclos.model.access.tokens.NFCTagInitializeDTO
     * @return Java type: org.cyclos.model.access.tokens.InitializeNFCTagResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#initializeNFCTag(org.cyclos.model.access.tokens.NFCTagInitializeDTO)
     */
    public function initializeNFCTag($dto) {
        return $this->__run('initializeNFCTag', array($dto));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Personalizes a NFC tag for the given user. If the logged user doesn't
     * manages the user then the confirmation password of that user is
     * required. This method requires a successful previous external
     * authentication ( #requestForExternalAuthenticate)<br> The required
     * NFCTagPersonalizeDTO#CYCLOS_CHALLENGE is the encrypted (hexadecimal
     * string) challenge generated by the server (returned in the previous
     * external authenticate) used to ensure the tag presence (internal
     * authenticate)
     * @param dto Java type: org.cyclos.model.access.tokens.NFCTagPersonalizeDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#personalizeNFCTag(org.cyclos.model.access.tokens.NFCTagPersonalizeDTO)
     */
    public function personalizeNFCTag($dto) {
        $this->__run('personalizeNFCTag', array($dto));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes a device confirmation for the given user. It has the same
     * security controls as for TokenService#personalizeNFCTag, that is the
     * logged user must be allowed to personalize a NFC Tag for the specified
     * user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param tokenTypeVO Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param deviceConfirmationId Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#removeDeviceConfirmationForPersonalizeNFCTag(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20java.lang.String)
     */
    public function removeDeviceConfirmationForPersonalizeNFCTag($locator, $tokenTypeVO, $deviceConfirmationId) {
        $this->__run('removeDeviceConfirmationForPersonalizeNFCTag', array($locator, $tokenTypeVO, $deviceConfirmationId));
    }
    
    /**
     * This method must be invoked to start a mutual authentication process
     * between the server and the NFC tag (e.g. a card) to prove that both
     * share the same secret key.<br> The authentication process is carried
     * out in the following order: <ul> <li>Validate the identity of the
     * server: <b>external authenticate</b></li> <li>Validate the identity of
     * the NFc tag: <b>internal authenticate</b></li> </ul>
     * @param dto Java type: org.cyclos.model.access.tokens.ExternalNFCTagAuthenticateDTO
     * @return Java type: org.cyclos.model.access.tokens.ExternalNFCTagAuthenticateData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#requestForExternalAuthenticate(org.cyclos.model.access.tokens.ExternalNFCTagAuthenticateDTO)
     */
    public function requestForExternalAuthenticate($dto) {
        return $this->__run('requestForExternalAuthenticate', array($dto));
    }
    
    /**
     * Generates a new OTP (removing any previous password, if any) and sends
     * it to the user by the specified medium using the confirmation password
     * type set for the BuiltInChannel#POS channel for the specified
     * user.<br> It has the same security controls as for
     * TokenService#personalizeNFCTag, that is the logged user must be
     * allowed to personalize a NFC Tag for the specified user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param tokenTypeVO Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param medium Java type: org.cyclos.model.utils.SendMedium
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#requestNewOTPForPersonalizeNFCTag(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20org.cyclos.model.utils.SendMedium)
     */
    public function requestNewOTPForPersonalizeNFCTag($locator, $tokenTypeVO, $medium) {
        $this->__run('requestNewOTPForPersonalizeNFCTag', array($locator, $tokenTypeVO, $medium));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for tokens. This method can only be user by administrators or
     * brokers.
     * @param query Java type: org.cyclos.model.access.tokens.TokenQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#search(org.cyclos.model.access.tokens.TokenQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Changes the token activation deadline date. The token status must be
     * either TokenStatus#PENDING_ACTIVATION or
     * TokenStatus#ACTIVATION_EXPIRED.
     * @param tokenId Java type: java.lang.Long     * @param date Java type: org.cyclos.utils.DateTime
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#setActivationDeadline(java.lang.Long,%20org.cyclos.utils.DateTime)
     */
    public function setActivationDeadline($tokenId, $date) {
        $this->__run('setActivationDeadline', array($tokenId, $date));
    }
    
    /**
     * Changes the token expiry date. The token status must be either
     * TokenStatus#ACTIVE, TokenStatus#BLOCKED or TokenStatus#EXPIRED.
     * @param tokenId Java type: java.lang.Long     * @param date Java type: org.cyclos.utils.DateTime
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#setExpiryDate(java.lang.Long,%20org.cyclos.utils.DateTime)
     */
    public function setExpiryDate($tokenId, $date) {
        $this->__run('setExpiryDate', array($tokenId, $date));
    }
    
    /**
     * Unblocks the given token
     * @param tokenId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#unblock(java.lang.Long)
     */
    public function unblock($tokenId) {
        $this->__run('unblock', array($tokenId));
    }
    
    /**
     * Loads the details of a confirmation belonging to the given user. It
     * has the same security controls as for TokenService#personalizeNFCTag,
     * that is the logged user must be allowed to personalize a NFC Tag for
     * the specified user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param tokenTypeVO Java type: org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO     * @param deviceConfirmationId Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/TokenService.html#viewDeviceConfirmationForPersonalizeNFCTag(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.access.principaltypes.TokenPrincipalTypeVO,%20java.lang.String)
     */
    public function viewDeviceConfirmationForPersonalizeNFCTag($locator, $tokenTypeVO, $deviceConfirmationId) {
        return $this->__run('viewDeviceConfirmationForPersonalizeNFCTag', array($locator, $tokenTypeVO, $deviceConfirmationId));
    }
    
}

?>