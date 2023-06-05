<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usppindahtempat;

class SppindahtempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usppindahtempat = Usppindahtempat::all()->toArray();
      return view('Sppindahtempat.index', compact('Usppindahtempat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Sppindahtempat');
  		$result = Sppindahtempat::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Sppindahtempat.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Sppindahtempat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Sppindahtempat = $this -> validate(request(),[
          'nama' => 'required',
          'ttl' => 'required',
          'nik' => 'required|numeric',
          'alamat_asal' => 'required',
          'desa_kelurahan' => 'required',
          'kabupaten_kota' => 'required',
          'provinsi' => 'required',
          'desa_kelurahan_rt_rw_tujuan' => 'required',
          'kecamatan' => 'required',
          'kabupaten_kota_tujuan' => 'required',
          'provinsi_tujuan' => 'required',
          'alasan_pindah' => 'required',
          'nik_1' => 'required|numeric',
          'nama_1' => 'required',
          'tgl_lahir_1' => 'required',
          'hubungan_keluarga_1' => 'required',
          'nik_2' => 'required|numeric',
          'nama_2' => 'required',
          'tgl_lahir_2' => 'required',
          'hubungan_keluarga_2' => 'required',
          'tgl_hari_ini' => 'required',
          'nama_pemohon' => 'required',
      ]);

      Sppindahtempat::create($Sppindahtempat);

      return back()-> with('success','Data Pernyataan Pindah Tempat Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Sppindahtempat = Sppindahtempat::all()->toArray();
      return view('Sppindahtempat.surat', compact('Sppindahtempat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Sppindahtempat = Sppindahtempat::find($id);
      return view('Sppindahtempat.edit', compact('Sppindahtempat','id'));
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
      $Sppindahtempat = Sppindahtempat::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'ttl' => 'required',
        'nik' => 'required|numeric',
        'alamat_asal' => 'required',
        'desa_kelurahan' => 'required',
        'kabupaten_kota' => 'required',
        'provinsi' => 'required',
        'desa_kelurahan_rt_rw_tujuan' => 'required',
        'kecamatan' => 'required',
        'kabupaten_kota_tujuan' => 'required',
        'provinsi_tujuan' => 'required',
        'alasan_pindah' => 'required',
        'nik_1' => 'required|numeric',
        'nama_1' => 'required',
        'tgl_lahir_1' => 'required',
        'hubungan_keluarga_1' => 'required',
        'nik_2' => 'required|numeric',
        'nama_2' => 'required',
        'tgl_lahir_2' => 'required',
        'hubungan_keluarga_2' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_pemohon' => 'required',
      ]);

      $Sppindahtempat->nama = $request->get('nama');
      $Sppindahtempat->ttl = $request->get('ttl');
      $Sppindahtempat->nik = $request->get('nik');
      $Sppindahtempat->alamat_asal = $request->get('alamat_asal');
      $Sppindahtempat->desa_kelurahan = $request->get('desa_kelurahan');
      $Sppindahtempat->kabupaten_kota = $request->get('kabupaten_kota');
      $Sppindahtempat->provinsi = $request->get('provinsi');
      $Sppindahtempat->desa_kelurahan_rt_rw_tujuan = $request->get('desa_kelurahan_rt_rw_tujuan');
      $Sppindahtempat->kecamatan = $request->get('kecamatan');
      $Sppindahtempat->kabupaten_kota_tujuan = $request->get('kabupaten_kota_tujuan');
      $Sppindahtempat->provinsi_tujuan = $request->get('provinsi_tujuan');
      $Sppindahtempat->alasan_pindah = $request->get('alasan_pindah');
      $Sppindahtempat->nik_1 = $request->get('nik_1');
      $Sppindahtempat->nama_1 = $request->get('nama_1');
      $Sppindahtempat->tgl_lahir_1 = $request->get('tgl_lahir_1');
      $Sppindahtempat->hubungan_keluarga_1 = $request->get('hubungan_keluarga_1');
      $Sppindahtempat->nik_2 = $request->get('nik_2');
      $Sppindahtempat->nama_2 = $request->get('nama_2');
      $Sppindahtempat->tgl_lahir_2 = $request->get('tgl_lahir_2');
      $Sppindahtempat->hubungan_keluarga_2 = $request->get('hubungan_keluarga_2');
      $Sppindahtempat->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Sppindahtempat->nama_pemohon = $request->get('nama_pemohon');
      $Sppindahtempat->save();
      return redirect('Sppindahtempat')->with('success','Data Pernyataan Pindah Tempat Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Sppindahtempat = Sppindahtempat::find($id);
      $Sppindahtempat->delete();
      return redirect('Sppindahtempat')->with('success','Data Pernyataan Pindah Tempat dihapus');
    }
}
