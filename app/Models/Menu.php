<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menu';
    public $timestamps = true;
    protected $fillable = array('name','price','category');

    public function menuMealable()
    {
        return $this->morphMany('App\Models\Mealables', 'mealable');
    }
    public function menuOrder(){
        return $this->belongsToMany('App\Models\Order','order');
    }


}
