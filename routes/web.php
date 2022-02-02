<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CalculadoraController;

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

Route::get('/clients/create', [ClientController::class, 'create']);

Route::post('/clients/store', [ClientController::class, 'store']);

Route::get('/clients/order', [ClientController::class, 'order']);

Route::get('/clients/show/{client}', [ClientController::class, 'show']);

Route::get('/clients/name/{name}', [ClientController::class, 'name']);

Route::get('/clients/search/{text}', [ClientController::class, 'search']);

//Route::get('/clients/bills/{client}', [BillController::class, 'bills']);

Route::get('/clients/bills/{client}', [ClientController::class, 'bills']);

Route::get('/bills/expensive/{value}', [ClientController::class, 'expensive']);

Route::get('/bills/create', [BillController::class, 'create']);

Route::post('/bills/store', [BillController::class, 'store']);

Route::get('/bills/between/{value1}/{value2}', [BillController::class, 'between']);

Route::get('/sum/{num1}/{num2}', [CalculadoraController::class, 'sum']);

Route::get('/div/{num1}/{num2}', [CalculadoraController::class, 'div']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
