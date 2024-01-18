<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProvidersController;
use App\Models\Employees;
use App\Models\Providers;
use Database\Factories\EmployeesFactory;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('positions',PositionController::class);
Route::get('employees/{employee}/pdf',[EmployeesController::class,'pdf'])->name('employees.pdf');
Route::resource('employees',EmployeesController::class);

use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/redirect', [AuthController::class,'redirect'])->name('auth.redirect');
Route::get('/auth/callback',[AuthController::class,'callback'])->name('auth.callback');
Route::get('provider/{provider}/pdf',[ProvidersController::class,'pdf'])->name('providers.pdf');
Route::resource('providers',ProvidersController::class);
Route::resource('clients',ClientsController::class);
Route::resource('products',ProductsController::class);
