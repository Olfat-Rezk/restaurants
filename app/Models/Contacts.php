<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = array('phone','email','message');

}
