<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model 
{

    protected $table = 'favorites';
    public $timestamps = true;

    public function favoriteMealable()
    {
        return $this->morphMany('App\Models\Mealables', 'mealable');
    }

    public function clientFavorites()
    {
        return $this->morphedByMany('App\Models\Clients', 'mealable');
    }

}