<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspkelahiran;
use DB;

class UspkelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspkelahiran = Uspkelahiran::all()->toArray();
      return view('Uspkelahiran.index', compact('Uspkelahiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uspkelahiran');
  		$result = Uspkelahiran::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uspkelahiran.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Uspkelahiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uspkelahiran = $this -> validate(request(),[
          'nama' => 'required',
          'nik' => 'required|numeric',
          'nomor_kk' => 'required|numeric',
          'jenis_kelamin' => 'required',
          'pekerjaan' => 'required',
          'alamat' => 'required',
          'nama_anak' => 'required',
          'ttl' => 'required',
          'kelahiran_ke' => 'required|numeric',
          'nama_ayah' => 'required',
          'nama_ibu' => 'required',
          'pekerjaan_ortu' => 'required',
          'alamat_ortu' => 'required',
          'tgl_hari_ini' => 'required',
          'nama_kades' => 'required',
          'nama_pernyataan' => 'required',
      ]);

      Uspkelahiran::create($Uspkelahiran);

      return back()-> with('success','Data Pernyataan Kelahiran Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$Uspkelahiran = Uspkelahiran::all()->toArray();
      $Uspkelahiran = DB::table('uspkelahirans')->where('id', $id)->get();
      return view('Uspkelahiran.surat', compact('Uspkelahiran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uspkelahiran = Uspkelahiran::find($id);
      return view('Uspkelahiran.edit', compact('Uspkelahiran','id'));
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
      $Uspkelahiran = Uspkelahiran::find($id);
      $this->validate(request(), [
        'nama' => 'required',
        'nik' => 'required|numeric',
        'nomor_kk' => 'required|numeric',
        'jenis_kelamin' => 'required',
        'pekerjaan' => 'required',
        'alamat' => 'required',
        'nama_anak' => 'required',
        'ttl' => 'required',
        'kelahiran_ke' => 'required|numeric',
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ortu' => 'required',
        'alamat_ortu' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
        'nama_pernyataan' => 'required',
      ]);

      $Uspkelahiran->nama = $request->get('nama');
      $Uspkelahiran->nik = $request->get('nik');
      $Uspkelahiran->nomor_kk = $request->get('nomor_kk');
      $Uspkelahiran->jenis_kelamin = $request->get('jenis_kelamin');
      $Uspkelahiran->pekerjaan = $request->get('pekerjaan');
      $Uspkelahiran->alamat = $request->get('alamat');
      $Uspkelahiran->nama_anak = $request->get('nama_anak');
      $Uspkelahiran->ttl = $request->get('ttl');
      $Uspkelahiran->kelahiran_ke = $request->get('kelahiran_ke');
      $Uspkelahiran->nama_ayah = $request->get('nama_ayah');
      $Uspkelahiran->nama_ibu = $request->get('nama_ibu');
      $Uspkelahiran->pekerjaan_ortu = $request->get('pekerjaan_ortu');
      $Uspkelahiran->alamat_ortu = $request->get('alamat_ortu');
      $Uspkelahiran->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uspkelahiran->nama_kades = $request->get('nama_kades');
      $Uspkelahiran->nama_pernyataan = $request->get('nama_pernyataan');
      $Uspkelahiran->save();
      return redirect('Uspkelahiran')->with('success','Data Pernyataan Kelahiran Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uspkelahiran = Uspkelahiran::find($id);
      $Uspkelahiran->delete();
      return redirect('Uspkelahiran')->with('success','Data Pernyataan Kelahiran dihapus');
    }
}
