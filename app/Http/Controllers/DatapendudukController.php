<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapenduduk;


class DatapendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datapenduduk = Datapenduduk::all()->toArray();
      return view('datapenduduk.index', compact('datapenduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
      {
      $search = $request::get('datapenduduk');
      $result = Datapenduduk::where('nik', 'LIKE', '%' .$search. '%')->paginate(10);
      return view('datapenduduk.result', compact('search','result'));
      }



    public function create()
    {
        return view('datapenduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $datapenduduk = $this -> validate(request(),[
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

      Datapenduduk::create($datapenduduk);

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
      $datapenduduk = Datapenduduk::find($id);
      return view('datapenduduk.edit', compact('datapenduduk','id'));
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
      $datapenduduk = Datapenduduk::find($id);
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
      $datapenduduk->nik = $request->get('nik');
      $datapenduduk->nama = $request->get('nama');
      $datapenduduk->jenis_kelamin = $request->get('jenis_kelamin');
      $datapenduduk->tempat_ttl = $request->get('tempat_ttl');
      $datapenduduk->tgl_lahir = $request->get('tgl_lahir');
      $datapenduduk->agama = $request->get('agama');
      $datapenduduk->status = $request->get('status');
      $datapenduduk->pendidikan_terakhir = $request->get('pendidikan_terakhir');
      $datapenduduk->pekerjaan = $request->get('pekerjaan');
      $datapenduduk->save();
      return redirect('datapenduduk')->with('success','Data Penduduk Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $datapenduduk = datapenduduk::find($id);
      $datapenduduk->delete();
      return redirect('datapenduduk')->with('success','Data Penduduk dihapus');
    }
}
