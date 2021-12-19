<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\subInvoice;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FinanceController extends Controller
{
    public function index()
    {
        $invc = Invoice::count(); 
        $invcvol = subInvoice::count();
        $title = "Dashboard";
        return view('finance.index', compact('invc', 'invcvol', 'title')); 
    }
}
