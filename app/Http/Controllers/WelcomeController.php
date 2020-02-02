<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::all();
    	return view('welcome', compact('siswa'));
    }
}
