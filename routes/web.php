<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

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

// Admin Dashboard Related Group

Route::group( ['prefix' => 'admin'], function(){

    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('users', [UserController::class, 'index'])->name('admin.users');


    Route::get('employees', [EmployeeController::class, 'index'])->name('admin.employees');

});

// Route group for guest who are not yet logged in

Route::group(['middleware' => 'guest'], function(){

    Route::get('login', [AuthController::class, 'login']);

 });
 Route::get('users', function(){
    $user = User::find(1);
 });