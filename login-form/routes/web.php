<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use  App\Http\Controllers\PeopleController;

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


Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.checks');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::get('/admin/dashboard',[MainController::class, 'Showdashboard'])->name('admin.dashboard');








Route::group(['middleware' =>['Authcheck']], function() {
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');   
    Route::get('/movies/{movie}',[MainController::class, 'show'])->name('movies.show');
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');



    Route::get('/admin/settings',[MainController::class, 'settings']);
    Route::get('/admin/profile',[MainController::class, 'profile']);
    Route::get('/admin/staff',[MainController::class, 'staff']);
});