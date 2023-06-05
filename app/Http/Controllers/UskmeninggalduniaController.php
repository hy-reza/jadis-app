<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uskmeninggaldunia;
use DB;

class UskmeninggalduniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Uskmeninggaldunia = Uskmeninggaldunia::all()->toArray();
      return view('Uskmeninggaldunia.index', compact('Uskmeninggaldunia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Uskmeninggaldunia');
  		$result = Uskmeninggaldunia::where('nama_alm', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Uskmeninggaldunia.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Uskmeninggaldunia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Uskmeninggaldunia = $this -> validate(request(),[
      'nomer_surat' => 'required',
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

    Uskmeninggaldunia::create($Uskmeninggaldunia);

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
      //$Uskmeninggaldunia = Uskmeninggaldunia::all()->toArray();
      $Uskmeninggaldunia = DB::table('uskmeninggaldunias')->where('id', $id)->get();
      return view('Uskmeninggaldunia.surat', compact('Uskmeninggaldunia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Uskmeninggaldunia = Uskmeninggaldunia::find($id);
      return view('Uskmeninggaldunia.edit', compact('Uskmeninggaldunia','id'));
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
      $Uskmeninggaldunia = Uskmeninggaldunia::find($id);
      $this->validate(request(), [
        'nomer_surat' => 'required',
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
      $Uskmeninggaldunia->nomer_surat = $request->get('nomer_surat');
      $Uskmeninggaldunia->hari = $request->get('hari');
      $Uskmeninggaldunia->tanggal = $request->get('tanggal');
      $Uskmeninggaldunia->jam = $request->get('jam');
      $Uskmeninggaldunia->nama_alm = $request->get('nama_alm');
      $Uskmeninggaldunia->umur_alm = $request->get('umur_alm');
      $Uskmeninggaldunia->rt = $request->get('rt');
      $Uskmeninggaldunia->rw = $request->get('rw');
      $Uskmeninggaldunia->penyebab_meninggal = $request->get('penyebab_meninggal');
      $Uskmeninggaldunia->nama_saudara = $request->get('nama_saudara');
      $Uskmeninggaldunia->tempat_bekerja = $request->get('tempat_bekerja');
      $Uskmeninggaldunia->tgl_hari_ini = $request->get('tgl_hari_ini');
      $Uskmeninggaldunia->nama_kades = $request->get('nama_kades');
      $Uskmeninggaldunia->save();
      return redirect('Uskmeninggaldunia')->with('success','Data Keterangan Meninggal Dunia  Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Uskmeninggaldunia = Uskmeninggaldunia::find($id);
      $Uskmeninggaldunia->delete();
      return redirect('Uskmeninggaldunia')->with('success','Data Keterangan Meninggal Dunia dihapus');
    }
}
