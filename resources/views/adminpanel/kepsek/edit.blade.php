@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Data Kepala Sekolah</div>

                <div class="panel-body">
                    {!! Form::model($kepseks, ['route'=>['kepsek.update', $kepseks->id], 'method'=>'PATCH']) !!}
                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            {!! Form::label('nip', 'NIP') !!}
                            {!! Form::text('nip', null, ['class'=>'form-control', 'placeholder'=>'Masukkan NIP']) !!}
                            {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {!! Form::label('nama', 'Nama Kepala Sekolah') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Kepala Sekolah']) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
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
