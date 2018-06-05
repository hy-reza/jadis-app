<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubiodata;

class UbiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ubiodata = Ubiodata::all()->toArray();
        return view('Ubiodata.index', compact('Ubiodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ubiodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ubiodata = $this -> validate(request(),[
            'Ubiodata' => 'required',
        ]);

        Ubiodata::create($Ubiodata);

        return back()-> with('success','Data stored');;
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
        $Ubiodata = Ubiodata::find($id);
        return view('Ubiodata.edit', compact('data','id'));
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
        $Ubiodata = Ubiodata::find($id);
        $this->validate(request(), [
            'Ubiodata' => 'required',
        ]);

        $Ubiodata->Ubiodata = $request->get('Ubiodata');
        $Ubiodata->save();
        return redirect('Ubiodata')->with('success','Data Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ubiodata = Ubiodata::find($id);
        $Ubiodata->delete();
        return redirect('Ubiodata')->with('success','Product has been  deleted');
    }
}
