<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthCheck;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/auth/save',[AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');
route::get('/auth/reset_password',[AuthController::class, 'reset_password'])->name('auth.reset_password');




#Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[AuthController::class, 'register'])->name('auth.register');
    Route::get('/auth/password',[AuthController::class, 'password'])->name('auth.password');

    #Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    #Route::get('/admin/settings',[MainController::class,'settings']);
    #Route::get('/admin/profile',[MainController::class,'profile']);
    #Route::get('/admin/staff',[MainController::class,'staff']);
#});