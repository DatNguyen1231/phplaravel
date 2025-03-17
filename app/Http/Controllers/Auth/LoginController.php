<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {
    public function index() {
        return view('login.login');
    }

    public function login(Request $request) {
        // Kiểm tra dữ liệu đầu vào
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

     //   dd($credentials) ;

        // Kiểm tra đăng nhập
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // Điều hướng sau khi đăng nhập thành công
        }

        return back()->withErrors(['login' => 'Wrong account or password!']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
