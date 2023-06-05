<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Udatapenduduk;

class UdatapendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Udatapenduduk = Udatapenduduk::all()->toArray();
      return view('Udatapenduduk.index', compact('Udatapenduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
      {
      $search = $request::get('Udatapenduduk');
      $result = Udatapenduduk::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
      return view('Udatapenduduk.result', compact('search','result'));
      }

    public function create()
    {
        return view('Udatapenduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Udatapenduduk = $this -> validate(request(),[
          'nik' => 'required',
          'nama' => 'required',
          'jenis_kelamin' => 'required',
          'tempat_ttl' => 'required',
          'tgl_lahir' => 'required',
          'agama' => 'required',
          'status' => 'required',
          'pendidikan_terakhir' => 'required',
          'pekerjaan' => 'required',
      ]);

      Udatapenduduk::create($Udatapenduduk);

      return back()-> with('success','Data Penduduk Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Udatapenduduk = Udatapenduduk::find($id);
      return view('Udatapenduduk.edit', compact('Udatapenduduk','id'));
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
      $Udatapenduduk = Udatapenduduk::find($id);
      $this->validate(request(), [
        'nik' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_ttl' => 'required',
        'tgl_lahir' => 'required',
        'agama' => 'required',
        'status' => 'required',
        'pendidikan_terakhir' => 'required',
        'pekerjaan' => 'required',
      ]);

      $Udatapenduduk->nik = $request->get('nik');
      $Udatapenduduk->nama = $request->get('nama');
      $Udatapenduduk->jenis_kelamin = $request->get('jenis_kelamin');
      $Udatapenduduk->tempat_ttl = $request->get('tempat_ttl');
      $Udatapenduduk->tgl_lahir = $request->get('tgl_lahir');
      $Udatapenduduk->agama = $request->get('agama');
      $Udatapenduduk->status = $request->get('status');
      $Udatapenduduk->pendidikan_terakhir = $request->get('pendidikan_terakhir');
      $Udatapenduduk->pekerjaan = $request->get('pekerjaan');
      $Udatapenduduk->save();
      return redirect('Udatapenduduk')->with('success','Data Penduduk Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Udatapenduduk = Udatapenduduk::find($id);
      $Udatapenduduk->delete();
      return redirect('Udatapenduduk')->with('success','Data Penduduk dihapus');
    }
}
