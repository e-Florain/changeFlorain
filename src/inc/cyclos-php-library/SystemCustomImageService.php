<?php namespace Cyclos;

/**
 * Service interface for system custom images. The parameter for saving
 * new images is the system image category id.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class SystemCustomImageService extends Service {

    function __construct() {
        parent::__construct('systemCustomImageService');
    }
    
    /**
     * Returns accessible view and manage image categories for the logged
     * user

     * @return Java type: org.cyclos.model.system.images.AccessibleSystemImageCategoriesData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getAccessibleImageCategories()
     */
    public function getAccessibleImageCategories() {
        return $this->__run('getAccessibleImageCategories', array());
    }
    
    /**
     * Returns full data for listing categories together with their images

     * @return Java type: org.cyclos.model.system.images.FullSystemImagesListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getFullListData()
     */
    public function getFullListData() {
        return $this->__run('getFullListData', array());
    }
    
    /**
     * Returns data for listing images of the given category
     * @param category Java type: NP
     * @return Java type: org.cyclos.model.system.images.ImagesListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getListData(NP)
     */
    public function getListData($category) {
        return $this->__run('getListData', array($category));
    }
    
    /**
     * Returns data for searching system custom images

     * @return Java type: org.cyclos.model.system.images.SystemCustomImagesSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Lists all images for the given category
     * @param category Java type: NP
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#list(NP)
     */
    public function _list($category) {
        return $this->__run('list', array($category));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given image
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.images.ImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->__run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the category of the given image
     * @param id Java type: java.lang.Long     * @param systemImageCategory Java type: org.cyclos.model.contentmanagement.imagecategories.SystemImageCategoryVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveCategory(java.lang.Long,%20org.cyclos.model.contentmanagement.imagecategories.SystemImageCategoryVO)
     */
    public function saveCategory($id, $systemImageCategory) {
        $this->__run('saveCategory', array($id, $systemImageCategory));
    }
    
    /**
     * Saves details on the given image
     * @param image Java type: org.cyclos.model.system.images.SystemCustomImageDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveDetails(org.cyclos.model.system.images.SystemCustomImageDTO)
     */
    public function saveDetails($image) {
        return $this->__run('saveDetails', array($image));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
    /**
     * Searches for custom images
     * @param query Java type: org.cyclos.model.system.images.SystemCustomImageQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#search(org.cyclos.model.system.images.SystemCustomImageQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>