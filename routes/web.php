<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MakeInventoryController;
use App\Http\Controllers\AppointmentController;


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

Route::resource('home', HomeController::class);
Route::resource('patients', PatientController::class);
Route::resource('tables', TableController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('makeinventory', MakeInventoryController::class);
Route::resource('appointments', AppointmentController::class);