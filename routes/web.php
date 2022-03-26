<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PersonnelController;


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
    return view('UserView.indexUser');
});
Route::resource('Admin/client',ClientController::class);
// Route::put('Admin/client/{id}',[ClientController::class,"update"])->name("client.update");
Route::post('Admin/client/{id}',[ClientController::class,"destroy"])->name("client.destroy");
Route::resource('Admin/personnel',PersonnelController::class);
Route::post('Admin/personnel/{id}',[PersonnelController::class,"destroy"])->name("personnel.destroy");

