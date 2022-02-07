<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            // Authentication failed...
            return back()->withInput(['email' => $credentials['email']])->withErrors(['errors' => 'Email atau password salah!']);
        }

        if (auth()->user()->role->name == 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/home');
        }
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            // create user
            $user = new User;
            $user->fill($data);
            $user->password = bcrypt($data['password']);
            $user->role_id = Role::where('name', 'user')->value('id');
            $user->save();

            // user auto login
            Auth::attempt(['email' => $user->email, 'password' => $user->password]);

            // send email verification
            $user->sendEmailVerificationNotification();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput($data)->withErrors(['errors' => 'Terjadi kesalahan pada server']);
        }

        return redirect('/email/verification');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home');
    }

    public function resendVerification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->withErrors(['message' => 'Verification link sent!']);
    }
}
