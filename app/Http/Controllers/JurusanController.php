<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::all()->toArray();
        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurusans = $this -> validate(request(),[
            'kode' => 'required',
            'nama' => 'required',
            'jadwal' => 'required',
        ]);

        Jurusan::create($jurusans);

        return back()-> with('success','Jurusan Tersimpan');;
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
        $jurusans = Jurusan::find($id);
        return view('jurusan.edit', compact('data','id'));
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
        $jurusans = Jurusan::find($id);
        $this->validate(request(), [
            'kode' => 'required',
            'nama' => 'required',
            'jadwal' => 'required',
        ]);

        $jurusans->kode = $request->get('kode');
        $jurusans->nama = $request->get('nama');
        $jurusans->jadwal = $request->get('jadwal');
        $jurusans->save();
        return redirect('jurusan')->with('success','Jurusan Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jurusans = Jurusan::find($id);
         $jurusans->delete();
         return redirect('jurusan')->with('success','Jurusan Dihapus');
    }
}
