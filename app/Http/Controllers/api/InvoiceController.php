<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator; 
use App\Models\Invoice; 
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoice = Invoice::orderby('id', 'DESC')->first(); //mengambil 1 data terakhir
        $invoice = DataTables::of(Invoice::all())->make(true);
        $response=[
            'msg' => 'list invoice table orderby id',
            'data' =>$invoice
        ];
        // return view('test',compact('invoice'));
        return response()->json($response, Response::HTTP_OK)->redirect()->route('invoice.index'); 
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_inv' => ['required'],
            's_code' => ['required'],
            'no_po' => ['required'],
            'address' => ['required'],
            'mail' => ['required'],
            'client' => ['required'],
            'payment' => ['required'],
            'job_desc' => ['required'],
            'signature' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $invoice = Invoice::create($request->all());
            $response=[
                'msg' => 'invoice create success',
                'data' => $invoice
            ];

            return response()->json($response, Response::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json([
                'msg' => 'Failed ' . $e->errorInfo
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $invoice = Invoice::findOrfail($id);
       $response=[
        'msg' => 'Detail invoice resource',
        'data' => $invoice
    ];

    return response()->json($response, Response::HTTP_OK);
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
     $invoice = Invoice::findOrfail($id);
     $validator = Validator::make($request->all(), [
         'no_inv' => ['required'],
         's_code' => ['required'],
         'no_po' => ['required'],
         'address' => ['required'],
         'mail' => ['required'],
         'client' => ['required'],
         'payment' => ['required'],
         'job_desc' => ['required'],
         'signature' => ['required'],        
     ]);

     if ($validator->fails()) {
        return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    try {
        $invoice->update($request->all());
        $response=[
            'msg' => 'invoice update success',
            'data' => $invoice
        ];

        return response()->json($response, Response::HTTP_OK);

    } catch (QueryException $e) {
        return response()->json([
            'msg' => 'Failed ' . $e->errorInfo
        ]);

    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrfail($id);

        try {
            $invoice->delete();
            $response=[
                'msg' => 'invoice delete success'
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'msg' => 'Failed ' . $e->errorInfo
            ]);

        }
    }
}
