<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\company as companyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Input;
use Auth;

class company extends Controller
{
    public function companyUpdate(Request $request )
    {
        $com = new companyModel();
        $com->companyUp($request);
        Mail::to($request -> email) -> send (new WelcomeMail());
        return view ('comlogin');
    }

    public function comlogin(){
        
        $email = Input::get('email');
        $password = Input::get('password');

        
           if (Auth::attempt(array('email' => $email, 'password' => $password))){
            return "success";
           }
           else {        
               return "Wrong Credentials";
            }
        return view ('welcome');
    }
}
