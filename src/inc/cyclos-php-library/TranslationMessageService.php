<?php namespace Cyclos;

/**
 * Service interface for translation messages
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TranslationMessageService extends Service {

    function __construct() {
        parent::__construct('translationMessageService');
    }
    
    /**
     * Gets data for translations for the given language
     * @param language Java type: org.cyclos.model.system.languages.LanguageVO
     * @return Java type: org.cyclos.model.contentmanagement.translations.ApplicationTranslationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getApplicationTranslationData(org.cyclos.model.system.languages.LanguageVO)
     */
    public function getApplicationTranslationData($language) {
        return $this->__run('getApplicationTranslationData', array($language));
    }
    
    /**
     * Returns all customized keys for the given language, in form of a
     * Properties object
     * @param language Java type: org.cyclos.model.system.languages.LanguageVO
     * @return Java type: java.util.Properties
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getCustomizedKeysPerLanguage(org.cyclos.model.system.languages.LanguageVO)
     */
    public function getCustomizedKeysPerLanguage($language) {
        return $this->__run('getCustomizedKeysPerLanguage', array($language));
    }
    
    /**
     * Returns data for the given translation key
     * @param key Java type: org.cyclos.model.contentmanagement.translations.BasicTranslationKeyDTO
     * @return Java type: org.cyclos.model.contentmanagement.translations.TranslationKeyData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getTranslationKeyData(org.cyclos.model.contentmanagement.translations.BasicTranslationKeyDTO)
     */
    public function getTranslationKeyData($key) {
        return $this->__run('getTranslationKeyData', array($key));
    }
    
    /**
     * List the languages the current user can translate

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#listTranslatableLanguages()
     */
    public function listTranslatableLanguages() {
        return $this->__run('listTranslatableLanguages', array());
    }
    
    /**
     * Reverts any changes on the given key
     * @param key Java type: org.cyclos.model.contentmanagement.translations.BasicTranslationKeyDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#restoreOriginalTranslation(org.cyclos.model.contentmanagement.translations.BasicTranslationKeyDTO)
     */
    public function restoreOriginalTranslation($key) {
        $this->__run('restoreOriginalTranslation', array($key));
    }
    
    /**
     * Save a customized key
     * @param key Java type: org.cyclos.model.contentmanagement.translations.TranslationKeyDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#saveKey(org.cyclos.model.contentmanagement.translations.TranslationKeyDTO)
     */
    public function saveKey($key) {
        $this->__run('saveKey', array($key));
    }
    
    /**
     * Searches for translation keys
     * @param params Java type: org.cyclos.model.contentmanagement.translations.TranslationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#searchKeys(org.cyclos.model.contentmanagement.translations.TranslationQuery)
     */
    public function searchKeys($params) {
        return $this->__run('searchKeys', array($params));
    }
    
    /**
     * Set the customized keys for a language
     * @param params Java type: org.cyclos.model.contentmanagement.translations.SetCustomizedTranslationsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#setCustomizedKeysPerLanguage(org.cyclos.model.contentmanagement.translations.SetCustomizedTranslationsDTO)
     */
    public function setCustomizedKeysPerLanguage($params) {
        $this->__run('setCustomizedKeysPerLanguage', array($params));
    }
    
}

?>