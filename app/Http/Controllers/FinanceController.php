<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class FinanceController extends Controller
{
    public function index()
    {
        $invc = Invoice::count(); 
        $invcvol = Invoice::all()->sum('vol');

        return view('finance.index', compact('invc', 'invcvol')); 
    }
}
