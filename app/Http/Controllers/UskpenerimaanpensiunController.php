<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskpenerimaanpensiun;
use DB;

class UskpenerimaanpensiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskpenerimaanpensiun = Uskpenerimaanpensiun::all()->toArray();
      return view('Uskpenerimaanpensiun.index', compact('Uskpenerimaanpensiun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uskpenerimaanpensiun');
  		$result = Uskpenerimaanpensiun::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uskpenerimaanpensiun.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uskpenerimaanpensiun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uskpenerimaanpensiun = $this -> validate(request(),[
      'nomer_surat' => 'required',
      'nama_lengkap' => 'required',
      'jenis_kelamin' => 'required',
      'ttl' => 'required',
      'kewarganegaraan' => 'required',
      'agama' => 'required',
      'status_perkawinan' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'dipergunakaan_untuk' => 'required',
      'tujuan' => 'required',
      'surat_pengantar' => 'required',
      'daf_kk' => 'required',
      'no_ktp' => 'required',
      'nama_bin' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_pemegang' => 'required',
      'nama_kades' => 'required',
    ]);

    Uskpenerimaanpensiun::create($Uskpenerimaanpensiun);

    return back()-> with('success','Data Keterangan Penerimaan Pensiun Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$Uskpenerimaanpensiun = Uskpenerimaanpensiun::all()->toArray();
      $Uskpenerimaanpensiun = DB::table('uskpenerimaanpensiuns')->where('id', $id)->get();
      return view('Uskpenerimaanpensiun.surat', compact('Uskpenerimaanpensiun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uskpenerimaanpensiun = Uskpenerimaanpensiun::find($id);
      return view('Uskpenerimaanpensiun.edit', compact('Uskpenerimaanpensiun','id'));
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
      $Uskpenerimaanpensiun = Uskpenerimaanpensiun::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'kewarganegaraan' => 'required',
        'agama' => 'required',
        'status_perkawinan' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'dipergunakaan_untuk' => 'required',
        'tujuan' => 'required',
        'surat_pengantar' => 'required',
        'daf_kk' => 'required',
        'no_ktp' => 'required',
        'nama_bin' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_pemegang' => 'required',
        'nama_kades' => 'required',
      ]);
      $Uskpenerimaanpensiun->nomer_surat = $request->get('nomer_surat');
      $Uskpenerimaanpensiun->nama_lengkap = $request->get('nama_lengkap');
      $Uskpenerimaanpensiun->jenis_kelamin = $request->get('jenis_kelamin');
      $Uskpenerimaanpensiun->ttl = $request->get('ttl');
      $Uskpenerimaanpensiun->kewarganegaraan = $request->get('kewarganegaraan');
      $Uskpenerimaanpensiun->agama = $request->get('agama');
      $Uskpenerimaanpensiun->status_perkawinan = $request->get('status_perkawinan');
      $Uskpenerimaanpensiun->pekerjaan = $request->get('pekerjaan');
      $Uskpenerimaanpensiun->alamat = $request->get('alamat');
      $Uskpenerimaanpensiun->dipergunakaan_untuk = $request->get('dipergunakaan_untuk');
      $Uskpenerimaanpensiun->tujuan = $request->get('tujuan');
      $Uskpenerimaanpensiun->surat_pengantar = $request->get('surat_pengantar');
      $Uskpenerimaanpensiun->daf_kk = $request->get('daf_kk');
      $Uskpenerimaanpensiun->no_ktp = $request->get('no_ktp');
      $Uskpenerimaanpensiun->nama_bin = $request->get('nama_bin');
      $Uskpenerimaanpensiun->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uskpenerimaanpensiun->nama_pemegang = $request->get('nama_pemegang');
      $Uskpenerimaanpensiun->nama_kades = $request->get('nama_kades');
      $Uskpenerimaanpensiun->save();
      return redirect('Uskpenerimaanpensiun')->with('success','Data Keterangan Penerimaan Pensiun  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uskpenerimaanpensiun = Uskpenerimaanpensiun::find($id);
      $Uskpenerimaanpensiun->delete();
      return redirect('Uskpenerimaanpensiun')->with('success','Data Keterangan Penerimaan Pensiun dihapus');
    }
}
