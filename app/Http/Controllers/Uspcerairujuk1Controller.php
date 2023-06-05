<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk1;
use DB;

class Uspcerairujuk1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk1 = Uspcerairujuk1::all()->toArray();
      return view('Uspcerairujuk1.index', compact('Uspcerairujuk1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspcerairujuk1');
  		$result = Uspcerairujuk1::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspcerairujuk1.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uspcerairujuk1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspcerairujuk1 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Uspcerairujuk1::create($Uspcerairujuk1);

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
      //$Uspcerairujuk1 = Uspcerairujuk1::all()->toArray();
      $Uspcerairujuk1 = DB::table('uspcerairujuk1s')->where('id', $id)->get();
      return view('Uspcerairujuk1.surat', compact('Uspcerairujuk1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspcerairujuk1 = Uspcerairujuk1::find($id);
      return view('Uspcerairujuk1.edit', compact('Uspcerairujuk1','id'));
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
      $Uspcerairujuk1 = Uspcerairujuk1::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Uspcerairujuk1->nomer_surat = $request->get('nomer_surat');
      $Uspcerairujuk1->nama = $request->get('nama');
      $Uspcerairujuk1->umur = $request->get('umur');
      $Uspcerairujuk1->pekerjaan = $request->get('pekerjaan');
      $Uspcerairujuk1->alamat = $request->get('alamat');
      $Uspcerairujuk1->nama_sah = $request->get('nama_sah');
      $Uspcerairujuk1->umur_sah = $request->get('umur_sah');
      $Uspcerairujuk1->pekerjaan_sah = $request->get('pekerjaan_sah');
      $Uspcerairujuk1->alamat_sah = $request->get('alamat_sah');
      $Uspcerairujuk1->lama_tahun = $request->get('lama_tahun');
      $Uspcerairujuk1->lama_bulan = $request->get('lama_bulan');
      $Uspcerairujuk1->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspcerairujuk1->nama_pelapor = $request->get('nama_pelapor');
      $Uspcerairujuk1->nama_kades = $request->get('nama_kades');
      $Uspcerairujuk1->save();
      return redirect('Uspcerairujuk1')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspcerairujuk1 = Uspcerairujuk1::find($id);
      $Uspcerairujuk1->delete();
      return redirect('Uspcerairujuk1')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
