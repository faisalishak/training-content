@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="text-center">
                        <h3>PENGUMUMAN</h3>
                    </div><br>
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4>    <i class="icon fa fa-check"></i> Berhasil!</h4>
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Jurusan</td>
                                <td>Penguji</td>
                                <td>Tahun Ajaran</td>
                                <td>Nilai TPA</td>
                                <td>Nilai Wawancara</td>
                                <td>Nilai UAN</td>
                                <td>Nilai Minat</td>
                                <td>Nilai Rata - Rata</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($hasils as $hasil)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $hasil->pendaftar->nama }}</td>
                                <td>{{ $hasil->jurusan->nama }}</td>
                                <td>{{ $hasil->penguji->nama }}</td>
                                <td>{{ $hasil->tahun_ajaran }}</td>
                                <td>{{ $hasil->nilai_tpa }}</td>
                                <td>{{ $hasil->nilai_wawancara }}</td>
                                <td>{{ $hasil->nilai_uan }}</td>
                                <td>{{ $hasil->nilai_minat }}</td>
                                <td>{{ $hasil->nilai_rata }}</td>
                                <?php
                                    $nilai_lulus = $hasil->jurusan->nilai_lulus;
                                    $nilai_rata = $hasil->nilai_rata;
                                    if ($nilai_rata > $nilai_lulus) {
                                        $keterangan = "Lulus";
                                    }else{
                                        $keterangan = "Tidak Lulus";
                                    }

                                ?>
                                <td>{{ $keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div class="text-center">
                        <h4>Kepala Sekolah</h4>
                        <br><br><br>
                        <h4><u>{{ $kepseks->nama }}</u></h4>
                        <h4>{{ $kepseks->nip }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
