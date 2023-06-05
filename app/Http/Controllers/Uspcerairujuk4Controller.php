<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk4;
use DB;

class Uspcerairujuk4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk4 = Uspcerairujuk4::all()->toArray();
      return view('Uspcerairujuk4.index', compact('Uspcerairujuk4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspcerairujuk4');
  		$result = Uspcerairujuk4::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspcerairujuk4.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Uspcerairujuk4.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspcerairujuk4 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Uspcerairujuk4::create($Uspcerairujuk4);

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
      //$Uspcerairujuk4 = Uspcerairujuk4::all()->toArray();
      $Uspcerairujuk4 = DB::table('uspcerairujuk4s')->where('id', $id)->get();
      return view('Uspcerairujuk4.surat', compact('Uspcerairujuk4'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspcerairujuk4 = Uspcerairujuk4::find($id);
      return view('Uspcerairujuk4.edit', compact('Uspcerairujuk4','id'));
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
      $Uspcerairujuk4 = Uspcerairujuk4::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Uspcerairujuk4->nomer_surat = $request->get('nomer_surat');
      $Uspcerairujuk4->nama = $request->get('nama');
      $Uspcerairujuk4->ttl = $request->get('ttl');
      $Uspcerairujuk4->agama = $request->get('agama');
      $Uspcerairujuk4->pekerjaan = $request->get('pekerjaan');
      $Uspcerairujuk4->alamat = $request->get('alamat');
      $Uspcerairujuk4->nama_istri = $request->get('nama_istri');
      $Uspcerairujuk4->ttl_istri = $request->get('ttl_istri');
      $Uspcerairujuk4->agama_istri = $request->get('agama_istri');
      $Uspcerairujuk4->pekerjaan_istri = $request->get('pekerjaan_istri');
      $Uspcerairujuk4->alamat_istri = $request->get('alamat_istri');
      $Uspcerairujuk4->nama_wali = $request->get('nama_wali');
      $Uspcerairujuk4->ttl_wali = $request->get('ttl_wali');
      $Uspcerairujuk4->agama_wali = $request->get('agama_wali');
      $Uspcerairujuk4->pekerjaan_wali = $request->get('pekerjaan_wali');
      $Uspcerairujuk4->alamat_wali = $request->get('alamat_wali');
      $Uspcerairujuk4->tgl_pelaksaan = $request->get('tgl_pelaksaan');
      $Uspcerairujuk4->maskawin = $request->get('maskawin');
      $Uspcerairujuk4->saksi1 = $request->get('saksi1');
      $Uspcerairujuk4->saksi2 = $request->get('saksi2');
      $Uspcerairujuk4->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspcerairujuk4->nama_kades = $request->get('nama_kades');
      $Uspcerairujuk4->save();
      return redirect('Uspcerairujuk4')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspcerairujuk4 = Uspcerairujuk4::find($id);
      $Uspcerairujuk4->delete();
      return redirect('Uspcerairujuk4')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
