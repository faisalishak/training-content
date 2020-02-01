@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Kepala Sekolah</div>

                <div class="panel-body">
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4>    <i class="icon fa fa-check"></i> Berhasil!</h4>
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    <div align="center">
                        <h3>Kepala Sekolah</h3>
                        <br><br><br>
                        <h3>{{ $kepseks->nama }}</h3>
                        <hr width="50%">
                        <h3>NIP : {{ $kepseks->nip }}</h3>
                    </div>
                    <a href="{{ route('kepsek.edit', $kepseks->id) }}" class="btn btn-info pull-right">Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
