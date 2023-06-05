<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk2;
use DB;

class Uspcerairujuk2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk2 = Uspcerairujuk2::all()->toArray();
      return view('Uspcerairujuk2.index', compact('Uspcerairujuk2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspcerairujuk2');
  		$result = Uspcerairujuk2::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspcerairujuk2.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uspcerairujuk2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspcerairujuk2 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Uspcerairujuk2::create($Uspcerairujuk2);

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
      //$Uspcerairujuk2 = Uspcerairujuk2::all()->toArray();
      $Uspcerairujuk2 = DB::table('uspcerairujuk2s')->where('id', $id)->get();
      return view('Uspcerairujuk2.surat', compact('Uspcerairujuk2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspcerairujuk2 = Uspcerairujuk2::find($id);
      return view('Uspcerairujuk2.edit', compact('Uspcerairujuk2','id'));
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
      $Uspcerairujuk2 = Uspcerairujuk2::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Uspcerairujuk2->nomer_surat = $request->get('nomer_surat');
      $Uspcerairujuk2->nama = $request->get('nama');
      $Uspcerairujuk2->nik = $request->get('nik');
      $Uspcerairujuk2->ttl = $request->get('ttl');
      $Uspcerairujuk2->pekerjaan = $request->get('pekerjaan');
      $Uspcerairujuk2->alamat = $request->get('alamat');
      $Uspcerairujuk2->nama_sah = $request->get('nama_sah');
      $Uspcerairujuk2->nik_sah = $request->get('nik_sah');
      $Uspcerairujuk2->ttl_sah = $request->get('ttl_sah');
      $Uspcerairujuk2->pekerjaan_sah = $request->get('pekerjaan_sah');
      $Uspcerairujuk2->alamat_sah = $request->get('alamat_sah');
      $Uspcerairujuk2->suami = $request->get('suami');
      $Uspcerairujuk2->negara = $request->get('negara');
      $Uspcerairujuk2->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspcerairujuk2->nama_kades = $request->get('nama_kades');
      $Uspcerairujuk2->save();
      return redirect('Uspcerairujuk2')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspcerairujuk2 = Uspcerairujuk2::find($id);
      $Uspcerairujuk2->delete();
      return redirect('Uspcerairujuk2')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
