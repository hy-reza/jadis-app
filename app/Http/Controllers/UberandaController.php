<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uberanda;

class UberandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Uberanda = Uberanda::all()->toArray();
        return view('Uberanda.index', compact('Uberanda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uberanda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Uberanda = $this -> validate(request(),[
            'Uberanda' => 'required',
        ]);

        Uberanda::create($Uberanda);

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
        $Uberanda = Uberanda::find($id);
        return view('Uberanda.edit', compact('data','id'));
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
        $Uberanda = Uberanda::find($id);
        $this->validate(request(), [
            'Uberanda' => 'required',
        ]);

        $Uberanda->Uberanda = $request->get('Uberanda');
        $Uberanda->save();
        return redirect('Uberanda')->with('success','Data Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Uberanda = Uberanda::find($id);
        $Uberanda->delete();
        return redirect('Uberanda')->with('success','Product has been  deleted');
    }
}
