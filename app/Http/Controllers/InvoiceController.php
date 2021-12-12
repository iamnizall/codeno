<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

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
        return view('finance.invoice', compact('invc', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create invoice";
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.create', compact('npo', 'title'));
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
            'no_inv'   => 'required|min:5',
            's_code'   => 'required|min:7',
            'date'     => 'required',
            'address'  => 'required',
            'mail'     => 'required',
            'client'   => 'required',
            'norek'   => 'required',
            'job_desc' => 'required',
            'vol'      => 'required',
            'price'    => 'required'
        ]);

        for($i = 0; $i<count($request->job_desc); $i++){
            $dt            = new Invoice;
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
            $dt->job_desc  = $request->job_desc[$i];
            $dt->vol       = $request->vol[$i];
            $dt->unit      = $request->unit[$i];
            $dt->price     = $request->price[$i];
            $dt->stotal    = $request->stotal;
            $dt->notes     = $request->notes;
            $dt->signature = $request->signature;
            $dt->save();
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
        //
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
        return view('finance.editinvoice', compact('invc','title'));
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
       $this->validate($request,[
        'no_inv'   => 'required|min:5',
        's_code'   => 'required|min:7',
        'date'     => 'required',
        'address'  => 'required',
        'mail'     => 'required',
        'client'   => 'required',
        'norek'   => 'required',
        'job_desc' => 'required',
        'vol'      => 'required',
        'price'    => 'required'
    ]);
       $title = "Invoice Out";
       $invc = Invoice::findOrfail($id);
       $invc->update($request->all());

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
       $invc = Invoice::where('no_inv', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.invoice', compact('invc', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
   }
}
