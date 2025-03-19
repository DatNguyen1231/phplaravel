<?php
/**
 * @LoginController.php 01-00 2025/03/18
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * LoginController
 * 
 * @version 1.00
 * @since 1.00
 * @author dat-nq
 * 
 */
class LoginController extends Controller {
    /**
	 * Index man hinh
	 * @return view('login.login')
	 */
    public function index() {
        return view('login.login');
    }

    /**
	 * Login 
	 * 
	 * @param Request  request
	 * @return redirect()->intended('/');
	 */
    public function login(Request $request) {
        // Kiểm tra dữ liệu đầu vào
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // Kiểm tra đăng nhập
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // Điều hướng sau khi đăng nhập thành công
        }
        // quay lai trang login va thong bao loi
        return back()->withErrors(['login' => 'Wrong account or password!']);
    }
    /**
	 * logout  dung de dang xuat
	 *
	 * @return redirect('/login');
	 */
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
