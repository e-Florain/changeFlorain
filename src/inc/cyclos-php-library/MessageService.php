<?php namespace Cyclos;

/**
 * Service used to manage messages between users
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class MessageService extends Service {

    function __construct() {
        parent::__construct('messageService');
    }
    
    /**
     * Return messages count since the last time seen

     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#countNewMessages()
     */
    public function countNewMessages() {
        return $this->__run('countNewMessages', array());
    }
    
    /**
     * Return unread messages count

     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#countUnreadMessages()
     */
    public function countUnreadMessages() {
        return $this->__run('countUnreadMessages', array());
    }
    
    /**
     * Returns details data for the given message
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.messages.MessageData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns the messages status containing the unread/new messages and the
     * last view date.<br> The last view date is updated through the
     * UserValidationService#updateUserActivity method with the parameter
     * UserActivityType#MESSAGE.

     * @return Java type: org.cyclos.model.messaging.messages.MessagesStatusVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#getMessagesStatus()
     */
    public function getMessagesStatus() {
        return $this->__run('getMessagesStatus', array());
    }
    
    /**
     * Returns data used to search messages

     * @return Java type: org.cyclos.model.messaging.messages.MessageSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->__run('getSearchData', array());
    }
    
    /**
     * Returns data for sending a message. If replyId is given, the new
     * message will be a reply for that one. If toUser is given, the message
     * will be to that specific user.
     * @param replyId Java type: java.lang.Long     * @param toUser Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.messaging.messages.SendMessageData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#getSendData(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSendData($replyId, $toUser) {
        return $this->__run('getSendData', array($replyId, $toUser));
    }
    
    /**
     * Marks all the given message as either read or as unread
     * @param ids Java type: java.util.Set     * @param isRead Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#markAsRead(java.util.Set,%20boolean)
     */
    public function markAsRead($ids, $isRead) {
        $this->__run('markAsRead', array($ids, $isRead));
    }
    
    /**
     * Moves all the given messages to the trash bin
     * @param ids Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#moveToTrash(java.util.Set)
     */
    public function moveToTrash($ids) {
        $this->__run('moveToTrash', array($ids));
    }
    
    /**
     * Permanently removes all the given messages
     * @param ids Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#removeAll(java.util.Set)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Restores the given messages, that is, move them from the trash bin to
     * the original message box (either inbox or sent items)
     * @param ids Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#restoreAll(java.util.Set)
     */
    public function restoreAll($ids) {
        $this->__run('restoreAll', array($ids));
    }
    
    /**
     * Searches for messages according to the given criteria
     * @param query Java type: org.cyclos.model.messaging.messages.MessageQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#search(org.cyclos.model.messaging.messages.MessageQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Sends a message and returns the id of the outgoing message
     * @param sendMessage Java type: org.cyclos.model.messaging.messages.SendMessageDTO
     * @return Java type: long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/MessageService.html#send(org.cyclos.model.messaging.messages.SendMessageDTO)
     */
    public function send($sendMessage) {
        return $this->__run('send', array($sendMessage));
    }
    
}

?>