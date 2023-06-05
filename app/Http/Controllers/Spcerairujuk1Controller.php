<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk1;

class Spcerairujuk1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk1 = Uspcerairujuk1::all()->toArray();
      return view('Spcerairujuk1.index', compact('Uspcerairujuk1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spcerairujuk1');
  		$result = Spcerairujuk1::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spcerairujuk1.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Spcerairujuk1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spcerairujuk1 = $this -> validate(request(),[
      'nama' => 'required',
      'umur' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'nama_sah' => 'required',
      'umur_sah' => 'required',
      'pekerjaan_sah' => 'required',
      'alamat_sah' => 'required',
      'lama_tahun' => 'required',
      'lama_bulan' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_pelapor' => 'required',
      'nama_kades' => 'required',
    ]);

    Spcerairujuk1::create($Spcerairujuk1);

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
      $Spcerairujuk1 = Spcerairujuk1::all()->toArray();
      return view('Spcerairujuk1.surat', compact('Spcerairujuk1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spcerairujuk1 = Spcerairujuk1::find($id);
      return view('Spcerairujuk1.edit', compact('Spcerairujuk1','id'));
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
      $Spcerairujuk1 = Spcerairujuk1::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'umur' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'nama_sah' => 'required',
        'umur_sah' => 'required',
        'pekerjaan_sah' => 'required',
        'alamat_sah' => 'required',
        'lama_tahun' => 'required',
        'lama_bulan' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_pelapor' => 'required',
        'nama_kades' => 'required',
      ]);
      $Spcerairujuk1->nama = $request->get('nama');
      $Spcerairujuk1->umur = $request->get('umur');
      $Spcerairujuk1->pekerjaan = $request->get('pekerjaan');
      $Spcerairujuk1->alamat = $request->get('alamat');
      $Spcerairujuk1->nama_sah = $request->get('nama_sah');
      $Spcerairujuk1->umur_sah = $request->get('umur_sah');
      $Spcerairujuk1->pekerjaan_sah = $request->get('pekerjaan_sah');
      $Spcerairujuk1->alamat_sah = $request->get('alamat_sah');
      $Spcerairujuk1->lama_tahun = $request->get('lama_tahun');
      $Spcerairujuk1->lama_bulan = $request->get('lama_bulan');
      $Spcerairujuk1->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spcerairujuk1->nama_pelapor = $request->get('nama_pelapor');
      $Spcerairujuk1->nama_kades = $request->get('nama_kades');
      $Spcerairujuk1->save();
      return redirect('Spcerairujuk1')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spcerairujuk1 = Spcerairujuk1::find($id);
      $Spcerairujuk1->delete();
      return redirect('Spcerairujuk1')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
