<?php namespace Cyclos;

/**
 * Service for manipulating voucher template images. The parameter for
 * saving images is an object containing the template identifier
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class VoucherTemplateImageService extends Service {

    function __construct() {
        parent::__construct('voucherTemplateImageService');
    }
    
    /**
     * Returns the image VO for the image with the given data, or throws an
     * EntityNotFoundException if the given image doesn't exist
     * @param voucherTemplateId Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.vouchertemplates.VoucherTemplateImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#getImageVO(java.lang.Long,%20java.lang.String)
     */
    public function getImageVO($voucherTemplateId, $name) {
        return $this->__run('getImageVO', array($voucherTemplateId, $name));
    }
    
    /**
     * Lists the given images for the given template
     * @param voucherTemplateId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#list(java.lang.Long)
     */
    public function _list($voucherTemplateId) {
        return $this->__run('list', array($voucherTemplateId));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given image
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.images.ImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->__run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/banking/VoucherTemplateImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
}

?>