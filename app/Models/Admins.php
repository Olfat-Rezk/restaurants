<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'phone');
    protected $hidden = array('password');


}
