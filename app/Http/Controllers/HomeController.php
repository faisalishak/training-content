<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\AppModel\Penerimaansiswa;
use App\AppModel\Hasil;
use App\AppModel\Kepsek;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasils = Hasil::all();
        $kepseks = Kepsek::all()->first();
        return view('home', compact('hasils', 'kepseks'));
    }
}