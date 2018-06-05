<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujadwal;

class UjadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ujadwal = Ujadwal::all()->toArray();
        return view('Ujadwal.index', compact('Ujadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ujadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Ujadwal = $this -> validate(request(),[
            'Ujadwal' => 'required',
        ]);

        Ujadwal::create($Ujadwal);

        return back()-> with('success','Data stored');;
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
        $Ujadwal = Ujadwal::find($id);
        return view('Ujadwal.edit', compact('data','id'));
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
        $Ujadwal = Ujadwal::find($id);
        $this->validate(request(), [
            'Ujadwal' => 'required',
        ]);

        $Ujadwal->Ujadwal = $request->get('Ujadwal');
        $Ujadwal->save();
        return redirect('Ujadwal')->with('success','Data Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ujadwal = Ujadwal::find($id);
        $Ujadwal->delete();
        return redirect('Ujadwal')->with('success','Product has been  deleted');
    }
}
