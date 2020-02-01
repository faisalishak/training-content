<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel\Pendaftar;
use App\Http\Requests;
use App\Http\Requests\Pendaftar\StoreRequest;
use App\Http\Requests\Pendaftar\UpdateRequest;

class PendaftarController extends Controller
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
        $pendaftars = Pendaftar::all();
        return view('adminpanel.pendaftar.index', compact('pendaftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pendaftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pendaftars = new Pendaftar();
        $pendaftars->nama =  $request->nama;
        $pendaftars->tempat_lahir = $request->tempat_lahir;
        $pendaftars->tanggal_lahir = $request->tanggal_lahir;
        $pendaftars->jenis_kelamin = $request->jenis_kelamin;
        $pendaftars->agama = $request->agama;
        $pendaftars->phone = $request->phone;
        $pendaftars->save();
        return redirect()->route('pendaftar.index')->with('alert-success', 'Berhasil Menambah Data');
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
        $pendaftars = Pendaftar::findOrFail($id);
        return view('adminpanel.pendaftar.edit', compact('pendaftars'));
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
        $pendaftars = Pendaftar::findOrFail($id);
        $pendaftars->nama =  $request->nama;
        $pendaftars->tempat_lahir = $request->tempat_lahir;
        $pendaftars->tanggal_lahir = $request->tanggal_lahir;
        $pendaftars->jenis_kelamin = $request->jenis_kelamin;
        $pendaftars->agama = $request->agama;
        $pendaftars->phone = $request->phone;
        $pendaftars->save();
        return redirect()->route('pendaftar.index')->with('alert-success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftars = Pendaftar::findOrFail($id);
        $pendaftars->hasils()->delete();
        $pendaftars->delete();
        return redirect()->route('pendaftar.index')->with('alert-success', 'Pendaftar Berhasil Dihapus');
    }
}
