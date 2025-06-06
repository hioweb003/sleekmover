<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'user_id','pro_name','sold','slug','description','category_id','quantity','price','image','sold'
     ];

     public function user(){
        return $this->belongsTo(User::class,'user_id');
  }

  public function category(){
    return $this->belongsTo(Category::class,'category_id');
 }
}
