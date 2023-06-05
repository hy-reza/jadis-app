<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspkematian;

class SpkematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspkematian = Uspkematian::all()->toArray();
      return view('Spkematian.index', compact('Uspkematian'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spkematian');
  		$result = Spkematian::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spkematian.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Spkematian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spkematian = $this -> validate(request(),[
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

      Spkematian::create($Spkematian);

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
      $Spkematian = Spkematian::all()->toArray();
      return view('Spkematian.surat', compact('Spkematian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spkematian = Spkematian::find($id);
      return view('Spkematian.edit', compact('Spkematian','id'));
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
      $Spkematian = Spkematian::find($id);
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

      $Spkematian->nama = $request->get('nama');
      $Spkematian->nik = $request->get('nik');
      $Spkematian->nomor_kk = $request->get('nomor_kk');
      $Spkematian->jenis_kelamin = $request->get('jenis_kelamin');
      $Spkematian->pekerjaan = $request->get('pekerjaan');
      $Spkematian->alamat = $request->get('alamat');
      $Spkematian->status_hubungan_keluarga = $request->get('status_hubungan_keluarga');
      $Spkematian->nama_meninggal = $request->get('nama_meninggal');
      $Spkematian->nik_meninggal = $request->get('nik_meninggal');
      $Spkematian->nomor_kk_meninggal = $request->get('nomor_kk_meninggal');
      $Spkematian->ttl_meninggal = $request->get('ttl_meninggal');
      $Spkematian->alamat_meninggal = $request->get('alamat_meninggal');
      $Spkematian->tanggal_meninggal = $request->get('tanggal_meninggal');
      $Spkematian->pukul_meninggal = $request->get('pukul_meninggal');
      $Spkematian->dialamat_meninggal = $request->get('dialamat_meninggal');
      $Spkematian->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spkematian->nama_pernyataan = $request->get('nama_pernyataan');
      $Spkematian->nama_rt = $request->get('nama_rt');
      $Spkematian->nama_kades = $request->get('nama_kades');
      $Spkematian->nama_rw = $request->get('nama_rw');
      $Spkematian->save();
      return redirect('Spkematian')->with('success','Data Pernyataan Kematian Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spkematian = Spkematian::find($id);
      $Spkematian->delete();
      return redirect('Spkematian')->with('success','Data Pernyataan Kematian dihapus');
    }
}
