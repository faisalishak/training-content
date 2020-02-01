<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel\Penguji;
use App\Http\Requests;
use App\Http\Requests\Penguji\StoreRequest;
use App\Http\Requests\Penguji\UpdateRequest;

class PengujiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengujis = Penguji::all();
        return view('adminpanel.penguji.index', compact('pengujis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.penguji.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pengujis = new Penguji();
        $pengujis->nama =  $request->nama;
        $pengujis->jabatan = $request->jabatan;
        $pengujis->save();
        return redirect()->route('penguji.index')->with('alert-success', 'Berhasil Menambah Data');
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
        $pengujis = Penguji::findOrFail($id);
        return view('adminpanel.penguji.edit', compact('pengujis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $pengujis = Penguji::findOrFail($id);
        $pengujis->nama =  $request->nama;
        $pengujis->jabatan = $request->jabatan;
        $pengujis->save();
        return redirect()->route('penguji.index')->with('alert-success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengujis = Penguji::findOrFail($id);
        $pengujis->hasils()->delete();
        $pengujis->delete();
        return redirect()->route('penguji.index')->with('alert-success', 'Penguji Berhasil Dihapus');
    }
}
