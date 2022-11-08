<?php namespace Cyclos;

/**
 * Contains the operations over themes
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ThemeService extends Service {

    function __construct() {
        parent::__construct('themeService');
    }
    
    /**
     * Applies the given themes to the given configuration: logged user,
     * guests, mobile and pay application. Passing null means the theme will
     * be inherited from parent configurations, but is not possible for the
     * system default configuration. The themes must be defined within that
     * configuration or in any of it's ancestors.
     * @param params Java type: org.cyclos.model.contentmanagement.themes.ApplyThemesDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#applyThemes(org.cyclos.model.contentmanagement.themes.ApplyThemesDTO)
     */
    public function applyThemes($params) {
        $this->__run('applyThemes', array($params));
    }
    
    /**
     * Exports the given theme
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#export(java.lang.Long)
     */
    public function export($id) {
        return $this->__run('export', array($id));
    }
    
    /**
     * Returns the CSS corresponding to the theme with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getCSS(java.lang.Long)
     */
    public function getCSS($id) {
        return $this->__run('getCSS', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns a default CSS corresponding to the theme type. It's used only
     * in case the selected theme fails to compile.
     * @param type Java type: org.cyclos.model.contentmanagement.themes.ThemeType
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getFallbackCSS(org.cyclos.model.contentmanagement.themes.ThemeType)
     */
    public function getFallbackCSS($type) {
        return $this->__run('getFallbackCSS', array($type));
    }
    
    /**
     * Returns data to list themes in a configuration
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemesListData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getListData(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function getListData($configuration) {
        return $this->__run('getListData', array($configuration));
    }
    
    /**
     * Returns the theme for the given type. In case of ThemeType#MAIN_WEB
     * the returned theme depends on if there is a logged user or not.
     * @param type Java type: org.cyclos.model.contentmanagement.themes.ThemeType
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemeVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getTheme(org.cyclos.model.contentmanagement.themes.ThemeType)
     */
    public function getTheme($type) {
        return $this->__run('getTheme', array($type));
    }
    
    /**
     * Returns the ThemeVO with the given id.
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemeVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getVO(java.lang.Long)
     */
    public function getVO($id) {
        return $this->__run('getVO', array($id));
    }
    
    /**
     * Import the theme definitions from file, creating it on the given
     * configuration, returning the new theme id
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO     * @param importedFromFile Java type: java.lang.String     * @param in Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#importNew(org.cyclos.model.system.configurations.ConfigurationVO,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function importNew($configuration, $importedFromFile, $in) {
        return $this->__run('importNew', array($configuration, $importedFromFile, $in));
    }
    
    /**
     * Returns a list with visible themes on the given configuration sorted
     * by theme type (first main web themes)
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#list(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function _list($configuration) {
        return $this->__run('list', array($configuration));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
}

?>