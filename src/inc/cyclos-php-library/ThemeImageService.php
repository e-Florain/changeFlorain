<?php namespace Cyclos;

/**
 * Service for manipulating theme images. The parameter for saving images
 * is an object containing the theme identifier and the image type.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ThemeImageService extends Service {

    function __construct() {
        parent::__construct('themeImageService');
    }
    
    /**
     * Returns the image VO for the image with the given data, or throws an
     * EntityNotFoundException if the given image doesn't exist
     * @param themeId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.contentmanagement.themes.ThemeImageType     * @param name Java type: java.lang.String
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemeImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#getImageVO(java.lang.Long,%20org.cyclos.model.contentmanagement.themes.ThemeImageType,%20java.lang.String)
     */
    public function getImageVO($themeId, $type, $name) {
        return $this->__run('getImageVO', array($themeId, $type, $name));
    }
    
    /**
     * Lists the given theme's images of the given types
     * @param themeId Java type: java.lang.Long     * @param types Java type: java.util.Set
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#list(java.lang.Long,%20java.util.Set)
     */
    public function _list($themeId, $types) {
        return $this->__run('list', array($themeId, $types));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given image
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.images.ImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->__run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
}

?>