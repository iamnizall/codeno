<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\subInvoice;
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
    $invc = Invoice::count(); 
    $invcvol = subInvoice::count();
    $title = "Dashboard";

        // data desember 2021
    $des21 = date('m',strtotime('2021-12-01 00:00:01'));
    $desinv21 = Invoice::whereMonth('created_at',$des21)->count();
    $desjob21 = subInvoice::whereMonth('created_at',$des21)->count();      


        // data januari 2022
    $jan22 = date('m',strtotime('2022-01-01 00:00:01'));
    $janinv22 = Invoice::whereMonth('created_at',$jan22)->count();
    $janjob22 = subInvoice::whereMonth('created_at',$jan22)->count();       



    return view('finance.index', compact(
        'invc',
        'invcvol',
        'title',
        'desjob21',
        'desinv21',
        'janjob22',
        'janinv22'
    )); 
}
}
