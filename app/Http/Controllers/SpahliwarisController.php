<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspahliwaris;
use DB;

class SpahliwarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspahliwaris = Uspahliwaris::all()->toArray();
      return view('Spahliwaris.index', compact('Uspahliwaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Spahliwaris');
  		$result = Spahliwaris::where('nomer_akte_kematian', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spahliwaris.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Spahliwaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spahliwaris = $this -> validate(request(),[
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

    Spahliwaris::create($Spahliwaris);

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
      //$Spahliwaris = Spahliwaris::find()->toArray();
      $Spahliwaris = DB::table('Spahliwaris')->where('id', $id)->get();
      return view('Spahliwaris.surat', compact('Spahliwaris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spahliwaris = Spahliwaris::find($id);
      return view('Spahliwaris.edit', compact('Spahliwaris','id'));
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
      $Spahliwaris = Spahliwaris::find($id);
      $this->validate(request(), [
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
      $Spahliwaris->nama_alm = $request->get('nama_alm');
      $Spahliwaris->nomer_akte_kematian = $request->get('nomer_akte_kematian');
      $Spahliwaris->hari = $request->get('hari');
      $Spahliwaris->tanggal = $request->get('tanggal');
      $Spahliwaris->bulan = $request->get('bulan');
      $Spahliwaris->tahun = $request->get('tahun');
      $Spahliwaris->status_suami_istri = $request->get('status_suami_istri');
      $Spahliwaris->nama_suami_istri = $request->get('nama_suami_istri');
      $Spahliwaris->nama_anak = $request->get('nama_anak');
      $Spahliwaris->umur_anak = $request->get('umur_anak');
      $Spahliwaris->pekerjaan_anak = $request->get('pekerjaan_anak');
      $Spahliwaris->alamat_anak = $request->get('alamat_anak');
      $Spahliwaris->no_req = $request->get('no_req');
      $Spahliwaris->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spahliwaris->nama_camat = $request->get('nama_camat');
      $Spahliwaris->nama_kades = $request->get('nama_kades');
      $Spahliwaris->save();
      return redirect('Spahliwaris')->with('success','Data Pernyataan Ahli Waris  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spahliwaris = Spahliwaris::find($id);
      $Spahliwaris->delete();
      return redirect('Spahliwaris')->with('success','Data Pernyataan Ahli Waris dihapus');
    }
}
