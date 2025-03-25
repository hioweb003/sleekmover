<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagesetting extends Model
{
    protected $fillable =[
        'caption','content','email','phone','address','location'
    ];
}
