<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskjualbelitanah;


class SkjualbelitanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskjualbelitanah = Uskjualbelitanah::all()->toArray();
      return view('Skjualbelitanah.index', compact('Uskjualbelitanah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Skjualbelitanah');
  		$result = Skjualbelitanah::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Skjualbelitanah.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Skjualbelitanah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Skjualbelitanah = $this -> validate(request(),[
      'nama_lengkap' => 'required',
      'ttl' => 'required',
      'agama' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'nama_lengkap_1' => 'required',
      'ttl_1' => 'required',
      'agama_1' => 'required',
      'pekerjaan_1' => 'required',
      'alamat_1' => 'required',
      'panjang' => 'required',
      'lebar' => 'required',
      'utara' => 'required',
      'selatan' => 'required',
      'timur' => 'required',
      'barat' => 'required',
      'nilai' => 'required',
      'terbilang' => 'required',
      'kontan' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_pihak_1' => 'required',
      'nama_pihak_2' => 'required',
      'nama_kades' => 'required',
      'saksi_1' => 'required',
      'saksi_2' => 'required',
    ]);

    Skjualbelitanah::create($Skjualbelitanah);

    return back()-> with('success','Data Keterangan Jual Beli Tanah Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Skjualbelitanah = Skjualbelitanah::all()->toArray();
      return view('Skjualbelitanah.surat', compact('Skjualbelitanah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Skjualbelitanah = Skjualbelitanah::find($id);
      return view('Skjualbelitanah.edit', compact('Skjualbelitanah','id'));
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
      $Skjualbelitanah = Skjualbelitanah::find($id);
      $this->validate(request(), [
        'nama_lengkap' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'nama_lengkap_1' => 'required',
        'ttl_1' => 'required',
        'agama_1' => 'required',
        'pekerjaan_1' => 'required',
        'alamat_1' => 'required',
        'panjang' => 'required',
        'lebar' => 'required',
        'utara' => 'required',
        'selatan' => 'required',
        'timur' => 'required',
        'barat' => 'required',
        'nilai' => 'required',
        'terbilang' => 'required',
        'kontan' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_pihak_1' => 'required',
        'nama_pihak_2' => 'required',
        'nama_kades' => 'required',
        'saksi_1' => 'required',
        'saksi_2' => 'required',
      ]);
      $Skjualbelitanah->nama_lengkap = $request->get('nama_lengkap');
      $Skjualbelitanah->ttl = $request->get('ttl');
      $Skjualbelitanah->agama = $request->get('agama');
      $Skjualbelitanah->pekerjaan = $request->get('pekerjaan');
      $Skjualbelitanah->alamat = $request->get('alamat');
      $Skjualbelitanah->nama_lengkap_1 = $request->get('nama_lengkap_1');
      $Skjualbelitanah->ttl_1 = $request->get('ttl_1');
      $Skjualbelitanah->agama_1 = $request->get('agama_1');
      $Skjualbelitanah->pekerjaan_1 = $request->get('pekerjaan_1');
      $Skjualbelitanah->alamat_1 = $request->get('alamat_1');
      $Skjualbelitanah->panjang = $request->get('panjang');
      $Skjualbelitanah->lebar = $request->get('lebar');
      $Skjualbelitanah->utara = $request->get('utara');
      $Skjualbelitanah->selatan = $request->get('selatan');
      $Skjualbelitanah->timur = $request->get('timur');
      $Skjualbelitanah->barat = $request->get('barat');
      $Skjualbelitanah->nilai = $request->get('nilai');
      $Skjualbelitanah->terbilang = $request->get('terbilang');
      $Skjualbelitanah->kontan = $request->get('kontan');
      $Skjualbelitanah->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Skjualbelitanah->nama_pihak_1 = $request->get('nama_pihak_1');
      $Skjualbelitanah->nama_pihak_2 = $request->get('nama_pihak_2');
      $Skjualbelitanah->nama_kades = $request->get('nama_kades');
      $Skjualbelitanah->saksi_1 = $request->get('saksi_1');
      $Skjualbelitanah->saksi_2 = $request->get('saksi_2');
      $Skjualbelitanah->save();
      return redirect('Skjualbelitanah')->with('success','Data Keterangan Jual Beli Tanah  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Skjualbelitanah = Skjualbelitanah::find($id);
      $Skjualbelitanah->delete();
      return redirect('Skjualbelitanah')->with('success','Data Keterangan Jual Beli Tanah dihapus');
    }
}
