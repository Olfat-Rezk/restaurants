<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        $contact = new Contacts;
        $contact->id = $request->id;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
//        $contact = [
//            'id' => $request->id,
//            'phone'=>$request->phone,
//            'email'=>$request->email,
//            'message'=>$request->message,
//
//        ];
       $contact->save();
        return $contact;
    }
}
