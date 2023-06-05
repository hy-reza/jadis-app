<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspahliwaris;
use DB;

class UspahliwarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspahliwaris = Uspahliwaris::all()->toArray();
      return view('Uspahliwaris.index', compact('Uspahliwaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspahliwaris');
  		$result = Uspahliwaris::where('nomer_akte_kematian', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspahliwaris.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uspahliwaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspahliwaris = $this -> validate(request(),[
      'nomer_surat' => 'required',
      'nama_alm' => 'required',
      'nomer_akte_kematian' => 'required',
      'hari' => 'required',
      'tanggal' => 'required',
      'bulan' => 'required',
      'tahun' => 'required',
      'status_suami_istri' => 'required',
      'nama_suami_istri' => 'required',
      'nama_anak' => 'required',
      'umur_anak' => 'required',
      'pekerjaan_anak' => 'required',
      'alamat_anak' => 'required',
      'no_req' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_camat' => 'required',
      'nama_kades' => 'required',

    ]);

    Uspahliwaris::create($Uspahliwaris);

    return back()-> with('success','Data Pernyataan Ahli Waris Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$Uspahliwaris = Uspahliwaris::all()->toArray();
      $Uspahliwaris = DB::table('Uspahliwaris')->where('id', $id)->get();
      return view('Uspahliwaris.surat', compact('Uspahliwaris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspahliwaris = Uspahliwaris::find($id);
      return view('Uspahliwaris.edit', compact('Uspahliwaris','id'));
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
      $Uspahliwaris = Uspahliwaris::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
        'nama_alm' => 'required',
        'nomer_akte_kematian' => 'required',
        'hari' => 'required',
        'tanggal' => 'required',
        'bulan' => 'required',
        'tahun' => 'required',
        'status_suami_istri' => 'required',
        'nama_suami_istri' => 'required',
        'nama_anak' => 'required',
        'umur_anak' => 'required',
        'pekerjaan_anak' => 'required',
        'alamat_anak' => 'required',
        'no_req' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_camat' => 'required',
        'nama_kades' => 'required',
      ]);
      $Uspahliwaris->nomer_surat = $request->get('nomer_surat');
      $Uspahliwaris->nama_alm = $request->get('nama_alm');
      $Uspahliwaris->nomer_akte_kematian = $request->get('nomer_akte_kematian');
      $Uspahliwaris->hari = $request->get('hari');
      $Uspahliwaris->tanggal = $request->get('tanggal');
      $Uspahliwaris->bulan = $request->get('bulan');
      $Uspahliwaris->tahun = $request->get('tahun');
      $Uspahliwaris->status_suami_istri = $request->get('status_suami_istri');
      $Uspahliwaris->nama_suami_istri = $request->get('nama_suami_istri');
      $Uspahliwaris->nama_anak = $request->get('nama_anak');
      $Uspahliwaris->umur_anak = $request->get('umur_anak');
      $Uspahliwaris->pekerjaan_anak = $request->get('pekerjaan_anak');
      $Uspahliwaris->alamat_anak = $request->get('alamat_anak');
      $Uspahliwaris->no_req = $request->get('no_req');
      $Uspahliwaris->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspahliwaris->nama_camat = $request->get('nama_camat');
      $Uspahliwaris->nama_kades = $request->get('nama_kades');
      $Uspahliwaris->save();
      return redirect('Uspahliwaris')->with('success','Data Pernyataan Ahli Waris  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspahliwaris = Uspahliwaris::find($id);
      $Uspahliwaris->delete();
      return redirect('Uspahliwaris')->with('success','Data Pernyataan Ahli Waris dihapus');
    }
}
