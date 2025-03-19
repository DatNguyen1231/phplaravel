<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự động tăng
            $table->string('name'); // Cột tên (chuỗi)
            $table->decimal('price', 10, 2); // Cột giá (số thập phân)
            $table->text('detail'); // Cột chi tiết (văn bản dài)
            $table->boolean('delete_yy_mm_dd')->nullable();
            $table->timestamps(); // Cột created_at và updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
