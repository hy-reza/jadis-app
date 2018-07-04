<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukrs;

class UkrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ukrs = Ukrs::all()->toArray();
        return view('Ukrs.index', compact('Ukrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ukrs.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ukrs = $this -> validate(request(),[
            'no' => 'required',
            'semester' => 'required',
            'mata_kuliah' => 'required',
            'sks' => 'required',
        ]);

        Ukrs::create($Ukrs);

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
        $Ukrs = Ukrs::find($id);
        return view('Ukrs.edit', compact('data','id'));
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
        $Ukrs = Ukrs::find($id);
        $this->validate(request(), [
            'Ukrs' => 'required',
        ]);

        $Ukrs->Ukrs = $request->get('Ukrs');
        $Ukrs->save();
        return redirect('Ujadwal')->with('success','Data Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ukrs = Ukrs::find($id);
        $Ukrs->delete();
        return redirect('Ukrs')->with('success','Product has been  deleted');
    }
}
