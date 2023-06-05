<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urt;
use DB;

class UrtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Urt = Urt::all()->toArray();
      return view('Urt.index', compact('Urt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
  	  {
  		$search = $request->get('Urt');
  		$result = Urt::where('rt', 'LIKE', '%' .$search. '%')->paginate(10);
  		return view('Urt.result', compact('search','result'));
  	  }

    public function create()
    {
      return view('Urt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $Urt = $this -> validate(request(),[
          'rt' => 'required',
          'alamat' => 'required',
      ]);

      Urt::create($Urt);

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
      $Urt = Urt::find($id);
      return view('Urt.edit', compact('rt','id'));
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
      $Urt = Urt::find($id);
      $this->validate(request(), [
          'rt' => 'required',
          'alamat' => 'required',
      ]);

      $Urt->rt = $request->get('rt');
      $Urt->alamat = $request->get('alamat');
      $Urt->save();
      return redirect('Urt')->with('success','Data RT Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Urt = Urt::find($id);
      $Urt->delete();
      return redirect('rt')->with('success','Data RT dihapus');
    }
}
