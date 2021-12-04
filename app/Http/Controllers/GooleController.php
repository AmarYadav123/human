<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GooleController extends Controller
{


     // google login
     public function redirectToGoogle()
     {
         return Socialite::driver('google')->redirect();
     }

     // google callback
     public function handelGoogleCallback()
     {
         $user=Socialite::driver('google')->user();
         $this->_registerOrLoginUser($user);

         // return home after login
         return redirect('/index');
     }

     protected function _registerOrLoginUser($data)
    {

        $user=User::where('email',$data->email)->first();

        if(!$user){
            $user=new User();
            $user->first_name=$data->name;
            $user->email=$data->email;
            $user->provider_id=$data->id;
            $user->password=uniqid();
            $user->save();

        }
        Auth::login($user);

    }

}
