<?php namespace Cyclos;

/**
 * Service interface for brokering
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class BrokeringService extends Service {

    function __construct() {
        parent::__construct('brokeringService');
    }
    
    /**
     * Adds a broker for the given user, optionally setting the broker as
     * main
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param mainBroker Java type: boolean
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#addBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO,%20boolean)
     */
    public function addBroker($userLocator, $brokerLocator, $mainBroker) {
        return $this->__run('addBroker', array($userLocator, $brokerLocator, $mainBroker));
    }
    
    /**
     * Returns data for adding a broker to the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.brokering.AddBrokerData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#getAddBrokerData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getAddBrokerData($locator) {
        return $this->__run('getAddBrokerData', array($locator));
    }
    
    /**
     * Returns details of a brokering relation by user and broker, only if
     * the broker is currently the user's broker
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.brokering.BrokeringWithUserVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#getByUserAndBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getByUserAndBroker($userLocator, $brokerLocator) {
        return $this->__run('getByUserAndBroker', array($userLocator, $brokerLocator));
    }
    
    /**
     * Returns data for a user brokerings
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.brokering.BrokeringData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Removes the given broker from the user brokerings
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#removeBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function removeBroker($userLocator, $brokerLocator) {
        $this->__run('removeBroker', array($userLocator, $brokerLocator));
    }
    
    /**
     * Assigns the given brokering as main
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/BrokeringService.html#setMainBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function setMainBroker($userLocator, $brokerLocator) {
        $this->__run('setMainBroker', array($userLocator, $brokerLocator));
    }
    
}

?>