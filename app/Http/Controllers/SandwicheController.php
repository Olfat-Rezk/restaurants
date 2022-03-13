<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class SandwicheController extends Controller
{
    public function index(){
       $sandwitch =  Menu::all()->where ('category',1);
       return($sandwitch);

    }
}
