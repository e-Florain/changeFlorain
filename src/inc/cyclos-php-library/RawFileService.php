<?php namespace Cyclos;

/**
 * Service used to upload temp files and download the content of raw
 * files
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class RawFileService extends Service {

    function __construct() {
        parent::__construct('rawFileService');
    }
    
    /**
     * Lists the temporary files owned by the current user or guest. Guests
     * are matched by guest key or remote address if none is given
     * @param guestKey Java type: java.lang.String     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#listTemp(java.lang.String,%20org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function listTemp($guestKey, $customField) {
        return $this->__run('listTemp', array($guestKey, $customField));
    }
    
    /**
     * Loads a vo by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.utils.RawFileVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Reads the contents of the given file
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#readContent(java.lang.Long)
     */
    public function readContent($id) {
        return $this->__run('readContent', array($id));
    }
    
    /**
     * Removes the given file
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the files with the given ids
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#removeAll(java.util.List)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the name of the given file
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
    /**
     * Saves the given file content. Temporary files are used for
     * CustomFieldType#FILE custom field then it must be specified through
     * the <code>customFieldVO</code> parameter and it must contains also the
     * nature to allow load the correct custom field sub-class.
     * @param guestKey Java type: java.lang.String     * @param customFieldVO Java type: org.cyclos.model.system.fields.CustomFieldVO     * @param name Java type: java.lang.String     * @param contentType Java type: java.lang.String     * @param content Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: org.cyclos.model.utils.RawFileVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/RawFileService.html#saveTemp(java.lang.String,%20org.cyclos.model.system.fields.CustomFieldVO,%20java.lang.String,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function saveTemp($guestKey, $customFieldVO, $name, $contentType, $content) {
        return $this->__run('saveTemp', array($guestKey, $customFieldVO, $name, $contentType, $content));
    }
    
}

?>