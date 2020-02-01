@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pendaftar</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'hasil.store']) !!}
                        <div class="form-group{{ $errors->has('pendaftar_id') ? ' has-error' : '' }}">
                            {!! Form::label('pendaftar_id', 'No Pendaftar') !!}
                            {!! Form::text('pendaftar_id', null, ['class'=>'form-control', 'placeholder'=>'Masukkan No Pendaftaran']) !!}
                            {!! $errors->first('pendaftar_id', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
                            {!! Form::label('jurusan', 'Jurusan') !!}
                            <select name="jurusan" class="form-control">
                                <option value="">-- Pilih Jurusan --</option>
                                @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('penguji') ? ' has-error' : '' }}">
                            {!! Form::label('penguji', 'Penguji') !!}
                            <select name="penguji" class="form-control">
                                <option value="">-- Pilih Penguji --</option>
                                @foreach ($pengujis as $penguji)
                                <option value="{{ $penguji->id }}">{{ $penguji->nama }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('penguji', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('tahun_ajaran') ? ' has-error' : '' }}">
                            {!! Form::label('tahun_ajaran', 'Tahun Ajaran') !!}
                            {!! Form::text('tahun_ajaran', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Tahun Ajaran']) !!}
                            {!! $errors->first('tahun_ajaran', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_tpa') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_tpa', 'Nilai TPA') !!}
                            {!! Form::text('nilai_tpa', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nilai TPA']) !!}
                            {!! $errors->first('nilai_tpa', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_wawancara') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_wawancara', 'Nilai Wawancara') !!}
                            {!! Form::text('nilai_wawancara', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nilai Wawancara']) !!}
                            {!! $errors->first('nilai_wawancara', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_uan') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_uan', 'Nilai UAN') !!}
                            {!! Form::text('nilai_uan', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nilai UAN']) !!}
                            {!! $errors->first('nilai_uan', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nilai_minat') ? ' has-error' : '' }}">
                            {!! Form::label('nilai_minat', 'Nilai Minat') !!}
                            {!! Form::text('nilai_minat', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nilai Minat']) !!}
                            {!! $errors->first('nilai_minat', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Proses', ['class'=>'btn btn-info']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
