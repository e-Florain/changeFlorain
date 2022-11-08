<?php namespace Cyclos;

/**
 * Service interface for advertisement questions.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AdQuestionService extends Service {

    function __construct() {
        parent::__construct('adQuestionService');
    }
    
    /**
     * Saves the answer for the given question For the {@code answer}
     * parameter we don't use the ValidationApi because it is validated in
     * the service implementation to allow send a properly validation
     * message.
     * @param id Java type: java.lang.Long     * @param answer Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#answer(java.lang.Long,%20java.lang.String)
     */
    public function answer($id, $answer) {
        $this->__run('answer', array($id, $answer));
    }
    
    /**
     * Creates a new question for the given ad For the {@code question}
     * parameter we don't use the ValidationApi because it is validated in
     * the service implementation to allow send a properly validation
     * message.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param question Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#ask(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.lang.String)
     */
    public function ask($adVO, $question) {
        return $this->__run('ask', array($adVO, $question));
    }
    
    /**
     * Returns the questions for the given ad
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#list(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function _list($adVO) {
        return $this->__run('list', array($adVO));
    }
    
    /**
     * Loads a question by id.<br> Only if the logged user can ask for or
     * it's the owner of the related advertisement.
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdQuestionVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Removes a question
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Searches for unanswered questions
     * @param query Java type: org.cyclos.model.marketplace.advertisements.AdQuestionQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#search(org.cyclos.model.marketplace.advertisements.AdQuestionQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>