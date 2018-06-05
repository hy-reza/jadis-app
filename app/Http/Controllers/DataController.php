<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all()->toArray();
        return view('v1.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this -> validate(request(),[
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
        ]);

        Data::create($data);

        return back()-> with('success','Data Tersimpan');;
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
        $data = Data::find($id);
        return view('v1.edit', compact('data','id'));
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
        $data = Data::find($id);
        $this->validate(request(), [
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
        ]);

        $data->nim = $request->get('nim');
        $data->nama = $request->get('nama');
        $data->jurusan = $request->get('jurusan');
        $data->fakultas = $request->get('fakultas');
        $data->alamat = $request->get('alamat');
        $data->save();
        return redirect('v1')->with('success','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = data::find($id);         
         $data->delete();         
         return redirect('v1')->with('success','Data Dihapus'); 
    }
}
