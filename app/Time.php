<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['name', 'description', 'password'];
    
    protected $hidden = ['password', 'updated_at', 'created_at'];
}
