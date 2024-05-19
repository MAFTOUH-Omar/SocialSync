<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        $user = $request->user();
        return view('profile', compact('user'));
    }
}
