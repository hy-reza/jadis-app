<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu1;


class Sktidakmampu1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu1 = Usktidakmampu1::all()->toArray();
      return view('Sktidakmampu1.index', compact('Usktidakmampu1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
  	  {
  		$search = $request::get('Sktidakmampu1');
  		$result = Sktidakmampu1::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Sktidakmampu1.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Sktidakmampu1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Sktidakmampu1 = $this -> validate(request(),[
      'nama' => 'required',
      'jenis_kelamin' => 'required',
      'ttl' => 'required',
      'kewarganegaraan' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'persyaratan' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_berkepentingan' => 'required',
      'nama_kades' => 'required',
      'no' => 'required|numeric',
      'nama_camat' => 'required',
    ]);

    Sktidakmampu1::create($Sktidakmampu1);

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
      $Sktidakmampu1 = Sktidakmampu1::all()->toArray();
      return view('Sktidakmampu1.surat', compact('Sktidakmampu1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Sktidakmampu1 = Sktidakmampu1::find($id);
      return view('Sktidakmampu1.edit', compact('Sktidakmampu1','id'));
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
      $Sktidakmampu1 = Sktidakmampu1::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'kewarganegaraan' => 'required',
        'agama' => 'required',
        'status' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'persyaratan' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_berkepentingan' => 'required',
        'nama_kades' => 'required',
        'no' => 'required',
        'nama_camat' => 'required',
      ]);
      $Sktidakmampu1->nama = $request->get('nama');
      $Sktidakmampu1->jenis_kelamin = $request->get('jenis_kelamin');
      $Sktidakmampu1->ttl = $request->get('ttl');
      $Sktidakmampu1->kewarganegaraan = $request->get('kewarganegaraan');
      $Sktidakmampu1->agama = $request->get('agama');
      $Sktidakmampu1->status = $request->get('status');
      $Sktidakmampu1->pekerjaan = $request->get('pekerjaan');
      $Sktidakmampu1->alamat = $request->get('alamat');
      $Sktidakmampu1->persyaratan = $request->get('persyaratan');
      $Sktidakmampu1->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Sktidakmampu1->nama_kades = $request->get('nama_kades');
      $Sktidakmampu1->no = $request->get('no');
      $Sktidakmampu1->nama_camat = $request->get('nama_camat');
      $Sktidakmampu1->save();
      return redirect('Sktidakmampu1')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Sktidakmampu1 = Sktidakmampu1::find($id);
      $Sktidakmampu1->delete();
      return redirect('Sktidakmampu1')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
