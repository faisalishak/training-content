@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Jurusan</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'jurusan.store']) !!}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {!! Form::label('nama', 'Nama Jurusan') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Jurusan']) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_lulus') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_lulus', 'Nilai Standar Lulus') !!}
                            {!! Form::text('nilai_lulus', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nilai Standar Lulus Jurusan']) !!}
                            {!! $errors->first('nilai_lulus', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Simpan', ['class'=>'btn btn-info']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
