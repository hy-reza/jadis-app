<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskpenerimaanpensiun;


class SkpenerimaanpensiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskpenerimaanpensiun = Uskpenerimaanpensiun::all()->toArray();
      return view('Skpenerimaanpensiun.index', compact('Uskpenerimaanpensiun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
  	  {
  		$search = $request::get('Skpenerimaanpensiun');
  		$result = Skpenerimaanpensiun::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Skpenerimaanpensiun.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Skpenerimaanpensiun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Skpenerimaanpensiun = $this -> validate(request(),[
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

    Skpenerimaanpensiun::create($Skpenerimaanpensiun);

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
      $Skpenerimaanpensiun = Skpenerimaanpensiun::all()->toArray();
      return view('Skpenerimaanpensiun.surat', compact('Skpenerimaanpensiun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Skpenerimaanpensiun = Skpenerimaanpensiun::find($id);
      return view('Skpenerimaanpensiun.edit', compact('Skpenerimaanpensiun','id'));
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
      $Skpenerimaanpensiun = Skpenerimaanpensiun::find($id);
      $this->validate(request(), [
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
      $Skpenerimaanpensiun->nama_lengkap = $request->get('nama_lengkap');
      $Skpenerimaanpensiun->jenis_kelamin = $request->get('jenis_kelamin');
      $Skpenerimaanpensiun->ttl = $request->get('ttl');
      $Skpenerimaanpensiun->kewarganegaraan = $request->get('kewarganegaraan');
      $Skpenerimaanpensiun->agama = $request->get('agama');
      $Skpenerimaanpensiun->status_perkawinan = $request->get('status_perkawinan');
      $Skpenerimaanpensiun->pekerjaan = $request->get('pekerjaan');
      $Skpenerimaanpensiun->alamat = $request->get('alamat');
      $Skpenerimaanpensiun->dipergunakaan_untuk = $request->get('dipergunakaan_untuk');
      $Skpenerimaanpensiun->tujuan = $request->get('tujuan');
      $Skpenerimaanpensiun->surat_pengantar = $request->get('surat_pengantar');
      $Skpenerimaanpensiun->daf_kk = $request->get('daf_kk');
      $Skpenerimaanpensiun->no_ktp = $request->get('no_ktp');
      $Skpenerimaanpensiun->nama_bin = $request->get('nama_bin');
      $Skpenerimaanpensiun->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Skpenerimaanpensiun->nama_pemegang = $request->get('nama_pemegang');
      $Skpenerimaanpensiun->nama_kades = $request->get('nama_kades');
      $Skpenerimaanpensiun->save();
      return redirect('Skpenerimaanpensiun')->with('success','Data Keterangan Penerimaan Pensiun  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Skpenerimaanpensiun = Skpenerimaanpensiun::find($id);
      $Skpenerimaanpensiun->delete();
      return redirect('Skpenerimaanpensiun')->with('success','Data Keterangan Penerimaan Pensiun dihapus');
    }
}
