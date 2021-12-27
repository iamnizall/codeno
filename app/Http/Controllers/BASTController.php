<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BAST;

use Illuminate\Support\Facades\Validator; 
use DataTables;

class BASTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "BAST";
        $bast1 = BAST::orderBy('id', 'DESC')->paginate(10);
        return view('finance.bast', compact('bast1', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create BAST";
        $bst = BAST::orderby('id', 'DESC')->first();
        return view('finance.createbast', compact('bst', 'title'));
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
            'no_bast'   => 'required',
            't_work'   => 'required',
            'date'     => 'required',
            'no_inv'  => 'required',
            'Pname'     => 'required',
            'pClient'   => 'required',
            'perihal'   => 'required',
            'Cname' => 'required',
            'mail'      => 'required',
            'item'    => 'required',
            'Quan'    => 'required',
            'unit'    => 'required',
            'status'    => 'required'
        ]);
        $bs            = new BAST;
        $bs->no_bast      = $request->no_bast;
        $bs->t_work      = $request->t_work;
        $bs->date      = $request->date;
        $bs->no_inv      = $request->no_inv;
        $bs->Pname      = $request->Pname;
        $bs->pClient      = $request->pClient;
        $bs->perihal      = $request->perihal;
        $bs->Cname      = $request->Cname;
        $bs->mail      = $request->mail;
        $bs->item      = $request->item;
        $bs->Quan      = $request->Quan;
        $bs->unit      = $request->unit;
        $bs->status      = $request->status;
        $bs->notes      = $request->notes;
        $bs->signature      = $request->signature;
        $bs->save();

        // for($i = 0; $i<count($request->item); $i++){
        //     $dl             = new subbast;
        //     $dl->no_bast = $request->no_bast;
        //     $dl->item   = $request->item[$i];
        //     $dl->Quan        = $request->Quan[$i];
        //     $dl->unit       = $request->unit[$i];
        //     $dl->status      = $request->status[$i];
        //     $dl->save();
        // };

        // BAST::create($request->all());

        return redirect()->route('bast.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bast = BAST::find($id);
        return view('finance.printbast', compact('bast'));
        //return $bast1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "BAST";
        $bst = BAST::findOrfail($id);
        return view('finance.editbast', compact('bst','title'));
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
        $title = "BAST";

        $bs            = BAST::find($id);
        $bs->no_bast      = $request->no_bast;
        $bs->t_work      = $request->t_work;
        $bs->date      = $request->date;
        $bs->no_inv      = $request->no_inv;
        $bs->Pname      = $request->Pname;
        $bs->pClient      = $request->pClient;
        $bs->perihal      = $request->perihal;
        $bs->Cname      = $request->Cname;
        $bs->mail      = $request->mail;
        $bs->item      = $request->item;
        $bs->Quan      = $request->Quan;
        $bs->unit      = $request->unit;
        $bs->status      = $request->status;
        $bs->notes      = $request->notes;
        $bs->signature      = $request->signature;
        $bs->save();

        // for($i = 0; $i<count($request->item); $i++){
        //     $dl             = new subbast;
        //     $dl->no_bast = $request->no_bast;
        //     $dl->item   = $request->item[$i];
        //     $dl->Quan        = $request->Quan[$i];
        //     $dl->unit       = $request->unit[$i];
        //     $dl->status      = $request->status[$i];
        //     $dl->save();
        // };

        return redirect()->route('bast.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bast1 = BAST::findOrfail($id);
        $bast1->delete();
        return redirect()->route('bast.index');
    }

    public function search(Request $request)
    {
       $title = "BAST";
       $keyword = $request->search;
       $bast1 = BAST::where('client', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.bast', compact('bast1', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
   }

   public function print($id)
    {
        $bast1 = BAST::find($id);
        return view('finance.printbast', compact('bast1'));
    }

}
