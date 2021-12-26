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

Route::redirect('/', 'finance', 307);
Route::redirect('/home', 'finance', 307);

Route::get('/bast', function () {
    return view('finance.bast',["title" => "BAST"
]);
});

Route::get('/editbast', function () {
    return view('finance.editbast',["title" => "BAST"
]);
});

Route::get('/newbast', function () {
    return view('finance.createbast',["title" => "BAST"
]);
});

// Route::get('/print', function () {
//     return view('finance.print', [
//         "title" => "PRINT"
//     ]);
// });

Route::get('finance', [FinanceController::class, 'index']);

Route::get('finance/print', [App\Http\Controllers\PrintController::class, 'print']);
Route::get('finance/printlocal', [App\Http\Controllers\PrintController::class, 'printlocal']);
Route::get('finance/printluar', [App\Http\Controllers\PrintController::class, 'printluar']);
Route::get('finance/printsql', [App\Http\Controllers\PrintController::class, 'printsql']);

Route::get('finance/team', [App\Http\Controllers\PrintController::class, 'team']);

Route::resource('finance/invoice', InvoiceController::class)->except(['create'])->middleware('auth');
Route::post('finance/invoice', [InvoiceController::class, 'search'])->name('finance.invoice.search')->middleware('auth');
Route::get('finance/create-invoice/local', [InvoiceController::class, 'createLocal'])->middleware('auth');
Route::get('finance/create-invoice/luar', [InvoiceController::class, 'createLuar'])->middleware('auth');
Route::get('finance/create-invoice/spq', [InvoiceController::class, 'createSpq'])->middleware('auth');

Route::get('finance/relasi', [InvoiceController::class, 'relasi']);

Auth::routes();
