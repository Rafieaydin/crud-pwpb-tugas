@extends('partial.master')
@section('title', 'Table siswa')
@section('judul', 'Table siswa')
@section('sub', 'Table siswa DataTable')
@section('content')
@if (session('berhasil'))
<div class="alert alert-light-success color-success alert-dismissible show fade">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <div class="card-title fw-bold">Table siswa</div>
            </div>
            <div class="col-md-2">
                <a href="{{ route('siswa.create') }}" class=" btn btn-primary">Tambah data</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-bordered">
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
                            <a class="btn btn-danger btn-sm d-inline hapus" data-id="{{ $value->id }}"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function (params) {
        // $('#dataTable').DataTable();
        let table1 = document.querySelector('#dataTable');
        let dataTable = new simpleDatatables.DataTable(table1);
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
                        url: "/siswa/" + id,
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












































