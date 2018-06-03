<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkuls = Matkul::all()->toArray();
        return view('matkul.index', compact('matkuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matkuls = $this -> validate(request(),[
            'kode' => 'required',
            'nama' => 'required',
        ]);

        Matkul::create($matkuls);

        return back()-> with('success','Data stored');;    }

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
        $matkuls = Matkul::find($id);
        return view('matkul.edit', compact('matkuls','id'));
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
        $matkuls = Matkul::find($id);
        $this->validate(request(), [
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $matkuls->kode = $request->get('kode');
        $matkuls->nama = $request->get('nama');
        $matkuls->save();
        return redirect('matkul')->with('success','Data Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $matkuls = Matkul::find($id);
        $matkuls->delete();
        return redirect('matkul')->with('success','Product has been  deleted');
    }
}
