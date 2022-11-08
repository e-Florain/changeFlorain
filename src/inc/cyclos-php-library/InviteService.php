<?php namespace Cyclos;

/**
 * Service used to send invitations to external user
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/InviteService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class InviteService extends Service {

    function __construct() {
        parent::__construct('inviteService');
    }
    
    /**
     * Returns data for sending an invite message

     * @return Java type: org.cyclos.model.messaging.invite.SendInviteMessageData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/InviteService.html#getSendData()
     */
    public function getSendData() {
        return $this->__run('getSendData', array());
    }
    
    /**
     * Sends an invitation message to the destination addresses
     * @param inviteMessageDTO Java type: org.cyclos.model.messaging.invite.SendInviteMessageDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/messaging/InviteService.html#send(org.cyclos.model.messaging.invite.SendInviteMessageDTO)
     */
    public function send($inviteMessageDTO) {
        $this->__run('send', array($inviteMessageDTO));
    }
    
}

?>