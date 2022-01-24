<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            // Authentication failed...
           return back()->withInput(['email' => $credentials['email']])->withErrors(['errors' => 'Email atau password salah!']);
        }
        return redirect('/home');
    }

    public function register(RegisterRequest $request){
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect('/home');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
