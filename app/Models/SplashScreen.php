<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SplashScreen extends Model 
{

    protected $table = 'splash_screen';
    public $timestamps = true;
    protected $fillable = array('phone');

}