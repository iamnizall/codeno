<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\subInvoice;
use App\Models\bast;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FinanceController extends Controller
{
    //login
   public function __construct()
   {
    $this->middleware('auth');
}
    //index
public function index()
{
    // menghitung jumlah data pada tabel Invoice, subinvoice(project), dab BAST
    $invc = Invoice::count(); 
    $invcvol = subInvoice::count();
    $bastvol = bast::count();
    $title = "Dashboard";
        // menghitung data, dan menampilkannya pada chart
        // data desember 2021
    $des21 = date('m',strtotime('2021-12-01 00:00:01'));
    $desinv21 = Invoice::whereMonth('created_at',$des21)->count();     
    $desbst21 = bast::whereMonth('created_at',$des21)->count();     

        // data januari 2022      
    $jan22 = date('m',strtotime('2022-01-01 00:00:01'));
    $janinv22 = Invoice::whereMonth('created_at',$jan22)->count();
    $janbst22 = bast::whereMonth('created_at',$jan22)->count();

        // data februari 2022      
    $feb22 = date('m',strtotime('2022-02-01 00:00:01'));
    $febinv22 = Invoice::whereMonth('created_at',$feb22)->count();
    $febbst22 = bast::whereMonth('created_at',$feb22)->count();

        // data maret 2022      
    $mar22 = date('m',strtotime('2022-03-01 00:00:01'));
    $marinv22 = Invoice::whereMonth('created_at',$mar22)->count();
    $marbst22 = bast::whereMonth('created_at',$mar22)->count();

        // data april 2022      
    $apr22 = date('m',strtotime('2022-04-01 00:00:01'));
    $aprinv22 = Invoice::whereMonth('created_at',$apr22)->count();
    $aprbst22 = bast::whereMonth('created_at',$apr22)->count();

        // data mei 2022      
    $mei22 = date('m',strtotime('2022-05-01 00:00:01'));
    $meiinv22 = Invoice::whereMonth('created_at',$mei22)->count();
    $meibst22 = bast::whereMonth('created_at',$mei22)->count();

        // data juni 2022      
    $jun22 = date('m',strtotime('2022-06-01 00:00:01'));
    $juninv22 = Invoice::whereMonth('created_at',$jun22)->count();
    $junbst22 = bast::whereMonth('created_at',$jun22)->count();

        // data juli 2022      
    $jul22 = date('m',strtotime('2022-07-01 00:00:01'));
    $julinv22 = Invoice::whereMonth('created_at',$jul22)->count();
    $julbst22 = bast::whereMonth('created_at',$jul22)->count();

        // mengcompact beberapa variable ke view finance/index.blade.php 
    return view('finance.index', compact(
        'invc',
        'invcvol',
        'bastvol',
        'title',

        // invoice
        'desinv21',
        'janinv22',
        'febinv22',
        'marinv22',
        'aprinv22',
        'meiinv22',
        'juninv22',
        'julinv22',

        // bast
        'desbst21',
        'janbst22',
        'febbst22',
        'marbst22',
        'aprbst22',
        'meibst22',
        'junbst22',
        'julbst22'
    )); 
}
}
