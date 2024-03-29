<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('login');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/saveemployee', [HomeController::class, 'saveemployee'])->name('saveemployee');
Route::patch('/updateemployee/{empid}', [HomeController::class, 'updateemployee'])->name('updateemployee');
Route::delete('/delemployee/{empid}', [HomeController::class, 'delemployee'])->name('delemployee');
Route::get('/summarydata', [HomeController::class, 'summarydata'])->name('summarydata');

Route::resource('/employees', HomeController::class);