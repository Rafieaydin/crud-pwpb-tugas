@extends('partial.master')
@section('title', 'Table siswa')
@section('judul', 'Table siswa')
@section('sub', "Detail siswa $siswa->nama_siswa")
@push('css')
<link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row mt-2">
            <div class="col-md-2">
                <a href="{{ route('siswa.index') }}" class="btn btn-danger btn-sm pl-2">Kembali
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
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $siswa->nipd }}</td>
                        <td>{{ $siswa->nama_siswa }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@push('js')
@endpush
