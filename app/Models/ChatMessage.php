<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends Model
{
    protected $fillable = ['conversation_id', 'sender', 'message'];

    // العلاقة مع المحادثة
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }
}
