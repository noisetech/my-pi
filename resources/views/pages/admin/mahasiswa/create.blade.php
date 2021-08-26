@extends('layouts.admin')

@section('title', 'Halaman Tambah Mahasiswa')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Mahasiwa</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
                </div>

                <div class="form-group">
                    <label for="">Npm</label>
                    <input type="text" name="npm" class="form-control" placeholder="Npm" value="{{ old('npm') }}">
                </div>


                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                </div>


                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}">
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control-file" placeholder="Gambar" value="{{ old('gambar') }}">
                </div>

                <div class="form-group">
                    <label for="">Nama Orang Tua</label>
                    <input type="text" name="nama_orang_tua" class="form-control" placeholder="Nama Orang Tua" value="{{ old('nama_orang_tua') }}">
                </div>


                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" name="no_telpon" class="form-control" placeholder="No Telpon" value="{{ old('no_telpon') }}">
                </div>

                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="jurusan_id" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        @foreach ($jurusan as $j)
                        <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Akun</label>
                    <select name="user_id" class="form-control">
                        <option value="">Pilih Akun</option>
                        @foreach ($user as $usr)
                        <option value="{{ $usr->id }}">{{ $usr->email }}</option>
                        @endforeach
                    </select>
                </div>





                <button class="btn btn-sm btn-primary" type="submit">
                    Simpan
                </button>
            </form>
        </div>
    </div>





  </div>
@endsection
