<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskmeninggaldunia;


class SkmeninggalduniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskmeninggaldunia = Uskmeninggaldunia::all()->toArray();
      return view('Skmeninggaldunia.index', compact('Uskmeninggaldunia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('Skmeninggaldunia');
  		$result = Skmeninggaldunia::where('nama_alm', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Skmeninggaldunia.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Skmeninggaldunia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Skmeninggaldunia = $this -> validate(request(),[
      'hari' => 'required',
      'tanggal' => 'required',
      'jam' => 'required',
      'nama_alm' => 'required',
      'umur_alm' => 'required',
      'rt' => 'required',
      'rw' => 'required',
      'penyebab_meninggal' => 'required',
      'nama_saudara' => 'required',
      'tempat_bekerja' => 'required',
      'tgl_hari_ini' => 'required',
      'nama_kades' => 'required',

    ]);

    Skmeninggaldunia::create($Skmeninggaldunia);

    return back()-> with('success','Data Keterangan Meninggal Dunia Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Skmeninggaldunia = Skmeninggaldunia::all()->toArray();
      return view('Skmeninggaldunia.surat', compact('Skmeninggaldunia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Skmeninggaldunia = Skmeninggaldunia::find($id);
      return view('Skmeninggaldunia.edit', compact('Skmeninggaldunia','id'));
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
      $Skmeninggaldunia = Skmeninggaldunia::find($id);
      $this->validate(request(), [
        'hari' => 'required',
        'tanggal' => 'required',
        'jam' => 'required',
        'nama_alm' => 'required',
        'umur_alm' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'penyebab_meninggal' => 'required',
        'nama_saudara' => 'required',
        'tempat_bekerja' => 'required',
        'tgl_hari_ini' => 'required',
        'nama_kades' => 'required',
      ]);
      $Skmeninggaldunia->hari = $request->get('hari');
      $Skmeninggaldunia->tanggal = $request->get('tanggal');
      $Skmeninggaldunia->jam = $request->get('jam');
      $Skmeninggaldunia->nama_alm = $request->get('nama_alm');
      $Skmeninggaldunia->umur_alm = $request->get('umur_alm');
      $Skmeninggaldunia->rt = $request->get('rt');
      $Skmeninggaldunia->rw = $request->get('rw');
      $Skmeninggaldunia->penyebab_meninggal = $request->get('penyebab_meninggal');
      $Skmeninggaldunia->nama_saudara = $request->get('nama_saudara');
      $Skmeninggaldunia->tempat_bekerja = $request->get('tempat_bekerja');
      $Skmeninggaldunia->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Skmeninggaldunia->nama_kades = $request->get('nama_kades');
      $Skmeninggaldunia->save();
      return redirect('Skmeninggaldunia')->with('success','Data Keterangan Meninggal Dunia  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Skmeninggaldunia = Skmeninggaldunia::find($id);
      $Skmeninggaldunia->delete();
      return redirect('Skmeninggaldunia')->with('success','Data Keterangan Meninggal Dunia dihapus');
    }
}
