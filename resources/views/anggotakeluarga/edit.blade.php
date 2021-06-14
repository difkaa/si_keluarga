@extends('layout')
@section('content')
<div class="col-md-5 col-md-offset-3">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Rumah Tangga</h3>
        </div>
            <form action="{{Route('anggotakeluarga.store')}}" class="form-horizontal" method="POST">
                @csrf
            <div class="box-body">
                <div class="form-group {{ $errors->has('nik') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                    <input name="nik" class="form-control" placeholder=" Nomor Induk Kependudukan (NIK) " value="{{$anggotakeluarga->nik}}">{{old('nik')}}
                    @if ($errors->has('nik'))
                        <p class="help-block">
                            {{ $errors->first('nik') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('nama') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                    <input name="nama" class="form-control" placeholder="Nama Lengkap " value="{{$anggotakeluarga->nama}}">{{old('nama')}}
                    @if ($errors->has('nama'))
                        <p class="help-block">
                            {{ $errors->first('nama') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('hub_keluarga') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Hubungan Keluarga</label>
                    <div class="col-sm-10">
                    <select name="hub_keluarga">
                        <option value="0">Pilih Hubungan Keluarga</option>
                        <option value="suami">Suami</option>
                        <option value="istri">Istri</option>
                        <option value="anak">Anak</option>
                    </select>
                    @if ($errors->has('hub_keluarga'))
                        <p class="help-block">
                            {{ $errors->first('hub_keluarga') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select name="jenis_kelamin">
                        <option value="0">Pilih Jenis Kelamin</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    @if ($errors->has('jenis_kelamin'))
                        <p class="help-block">
                            {{ $errors->first('jenis_kelamin') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Tanggal Lahir </label>
                    <div class="col-sm-10">
                    <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir ">{{old('tgl_lahir')}}
                        @if ($errors->has('tgl_lahir'))
                        <p class="help-block">
                            {{ $errors->first('tgl_lahir') }}
                        </p>tgl_lahir
                    @endif
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{ URL::previous() }}" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
