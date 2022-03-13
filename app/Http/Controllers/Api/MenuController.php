<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function view_invoice(Request $request){
        $menu = Menu::all();
//        if ($request=='sandwitch'){
//          $menu = Menu::->where('category'=>1);
//        }elseif ($request=='meal'){
//            $menu = Menu::->where('category'=>2);
//        }elseif ($request=='sweets'){
//            $menu = Menu::->where('category'=>3);
//        }elseif ($request=='adds'){
//            $menu = Menu::->where('category'=>4);
//        }else{
//            $menu = Menu::->where('category'=>5);
//        }

        return $menu->where('category',$request->category);
//        return $request->category;
//        return  $this->where('category', $request)->get();
}
}
