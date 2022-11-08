<?php namespace Cyclos;

/**
 * Service used to translate data
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class DataTranslationService extends Service {

    function __construct() {
        parent::__construct('dataTranslationService');
    }
    
    /**
     * Returns data for translating data of the given language and type.
     * @param language Java type: org.cyclos.model.system.languages.LanguageVO     * @param type Java type: org.cyclos.model.contentmanagement.translations.DataTranslationType
     * @return Java type: org.cyclos.model.contentmanagement.translations.DataTranslationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html#getData(org.cyclos.model.system.languages.LanguageVO,%20org.cyclos.model.contentmanagement.translations.DataTranslationType)
     */
    public function getData($language, $type) {
        return $this->__run('getData', array($language, $type));
    }
    
    /**
     * Returns information about available types for data translation
     * @param language Java type: org.cyclos.model.system.languages.LanguageVO
     * @return Java type: org.cyclos.model.contentmanagement.translations.DataTranslationTypeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html#getTypeData(org.cyclos.model.system.languages.LanguageVO)
     */
    public function getTypeData($language) {
        return $this->__run('getTypeData', array($language));
    }
    
    /**
     * Bulk saves translations. Translations for types / entities not passed
     * in won't be modified
     * @param language Java type: org.cyclos.model.system.languages.LanguageVO     * @param translations Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html#translate(org.cyclos.model.system.languages.LanguageVO,%20java.util.List)
     */
    public function translate($language, $translations) {
        $this->__run('translate', array($language, $translations));
    }
    
}

?>