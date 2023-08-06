<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SlipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\TimestampController;
use App\Http\Controllers\SessionregisterController;

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

Route::resource('/sessionregister', SessionregisterController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/slip', [SlipController::class, 'index'])->name('slip');
Route::get('/slipweb', [SlipController::class, 'slipweb'])->name('slipweb');
Route::get('/slipweblogin', [SlipController::class, 'slipweblogin'])->name('slipweblogin');
Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses');
Route::get('/timestamp', [TimestampController::class, 'index'])->name('timestamp');
