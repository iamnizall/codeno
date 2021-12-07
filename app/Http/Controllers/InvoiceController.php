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
        $invc = Invoice::orderBy('id', 'DESC')->paginate(10);
        return view('finance.invoice', compact('invc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $npo = Invoice::orderby('id', 'DESC')->first();
        return view('finance.create', compact('npo'));
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
        Invoice::create($request->all());

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
        //
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
        //
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
       $keyword = $request->search;
       $invc = Invoice::where('client', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.invoice', compact('invc'))->with('i', (request()->input('page', 1) - 1) * 5);
   }
}
