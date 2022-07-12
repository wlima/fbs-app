<?php

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

Route::resource('/category',\App\Http\Controllers\Web\CategoryController::class);
Route::resource('/account',\App\Http\Controllers\Web\AccountBankController::class);
Route::resource('/creditor',\App\Http\Controllers\Web\CreditorController::class);
Route::resource('/expense',\App\Http\Controllers\Web\DuplicateController::class);
Route::resource('/renvue',\App\Http\Controllers\Web\DuplicateController::class);
Route::resource('/user',\App\Http\Controllers\Web\UserController::class);
Route::get('/home', [\App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');

