<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rt;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rt = Rt::all()->toArray();
      return view('rt.index', compact('rt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
 	  {
 		$search = $request::get('rt');
 		$result = Rt::where('rt', 'LIKE', '%' .$search. '%')->paginate(10);
 		return view('rt.result', compact('search','result'));
 	  }

    public function create()
    {
        return view('rt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rt = $this -> validate(request(),[
          'rt' => 'required',
          'alamat' => 'required',
      ]);

      Rt::create($rt);

      return back()-> with('success','Data Rt Tersimpan');;
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
      $rt = Rt::find($id);
      return view('rt.edit', compact('rt','id'));
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
      $rt = Rt::find($id);
      $this->validate(request(), [
          'rt' => 'required',
          'alamat' => 'required',
      ]);

      $rt->rt = $request->get('rt');
      $rt->alamat = $request->get('alamat');
      $rt->save();
      return redirect('rt')->with('success','Data RT Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $rt = Rt::find($id);
      $rt->delete();
      return redirect('rt')->with('success','Data RT dihapus');
    }
}
