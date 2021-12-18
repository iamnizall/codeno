<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print()
    {
        return view('/finance/print');
    }
    public function printlocal()
    {
        return view('/finance/printlocal');
    }
    public function printluar()
    {
        return view('/finance/printluar');
    }
}
