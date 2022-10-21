<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['chat_id', 'from_id', 'to_id', 'message', 'type', 'read_status', 'status'];

    protected $casts = [
        'id' => 'string',
    ];
    protected $primaryKey = 'id';

    public function chat()
    {
        return $this->belongsTo(ChatRoom::class);
    }


}
