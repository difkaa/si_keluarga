@extends('layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
        <div class="box-header with-border">
            <h1 class="mt-4">Data Rumah Tangga</h1>
        </div>
            <div class="box-body">
                <a href="{{ route('rumahtangga.create') }}" class="btn btn-primary">Tambah Rumah Tangga</a>
                <br>
                <br>
                <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width:15px">No</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>desa</th>
                        <th>alamat</th>
                        <th>nama Kepala Rumah Tangga</th>
                        <th>Action</th>
                    </tr>
                @foreach ($rumahTanggas as $index => $ak)
                    <tr>
                        <td>{{ $index + $rumahTanggas->firstItem() }}</td>
                        <td>{{ $ak->provinsi }}</td>
                        <td>{{ $ak->kabupaten }}</td>
                        <td>{{ $ak->kecamatan }}</td>
                        <td>{{ $ak->desa }}</td>
                        <td>{{ $ak->alamat }}</td>
                        <td>{{ $ak->nm_kepala_rt }}</td>
                        <td>
                            <a href="{{ route('rumahtangga.edit', $ak) }}" class="btn btn-success">edit</a>
                            <button id="delete" data-title="{{ $ak->nm_kepala_rt }}" href="{{route('rumahtangga.destroy',$ak) }}" class="btn btn-danger">x</button>
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
            title: "Apakah kamu yakin akan hapus Rumah tangga "+ title +" ?",
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
