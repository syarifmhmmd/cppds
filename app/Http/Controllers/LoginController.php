<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auththenticate(Request $request)
    {
        $request->validate([
            'examinee_number' => 'required'
        ]);

        $user = User::where('examinee_number', $request->examinee_number)->first();

        if ($user) {
            Auth::login($user);

            return redirect()->intended('/quiz');
        }

        return back()->with('loginError', 'No. peserta tidak terdaftar!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
