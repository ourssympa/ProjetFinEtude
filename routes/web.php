<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PersonnelController;
use App\Http\Controllers\Admin\transactionController;
use App\Http\Controllers\User\CreditController;
use App\Http\Controllers\User\user;

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
})->name('home');

//ADMIN ROUTE
Route::resource('admin/client',ClientController::class);
Route::post('admin/client/{id}',[ClientController::class,"destroy"])->name("client.destroy");
Route::resource('admin/personnel',PersonnelController::class);
Route::post('admin/personnel/{id}',[PersonnelController::class,"destroy"])->name("personnel.destroy");
Route::resource('admin/transaction',transactionController::class);
Route::get('admin/transactionadd/{id}',[transactionController::class,'add'])->name("transaction.add");
Route::get('admin/transactionhistorique/{id}',[transactionController::class,'historique'])->name("transaction.historique");
Route::get('admin/transactionclientetat/{id}',[transactionController::class,'clientEtat'])->name("transaction.clientetat");
Route::get('admin/transactionliste',[transactionController::class,'liste'])->name("transaction.liste");
//USER ROUTE
Route::resource('user/credit',CreditController::class);
Route::get('user/',[user::class,"index"])->name("userindex");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
