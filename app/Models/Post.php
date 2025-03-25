<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable =[
        'user_id','post_title','post_slug','views','post_description','featured_image'
    ];
 
 
        public function user(): BelongsTo{
         return $this->belongsTo(User::class);
     }
          public function comments(): HasMany{
         return $this->hasMany(Comment::class);
     }
}
