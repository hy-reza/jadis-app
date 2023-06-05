<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usktidakmampu3;
use DB;

class Usktidakmampu3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usktidakmampu3 = Usktidakmampu3::all()->toArray();
      return view('Usktidakmampu3.index', compact('Usktidakmampu3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Usktidakmampu3');
  		$result = Usktidakmampu3::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Usktidakmampu3.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Usktidakmampu3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Usktidakmampu3 = $this -> validate(request(),[
      'nomer_surat' => 'required',
      'nama' => 'required',
      'jenis_kelamin' => 'required',
      'ttl' => 'required',
      'agama' => 'required',
      'status' => 'required',
      'pekerjaan' => 'required',
      'alamat' => 'required',
      'tahun' => 'required|numeric',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Usktidakmampu3::create($Usktidakmampu3);

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
      //$Usktidakmampu3 = Usktidakmampu3::all()->toArray();
      $Usktidakmampu3 = DB::table('usktidakmampu3s')->where('id', $id)->get();
      return view('Usktidakmampu3.surat', compact('Usktidakmampu3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Usktidakmampu3 = Usktidakmampu3::find($id);
      return view('Usktidakmampu3.edit', compact('Usktidakmampu3','id'));
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
      $Usktidakmampu3 = Usktidakmampu3::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'status' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'tahun' => 'required|numeric',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Usktidakmampu3->nomer_surat = $request->get('nomer_surat');
      $Usktidakmampu3->nama = $request->get('nama');
      $Usktidakmampu3->jenis_kelamin = $request->get('jenis_kelamin');
      $Usktidakmampu3->ttl = $request->get('ttl');
      $Usktidakmampu3->agama = $request->get('agama');
      $Usktidakmampu3->status = $request->get('status');
      $Usktidakmampu3->pekerjaan = $request->get('pekerjaan');
      $Usktidakmampu3->alamat = $request->get('alamat');
      $Usktidakmampu3->tahun = $request->get('tahun');
      $Usktidakmampu3->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Usktidakmampu3->nama_kades = $request->get('nama_kades');
      $Usktidakmampu3->save();
      return redirect('Usktidakmampu3')->with('success','Data Keterangan Tidak Mampu  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Usktidakmampu3 = Usktidakmampu3::find($id);
      $Usktidakmampu3->delete();
      return redirect('Usktidakmampu3')->with('success','Data Keterangan Tidak Mampu dihapus');
    }
}
