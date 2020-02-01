@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <dir class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="text-center">
                            Selamat Datang di Sistem Penerimaan Siswa Baru <br>
                        </h3>
                        <p class="text-center">
                            <img src="{{ asset('smkpgri.png') }}" width="15%">
                        </p>
                        <p class="text-center">
                            Aplikasi Penerimaan Siswa Berdasarkan Pemilihan Jurusan dan Kompotensi Keahlian Pada <br> <br><br>
                            <a href="{{ url('/pengumuman') }}" class="btn btn-success">Pengumuman</a>
                        </p>
                    </div>
                </div>
            </dir>
        </div>
    </div>
</div>
@endsection
