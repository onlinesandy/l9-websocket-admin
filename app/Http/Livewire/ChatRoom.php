<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Message;
use App\Models\User;
use App\Models\ChatRoom as ChatRoomModel;
use App\Events\MessageSentEvent;
use App\Notifications\SendMessage;

class ChatRoom extends Component
{
    public $here = [];
    public $messages;
    public $msg = '';
    public $userlist;
    public $checkfriend = false;
    public $friend_id = 0;
    public $room_id = 0;
    public $friendname = 'Chat';
    public $checkFriendStatus;
    public $showOverlay = true;
    public $showLoader = false;

    // protected $listeners = ['echo-private:chat,MessageSentEvent' => 'incomingMessage'];

    public function getListeners()
    {
        return [
            "echo-private:chat-{$this->friend_id},.chat-sendmsg" => 'incomingMessage',
        ];
    }

    public function checkfriend($friend_id)
    {
        $this->showLoader = true;
        $this->messages = '';
        $this->friend_id = $friend_id;

        $friendArr = User::where('id', $friend_id)->first();
        if ($friendArr->id) {
            $this->checkFriendStatus = auth()
                ->user()
                ->getFriendship($friendArr);
            $chatroom = ChatRoomModel::check_chat_room($friend_id);
            if (!$chatroom) {
                $chatroomdetails = [
                    'from_id' => Auth::id(),
                    'to_id' => $friend_id,
                    'status' => 1,
                ];
                $chatroom = ChatRoomModel::create($chatroomdetails);
            }
            $this->room_id = $chatroom->id;
            $this->friendname = $friendArr->name;
            $this->checkfriend = true;
            $this->msg = '';
        }

        $this->messages = Message::with('chat')
            ->where('chat_id', $this->room_id)
            ->latest()
            ->limit(30)
            ->get()
            ->reverse();

        $this->emit('UserChatSelected');
        $this->showLoader = false;
        $this->showOverlay = false;
    }

    public function sendMessage()
    {
        if (!$this->msg) {
            $this->addError('chat-message', 'Message is required.');
            return;
        }

        if ($this->room_id > 0) {
            Message::where('to_id', '=', Auth::id())
                ->where('read_status', '=', 0)
                ->update([
                    'read_status' => '1',
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            $msgdetails = [
                'chat_id' => $this->room_id,
                'from_id' => Auth::id(),
                'to_id' => $this->friend_id,
                'message' => $this->msg,
                'type' => 'text',
                'read_status' => 0,
                'status' => 1,
            ];
            $message = Message::create($msgdetails);
            $this->messages->push($message);

            $frnd = User::where('id', $this->friend_id)->first();
            $frnd->notify(new SendMessage($message,auth()->user()->name));
            event(new MessageSentEvent($message,$this->friend_id));

            $this->msg = '';
            $this->emit('NewMessage');
        }
    }

    public function incomingMessage($message)
    {
        if(isset($message['id']) && $message['id'] > 0){
            $message = Message::find($message->id);
            $this->messages->push($message);
        }
        // get the hydrated model from incoming json/array.

    }

    public function mount()
    {
        $this->messages = Message::with('chat')
            ->where('chat_id', $this->room_id)
            ->latest()
            ->limit(30)
            ->get()
            ->reverse();
    }

    public function render()
    {
        return view('livewire.chat-room');
    }
}
