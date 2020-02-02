@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah Data Pendaftar</div>

                <div class="panel-body">
                    {!! Form::model($siswa, ['route'=>['siswa.update', $siswa->id], 'method'=>'PATCH']) !!}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {!! Form::label('nama', 'Nama') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control', 'placeholder'=>'Masukkan Nama Siswa']) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            {!! Form::label('kelas', 'Kelas') !!}
                            <select name="id_kelas" class="form-control">
                                <option value="">--Pilih Kelas--</option>
                                @foreach ($arrKelas as $item)
                                    @if($item->id == $siswa->id_kelas)
                                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
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
