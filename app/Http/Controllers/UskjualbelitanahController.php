<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskjualbelitanah;
use DB;

class UskjualbelitanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskjualbelitanah = Uskjualbelitanah::all()->toArray();
      return view('Uskjualbelitanah.index', compact('Uskjualbelitanah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uskjualbelitanah');
  		$result = Uskjualbelitanah::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uskjualbelitanah.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uskjualbelitanah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uskjualbelitanah = $this -> validate(request(),[
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

    Uskjualbelitanah::create($Uskjualbelitanah);

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
      //$Uskjualbelitanah = Uskjualbelitanah::all()->toArray();
      $Uskjualbelitanah = DB::table('uskjualbelitanahs')->where('id', $id)->get();
      return view('Uskjualbelitanah.surat', compact('Uskjualbelitanah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uskjualbelitanah = Uskjualbelitanah::find($id);
      return view('Uskjualbelitanah.edit', compact('Uskjualbelitanah','id'));
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
      $Uskjualbelitanah = Uskjualbelitanah::find($id);
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
      $Uskjualbelitanah->nama_lengkap = $request->get('nama_lengkap');
      $Uskjualbelitanah->ttl = $request->get('ttl');
      $Uskjualbelitanah->agama = $request->get('agama');
      $Uskjualbelitanah->pekerjaan = $request->get('pekerjaan');
      $Uskjualbelitanah->alamat = $request->get('alamat');
      $Uskjualbelitanah->nama_lengkap_1 = $request->get('nama_lengkap_1');
      $Uskjualbelitanah->ttl_1 = $request->get('ttl_1');
      $Uskjualbelitanah->agama_1 = $request->get('agama_1');
      $Uskjualbelitanah->pekerjaan_1 = $request->get('pekerjaan_1');
      $Uskjualbelitanah->alamat_1 = $request->get('alamat_1');
      $Uskjualbelitanah->panjang = $request->get('panjang');
      $Uskjualbelitanah->lebar = $request->get('lebar');
      $Uskjualbelitanah->utara = $request->get('utara');
      $Uskjualbelitanah->selatan = $request->get('selatan');
      $Uskjualbelitanah->timur = $request->get('timur');
      $Uskjualbelitanah->barat = $request->get('barat');
      $Uskjualbelitanah->nilai = $request->get('nilai');
      $Uskjualbelitanah->terbilang = $request->get('terbilang');
      $Uskjualbelitanah->kontan = $request->get('kontan');
      $Uskjualbelitanah->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uskjualbelitanah->nama_pihak_1 = $request->get('nama_pihak_1');
      $Uskjualbelitanah->nama_pihak_2 = $request->get('nama_pihak_2');
      $Uskjualbelitanah->nama_kades = $request->get('nama_kades');
      $Uskjualbelitanah->saksi_1 = $request->get('saksi_1');
      $Uskjualbelitanah->saksi_2 = $request->get('saksi_2');
      $Uskjualbelitanah->save();
      return redirect('Uskjualbelitanah')->with('success','Data Keterangan Jual Beli Tanah  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uskjualbelitanah = Uskjualbelitanah::find($id);
      $Uskjualbelitanah->delete();
      return redirect('Uskjualbelitanah')->with('success','Data Keterangan Jual Beli Tanah dihapus');
    }
}
