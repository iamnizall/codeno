<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PrintController extends Controller
{
    public function team()
    {
        return view('/finance/team');
    }
}
