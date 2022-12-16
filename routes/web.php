<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Httpp\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', function () {
    return view('login-form');
})->name("login-form");
Route::post('admin/login',[LoginController::class, 'loginCheck'])->name('admin.logins');
Route::view('dashboard','dashboard')->name('dashboard');

Route::get('/logout',function(){
    Auth::logout();
    return view('login-form');

});
