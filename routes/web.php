<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/search', function () {
    return view('admin.search');
});

route::get('/', [AuthController::class, 'register']);
route::get('/admin', [HomeController::class, 'index']);
route::get('/place', [HomeController::class, 'place']);
route::get('/add_place', [HomeController::class, 'add_place']);
Route::post('/save', 'HomeController@add');
route::get('/place/{id}/edit', [HomeController::class, 'edit'])->name('place.edit');
Route::put('/place/{id}', [HomeController::class, 'update'])->name('place.update');
Route::delete('/place/{id}', [HomeController::class, 'destroy'])->name('place.destroy');

Route::get('/auth', [AuthController::class, 'index']);
Route::get('/forgett', [AuthController::class, 'forget']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::put('/updatepassword', [AuthController::class, 'updatepassword']);
