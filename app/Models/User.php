<?php
/**
 * @User.php 01-00 2025/03/18
 */
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
/**
 * User
 * 
 * @version 1.00
 * @since 1.00
 * @author dat-nq
 * 
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
    ];

   
    /**
	 * createUser 
	 * 
	 * @param $username, $password
	 * @return ;
	 */
    public static function createUser($username, $password) {
        return self::create([
            'username' => $username,
            'password' => Hash::make($password) // Mã hóa mật khẩu trước khi lưu
        ]);
    }

   /**
	 * isUsernameExists kiem tra user name co ton tai khong 
	 * 
	 * @param $username
	 * @return ;
	 */
     public static function isUsernameExists($username) {
        return self::where('username', $username)->exists();
    }
}
