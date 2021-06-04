<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [BaseController::class, 'home']);
Route::get('/ourCompany', [BaseController::class, 'ourCompany']);
Route::get('/services', [BaseController::class, 'services']);
Route::get('/contact', [BaseController::class, 'contact']);

Route::get('/adminLogin', [AdminController::class, 'index']);
Route::post('/adminLogin', [AdminController::class, 'login']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/logOut',function(){
    return redirect('/');
});
