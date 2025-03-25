<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable=[
        'post_id','name','email','description'
    ];

    public function post(): BelongsTo{
      return  $this->belongsTo(Post::class);
    }

    public function replies(): HasMany{
      return $this->hasMany(Replycomment::class);
    }
}
