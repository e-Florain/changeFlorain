<?php namespace Cyclos;

/**
 * Service for managing voucher templates
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class VoucherTemplateService extends Service {

    function __construct() {
        parent::__construct('voucherTemplateService');
    }
    
    /**
     * Exports the voucher template in a single HTML to aid development
     * @param dto Java type: org.cyclos.model.banking.vouchertemplates.VoucherTemplateDTO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#exportHTML(org.cyclos.model.banking.vouchertemplates.VoucherTemplateDTO)
     */
    public function exportHTML($dto) {
        return $this->__run('exportHTML', array($dto));
    }
    
    /**
     * Exports the voucher template with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#exportTemplate(java.lang.Long)
     */
    public function exportTemplate($id) {
        return $this->__run('exportTemplate', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Imports a template from file
     * @param in Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#importTemplate(org.cyclos.server.utils.SerializableInputStream)
     */
    public function importTemplate($in) {
        return $this->__run('importTemplate', array($in));
    }
    
    /**
     * Returns a list with all voucher templates

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#list()
     */
    public function _list() {
        return $this->__run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Previews a voucher printing with a given template
     * @param type Java type: org.cyclos.model.banking.vouchertypes.VoucherTypeVO     * @param dto Java type: org.cyclos.model.banking.vouchertemplates.VoucherTemplateDTO
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#preview(org.cyclos.model.banking.vouchertypes.VoucherTypeVO,%20org.cyclos.model.banking.vouchertemplates.VoucherTemplateDTO)
     */
    public function preview($type, $dto) {
        return $this->__run('preview', array($type, $dto));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
}

?>