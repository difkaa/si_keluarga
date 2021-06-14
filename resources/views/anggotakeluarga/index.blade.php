@extends('layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
        <div class="box-header with-border">
            <h1 class="mt-4">Data Anggota Keluarga</h1>
        </div>
            <div class="box-body">
                <a href="{{ route('anggotakeluarga.create') }}" class="btn btn-primary">Tambah Anggota Keluarga</a>
                <br>
                <br>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width:15px">No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                @foreach ($anggotaKeluargas as $index => $ak)
                    <tr>
                        <td>{{ $index + $anggotaKeluargas->firstItem() }}</td>
                        <td>{{ $ak->nik }}</td>
                        <td>{{ $ak->nama }}</td>
                        <td>{{ $ak->hub_keluarga }}</td>
                        <td>{{ $ak->tgl_lahir }}</td>
                        <td>{{ $ak->jenis_kelamin == 1 ? 'Laki-Laki': 'Perempuan' }}</td>
                        <td>
                            <a href="{{ route('anggotakeluarga.edit', $ak) }}" class="btn btn-success">edit</a>
                            <button id="delete" data-title="{{ $ak->nama }}" href="{{route('anggotakeluarga.destroy',$ak) }}" class="btn btn-danger">x</button>
                        </td>
                        <form id="deleteForm" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="" style="display:none">
                        </form>
                    </tr>
                @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $('button#delete').on('click', function(){
        var href = $(this).attr('href');
        var title = $(this).data('title');
        swal({
            title: "Apakah kamu yakin akan hapus Anggota Keluarga "+ title +" ?",
            text: "Jika menghapus data ini, data akan hilang!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                swal("Data telah terhapus", {
                icon: "success",
                });
            }
        });
    });
</script>
@endpush
