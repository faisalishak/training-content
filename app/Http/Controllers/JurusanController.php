<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel\Jurusan;
use App\Http\Requests;
use App\Http\Requests\Jurusan\StoreRequest;
use App\Http\Requests\Jurusan\UpdateRequest;

class JurusanController extends Controller
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
        $jurusans = Jurusan::all();
        return view('adminpanel.jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $jurusans = new Jurusan();
        $jurusans->nama =  $request->nama;
        $jurusans->nilai_lulus = $request->nilai_lulus;
        $jurusans->save();
        return redirect()->route('jurusan.index')->with('alert-success', 'Berhasil Menambah Data');
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
        $jurusans = Jurusan::findOrFail($id);
        return view('adminpanel.jurusan.edit', compact('jurusans'));
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
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->nama =  $request->nama;
        $jurusans->nilai_lulus = $request->nilai_lulus;
        $jurusans->save();
        return redirect()->route('jurusan.index')->with('alert-success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        $jurusans->hasils()->delete();
        $jurusans->delete();
        return redirect()->route('jurusan.index')->with('alert-success', 'Jurusan Berhasil Dihapus');
    }
}
