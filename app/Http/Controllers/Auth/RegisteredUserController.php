<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string' , Rules\Password::defaults()],
            'profile' => ['nullable', 'image', 'max:2048', 'mimes:png,jpg,jpeg,svg'],
            'phone_number' => ['nullable', 'string', 'max:255', 'unique:'.User::class],
            'country' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('profile')) {
            $imagePath = $request->file('profile')->store('profile_images');
        } else {
            $imagePath = null;
        }

        $user = User::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile' => $imagePath,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
