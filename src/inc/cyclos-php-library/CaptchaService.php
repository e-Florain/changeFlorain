<?php namespace Cyclos;

/**
 * Contains methods which can be used to handle captcha challenges
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CaptchaService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CaptchaService extends Service {

    function __construct() {
        parent::__construct('captchaService');
    }
    
    /**
     * @param previousChallenge Java type: java.lang.String
     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CaptchaService.html#generate(java.lang.String)
     */
    public function generate($previousChallenge) {
        return $this->__run('generate', array($previousChallenge));
    }
    
    /**
     * Returns whether the given internal captcha challenge is valid
     * @param id Java type: java.lang.String     * @param text Java type: java.lang.String
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CaptchaService.html#isValid(java.lang.String,%20java.lang.String)
     */
    public function isValid($id, $text) {
        return $this->__run('isValid', array($id, $text));
    }
    
    /**
     * @param id Java type: java.lang.String     * @param basicGroup Java type: org.cyclos.model.users.groups.BasicGroupVO     * @param dimensions Java type: org.cyclos.model.utils.DimensionsDTO
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CaptchaService.html#readImage(java.lang.String,%20org.cyclos.model.users.groups.BasicGroupVO,%20org.cyclos.model.utils.DimensionsDTO)
     */
    public function readImage($id, $basicGroup, $dimensions) {
        return $this->__run('readImage', array($id, $basicGroup, $dimensions));
    }
    
    /**
     * Removes the given internal captcha challenge with the given id
     * @param id Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/CaptchaService.html#remove(java.lang.String)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
}

?>