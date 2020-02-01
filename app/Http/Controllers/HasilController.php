<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel\Hasil;
use App\AppModel\Jurusan;
use App\AppModel\Penguji;
use App\AppModel\Pendaftar;
use App\Http\Requests;
use App\Http\Requests\Hasil\StoreRequest;
use App\Http\Requests\Hasil\UpdateRequest;

class HasilController extends Controller
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
        $hasils = Hasil::all();
        return view('adminpanel.hasil.index', compact('hasils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all(); 
        $pengujis = Penguji::all(); 
        return view('adminpanel.hasil.create', compact('jurusans', 'pengujis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $nilai_tpa = $request->nilai_tpa;
        $nilai_wawancara = $request->nilai_wawancara;
        $nilai_uan = $request->nilai_uan;
        $nilai_minat = $request->nilai_minat;
        $nilai_rata = ($nilai_tpa + $nilai_wawancara + $nilai_uan + $nilai_minat)/4;
        
        $nilais = new Hasil();
        $nilais->pendaftar_id = $request->pendaftar_id;
        $nilais->jurusan_id = $request->jurusan;
        $nilais->penguji_id = $request->penguji;
        $nilais->tahun_ajaran = $request->tahun_ajaran;
        $nilais->nilai_tpa = $nilai_tpa;
        $nilais->nilai_wawancara = $nilai_wawancara;
        $nilais->nilai_uan = $nilai_uan;
        $nilais->nilai_minat = $nilai_minat;
        $nilais->nilai_rata = $nilai_rata;
        $nilais->save();
        return redirect()->route('hasil.index')->with('alert-success', 'Data Berhasil diproses');
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
        $hasils = Hasil::findOrFail($id);
        $jurusans = Jurusan::lists('nama', 'id')->all(); 
        $pengujis = Penguji::lists('nama', 'id')->all(); 
        return view('adminpanel.hasil.edit', compact('hasils', 'jurusans', 'pengujis'));
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
        $nilai_tpa = $request->nilai_tpa;
        $nilai_wawancara = $request->nilai_wawancara;
        $nilai_uan = $request->nilai_uan;
        $nilai_minat = $request->nilai_minat;
        $nilai_rata = ($nilai_tpa + $nilai_wawancara + $nilai_uan + $nilai_minat)/4;
        
        $nilais = Hasil::findOrFail($id);
        $nilais->pendaftar_id = $request->pendaftar_id;
        $nilais->jurusan_id = $request->jurusan_id;
        $nilais->penguji_id = $request->penguji_id;
        $nilais->tahun_ajaran = $request->tahun_ajaran;
        $nilais->nilai_tpa = $nilai_tpa;
        $nilais->nilai_wawancara = $nilai_wawancara;
        $nilais->nilai_uan = $nilai_uan;
        $nilais->nilai_minat = $nilai_minat;
        $nilais->nilai_rata = $nilai_rata;
        $nilais->save();
        return redirect()->route('hasil.index')->with('alert-success', 'Data Berhasil diproses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasils = Hasil::findOrFail($id);
        $hasils->delete();
        return redirect()->route('hasil.index')->with('alert-success', 'Hasil Berhasil Dihapus');
    }
}
