<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk2;

class Spcerairujuk2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk2 = Uspcerairujuk2::all()->toArray();
      return view('Spcerairujuk2.index', compact('Uspcerairujuk2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spcerairujuk2');
  		$result = Spcerairujuk2::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spcerairujuk2.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Spcerairujuk2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spcerairujuk2 = $this -> validate(request(),[
      'nama' => 'required',
      'nik' => 'required|numeric',
      'ttl' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'nama_sah' => 'required',
      'nik_sah' => 'required|numeric',
      'ttl_sah' => 'required',
      'pekerjaan_sah' => 'required',
      'alamat_sah' => 'required',
      'suami' => 'required',
      'negara' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Spcerairujuk2::create($Spcerairujuk2);

    return back()-> with('success','Data Pengajuan Cerai Rujuk Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Spcerairujuk2 = Spcerairujuk2::all()->toArray();
      return view('Spcerairujuk2.surat', compact('Spcerairujuk2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spcerairujuk2 = Spcerairujuk2::find($id);
      return view('Spcerairujuk2.edit', compact('Spcerairujuk2','id'));
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
      $Spcerairujuk2 = Spcerairujuk2::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'nik' => 'required|numeric',
        'ttl' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'nama_sah' => 'required',
        'nik_sah' => 'required|numeric',
        'ttl_sah' => 'required',
        'pekerjaan_sah' => 'required',
        'alamat_sah' => 'required',
        'suami' => 'required',
        'negara' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Spcerairujuk2->nama = $request->get('nama');
      $Spcerairujuk2->nik = $request->get('nik');
      $Spcerairujuk2->ttl = $request->get('ttl');
      $Spcerairujuk2->pekerjaan = $request->get('pekerjaan');
      $Spcerairujuk2->alamat = $request->get('alamat');
      $Spcerairujuk2->nama_sah = $request->get('nama_sah');
      $Spcerairujuk2->nik_sah = $request->get('nik_sah');
      $Spcerairujuk2->ttl_sah = $request->get('ttl_sah');
      $Spcerairujuk2->pekerjaan_sah = $request->get('pekerjaan_sah');
      $Spcerairujuk2->alamat_sah = $request->get('alamat_sah');
      $Spcerairujuk2->suami = $request->get('suami');
      $Spcerairujuk2->negara = $request->get('negara');
      $Spcerairujuk2->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spcerairujuk2->nama_kades = $request->get('nama_kades');
      $Spcerairujuk2->save();
      return redirect('Spcerairujuk2')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spcerairujuk2 = Spcerairujuk2::find($id);
      $Spcerairujuk2->delete();
      return redirect('Spcerairujuk2')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
