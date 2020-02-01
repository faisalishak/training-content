@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Jurusan</div>

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
                                <td>Kode Jurusan</td>
                                <td>Nama</td>
                                <td>Nilai Standar</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jurusans as $jurusan)
                            <tr>
                                <td>{{ $jurusan->id }}</td>
                                <td>{{ $jurusan->nama }}</td>
                                <td>{{ $jurusan->nilai_lulus }}</td>
                                <td>
                                    <form method="POST" action="{{ route('jurusan.destroy', $jurusan->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a class="btn btn-xs btn-info" href="{{ route('jurusan.edit', $jurusan->id) }}">Ubah</a> | 
                                    <input class="btn btn-xs btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('jurusan.create') }}" class="btn btn-info">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
