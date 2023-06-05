<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urw;
use DB;

class UrwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Urw = Urw::all()->toArray();
      return view('Urw.index', compact('Urw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Urw');
  		$result = Urw::where('rw', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Urw.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('Urw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Urw = $this -> validate(request(),[
          'rw' => 'required',
          'alamat' => 'required',
      ]);

      Urw::create($Urw);

      return back()-> with('success','Data Rw Tersimpan');;
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
      $Urw = Urw::find($id);
      return view('Urw.edit', compact('Urw','id'));
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
      $Urw = Urw::find($id);
      $this->validate(request(), [
          'rw' => 'required',
          'alamat' => 'required',
      ]);

      $Urw->rw = $request->get('rw');
      $Urw->alamat = $request->get('alamat');
      $Urw->save();
      return redirect('Urw')->with('success','Data RW Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Urw = Urw::find($id);
      $Urw->delete();
      return redirect('Urw')->with('success','Data RW dihapus');
    }
}
