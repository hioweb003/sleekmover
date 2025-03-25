<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable=[
        'name',
        'email',
        'phone',
        'address_from',
        'address_to',
        'moving_date',
        'service',
        'note',
        'status'
    ];
}
