<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\subInvoice;

use Illuminate\Support\Facades\Validator; 
use DataTables;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // tampilan tabel invoice dan akan otomatis pagination saat data lebih dari 10
    public function index()
    {
        $title = "Invoice Out";
        $invc = Invoice::orderBy('id', 'DESC')->paginate(10);
        return view('finance.invoice.invoice', compact('invc', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }
    // ada 3 macam create invoice
    // 1. create invoice local
    public function createLocal()
    {
        $title = "Create Invoice Local";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.invoice.include.local', compact('npo', 'title'));
    }
    // 2. create invoice luar
    public function createLuar()
    {
        $title = "Create Invoice Luar";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.invoice.include.luar', compact('npo', 'title'));
    }
    // 3. create invoice spq
    public function createSpq()
    {
        $title = "Create Invoice SPQ";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.invoice.include.spq', compact('npo', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // request data dari form create invoice, dan data akan diinputkan ke database di tabel invoice
    // dan, untuk project seperti job description, price, dll. akan diinputkan ke tabel subInvoice berdasarkan type invoice(local, luar, atau spq)
    public function store(Request $request)
    {   
        // proses validasi pada form input
        $this->validate($request,[
            'p_name'   => 'required',
            'no_inv'   => 'required|min:5',
            's_code'   => 'required|min:7',
            'date'     => 'required',
            'address'  => 'required',
            'mail'     => 'required',
            'client'   => 'required',
            'norek'    => 'required',
            'job_desc' => 'required',
            'vol'      => 'required',
            'price'    => 'required'
        ]);
        // create invoice
        $dt            = new Invoice;
        $dt->type      = $request->type;
        $dt->p_name    = $request->p_name;
        $dt->no_inv    = $request->no_inv;
        $dt->s_code    = $request->s_code;
        $dt->date      = $request->date;
        $dt->no_po     = $request->no_po;
        $dt->address   = $request->address;
        $dt->mail      = $request->mail;
        $dt->client    = $request->client;
        $dt->payment   = $request->payment;
        $dt->tax       = $request->tax;
        $dt->indate    = $request->indate;
        $dt->norek     = $request->norek;
        $dt->totalcost = $request->totalcost;
        $dt->totaltax  = $request->totaltax;
        $dt->stotal    = $request->stotal;
        $dt->notes     = $request->notes;
        $dt->signature = $request->signature;
        $dt->save();
        // jika invoice local
        if ($request->type == 'local') {
            for($i = 0; $i<count($request->job_desc); $i++){
                $dl             = new subInvoice;
                $dl->invoice_id = $request->invoice_id;
                $dl->job_desc   = $request->job_desc[$i];
                $dl->vol        = $request->vol[$i];
                $dl->unit       = $request->unit[$i];
                $dl->price      = $request->price[$i];
                $dl->total      = $request->total[$i];
                $dl->save();
            };
        // jika invoice luar
        }elseif($request->type == 'luar'){
            for($i = 0; $i<count($request->job_desc); $i++){
                $dl             = new subInvoice;
                $dl->invoice_id = $request->invoice_id;
                $dl->job_desc   = $request->job_desc[$i];
                $dl->manager    = $request->manager[$i];
                $dl->starnum    = $request->starnum[$i];
                $dl->vol        = $request->vol[$i];
                $dl->price      = $request->price[$i];
                $dl->total      = $request->total[$i];
                $dl->save();
            };
            // jika invoice spq
        }elseif($request->type == 'spq'){
            for($i = 0; $i<count($request->job_desc); $i++){
                $dl             = new subInvoice;
                $dl->invoice_id = $request->invoice_id;
                $dl->job_desc   = $request->job_desc[$i];
                $dl->vol        = $request->vol[$i];
                $dl->price      = $request->price[$i];
                $dl->total      = $request->total[$i];
                $dl->save();
            }
        };


        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //view print invoice, data yang tampil berdasarkan id
    public function show($id)
    {
        $invc = Invoice::find($id);
        return view('finance/invoice/print/cprint', compact('invc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // edit, menampilkan data berdasarkan id
    public function edit($id)
    {
        $title = "Invoice Out";
        $invc = Invoice::findOrfail($id);
        return view('finance.invoice.include.edit', compact('invc','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // untuk proses edit requset data hampir sama pada saat create invoice
    public function update(Request $request, $id)
    {
       $title = "Invoice Out";

       $dt            = Invoice::find($id);
       $dt->type      = $request->type;
       $dt->p_name    = $request->p_name;
       $dt->no_inv    = $request->no_inv;
       $dt->s_code    = $request->s_code;
       $dt->date      = $request->date;
       $dt->no_po     = $request->no_po;
       $dt->address   = $request->address;
       $dt->mail      = $request->mail;
       $dt->client    = $request->client;
       $dt->payment   = $request->payment;
       $dt->tax       = $request->tax;
       $dt->indate    = $request->indate;
       $dt->norek     = $request->norek;
       $dt->notes     = $request->notes;
       $dt->signature = $request->signature;
       $dt->save();
     // jika proses edit selesai, maka url akan diarahkan ke tampilan tabel invoice.
       return redirect()->route('invoice.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // proses, menghapus 1 data invoice pada tabel invoice
    public function destroy($id)
    {
        $invc = Invoice::findOrfail($id);
        $invc->delete();
        return redirect()->route('invoice.index');
    }
    // kolom pencarian, proses pencarian berdasarkan nama client
    public function search(Request $request)
    {
       $title = "Invoice Out";
       $keyword = $request->search;
       $invc = Invoice::where('client', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.invoice.invoice', compact('invc', 'title'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
   }

   public function print()
   {
    $invc = Invoice::all();
    return view('/finance/print', compact('invc'));
}
}
