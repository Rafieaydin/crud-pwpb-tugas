@extends('partial.master')
@section('title', 'Table siswa')
@section('judul', 'Table siswa')
@section('sub', 'Tambah Data siswa')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h6>
        </div> --}}
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                {{-- @csrf --}}
                <div class="form-group">
                    <label for="nama">Nipd</label>
                    <input type="text" class="form-control @error('nipd') is-invalid @enderror" name="nipd" placeholder="masukan nipd" value="{{ old('nipd') }}">
                    @error('nipd')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Nama siswa</label>
                    <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" placeholder="masukan nama" value="{{ old('nama_siswa') }}">
                    @error('nama_siswa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis kelamin</label>
                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="exampleFormControlSelect1" name="jenis_kelamin">
                        <option value="">-- pilih jenis kelamin --</option>
                        <option value="L" @if(old('jenis_kelamin') === 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if(old('jenis_kelamin') === 'P') selected @endif>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" placeholder="masukan kelas" value="{{ old('kelas') }}">
                    @error('kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="masukan alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <a href="{{ route('siswa.index') }}" class="btn btn-danger mt-3">Kembali</a>
                <button type="submit" class="btn btn-success mt-3">Tambah</button>
            </form>
        </div>
    </div>

</div>
@endsection
