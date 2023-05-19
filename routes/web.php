<?php

use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use app\Http\Controllers\CustomerController;
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
    return view('home');
});

//Admin Dashboard
Route::get('admin', function () {
    return view('dashboard');
});

//Roomtype route
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class,'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//Room route
Route::get('admin/room/{id}/delete', [RoomController::class,'destroy']);
Route::resource('admin/room', RoomController::class);

//Customer route
Route::get('admin/customer/{id}/delete', [CustomerController::class,'destroy']);
Route::resource('admin/customer', CustomerController::class);
