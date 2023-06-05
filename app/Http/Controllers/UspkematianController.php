<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspkematian;
use DB;

class UspkematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspkematian = Uspkematian::all()->toArray();
      return view('Uspkematian.index', compact('Uspkematian'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspkematian');
  		$result = Uspkematian::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspkematian.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Uspkematian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspkematian = $this -> validate(request(),[
          'nama' => 'required',
          'nik' => 'required|numeric',
          'nomor_kk' => 'required|numeric',
          'jenis_kelamin' => 'required',
          'pekerjaan' => 'required',
          'alamat' => 'required',
          'status_hubungan_keluarga' => 'required',
          'nama_meninggal' => 'required',
          'nik_meninggal' => 'required|numeric',
          'nomor_kk_meninggal' => 'required|numeric',
          'ttl_meninggal' => 'required',
          'alamat_meninggal' => 'required',
          'tanggal_meninggal' => 'required',
          'pukul_meninggal' => 'required',
          'dialamat_meninggal' => 'required',
          'tgl_hari_ini' => 'required',
          'nama_pernyataan' => 'required',
          'nama_rt' => 'required',
          'nama_kades' => 'required',
          'nama_rw' => 'required',
      ]);

      Uspkematian::create($Uspkematian);

      return back()-> with('success','Data Pernyataan Kematian Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$Uspkematian = Uspkematian::all()->toArray();
      $Uspkematian = DB::table('uspkematians')->where('id', $id)->get();
      return view('Uspkematian.surat', compact('Uspkematian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspkematian = Uspkematian::find($id);
      return view('Uspkematian.edit', compact('Uspkematian','id'));
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
      $Uspkematian = Uspkematian::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'nik' => 'required|numeric',
        'nomor_kk' => 'required|numeric',
        'jenis_kelamin' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'status_hubungan_keluarga' => 'required',
        'nama_meninggal' => 'required',
        'nik_meninggal' => 'required|numeric',
        'nomor_kk_meninggal' => 'required|numeric',
        'ttl_meninggal' => 'required',
        'alamat_meninggal' => 'required',
        'tanggal_meninggal' => 'required',
        'pukul_meninggal' => 'required',
        'dialamat_meninggal' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_pernyataan' => 'required',
        'nama_rt' => 'required',
        'nama_kades' => 'required',
        'nama_rw' => 'required',
      ]);

      $Uspkematian->nama = $request->get('nama');
      $Uspkematian->nik = $request->get('nik');
      $Uspkematian->nomor_kk = $request->get('nomor_kk');
      $Uspkematian->jenis_kelamin = $request->get('jenis_kelamin');
      $Uspkematian->pekerjaan = $request->get('pekerjaan');
      $Uspkematian->alamat = $request->get('alamat');
      $Uspkematian->status_hubungan_keluarga = $request->get('status_hubungan_keluarga');
      $Uspkematian->nama_meninggal = $request->get('nama_meninggal');
      $Uspkematian->nik_meninggal = $request->get('nik_meninggal');
      $Uspkematian->nomor_kk_meninggal = $request->get('nomor_kk_meninggal');
      $Uspkematian->ttl_meninggal = $request->get('ttl_meninggal');
      $Uspkematian->alamat_meninggal = $request->get('alamat_meninggal');
      $Uspkematian->tanggal_meninggal = $request->get('tanggal_meninggal');
      $Uspkematian->pukul_meninggal = $request->get('pukul_meninggal');
      $Uspkematian->dialamat_meninggal = $request->get('dialamat_meninggal');
      $Uspkematian->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspkematian->nama_pernyataan = $request->get('nama_pernyataan');
      $Uspkematian->nama_rt = $request->get('nama_rt');
      $Uspkematian->nama_kades = $request->get('nama_kades');
      $Uspkematian->nama_rw = $request->get('nama_rw');
      $Uspkematian->save();
      return redirect('Uspkematian')->with('success','Data Pernyataan Kematian Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspkematian = Uspkematian::find($id);
      $Uspkematian->delete();
      return redirect('Uspkematian')->with('success','Data Pernyataan Kematian dihapus');
    }
}
