<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print()
    {
        $invc = Invoice::all();
        return view('/finance/print', compact('invc'));
    }
    public function printlocal()
    {
        return view('/finance/printlocal');
    }
    public function printluar()
    {
        return view('/finance/printluar');
    }
    public function printsql()
    {
        return view('/finance/printsql');
    }
    public function team()
    {
        return view('/finance/team');
    }
}
