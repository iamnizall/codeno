<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FinanceController extends Controller
{
    public function index()
    {
        $invc = Invoice::count(); 
        $invcvol = Invoice::all()->sum('vol');
        $title = "Dashboard";
        return view('finance.index', compact('invc', 'invcvol', 'title')); 
    }
}
