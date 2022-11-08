<?php namespace Cyclos;

/**
 * Service interface for Notification Settings operations
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class NotificationSettingsService extends Service {

    function __construct() {
        parent::__construct('notificationSettingsService');
    }
    
    /**
     * Unsubscribes from emails with a key that was sent by email
     * @param key Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#emailUnsubscribe(java.lang.String)
     */
    public function emailUnsubscribe($key) {
        $this->__run('emailUnsubscribe', array($key));
    }
    
    /**
     * Returns the notification preferences for the given user / admin. When
     * null, returns the logged user's settings.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.messaging.notificationsettings.NotificationSettingsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * Returns data for unsubscribing from emails with a key that was sent by
     * email
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.model.messaging.notificationsettings.EmailUnsubscribeData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#getEmailUnsubscribeData(java.lang.String)
     */
    public function getEmailUnsubscribeData($key) {
        return $this->__run('getEmailUnsubscribeData', array($key));
    }
    
    /**
     * Saves the notification settings for a given user / admin
     * @param dto Java type: org.cyclos.model.messaging.notificationsettings.NotificationSettingsDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#save(org.cyclos.model.messaging.notificationsettings.NotificationSettingsDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
}

?>