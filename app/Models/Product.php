<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'detail',
        'delete_yy_mm_dd'
    ];

    // 🔹 Hàm lấy tất cả user
    // public static function getAllProdut() {
    //     return self::all();
    // }

    public static function getAllProduct(){

        return self::whereNull('delete_yy_mm_dd')->get();
    }

}
