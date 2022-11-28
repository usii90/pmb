<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('profile', function () {
        return view('profile');
    });
});

Route::get('/errors', function () {
    return view('403');
});

Route::get('admin',function(){
    return view('admin');
});

Route::get('loginn',function(){
    return view('auth.login');
});

Route::resource('prodi', ProdiController::class);

