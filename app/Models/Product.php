<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'user_id','pro_name','sold','slug','description','category','quantity','price','image','sold'
     ];

     public function user(){
        return $this->belongsTo(User::class,'user_id');
  }
}
