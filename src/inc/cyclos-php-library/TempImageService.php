<?php namespace Cyclos;

/**
 * Interface for temporary images
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TempImageService extends Service {

    function __construct() {
        parent::__construct('tempImageService');
    }
    
    /**
     * Lists the temporary images owned by the current user or guest for the
     * given target. Guests are matched by key (or remote address if none is
     * given)
     * @param params Java type: org.cyclos.model.system.images.NewTempImageParams
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html#list(org.cyclos.model.system.images.NewTempImageParams)
     */
    public function _list($params) {
        return $this->__run('list', array($params));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given image
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.images.ImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->__run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/TempImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
}

?>