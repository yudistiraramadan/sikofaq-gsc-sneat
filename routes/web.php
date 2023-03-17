<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AuthController::class, 'loginpage'])->name('loginpage');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Bendahara
Route::get('/daftar-user', [UserController::class, 'user'])->name('user');
Route::get('/tambah-user', [UserController::class, 'create'])->name('tambahuser');
Route::post('/insert-user', [UserController::class, 'insert'])->name('insertuser');



Route::get('/tes', function(){
    return view('tes');
});

// Route::get('/dashboard-admin', function (){
//     return view('dashboard');
// });
