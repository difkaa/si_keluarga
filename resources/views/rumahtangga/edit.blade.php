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
                        <option value="jawa-tengah" {{$rumahtangga->provinsi == 'jawa-tengah' ? 'selected' :null }}>Jawa Tengah</option>
                        <option value="jawa-timur" {{$rumahtangga->provinsi == 'jawa-timur' ? 'selected' :null }}>Jawa Timur</option>
                        <option value="jawa-barat" {{$rumahtangga->provinsi == 'jawa-barat' ? 'selected' :null }}>Jawa Barat </option>
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
                        <option value="blora" {{$rumahtangga->kabupaten == 'blora' ? 'selected':null}}>Blora</option>
                        <option value="surabaya" {{$rumahtangga->kabupaten == 'surabaya' ? 'selected':null}}>Surabaya</option>
                        <option value="bandung" {{$rumahtangga->kabupaten == 'bandung' ? 'selected':null}}>Bandung</option>
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
                        <option value="blora" {{$rumahtangga->kecamatan == 'blora' ? 'selected':null}}>Blora</option>
                        <option value="genteng" {{$rumahtangga->kecamatan == 'genteng' ? 'selected':null}}>Genteng</option>
                        <option value="lembang" {{$rumahtangga->kecamatan == 'lembang' ? 'selected':null}}>Lembang</option>
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
                        <option value="kedung-jenar" {{$rumahtangga->desa == 'kedung-jenar' ? 'selected':null}}>Kedungjenar</option>
                        <option value="ketabang" {{$rumahtangga->desa == 'ketabang' ? 'selected':null}}>Ketabang</option>
                        <option value="desa-lembang" {{$rumahtangga->desa == 'desa-lembang' ? 'selected':null}}>Desa Lembang</option>
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
                    <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat lengkap">{{ $rumahtangga->alamat ?? $old('alamat') }} </textarea>
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
