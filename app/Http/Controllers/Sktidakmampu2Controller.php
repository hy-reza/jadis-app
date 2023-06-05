<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu2;

class Sktidakmampu2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu2 = Usktidakmampu2::all()->toArray();
      return view('Sktidakmampu2.index', compact('Usktidakmampu2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Sktidakmampu2');
  		$result = Sktidakmampu2::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Sktidakmampu2.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Sktidakmampu2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Sktidakmampu2 = $this -> validate(request(),[
      'nama' => 'required',
      'jenis_kelamin' => 'required',
      'ttl' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'tempat_pengobatan' => 'required',
      'sakit' => 'required',
      'tahun' => 'required|numeric',
      'no_urut' => 'required|numeric',
      'tgl_hari_ini' => 'required',
      'nama_berkepentingan' => 'required',
      'nama_kades' => 'required',
      'no' => 'required|numeric',
      'nama_camat' => 'required',
    ]);

    Sktidakmampu2::create($Sktidakmampu2);

    return back()-> with('success','Data Keterangan tidak mampu Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Sktidakmampu2 = Sktidakmampu2::all()->toArray();
      return view('Sktidakmampu2.surat', compact('Sktidakmampu2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Sktidakmampu2 = Sktidakmampu2::find($id);
      return view('Sktidakmampu2.edit', compact('Sktidakmampu2','id'));
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
      $Sktidakmampu2 = Sktidakmampu2::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'status' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'tempat_pengobatan' => 'required',
        'sakit' => 'required',
        'tahun' => 'required|numeric',
        'no_urut' => 'required|numeric',
        'tgl_hari_ini' => 'required',
        'nama_berkepentingan' => 'required',
        'nama_kades' => 'required',
        'no' => 'required|numeric',
        'nama_camat' => 'required',
      ]);
      $Sktidakmampu2->nama = $request->get('nama');
      $Sktidakmampu2->jenis_kelamin = $request->get('jenis_kelamin');
      $Sktidakmampu2->ttl = $request->get('ttl');
      $Sktidakmampu2->agama = $request->get('agama');
      $Sktidakmampu2->status = $request->get('status');
      $Sktidakmampu2->pekerjaan = $request->get('pekerjaan');
      $Sktidakmampu2->alamat = $request->get('alamat');
      $Sktidakmampu2->tempat_pengobatan = $request->get('tempat_pengobatan');
      $Sktidakmampu2->sakit = $request->get('sakit');
      $Sktidakmampu2->tahun = $request->get('tahun');
      $Sktidakmampu2->no_urut = $request->get('no_urut');
      $Sktidakmampu2->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Sktidakmampu2->nama_kades = $request->get('nama_kades');
      $Sktidakmampu2->no = $request->get('no');
      $Sktidakmampu2->nama_camat = $request->get('nama_camat');
      $Sktidakmampu2->save();
      return redirect('Sktidakmampu2')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Sktidakmampu2 = Sktidakmampu2::find($id);
      $Sktidakmampu2->delete();
      return redirect('Sktidakmampu2')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
