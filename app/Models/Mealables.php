<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mealables extends Model 
{

    protected $table = 'mealables';
    public $timestamps = true;
    protected $fillable = array('name');

    public function menuMealable()
    {
        return $this->morphedByMany('App\Models\Menu', 'mealable');
    }

    public function favoriteMealable()
    {
        return $this->morphedByMany('App\Models\Favorites', 'mealable');
    }

}