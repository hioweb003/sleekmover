<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'order_number','status','item_count','is_paid', 'order_type','payment_method','paymentref','discount','discount_type','grand_total','sub_total',
        'shipping_cost','shipping_name','shipping_email','shipping_address','shipping_phone','shipping_country','shipping_state',
          ];
      
    public function items(){
        return $this->belongsToMany(Product::class,'order_items','order_id','product_id')->withPivot('price','quantity','pro_attributes');
    }
}
