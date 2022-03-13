<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'order';
    public $timestamps = true;

    public function clientOrder()
    {
        return $this->belongsToMany('App\Models\Clients', 'clients');
    }
    public function menuOrder(){
        return $this->belongsToMany('App\Models\Menu','menu');
    }

}
