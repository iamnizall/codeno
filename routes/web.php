<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\BASTController;
use App\Http\Controllers\BAST1Controller;

use App\Http\Controllers\MailerController;

use Illuminate\Support\Facades\Mail;
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

Route::redirect('/', 'finance', 307); //redirect url '/' -> '/finance'
Route::redirect('/home', 'finance', 307); //redirect url '/home' -> '/finance'
Route::redirect('/mail', '/finance/mail', 307); //redirect url '/mail' -> '/finance/mail'

Route::get('finance', [FinanceController::class, 'index']);

// team
Route::get('finance/team', function(){
	return view('/finance/team');
});

// tabel Invoice dan create Invoice (local, luar, spq)
Route::resource('finance/invoice', InvoiceController::class)->except(['create'])->middleware('auth');
Route::get('finance/create-invoice/local', [InvoiceController::class, 'createLocal'])->middleware('auth');
Route::get('finance/create-invoice/luar', [InvoiceController::class, 'createLuar'])->middleware('auth');
Route::get('finance/create-invoice/spq', [InvoiceController::class, 'createSpq'])->middleware('auth');
// search invoice
Route::post('finance/invoice', [InvoiceController::class, 'search'])->name('finance.invoice.search')->middleware('auth'); //search


// BAST

Route::resource('finance/bast', Bast1Controller::class);
Route::post('finance/bast', [Bast1Controller::class, 'search'])->name('finance.bast.search');

Auth::routes();


Route::get('finance/mail', [App\Http\Controllers\SendMailController::class, 'index'])->name('mail.index')->middleware('auth');
Route::post('mail/mail', [App\Http\Controllers\SendMailController::class, 'send']);
