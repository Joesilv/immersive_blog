<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $fillable = [
        'id', 'title', 'content','created_at','updated_at'
    ];
}
