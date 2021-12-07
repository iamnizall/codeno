<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FinanceController;

use App\Http\Controllers\PostController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('finance', [FinanceController::class, 'index']);
Route::resource('finance/invoice', InvoiceController::class);
Route::post('finance/invoice/search', [InvoiceController::class, 'search'])->name('finance.invoice.search');

Route::resource('ajax', PostController::class);
