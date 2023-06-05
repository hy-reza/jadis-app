<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk3;

class Spcerairujuk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk3 = Uspcerairujuk3::all()->toArray();
      return view('Spcerairujuk3.index', compact('Uspcerairujuk3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spcerairujuk3');
  		$result = Spcerairujuk3::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spcerairujuk3.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Spcerairujuk3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spcerairujuk3 = $this -> validate(request(),[
      z'nama' => 'required',
      'alamat' => 'required',
      'nama_angkat' => 'required',
      'alamat_angkat' => 'required',
      'nama_anak' => 'required',
      'jenis_kelamin' => 'required',
      'tempat' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',
    ]);

    Spcerairujuk3::create($Spcerairujuk3);

    return back()-> with('success','Data Pengajuan Cerai Rujuk Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Spcerairujuk3 = Spcerairujuk3::all()->toArray();
      return view('Spcerairujuk3.surat', compact('Spcerairujuk3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spcerairujuk3 = Spcerairujuk3::find($id);
      return view('Spcerairujuk3.edit', compact('Spcerairujuk3','id'));
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
      $Spcerairujuk3 = Spcerairujuk3::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'alamat' => 'required',
        'nama_angkat' => 'required',
        'alamat_angkat' => 'required',
        'nama_anak' => 'required',
        'jenis_kelamin' => 'required',
        'tempat' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Spcerairujuk3->nama = $request->get('nama');
      $Spcerairujuk3->alamat = $request->get('alamat');
      $Spcerairujuk3->nama_angkat = $request->get('nama_angkat');
      $Spcerairujuk3->alamat_angkat = $request->get('alamat_angkat');
      $Spcerairujuk3->nama_anak = $request->get('nama_anak');
      $Spcerairujuk3->jenis_kelamin = $request->get('jenis_kelamin');
      $Spcerairujuk3->tempat = $request->get('tempat');
      $Spcerairujuk3->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spcerairujuk3->nama_kades = $request->get('nama_kades');
      $Spcerairujuk3->save();
      return redirect('Spcerairujuk3')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spcerairujuk3 = Spcerairujuk3::find($id);
      $Spcerairujuk3->delete();
      return redirect('Spcerairujuk3')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
