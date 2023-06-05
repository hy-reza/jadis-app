<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu1;
use DB;

class Usktidakmampu1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu1 = Usktidakmampu1::all()->toArray();
      return view('Usktidakmampu1.index', compact('Usktidakmampu1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Usktidakmampu1');
  		$result = Usktidakmampu1::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Usktidakmampu1.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Usktidakmampu1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Usktidakmampu1 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Usktidakmampu1::create($Usktidakmampu1);

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
      //$Usktidakmampu1 = Usktidakmampu1::all()->toArray();
      $Usktidakmampu1 = DB::table('usktidakmampu1s')->where('id', $id)->get();
      return view('Usktidakmampu1.surat', compact('Usktidakmampu1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Usktidakmampu1 = Usktidakmampu1::find($id);
      return view('Usktidakmampu1.edit', compact('Usktidakmampu1','id'));
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
      $Usktidakmampu1 = Usktidakmampu1::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Usktidakmampu1->nomer_surat = $request->get('nomer_surat');
      $Usktidakmampu1->nama = $request->get('nama');
      $Usktidakmampu1->jenis_kelamin = $request->get('jenis_kelamin');
      $Usktidakmampu1->ttl = $request->get('ttl');
      $Usktidakmampu1->kewarganegaraan = $request->get('kewarganegaraan');
      $Usktidakmampu1->agama = $request->get('agama');
      $Usktidakmampu1->status = $request->get('status');
      $Usktidakmampu1->pekerjaan = $request->get('pekerjaan');
      $Usktidakmampu1->alamat = $request->get('alamat');
      $Usktidakmampu1->persyaratan = $request->get('persyaratan');
      $Usktidakmampu1->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Usktidakmampu1->nama_kades = $request->get('nama_kades');
      $Usktidakmampu1->no = $request->get('no');
      $Usktidakmampu1->nama_camat = $request->get('nama_camat');
      $Usktidakmampu1->save();
      return redirect('Usktidakmampu1')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Usktidakmampu1 = Usktidakmampu1::find($id);
      $Usktidakmampu1->delete();
      return redirect('Usktidakmampu1')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
