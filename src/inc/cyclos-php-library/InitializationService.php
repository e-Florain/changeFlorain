<?php namespace Cyclos;

/**
 * Used to retrieve data used by Cyclos client application
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class InitializationService extends Service {

    function __construct() {
        parent::__construct('initializationService');
    }
    
    /**
     * Returns basic data to bootstrap the client application

     * @return Java type: org.cyclos.model.access.BasicInitializationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#getBasicInitializationData()
     */
    public function getBasicInitializationData() {
        return $this->__run('getBasicInitializationData', array());
    }
    
    /**
     * Returns basic data to bootstrap the client application, together with
     * some additional content

     * @return Java type: org.cyclos.model.access.BasicInitializationWithContentData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#getBasicInitializationWithContentData()
     */
    public function getBasicInitializationWithContentData() {
        return $this->__run('getBasicInitializationWithContentData', array());
    }
    
    /**
     * Returns data for the home page

     * @return Java type: org.cyclos.model.users.users.HomeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#getHomeData()
     */
    public function getHomeData() {
        return $this->__run('getHomeData', array());
    }
    
    /**
     * Returns all data which is used when the application is loaded. If a
     * trusted device id is given then a pending device confirmation will be
     * created in a new (read-write) transaction and will be validated at
     * login to create a trusted session. If a device pin locator is given
     * then information about if it's still exists will be returned.
     * @param deviceId Java type: java.lang.Long     * @param pinLocator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.InitializationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#getInitializationData(java.lang.Long,%20org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function getInitializationData($deviceId, $pinLocator) {
        return $this->__run('getInitializationData', array($deviceId, $pinLocator));
    }
    
    /**
     * Returns a string which can be used by browsers to correctly handle
     * cached resources

     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#getResourceCacheKey()
     */
    public function getResourceCacheKey() {
        return $this->__run('getResourceCacheKey', array());
    }
    
    /**
     * May be invoked just to make sure the server is up

     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/access/InitializationService.html#ping()
     */
    public function ping() {
        $this->__run('ping', array());
    }
    
}

?>