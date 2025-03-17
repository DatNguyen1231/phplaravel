<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('username')->unique(); // Tên đăng nhập, không trùng
            $table->string('password'); // Mật khẩu đã mã hóa
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
};
/**
 *Lệnh này sẽ tạo:
 *Model: app/Models/User.php
 *Migration: database/migrations/xxxx_xx_xx_xxxxxx_create_users_table.php
 
 *Chạy lệnh migrate để tạo bảng:
 *php artisan migrate
 */