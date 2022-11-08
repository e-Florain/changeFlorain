<?php namespace Cyclos;

/**
 * Service interface for configuration images. The parameter for saving
 * images is an object containing the configuration identifier and the
 * image type.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ConfigurationImageService extends Service {

    function __construct() {
        parent::__construct('configurationImageService');
    }
    
    /**
     * Returns data about a configuration image, for a given type. If the
     * configuration is null, assumes the current configuration.
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#getImageVO(org.cyclos.model.system.configurations.ConfigurationVO,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function getImageVO($configuration, $type) {
        return $this->__run('getImageVO', array($configuration, $type));
    }
    
    /**
     * Returns data to list images in a given configuration
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: org.cyclos.model.system.images.ConfigurationImagesListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#getListData(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function getListData($configuration) {
        return $this->__run('getListData', array($configuration));
    }
    
    /**
     * Lists a configuration's images, optionally including inherited images
     * from parent configurations
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#list(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function _list($configuration) {
        return $this->__run('list', array($configuration));
    }
    
    /**
     * Returns metadata of a configuration image by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes all the given image
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes a configuration image, making it inherit the default (either
     * from a parent configuration or the hardcoded default)
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#removeByConfigurationAndType(org.cyclos.model.system.configurations.ConfigurationVO,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function removeByConfigurationAndType($configuration, $type) {
        $this->__run('removeByConfigurationAndType', array($configuration, $type));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: org.cyclos.model.system.images.ImageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->__run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->__run('saveName', array($id, $name));
    }
    
}

?>