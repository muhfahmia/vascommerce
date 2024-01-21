<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login(Request $request) {
        if(Auth::check()) {
            Session::flash('type', 'success');
            Session::flash('message', 'Saat ini Anda sedang menjadi '.Auth::user()->name);
            return redirect('');
        }
        return view("auth.login");
    }

    public function loginPost(Request $request) {

        $validated = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        
        if(!$validated) {
            return redirect('login')->withErrors($validated)->withInput();
        }

        $checkAuth = Auth::attempt($validated);
        if (!$checkAuth) {
            Session::flash('type', 'danger');
            Session::flash('message', 'Email atau Password salah');
            return redirect('login')->withInput();
        }
        Session::flash('type', 'success');
        Session::flash('message', 'Anda masuk sebagai '.Auth::user()->name);
        return redirect('');
    }

    public function register(Request $request) {
        return view("auth.register");
    }

    public function registerPost(Request $request) {
        $validated = $request->validate([
            'email' => 'required|unique:users|email',
            'name'  => 'required',
            'phone' => 'required|digits_between:10,15'
        ]);

        if(!$validated) {
            return redirect('register')->withErrors($validated)->withInput();
        }

        $userCreated = User::create(
                [
                    'name'  => $request->input('name'),
                    'email'  => $request->input('email'),
                    'phone'  => $request->input('phone'),
                    'password'  => Hash::make("passwordDefault"),
                    'role'  => 'customer'
                ]
        );

        if (!$userCreated) {
            Session::flash('type', 'danger');
            Session::flash('message', 'Failed Saved to Database!!');
            return redirect('register');
        }
        Session::flash('type', 'success');
        Session::flash('message', 'Registrasi Anda telah berhasil. Silakan cek Inbox/Span pada Email untuk mendapatkan Password.');
        return redirect('');
    }

    public function logout(Request $request) {
        if(!Auth::check()) {
            Session::flash('type', 'danger');
            Session::flash('message', 'Saat ini Anda sedang menjadi Guest');
            return redirect('login');
        }
        $logout = Auth::logout();
        Session::flash('type', 'success');
        Session::flash('message', 'Anda telah berhasil Logout');
        return redirect('');
    }
}
