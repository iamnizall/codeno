<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PrintController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
}

public function print()
{
    $invc = Invoice::all();
    return view('/finance/print', compact('invc'));
}
public function team()
{
    return view('/finance/team');
}
}
