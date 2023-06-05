<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspcerairujuk3;
use DB;

class Uspcerairujuk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspcerairujuk3 = Uspcerairujuk3::all()->toArray();
      return view('Uspcerairujuk3.index', compact('Uspcerairujuk3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Spcerairujuk3');
  		$result = Uspcerairujuk3::where('nama', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspcerairujuk3.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Uspcerairujuk3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspcerairujuk3 = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Uspcerairujuk3::create($Uspcerairujuk3);

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
      //$Uspcerairujuk3 = Uspcerairujuk3::all()->toArray();
      $Uspcerairujuk3 = DB::table('uspcerairujuk3s')->where('id', $id)->get();
      return view('Uspcerairujuk3.surat', compact('Uspcerairujuk3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspcerairujuk3 = Uspcerairujuk3::find($id);
      return view('Uspcerairujuk3.edit', compact('Uspcerairujuk3','id'));
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
      $Uspcerairujuk3 = Uspcerairujuk3::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Uspcerairujuk3->nomer_surat = $request->get('nomer_surat');
      $Uspcerairujuk3->nama = $request->get('nama');
      $Uspcerairujuk3->alamat = $request->get('alamat');
      $Uspcerairujuk3->nama_angkat = $request->get('nama_angkat');
      $Uspcerairujuk3->alamat_angkat = $request->get('alamat_angkat');
      $Uspcerairujuk3->nama_anak = $request->get('nama_anak');
      $Uspcerairujuk3->jenis_kelamin = $request->get('jenis_kelamin');
      $Uspcerairujuk3->tempat = $request->get('tempat');
      $Uspcerairujuk3->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspcerairujuk3->nama_kades = $request->get('nama_kades');
      $Uspcerairujuk3->save();
      return redirect('Uspcerairujuk3')->with('success','Data Pengajuan Cerai Rujuk  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspcerairujuk3 = Uspcerairujuk3::find($id);
      $Uspcerairujuk3->delete();
      return redirect('Uspcerairujuk3')->with('success','Data Pengajuan Cerai Rujuk dihapus');
    }
}
