<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
    ];

    // 🔹 Hàm tạo user mới
    public static function createUser($username, $password) {
        return self::create([
            'username' => $username,
            'password' => Hash::make($password) // Mã hóa mật khẩu trước khi lưu
        ]);
    }

     // 🔹 Hàm kiểm tra username có tồn tại không
     public static function isUsernameExists($username) {
        return self::where('username', $username)->exists();
    }
    
    // 🔹 Hàm lấy tất cả user
    public static function getAllUsers() {
        return self::all();
    }

    // 🔹 Hàm lấy user theo ID
    public static function getUserById($id) {
        return self::find($id);
    }
}
