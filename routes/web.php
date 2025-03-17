<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignUpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ap dung middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/product', function () {
        return view('product-overview.index'); // Trả về view login.blade.php trong thư mục resources/views/login
    });
 
});

Route::get('/login',[LoginController::class, 'index'] );
Route::post('/login', [LoginController::class, 'login'])->name('login');
//Route::get('/{any}', [LoginController::class, 'index'])->where('any', '.*');

Route::get('/sign-up', [SignUpController::class, 'index']);
Route::post('/sign-up', [SignUpController::class, 'signUp'])->name('sign-up');
