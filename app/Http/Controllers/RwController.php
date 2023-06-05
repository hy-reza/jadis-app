<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rw;


class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rw = Rw::all()->toArray();
      return view('rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request::get('rw');
  		$result = Rw::where('rw', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('rw.result', compact('search','result'));
  	  }

    public function create()
    {
        return view('rw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rw = $this -> validate(request(),[
          'rw' => 'required',
          'alamat' => 'required',
      ]);

      Rw::create($rw);

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
      $rw = Rw::find($id);
      return view('rw.edit', compact('rw','id'));
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
      $rw = Rw::find($id);
      $this->validate(request(), [
          'rw' => 'required',
          'alamat' => 'required',
      ]);

      $rw->rw = $request->get('rw');
      $rw->alamat = $request->get('alamat');
      $rw->save();
      return redirect('rw')->with('success','Data RW Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $rw = Rw::find($id);
      $rw->delete();
      return redirect('rw')->with('success','Data RW dihapus');
    }
}
