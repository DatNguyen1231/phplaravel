<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sign-up.Sign-up');
    }
    public function signUp(Request $request)
{
    $errors = [];

    // Kiểm tra dữ liệu đầu vào
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
        'confirm-password' => 'required'
    ]);

    // Kiểm tra username đã tồn tại chưa
    if (User::isUsernameExists($credentials['username'])) {
        $errors['errorUsernameExists'] = 'User already exists!';
    }

    // Kiểm tra confirm password
    if ($credentials['password'] !== $credentials['confirm-password']) {
        $errors['errorConfirmPassword'] = 'Password confirmation does not match!';
    }

    // Nếu có lỗi thì quay lại trang trước với tất cả lỗi
    if (!empty($errors)) {
        return back()->withErrors($errors)->withInput();
    }

    // Nếu không có lỗi thì tạo tài khoản mới
    User::createUser($credentials['username'], $credentials['password']);

    return redirect()->intended('/login')->with('success', 'Đăng ký thành công! Hãy đăng nhập.');
}

}