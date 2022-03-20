<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
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
    return view('AdminView.layout.layout');
});
Route::resource('client',ClientController::class);
Route::put('client/{id}',[ClientController::class,"update"])->name("client.update");
Route::post('client/{id}',[ClientController::class,"destroy"])->name("client.destroy");
