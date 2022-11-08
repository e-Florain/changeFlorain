<?php namespace Cyclos;

/**
 * Service interface to perform direct payments (scheduled and recurring
 * are not supported) originated form an EasyInvoice. An easy invoice is
 * a pre-filled payment to an user.<br> All methods in this service run
 * through the BuiltInChannel#EASY_INVOICE channel For searching and
 * retrieve information about a payment use the PaymentService.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class EasyInvoiceService extends Service {

    function __construct() {
        parent::__construct('easyInvoiceService');
    }
    
    /**
     * Generates a QR-Code image for the given PerformPaymentDTO
     * @param params Java type: org.cyclos.model.banking.transactions.EasyInvoiceBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#barcode(org.cyclos.model.banking.transactions.EasyInvoiceBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * Returns data for an easy invoice after logging in. Minimally, a owner
     * user is required. The amount either is not specified or a currency
     * must be resolved, in the same way as #prepareEasyInvoice The resulting
     * data will contain the resolved read-only custom field values. The
     * resulting PerformPaymentTypeData will contain the custom fields for
     * the missing values.
     * @param params Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.EasyInvoiceData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#getEasyInvoiceData(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function getEasyInvoiceData($params) {
        return $this->__run('getEasyInvoiceData', array($params));
    }
    
    /**
     * Same as PaymentService#perform but through the
     * BuiltInChannel#EASY_INVOICE channel
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#perform(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function perform($parameters) {
        return $this->__run('perform', array($parameters));
    }
    
    /**
     * Returns data for displaying details of an easy invoice while still as
     * guest. Minimally, the owner user is required. If an amount is
     * specified, it is required that a single currency is resolved. This can
     * be either because: <ul> <li>A payment type was specified</li> <li>A
     * currency was specified</li> <li>The destination user has a single
     * currency</li> </ul> The resulting user will be returned only if the
     * guest can search / view profile of that group. Without this
     * permission, a null user will be returned. However, if the user is not
     * found, a regular EntityNotFoundException will be thrown.
     * @param params Java type: org.cyclos.model.banking.transactions.PrepareEasyInvoiceParams
     * @return Java type: org.cyclos.model.banking.transactions.PrepareEasyInvoiceData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#prepareEasyInvoice(org.cyclos.model.banking.transactions.PrepareEasyInvoiceParams)
     */
    public function prepareEasyInvoice($params) {
        return $this->__run('prepareEasyInvoice', array($params));
    }
    
    /**
     * Previews a payment to be performed
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentPreviewVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#preview(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
    /**
     * Validates the parameters to perform a payment without actually
     * performing the payment. Attention: will only validate for required /
     * invalid fields, but will not check for balance, maximum amount per day
     * or other validations that require access to actual accounts.
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#validate(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function validate($parameters) {
        $this->__run('validate', array($parameters));
    }
    
}

?>