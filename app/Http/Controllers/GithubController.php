<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GithubController extends Controller
{
    public function redirect() 
    {
        return Socialite::driver('github')->redirect();
    }
    
    public function callbackGithub()
    {
        try {
            $github_user = Socialite::driver('github')->user();
            $user = User::where('github_id' , $github_user->getId())->first();
            if(!$user){
                $new_user = User::create([
                    "fullName" => $github_user->name(),
                    "email" => $github_user->email(),
                    "github_id" => $github_user->id(),
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
