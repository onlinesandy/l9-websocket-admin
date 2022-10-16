<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;
use Auth;
class MessageSentEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $userid;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message,$userid)
    {
        $this->message = $message;
        $this->userid = $userid;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat-'.$this->userid);
    }

    public function broadcastAs()
    {
        return 'chat-sendmsg';
    }

    public function broadcastWith()
    {
        return $this->message->toarray();
    }
}
