<?php namespace Cyclos;

/**
 * Service used to manage SMS messages
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/SmsService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class SmsService extends Service {

    function __construct() {
        parent::__construct('smsService');
    }
    
    /**
     * Returns the inbound sms message with the given id
     * @param smsMessageId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.messages.InboundSmsMessageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/SmsService.html#getInboundMessageData(java.lang.Long)
     */
    public function getInboundMessageData($smsMessageId) {
        return $this->__run('getInboundMessageData', array($smsMessageId));
    }
    
    /**
     * Returns the outbound sms message with the given id
     * @param smsMessageId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.messages.OutboundSmsMessageVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/SmsService.html#getOutboundMessageData(java.lang.Long)
     */
    public function getOutboundMessageData($smsMessageId) {
        return $this->__run('getOutboundMessageData', array($smsMessageId));
    }
    
    /**
     * Searches for sms inbound messages according to the given query
     * @param query Java type: org.cyclos.model.messaging.messages.InboundSmsQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/SmsService.html#searchInboundMessages(org.cyclos.model.messaging.messages.InboundSmsQuery)
     */
    public function searchInboundMessages($query) {
        return $this->__run('searchInboundMessages', array($query));
    }
    
    /**
     * Searches for sms outbound messages according to the given query
     * @param query Java type: org.cyclos.model.messaging.messages.OutboundSmsQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/SmsService.html#searchOutboundMessages(org.cyclos.model.messaging.messages.OutboundSmsQuery)
     */
    public function searchOutboundMessages($query) {
        return $this->__run('searchOutboundMessages', array($query));
    }
    
}

?>