<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Replycomment extends Model
{
    protected $fillable=[
        'comment_id','reply'
    ];

    public function comment(): BelongsTo{
        return $this->belongsTo(Comment::class);
    }
}
