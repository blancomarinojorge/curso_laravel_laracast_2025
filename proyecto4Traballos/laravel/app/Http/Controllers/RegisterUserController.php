<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAtributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $employerAtributes = $request->validate([
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image'],
        ]);

        $user = User::create($userAtributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAtributes['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect(route('home'));
    }
}
