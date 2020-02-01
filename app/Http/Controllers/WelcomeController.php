<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel\Pendaftar;
use App\AppModel\Jurusan;
use App\AppModel\Hasil;
use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
    	$pendaftars = Pendaftar::all();
    	$jurusans = Jurusan::all();
    	$hasils = Hasil::all();
    	return view('welcome', compact('pendaftars', 'jurusans', 'hasils'));
    }
}
