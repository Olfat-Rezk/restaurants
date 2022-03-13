<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email');

    public function clientFavorites()
    {
        return $this->morphMany('App\Models\Favorites', 'mealable');
    }

    public function clientOrder()
    {
        return $this->hasMany('App\Models\Order', 'clients');
    }

}