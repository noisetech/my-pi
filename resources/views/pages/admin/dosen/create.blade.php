@extends('layouts.admin')

@section('title', 'Halaman Tambah Dosen')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Dosen</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>

            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat"  class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                 <label for="">Gambar</label>
                 <input type="file" name="gambar" class="form-control-file">
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
