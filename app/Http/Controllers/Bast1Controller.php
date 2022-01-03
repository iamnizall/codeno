<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BAST;

class Bast1Controller extends Controller
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
        BAST::create($request->all());
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
        BAST::find($id)->update($request->all());

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
       $bast1 = BAST::where('Cname', 'like', "%" . $keyword . "%")->paginate(5);
       return view('finance.bast', compact('bast1', 'title'))->with('i', (request()->input('page', 1) - 1) * 5);
   }
}
