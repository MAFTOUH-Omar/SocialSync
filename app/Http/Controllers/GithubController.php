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
            $githubUser = Socialite::driver('github')->user();

            // Rechercher l'utilisateur par son GitHub ID
            $user = User::where('github_id', $githubUser->id)->first();
            
            if (!$user) {
                // Rechercher l'utilisateur par son adresse e-mail
                $user = User::where('email', $githubUser->email)->first();

                if ($user) {
                    // Mettre à jour l'ID GitHub de l'utilisateur existant
                    $user->update(['github_id' => $githubUser->id]);
                } else {
                    // Créer un nouvel utilisateur s'il n'existe pas
                    $user = User::create([
                        'fullName' => $githubUser->name,
                        'email' => $githubUser->email,
                        'github_id' => $githubUser->id,
                    ]);
                }
            }

            // Connecter l'utilisateur
            Auth::login($user);

            // Rediriger vers le tableau de bord
            return redirect()->intended('homr');
        } catch ( \Throwable $th ){
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}