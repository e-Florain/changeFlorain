<?php namespace Cyclos;

/**
 * Service used to manage vouchers
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class VoucherService extends Service {

    function __construct() {
        parent::__construct('voucherService');
    }
    
    /**
     * Changes the voucher PIN using the voucher information page.
     * @param token Java type: java.lang.String     * @param params Java type: org.cyclos.model.banking.vouchers.ActivateGiftVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherInfoVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#activateGiftVoucher(java.lang.String,%20org.cyclos.model.banking.vouchers.ActivateGiftVoucherDTO)
     */
    public function activateGiftVoucher($token, $params) {
        return $this->__run('activateGiftVoucher', array($token, $params));
    }
    
    /**
     * Assigns an unassigned, open generated voucher to a user
     * @param params Java type: org.cyclos.model.banking.vouchers.AssignVoucherDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#assign(org.cyclos.model.banking.vouchers.AssignVoucherDTO)
     */
    public function assign($params) {
        $this->__run('assign', array($params));
    }
    
    /**
     * Returns a barcode image of the token of the given voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.VoucherBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#barcode(org.cyclos.model.banking.vouchers.VoucherBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * Buys one or more vouchers
     * @param params Java type: org.cyclos.model.banking.vouchers.BuyVouchersDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherPackWithIdsVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#buy(org.cyclos.model.banking.vouchers.BuyVouchersDTO)
     */
    public function buy($params) {
        return $this->__run('buy', array($params));
    }
    
    /**
     * Cancels one or more vouchers
     * @param params Java type: org.cyclos.model.banking.vouchers.CancelVoucherDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#cancel(org.cyclos.model.banking.vouchers.CancelVoucherDTO)
     */
    public function cancel($params) {
        $this->__run('cancel', array($params));
    }
    
    /**
     * Changes the voucher expiration date according to the given
     * information.
     * @param params Java type: org.cyclos.model.banking.vouchers.ChangeVoucherExpirationDateDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#changeExpirationDate(org.cyclos.model.banking.vouchers.ChangeVoucherExpirationDateDTO)
     */
    public function changeExpirationDate($params) {
        $this->__run('changeExpirationDate', array($params));
    }
    
    /**
     * Change the voucher notifications settings using the voucher
     * information page.
     * @param token Java type: java.lang.String     * @param pin Java type: java.lang.String     * @param settings Java type: org.cyclos.model.banking.vouchers.SimpleChangeVoucherNotificationSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#changeInfoNotificationSettings(java.lang.String,%20java.lang.String,%20org.cyclos.model.banking.vouchers.SimpleChangeVoucherNotificationSettingsDTO)
     */
    public function changeInfoNotificationSettings($token, $pin, $settings) {
        $this->__run('changeInfoNotificationSettings', array($token, $pin, $settings));
    }
    
    /**
     * Changes the voucher PIN using the voucher information page.
     * @param token Java type: java.lang.String     * @param changeVoucherPin Java type: org.cyclos.model.banking.vouchers.SimpleChangeVoucherPinDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#changeInfoPin(java.lang.String,%20org.cyclos.model.banking.vouchers.SimpleChangeVoucherPinDTO)
     */
    public function changeInfoPin($token, $changeVoucherPin) {
        $this->__run('changeInfoPin', array($token, $changeVoucherPin));
    }
    
    /**
     * Change the voucher notifications settings using the voucher
     * information page.
     * @param settings Java type: org.cyclos.model.banking.vouchers.ChangeVoucherNotificationSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#changeNotificationSettings(org.cyclos.model.banking.vouchers.ChangeVoucherNotificationSettingsDTO)
     */
    public function changeNotificationSettings($settings) {
        $this->__run('changeNotificationSettings', array($settings));
    }
    
    /**
     * Changes the voucher PIN
     * @param changeVoucherPin Java type: org.cyclos.model.banking.vouchers.ChangeVoucherPinDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#changePin(org.cyclos.model.banking.vouchers.ChangeVoucherPinDTO)
     */
    public function changePin($changeVoucherPin) {
        $this->__run('changePin', array($changeVoucherPin));
    }
    
    /**
     * Generates a file with the voucher.
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param vo Java type: org.cyclos.model.banking.vouchers.VoucherTransactionVO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#exportTransaction(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.vouchers.VoucherTransactionVO)
     */
    public function exportTransaction($format, $vo) {
        return $this->__run('exportTransaction', array($format, $vo));
    }
    
    /**
     * Generates a file with the voucher. This operation is read/write
     * because it can update the voucher printed flag.
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param voucher Java type: org.cyclos.model.banking.vouchers.VoucherVO     * @param markAsPrinted Java type: boolean
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#exportVoucher(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.vouchers.VoucherVO,%20boolean)
     */
    public function exportVoucher($format, $voucher, $markAsPrinted) {
        return $this->__run('exportVoucher', array($format, $voucher, $markAsPrinted));
    }
    
    /**
     * Generates a file with the query result. This operation is read/write
     * because it can update the each voucher printed flag.
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.banking.vouchers.BasicVoucherQuery     * @param markAsPrinted Java type: boolean
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#exportVouchers(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.banking.vouchers.BasicVoucherQuery,%20boolean)
     */
    public function exportVouchers($format, $query, $markAsPrinted) {
        return $this->__run('exportVouchers', array($format, $query, $markAsPrinted));
    }
    
    /**
     * Returns the summary for a general vouchers search according to the
     * given filters
     * @param params Java type: org.cyclos.model.banking.vouchers.GeneralVoucherQuery
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#generalSearchSummary(org.cyclos.model.banking.vouchers.GeneralVoucherQuery)
     */
    public function generalSearchSummary($params) {
        return $this->__run('generalSearchSummary', array($params));
    }
    
    /**
     * Generates vouchers
     * @param params Java type: org.cyclos.model.banking.vouchers.GenerateVouchersDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherPackWithIdsVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#generate(org.cyclos.model.banking.vouchers.GenerateVouchersDTO)
     */
    public function generate($params) {
        return $this->__run('generate', array($params));
    }
    
    /**
     * Returns data used to buy a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.CreateVoucherDataParams
     * @return Java type: org.cyclos.model.banking.vouchers.BuyVoucherData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getBuyData(org.cyclos.model.banking.vouchers.CreateVoucherDataParams)
     */
    public function getBuyData($params) {
        return $this->__run('getBuyData', array($params));
    }
    
    /**
     * Returns data about a specific voucher
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a general vouchers search

     * @return Java type: org.cyclos.model.banking.vouchers.GeneralVouchersSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getGeneralSearchData()
     */
    public function getGeneralSearchData() {
        return $this->__run('getGeneralSearchData', array());
    }
    
    /**
     * Returns data which is needed for generating vouchers
     * @param params Java type: org.cyclos.model.banking.vouchers.CreateVoucherDataParams
     * @return Java type: org.cyclos.model.banking.vouchers.GenerateVouchersData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getGenerateData(org.cyclos.model.banking.vouchers.CreateVoucherDataParams)
     */
    public function getGenerateData($params) {
        return $this->__run('getGenerateData', array($params));
    }
    
    /**
     * Returns information about a voucher which is accessible as guest. If a
     * PIN is required, the object will be returned only with the token
     * (echoing the input token) and the pinInput field.
     * @param token Java type: java.lang.String     * @param pin Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherInfoVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getInfo(java.lang.String,%20java.lang.String)
     */
    public function getInfo($token, $pin) {
        return $this->__run('getInfo', array($token, $pin));
    }
    
    /**
     * Returns common data for displaying the voucher info application

     * @return Java type: org.cyclos.model.banking.vouchers.VoucherInfoData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getInfoData()
     */
    public function getInfoData() {
        return $this->__run('getInfoData', array());
    }
    
    /**
     * Returns data used to redeem a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.VoucherTransactionDataParams
     * @return Java type: org.cyclos.model.banking.vouchers.RedeemVoucherData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getRedeemData(org.cyclos.model.banking.vouchers.VoucherTransactionDataParams)
     */
    public function getRedeemData($params) {
        return $this->__run('getRedeemData', array($params));
    }
    
    /**
     * Returns data for starting a voucher redeeming
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.vouchers.InitialVoucherUserData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getRedeemInitialData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getRedeemInitialData($user) {
        return $this->__run('getRedeemInitialData', array($user));
    }
    
    /**
     * Returns data used to send a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.CreateVoucherDataParams
     * @return Java type: org.cyclos.model.banking.vouchers.BuyVoucherData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getSendData(org.cyclos.model.banking.vouchers.CreateVoucherDataParams)
     */
    public function getSendData($params) {
        return $this->__run('getSendData', array($params));
    }
    
    /**
     * Returns data used to top-up a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.VoucherTransactionDataParams
     * @return Java type: org.cyclos.model.banking.vouchers.TopUpVoucherData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getTopUpData(org.cyclos.model.banking.vouchers.VoucherTransactionDataParams)
     */
    public function getTopUpData($params) {
        return $this->__run('getTopUpData', array($params));
    }
    
    /**
     * Returns data for starting a voucher top-up
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.vouchers.InitialVoucherUserData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getTopUpInitialData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getTopUpInitialData($user) {
        return $this->__run('getTopUpInitialData', array($user));
    }
    
    /**
     * Returns details of a voucher transaction
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherTransactionData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getTransactionData(java.lang.Long)
     */
    public function getTransactionData($id) {
        return $this->__run('getTransactionData', array($id));
    }
    
    /**
     * Returns data for a searching redeemed vouchers of the given user
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherTransactionsSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getUserTransactionsSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserTransactionsSearchData($user) {
        return $this->__run('getUserTransactionsSearchData', array($user));
    }
    
    /**
     * Returns data for a searching vouchers of the given user
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.vouchers.UserVouchersSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#getUserVouchersSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserVouchersSearchData($user) {
        return $this->__run('getUserVouchersSearchData', array($user));
    }
    
    /**
     * Returns a voucher by token
     * @param token Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#loadByToken(java.lang.String)
     */
    public function loadByToken($token) {
        return $this->__run('loadByToken', array($token));
    }
    
    /**
     * Previews a voucher buying
     * @param params Java type: org.cyclos.model.banking.vouchers.BuyVouchersDTO
     * @return Java type: org.cyclos.model.banking.vouchers.BuyVoucherPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#previewBuy(org.cyclos.model.banking.vouchers.BuyVouchersDTO)
     */
    public function previewBuy($params) {
        return $this->__run('previewBuy', array($params));
    }
    
    /**
     * Previews the redeeming of a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.RedeemVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.RedeemVoucherPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#previewRedeem(org.cyclos.model.banking.vouchers.RedeemVoucherDTO)
     */
    public function previewRedeem($params) {
        return $this->__run('previewRedeem', array($params));
    }
    
    /**
     * Preview a voucher sending to an e-mail address
     * @param params Java type: org.cyclos.model.banking.vouchers.SendVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.BuyVoucherPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#previewSend(org.cyclos.model.banking.vouchers.SendVoucherDTO)
     */
    public function previewSend($params) {
        return $this->__run('previewSend', array($params));
    }
    
    /**
     * Previews the top-up of a voucher
     * @param params Java type: org.cyclos.model.banking.vouchers.TopUpVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.TopUpVoucherPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#previewTopUp(org.cyclos.model.banking.vouchers.TopUpVoucherDTO)
     */
    public function previewTopUp($params) {
        return $this->__run('previewTopUp', array($params));
    }
    
    /**
     * Redeems a voucher, returning the generated voucher id
     * @param params Java type: org.cyclos.model.banking.vouchers.RedeemVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherTransactionResultVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#redeem(org.cyclos.model.banking.vouchers.RedeemVoucherDTO)
     */
    public function redeem($params) {
        return $this->__run('redeem', array($params));
    }
    
    /**
     * Re-sends the e-mail for a sent voucher
     * @param voucher Java type: org.cyclos.model.banking.vouchers.VoucherVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#resendEmail(org.cyclos.model.banking.vouchers.VoucherVO)
     */
    public function resendEmail($voucher) {
        $this->__run('resendEmail', array($voucher));
    }
    
    /**
     * Re-send the voucher pin to the mediums (email/mobile phone) associated
     * to the voucher (if any)
     * @param token Java type: java.lang.String     * @param captcha Java type: org.cyclos.model.access.CaptchaResponseDTO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#resendPin(java.lang.String,%20org.cyclos.model.access.CaptchaResponseDTO)
     */
    public function resendPin($token, $captcha) {
        return $this->__run('resendPin', array($token, $captcha));
    }
    
    /**
     * Performs a general vouchers search according to the given filters
     * @param params Java type: org.cyclos.model.banking.vouchers.GeneralVoucherQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#searchGeneral(org.cyclos.model.banking.vouchers.GeneralVoucherQuery)
     */
    public function searchGeneral($params) {
        return $this->__run('searchGeneral', array($params));
    }
    
    /**
     * Searches for voucher transactions according to the given filters
     * @param params Java type: org.cyclos.model.banking.vouchers.VoucherInfoTransactionsQuery     * @param pin Java type: java.lang.String
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#searchInfoTransactions(org.cyclos.model.banking.vouchers.VoucherInfoTransactionsQuery,%20java.lang.String)
     */
    public function searchInfoTransactions($params, $pin) {
        return $this->__run('searchInfoTransactions', array($params, $pin));
    }
    
    /**
     * Searches for voucher transactions according to the given filters
     * @param params Java type: org.cyclos.model.banking.vouchers.VoucherTransactionsQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#searchTransactions(org.cyclos.model.banking.vouchers.VoucherTransactionsQuery)
     */
    public function searchTransactions($params) {
        return $this->__run('searchTransactions', array($params));
    }
    
    /**
     * Searches for user vouchers according to the given filters
     * @param params Java type: org.cyclos.model.banking.vouchers.UserVoucherQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#searchUser(org.cyclos.model.banking.vouchers.UserVoucherQuery)
     */
    public function searchUser($params) {
        return $this->__run('searchUser', array($params));
    }
    
    /**
     * Sends a voucher to an e-mail address
     * @param params Java type: org.cyclos.model.banking.vouchers.SendVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherPackWithIdsVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#send(org.cyclos.model.banking.vouchers.SendVoucherDTO)
     */
    public function send($params) {
        return $this->__run('send', array($params));
    }
    
    /**
     * Performs a top-up of a voucher. If the voucher is inactive, activates
     * it.
     * @param params Java type: org.cyclos.model.banking.vouchers.TopUpVoucherDTO
     * @return Java type: org.cyclos.model.banking.vouchers.VoucherTransactionResultVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#topUp(org.cyclos.model.banking.vouchers.TopUpVoucherDTO)
     */
    public function topUp($params) {
        return $this->__run('topUp', array($params));
    }
    
    /**
     * Unblocks a voucher in the VoucherStatus#BLOCKED status
     * @param params Java type: org.cyclos.model.banking.vouchers.UnblockVoucherParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#unblock(org.cyclos.model.banking.vouchers.UnblockVoucherParams)
     */
    public function unblock($params) {
        $this->__run('unblock', array($params));
    }
    
    /**
     * Manually unblocks a voucher PIN that was blocked by exceeding tries
     * @param voucher Java type: org.cyclos.model.banking.vouchers.VoucherVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherService.html#unblockPin(org.cyclos.model.banking.vouchers.VoucherVO)
     */
    public function unblockPin($voucher) {
        $this->__run('unblockPin', array($voucher));
    }
    
}

?>