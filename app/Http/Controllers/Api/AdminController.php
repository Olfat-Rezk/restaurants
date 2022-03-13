<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;

class AdminController extends Controller
{
    public function view_admin(){
        $admin = Admins::all();
        return $admin;
}
}
