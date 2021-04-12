@extends('partial.master')
@push('css')
<link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
    @if (session('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row mt-2">
            <div class="col-md-10">
                <h5 class="m-0 font-weight-bold text-primary ">Data Siswa</h5>
            </div>
            <div class="col-md-2">
                <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm pl-2">Tambah Data
                </a>
            </div>
        </div>


    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nipd</th>
                        <th>nama</th>
                        <th>jenis kelamin</th>
                        <th>kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->nipd }}</td>
                        <td>{{ $value->nama_siswa }}</td>
                        <td>{{ $value->jenis_kelamin }}</td>
                        <td>{{ $value->kelas }}</td>
                        <td>
                            <a href="{{ route('siswa.show', $value->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="{{ route("siswa.edit", $value->id) }}" class="btn btn-warning btn-sm d-inline"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a  class="btn btn-danger btn-sm d-inline hapus"  data-id="{{ $value->id }}"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function (params) {
        $('#dataTable').DataTable();
        $('.hapus').click(function () {
            Swal.fire({
            title: 'Apa anda yakin?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                var id = $(this).data('id');
                $.ajax({
                    url: "/siswa/" +id,
                    type: "delete",
                    data: {
                        _token: '{{csrf_token()}}'
                    },
                    success: function (data) {
                        Swal.fire(
                            'success',
                            'Data anda berhasil di hapus.',
                            'success'
                        )
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });

            } else if (result.dismiss === Swal.DismissReason.cancel) {}
        });
        });
    });

</script>
@endpush
