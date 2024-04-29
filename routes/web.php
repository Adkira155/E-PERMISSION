<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
    return view('awal');
});

Route::get('/form', function () {
    return view('formizin');
})->name('formizin');

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'] , function(){
route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
route::get('/user', [HomeController::class, 'index'])->name('index');

Route::get('/profile', function () {
    return view('Profile');
})->name('profile');

Route::get('/akun', function () {
    return view('akun');
})->name('akun');

route::get('/create', [HomeController::class, 'create'])->name('user.create');
route::post('/store', [HomeController::class, 'store'])->name('user.store');

route::get('/edit/{id}', [HomeController::class,'edit'])->name('user.edit');
route::put('/update/{id}', [HomeController::class,'update'])->name('user.update');

route::delete('/delete/{id}', [HomeController::class,'delete'])->name('user.delete');
});
