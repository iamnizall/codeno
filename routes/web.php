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

Route::get('finance', [FinanceController::class, 'index']);

// team
Route::get('finance/team', [App\Http\Controllers\PrintController::class, 'team']);

// print Invoice
Route::get('finance/print', [App\Http\Controllers\PrintController::class, 'print']);
Route::get('finance/printlocal', [App\Http\Controllers\PrintController::class, 'printlocal']);
Route::get('finance/printluar', [App\Http\Controllers\PrintController::class, 'printluar']);
Route::get('finance/printsql', [App\Http\Controllers\PrintController::class, 'printsql']);

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

// mail
Route::get ('finance/mail', [App\Http\Controllers\MailerController::class, 'index'])->middleware('auth');
Route::get ('finance/mailer', function(){
	$details = [
		'title' => 'Mail from CodeNuklir',
		'body' => 'Test mail sent by Laravel 8 using SMTP.'
	];

	Mail::to('4duuuh@gmail.com')->send(new \App\Mail\Gmail($details));

	dd("Email is Sent, please check your inbox.");
});
