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

    public function createLocal()
    {
        $title = "Create Invoice Local";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.invoice.include.local', compact('npo', 'title'));
    }

    public function createLuar()
    {
        $title = "Create Invoice Luar";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.invoice.include.luar', compact('npo', 'title'));
    }

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
    public function store(Request $request)
    {
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
    public function show($id)
    {
        $invc = Invoice::find($id);
        // return $invc;
        return view('finance/invoice/print/cprint', compact('invc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Invoice Out";
        $invc = Invoice::findOrfail($id);
        // return $invc;
        return view('finance.invoice.include.edit', compact('invc','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

       return redirect()->route('invoice.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invc = Invoice::findOrfail($id);
        $invc->delete();
        return redirect()->route('invoice.index');
    }

    public function search(Request $request)
    {
       $title = "Invoice Out";
       $keyword = $request->search;
       $invc = Invoice::where('client', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.invoice.invoice', compact('invc', 'title'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
   }

   public function relasi()
   {
       $relasi = Invoice::all();

     // return $relasi;
       return view('relasi', compact('relasi'));
   }
}
