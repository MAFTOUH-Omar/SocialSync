<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts; // Ensure the correct model is imported

class HomeController extends Controller
{
    public function Home()
    {
        return view('auth.register');
    }

    public function index()
    {
        $posts = Posts::with('user', 'comments.user')->get(); // Use Posts instead of Post
        // return view('home', compact('posts'));
        return view('profile.profile');
    }
}
