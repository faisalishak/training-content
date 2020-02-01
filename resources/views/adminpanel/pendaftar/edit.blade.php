@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Data Pendaftar</div>

                <div class="panel-body">
                    {!! Form::model($pendaftars, ['route'=>['pendaftar.update', $pendaftars->id], 'method'=>'PATCH']) !!}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {!! Form::label('nama', 'Nama') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Siswa']) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
                            {!! Form::text('tempat_lahir', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Tempat Lahir']) !!}
                            {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                            {!! Form::text('tanggal_lahir', null, ['class'=>'form-control', 'placeholder'=>'YYYY-MM-DD, Example : 1996-07-25']) !!}
                            {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            {!! Form::label('jenis_kelamin', 'Jenis Kelamin') !!}
                            <select name="jenis_kelamin" class="form-control">
                                @if($pendaftars->jenis_kelamin == 'Laki - Laki')
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                @else
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                @endif
                            </select>
                            {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            {!! Form::label('agama', 'Agama') !!}
                            <select name="agama" class="form-control">
                                @if($pendaftars->agama == 'Islam')
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Krisen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                @elseif($pendaftars->agama == 'Kristen')
                                <option value="Kristen">Krisen</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                @elseif($pendaftars->agama == 'Katolik')
                                <option value="Katolik">Katolik</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Krisen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                @elseif($pendaftars->agama == 'Hindu')
                                <option value="Hindu">Hindu</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Krisen</option>
                                <option value="Budha">Budha</option>
                                @elseif($pendaftars->agama == 'Budha')
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Krisen</option>
                                <option value="Hindu">Hindu</option>
                                @endif
                            </select>
                            {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            {!! Form::label('phone', 'No Telepon') !!}
                            {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Masukkan No Telepon']) !!}
                            {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
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
