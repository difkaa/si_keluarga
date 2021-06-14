@extends('layout')
@section('content')
<div class="col-md-5 col-md-offset-3">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah Rumah Tangga</h3>
        </div>
            <form action="{{Route('rumahtangga.store')}}" class="form-horizontal" method="POST">
                @csrf
            <div class="box-body">
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                    <select name="provinsi">
                        <option value="0">Pilih Provinsi</option>
                        <option value="jawa-tengah">Jawa Tengah</option>
                        <option value="jawa-timur">Jawa Timur</option>
                        <option value="jawa-barat">Jawa Barat</option>
                    </select>
                    @if ($errors->has('provinsi'))
                        <p class="help-block">
                            {{ $errors->first('provinsi') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('kabupaten') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Kabupaten</label>
                    <div class="col-sm-10">
                    <select name="kabupaten">
                        <option value="0">Pilih Kabupaten</option>
                        <option value="blora">Blora</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="bandung">Bandung</option>
                    </select>
                    @if ($errors->has('kabupaten'))
                        <p class="help-block">
                            {{ $errors->first('kabupaten') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('kecamatan') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                    <select name="kecamatan">
                        <option value="0">Pilih Kecamatan</option>
                        <option value="blora">Blora</option>
                        <option value="genteng">Genteng</option>
                        <option value="lembang">Lembang</option>
                    </select>
                    @if ($errors->has('kecamatan'))
                        <p class="help-block">
                            {{ $errors->first('kecamatan') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('desa') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Desa</label>
                    <div class="col-sm-10">
                    <select name="desa">
                        <option value="0">Pilih Desa</option>
                        <option value="kedung-jenar">Kedungjenar</option>
                        <option value="ketabang">Ketabang</option>
                        <option value="desa-lembang">Desa Lembang</option>
                    </select>
                    @if ($errors->has('desa'))
                        <p class="help-block">
                            {{ $errors->first('desa') }}
                        </p>
                    @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('alamat') ? 'has-error' :'' }}">
                    <label for="" class="col-sm-2 control-label">Alamat lengkap</label>
                    <div class="col-sm-10">
                    <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat lengkap">{{ old('alamat') }} </textarea>
                    @if ($errors->has('alamat'))
                        <p class="help-block">
                            {{ $errors->first('alamat') }}
                        </p>
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
