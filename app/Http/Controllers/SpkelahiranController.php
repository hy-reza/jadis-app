<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uspkelahiran;

class SpkelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uspkelahiran = Uspkelahiran::all()->toArray();
      return view('Spkelahiran.index', compact('Uspkelahiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Spkelahiran');
  		$result = Spkelahiran::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Spkelahiran.result', compact('search','result'));
  	  }


    public function create()
    {
        return view('Spkelahiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Spkelahiran = $this -> validate(request(),[
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

      Spkelahiran::create($Spkelahiran);

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
      $Spkelahiran = Spkelahiran::all()->toArray();
      return view('Spkelahiran.surat', compact('Spkelahiran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Spkelahiran = Spkelahiran::find($id);
      return view('Spkelahiran.edit', compact('Spkelahiran','id'));
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
      $Spkelahiran = Spkelahiran::find($id);
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

      $Spkelahiran->nama = $request->get('nama');
      $Spkelahiran->nik = $request->get('nik');
      $Spkelahiran->nomor_kk = $request->get('nomor_kk');
      $Spkelahiran->jenis_kelamin = $request->get('jenis_kelamin');
      $Spkelahiran->pekerjaan = $request->get('pekerjaan');
      $Spkelahiran->alamat = $request->get('alamat');
      $Spkelahiran->nama_anak = $request->get('nama_anak');
      $Spkelahiran->ttl = $request->get('ttl');
      $Spkelahiran->kelahiran_ke = $request->get('kelahiran_ke');
      $Spkelahiran->nama_ayah = $request->get('nama_ayah');
      $Spkelahiran->nama_ibu = $request->get('nama_ibu');
      $Spkelahiran->pekerjaan_ortu = $request->get('pekerjaan_ortu');
      $Spkelahiran->alamat_ortu = $request->get('alamat_ortu');
      $Spkelahiran->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Spkelahiran->nama_kades = $request->get('nama_kades');
      $Spkelahiran->nama_pernyataan = $request->get('nama_pernyataan');
      $Spkelahiran->save();
      return redirect('Spkelahiran')->with('success','Data Pernyataan Kelahiran Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Spkelahiran = Spkelahiran::find($id);
      $Spkelahiran->delete();
      return redirect('Spkelahiran')->with('success','Data Pernyataan Kelahiran dihapus');
    }
}
