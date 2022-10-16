<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class ChatRoom extends Model
{
    use HasFactory;
    protected $fillable = ['from_id', 'to_id', 'read_status', 'status'];

    static function check_chat_room($user_id){
         $chatroom = self::where('from_id', '=', $user_id)
            ->where([
                ['from_id', '=', $user_id],
                ['to_id', '=', Auth::id()]
                ])
            ->orWhere([
                    ['from_id', '=', Auth::id()],
                    ['to_id', '=', $user_id]
                    ])
            ->first();
        return (isset($chatroom->id) && $chatroom->id > 0 ) ? $chatroom : false;

    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

}
