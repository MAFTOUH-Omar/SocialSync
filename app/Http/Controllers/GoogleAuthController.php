<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirect() 
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id' , $google_user->getId())->first();
            if(!$user){
                $new_user = User::create([
                    "fullName" => $google_user->getName(),
                    "email" => $google_user->getEmail(),
                    "google_id" => $google_user->getId(),
                ]);

                Auth::login($new_user);

                return redirect()->intended('dashboard');
            } else {
                Auth::login($user);

                return redirect()->intended('dashboard');
            }
        } catch ( \Throwable $th ){
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}