<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu2;
use DB;

class Usktidakmampu2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu2 = Usktidakmampu2::all()->toArray();
      return view('Usktidakmampu2.index', compact('Usktidakmampu2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Usktidakmampu2');
  		$result = Usktidakmampu2::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Usktidakmampu2.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Usktidakmampu2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Usktidakmampu2 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Usktidakmampu2::create($Usktidakmampu2);

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
      //$Usktidakmampu2 = Usktidakmampu2::all()->toArray();
      $Usktidakmampu2 = DB::table('usktidakmampu2s')->where('id', $id)->get();
      return view('Usktidakmampu2.surat', compact('Usktidakmampu2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Usktidakmampu2 = Usktidakmampu2::find($id);
      return view('Usktidakmampu2.edit', compact('Usktidakmampu2','id'));
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
      $Usktidakmampu2 = Usktidakmampu2::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Usktidakmampu2->nomer_surat = $request->get('nomer_surat');
      $Usktidakmampu2->nama = $request->get('nama');
      $Usktidakmampu2->jenis_kelamin = $request->get('jenis_kelamin');
      $Usktidakmampu2->ttl = $request->get('ttl');
      $Usktidakmampu2->agama = $request->get('agama');
      $Usktidakmampu2->status = $request->get('status');
      $Usktidakmampu2->pekerjaan = $request->get('pekerjaan');
      $Usktidakmampu2->alamat = $request->get('alamat');
      $Usktidakmampu2->tempat_pengobatan = $request->get('tempat_pengobatan');
      $Usktidakmampu2->sakit = $request->get('sakit');
      $Usktidakmampu2->tahun = $request->get('tahun');
      $Usktidakmampu2->no_urut = $request->get('no_urut');
      $Usktidakmampu2->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Usktidakmampu2->nama_kades = $request->get('nama_kades');
      $Usktidakmampu2->no = $request->get('no');
      $Usktidakmampu2->nama_camat = $request->get('nama_camat');
      $Usktidakmampu2->save();
      return redirect('Usktidakmampu2')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Usktidakmampu2 = Usktidakmampu2::find($id);
      $Usktidakmampu2->delete();
      return redirect('Usktidakmampu2')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
