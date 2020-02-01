@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Data Jurusan</div>

                <div class="panel-body">
                    {!! Form::model($jurusans, ['route'=>['jurusan.update', $jurusans->id], 'method'=>'PATCH']) !!}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {!! Form::label('nama', 'Nama Jurusan') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Siswa']) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_lulus') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_lulus', 'Nilai Standar Lulus') !!}
                            {!! Form::text('nilai_lulus', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Tempat Lahir']) !!}
                            {!! $errors->first('nilai_lulus', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Ubah', ['class'=>'btn btn-info']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
