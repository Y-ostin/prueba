<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function index(){
        return('index');
    }
    public function welcome (){
        return view('welcome');
    }
    public function contacto(){
        return view('contacto');
    }

    public function handleContact(Request $request){
        $name=$request-> name;
        $email = $request-> email;
        $message = $request-> message;

        return response()->json([
            'meesage'=>'we reciveed your message',
            'name'=> $name,
            'email'=>$email,
            'content'=>$message

        ]);
    }
}
