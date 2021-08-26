@extends('layouts.admin')

@section('title', 'Halaman Ubah Dosen')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Data Dosen</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.dosen.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                @method('put')

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $item->nama_lengkap }}">
            </div>

            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $item->tanggal_lahir }}">
            </div>

            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $item->tempat_lahir }}">
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat"  class="form-control" rows="10">{{ $item->alamat }}</textarea>
            </div>

            <div class="col">
                <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" width="250" class="mt-2 mb-3">
           </div>


            <div class="form-group">
                 <label for="">Gambar</label>
                 <input type="file" name="gambar" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="">Akun</label>
                <select name="user_id" class="form-control">
                    <option value="{{ $item->user_id }}">Jangan diubah ({{ $item->user->email }})</option>
                    @foreach ($user as $usr)
                        <option value="{{ $usr->id }}">{{ $usr->email }}</option>
                    @endforeach
                </select>
           </div>

            <button class="btn btn-sm btn-warning" type="submit">
                Ubah
            </button>
            </form>
        </div>
    </div>




  </div>
@endsection
