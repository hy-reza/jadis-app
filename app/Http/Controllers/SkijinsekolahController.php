<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskijinsekolah;


class SkijinsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskijinsekolah = Uskijinsekolah::all()->toArray();
      return view('Skijinsekolah.index', compact('Uskijinsekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
  	  {
  		$search = $request::get('Skijinsekolah');
  		$result = Skijinsekolah::where('nama_lengkap', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Skijinsekolah.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Skijinsekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Skijinsekolah = $this -> validate(request(),[
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

    Skijinsekolah::create($Skijinsekolah);

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
      $Skijinsekolah = Skijinsekolah::all()->toArray();
      return view('Skijinsekolah.surat', compact('Skijinsekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Skijinsekolah = Skijinsekolah::find($id);
      return view('Skijinsekolah.edit', compact('Skijinsekolah','id'));
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
      $Skijinsekolah = Skijinsekolah::find($id);
      $this->validate(request(), [
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
      $Skijinsekolah->nama_lengkap = $request->get('nama_lengkap');
      $Skijinsekolah->kelas = $request->get('kelas');
      $Skijinsekolah->nama_sekolah = $request->get('nama_sekolah');
      $Skijinsekolah->nomer_kemerdekaan = $request->get('nomer_kemerdekaan');
      $Skijinsekolah->tahun_kemerdekaan = $request->get('tahun_kemerdekaan');
      $Skijinsekolah->hari = $request->get('hari');
      $Skijinsekolah->tgl = $request->get('tgl');
      $Skijinsekolah->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Skijinsekolah->nama_kades = $request->get('nama_kades');
      $Skijinsekolah->save();
      return redirect('Skijinsekolah')->with('success','Data Keterangan Ijin Sekolah  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Skijinsekolah = Skijinsekolah::find($id);
      $Skijinsekolah->delete();
      return redirect('Skijinsekolah')->with('success','Data Keterangan Ijin Sekolah dihapus');
    }
}
