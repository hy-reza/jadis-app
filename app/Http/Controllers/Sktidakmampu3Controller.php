<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu3;

class Sktidakmampu3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu3 = Usktidakmampu3::all()->toArray();
      return view('Sktidakmampu3.index', compact('Usktidakmampu3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Sktidakmampu3');
  		$result = Sktidakmampu3::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Sktidakmampu3.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Sktidakmampu3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Sktidakmampu3 = $this -> validate(request(),[
      'nama' => 'required',
      'jenis_kelamin' => 'required',
      'ttl' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'tahun' => 'required|numeric',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Sktidakmampu3::create($Sktidakmampu3);

    return back()-> with('success','Data Keterangan tidak mampu Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Sktidakmampu3 = Sktidakmampu3::all()->toArray();
      return view('Sktidakmampu3.surat', compact('Sktidakmampu3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Sktidakmampu3 = Sktidakmampu3::find($id);
      return view('Sktidakmampu3.edit', compact('Sktidakmampu3','id'));
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
      $Sktidakmampu3 = Sktidakmampu3::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'status' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'tahun' => 'required|numeric',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Sktidakmampu3->nama = $request->get('nama');
      $Sktidakmampu3->jenis_kelamin = $request->get('jenis_kelamin');
      $Sktidakmampu3->ttl = $request->get('ttl');
      $Sktidakmampu3->agama = $request->get('agama');
      $Sktidakmampu3->status = $request->get('status');
      $Sktidakmampu3->pekerjaan = $request->get('pekerjaan');
      $Sktidakmampu3->alamat = $request->get('alamat');
      $Sktidakmampu3->tahun = $request->get('tahun');
      $Sktidakmampu3->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Sktidakmampu3->nama_kades = $request->get('nama_kades');
      $Sktidakmampu3->save();
      return redirect('Sktidakmampu3')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Sktidakmampu3 = Sktidakmampu3::find($id);
      $Sktidakmampu3->delete();
      return redirect('Sktidakmampu3')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
