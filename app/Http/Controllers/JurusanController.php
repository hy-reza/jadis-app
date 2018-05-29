<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all()->toArray();
        return view('jurusan.index', compact('jurusan'));
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
        $data = $this -> validate(request(),[
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
        ]);

        Data::create($data);

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
        $data = Data::find($id);
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
        return redirect('jurusan')->with('success','Data Changed');
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
         return redirect('jurusan')->with('success','Product has been  deleted');
    }
}
