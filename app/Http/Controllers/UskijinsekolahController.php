<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskijinsekolah;
use DB;

class UskijinsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskijinsekolah = Uskijinsekolah::all()->toArray();
      return view('Uskijinsekolah.index', compact('Uskijinsekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uskijinsekolah');
  		$result = Uskijinsekolah::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uskijinsekolah.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uskijinsekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uskijinsekolah = $this -> validate(request(),[
      'nomer_surat' => 'required',
      'nama_lengkap' => 'required',
      'kelas' => 'required',
      'nama_sekolah' => 'required',
      'nomer_kemerdekaan' => 'required',
      'tahun_kemerdekaan' => 'required',
      'hari' => 'required',
      'tgl' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Uskijinsekolah::create($Uskijinsekolah);

    return back()-> with('success','Data Keterangan ijin sekolah Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$Uskijinsekolah = Uskijinsekolah::all()->toArray();
      $Uskijinsekolah = DB::table('Uskijinsekolahs')->where('id', $id)->get();
      return view('Uskijinsekolah.surat', compact('Uskijinsekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uskijinsekolah = Uskijinsekolah::find($id);
      return view('Uskijinsekolah.edit', compact('Uskijinsekolah','id'));
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
      $Uskijinsekolah = Uskijinsekolah::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
        'nama_lengkap' => 'required',
        'kelas' => 'required',
        'nama_sekolah' => 'required',
        'nomer_kemerdekaan' => 'required',
        'tahun_kemerdekaan' => 'required',
        'hari' => 'required',
        'tgl' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Uskijinsekolah->nomer_surat = $request->get('nomer_surat');
      $Uskijinsekolah->nama_lengkap = $request->get('nama_lengkap');
      $Uskijinsekolah->kelas = $request->get('kelas');
      $Uskijinsekolah->nama_sekolah = $request->get('nama_sekolah');
      $Uskijinsekolah->nomer_kemerdekaan = $request->get('nomer_kemerdekaan');
      $Uskijinsekolah->tahun_kemerdekaan = $request->get('tahun_kemerdekaan');
      $Uskijinsekolah->hari = $request->get('hari');
      $Uskijinsekolah->tgl = $request->get('tgl');
      $Uskijinsekolah->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uskijinsekolah->nama_kades = $request->get('nama_kades');
      $Uskijinsekolah->save();
      return redirect('Uskijinsekolah')->with('success','Data Keterangan Ijin Sekolah  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uskijinsekolah = Uskijinsekolah::find($id);
      $Uskijinsekolah->delete();
      return redirect('Uskijinsekolah')->with('success','Data Keterangan Ijin Sekolah dihapus');
    }
}
