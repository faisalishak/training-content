@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Hasil Pendaftaran Siswa</div>

                <div class="panel-body">
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
                                <td>Action</td>
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
                                <td>
                                    <form method="POST" action="{{ route('hasil.destroy', $hasil->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a class="btn btn-xs btn-info" href="{{ route('hasil.edit', $hasil->id) }}">Ubah</a> | 
                                    <input class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('hasil.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
