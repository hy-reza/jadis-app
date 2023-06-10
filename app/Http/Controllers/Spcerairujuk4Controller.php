<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk4;

class Spcerairujuk4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk4 = Uspcerairujuk4::all()->toArray();
      return view('Spcerairujuk4.index', compact('Uspcerairujuk4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spcerairujuk4');
  		$result = Spcerairujuk4::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spcerairujuk4.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Spcerairujuk4.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spcerairujuk4 = $this -> validate(request(),[
      'nama' => 'required',
      'ttl' => 'required',
      'agama' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'nama_istri' => 'required',
      'ttl_istri' => 'required',
      'agama_istri' => 'required',
      'pekerjaan_istri' => 'required',
      'alamat_istri' => 'required',
      'nama_wali' => 'required',
      'ttl_wali' => 'required',
      'agama_wali' => 'required',
      'pekerjaan_wali' => 'required',
      'alamat_wali' => 'required',
      'tgl_pelaksaan' => 'required',
      'maskawin' => 'required',
      'saksi1' => 'required',
      'saksi2' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Spcerairujuk4::create($Spcerairujuk4);

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
      $Spcerairujuk4 = Spcerairujuk4::all()->toArray();
      return view('Spcerairujuk4.surat', compact('Spcerairujuk4'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spcerairujuk4 = Spcerairujuk4::find($id);
      return view('Spcerairujuk4.edit', compact('Spcerairujuk4','id'));
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
      $Spcerairujuk4 = Spcerairujuk4::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'nama_istri' => 'required',
        'ttl_istri' => 'required',
        'agama_istri' => 'required',
        'pekerjaan_istri' => 'required',
        'alamat_istri' => 'required',
        'nama_wali' => 'required',
        'ttl_wali' => 'required',
        'agama_wali' => 'required',
        'pekerjaan_wali' => 'required',
        'alamat_wali' => 'required',
        'tgl_pelaksaan' => 'required',
        'maskawin' => 'required',
        'saksi1' => 'required',
        'saksi2' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Spcerairujuk4->nama = $request->get('nama');
      $Spcerairujuk4->ttl = $request->get('ttl');
      $Spcerairujuk4->agama = $request->get('agama');
      $Spcerairujuk4->pekerjaan = $request->get('pekerjaan');
      $Spcerairujuk4->alamat = $request->get('alamat');
      $Spcerairujuk4->nama_istri = $request->get('nama_istri');
      $Spcerairujuk4->ttl_istri = $request->get('ttl_istri');
      $Spcerairujuk4->agama_istri = $request->get('agama_istri');
      $Spcerairujuk4->pekerjaan_istri = $request->get('pekerjaan_istri');
      $Spcerairujuk4->alamat_istri = $request->get('alamat_istri');
      $Spcerairujuk4->nama_wali = $request->get('nama_wali');
      $Spcerairujuk4->ttl_wali = $request->get('ttl_wali');
      $Spcerairujuk4->agama_wali = $request->get('agama_wali');
      $Spcerairujuk4->pekerjaan_wali = $request->get('pekerjaan_wali');
      $Spcerairujuk4->alamat_wali = $request->get('alamat_wali');
      $Spcerairujuk4->tgl_pelaksaan = $request->get('tgl_pelaksaan');
      $Spcerairujuk4->maskawin = $request->get('maskawin');
      $Spcerairujuk4->saksi1 = $request->get('saksi1');
      $Spcerairujuk4->saksi2 = $request->get('saksi2');
      $Spcerairujuk4->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spcerairujuk4->nama_kades = $request->get('nama_kades');
      $Spcerairujuk4->save();
      return redirect('Spcerairujuk4')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spcerairujuk4 = Spcerairujuk4::find($id);
      $Spcerairujuk4->delete();
      return redirect('Spcerairujuk4')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
