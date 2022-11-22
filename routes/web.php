<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MotelController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserBrowserController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/',[HomeController::class, 'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});

Route::get('/user-agrent-browser', [UserBrowserController::class, 'index'])->name('user-agrent-browser');


//them 
Route::get('/add-user', [UserBrowserController::class, 'insertUser'])->name('add-user');
Route::post('/insert-user', [UserBrowserController::class, 'updateInsertUser'])->name('insert-user');
//sua 
Route::get('/edit-user/{id}', [UserBrowserController::class, 'edit'])->name('edit-user');
Route::post('/update-user/{id}', [UserBrowserController::class, 'update'])->name('update-user');
//xoa
Route::get('/delete-user/{id}', [UserBrowserController::class, 'destroy'])->name('delete-user');

//motel-index
Route::get('/manager-motel',[MotelController::class, 'index'])->name('motel.index');

//motel-add
Route::get('/manager-add-motel',[MotelController::class, 'create'])->name('motel.create-motel');
Route::post('/manager-store-motel',[MotelController::class, 'store'])->name('motel.store-motel');

//motel-edit
Route::get('/manager-edit-motel/{id}',[MotelController::class, 'edit'])->name('motel.edit-motel');
Route::post('/manager-update-motel/{id}',[MotelController::class, 'update'])->name('motel.update-motel');

//motel-delete
Route::get('/manager-delete-motel/{id}', [MotelController::class, 'destroy'])->name('motel.delete-motel');



