<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usppindahtempat;
use DB;

class UsppindahtempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usppindahtempat = Usppindahtempat::all()->toArray();
      return view('Usppindahtempat.index', compact('Usppindahtempat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Usppindahtempat');
  		$result = Usppindahtempat::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Usppindahtempat.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Usppindahtempat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Usppindahtempat = $this -> validate(request(),[
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

      Usppindahtempat::create($Usppindahtempat);

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
      //$Usppindahtempat = Usppindahtempat::all()->toArray();
      $Usppindahtempat = DB::table('usppindahtempats')->where('id', $id)->get();
      return view('Usppindahtempat.surat', compact('Usppindahtempat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Usppindahtempat = Usppindahtempat::find($id);
      return view('Usppindahtempat.edit', compact('Usppindahtempat','id'));
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
      $Usppindahtempat = Usppindahtempat::find($id);
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

      $Usppindahtempat->nama = $request->get('nama');
      $Usppindahtempat->ttl = $request->get('ttl');
      $Usppindahtempat->nik = $request->get('nik');
      $Usppindahtempat->alamat_asal = $request->get('alamat_asal');
      $Usppindahtempat->desa_kelurahan = $request->get('desa_kelurahan');
      $Usppindahtempat->kabupaten_kota = $request->get('kabupaten_kota');
      $Usppindahtempat->provinsi = $request->get('provinsi');
      $Usppindahtempat->desa_kelurahan_rt_rw_tujuan = $request->get('desa_kelurahan_rt_rw_tujuan');
      $Usppindahtempat->kecamatan = $request->get('kecamatan');
      $Usppindahtempat->kabupaten_kota_tujuan = $request->get('kabupaten_kota_tujuan');
      $Usppindahtempat->provinsi_tujuan = $request->get('provinsi_tujuan');
      $Usppindahtempat->alasan_pindah = $request->get('alasan_pindah');
      $Usppindahtempat->nik_1 = $request->get('nik_1');
      $Usppindahtempat->nama_1 = $request->get('nama_1');
      $Usppindahtempat->tgl_lahir_1 = $request->get('tgl_lahir_1');
      $Usppindahtempat->hubungan_keluarga_1 = $request->get('hubungan_keluarga_1');
      $Usppindahtempat->nik_2 = $request->get('nik_2');
      $Usppindahtempat->nama_2 = $request->get('nama_2');
      $Usppindahtempat->tgl_lahir_2 = $request->get('tgl_lahir_2');
      $Usppindahtempat->hubungan_keluarga_2 = $request->get('hubungan_keluarga_2');
      $Usppindahtempat->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Usppindahtempat->nama_pemohon = $request->get('nama_pemohon');
      $Usppindahtempat->save();
      return redirect('Usppindahtempat')->with('success','Data Pernyataan Pindah Tempat Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Usppindahtempat = Usppindahtempat::find($id);
      $Usppindahtempat->delete();
      return redirect('Usppindahtempat')->with('success','Data Pernyataan Pindah Tempat dihapus');
    }
}
