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
            <form action="{{ route('admin.mahasiswa.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('put')

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $item->nama_lengkap }}">
                </div>

                <div class="form-group">
                    <label for="">Npm</label>
                    <input type="text" name="npm" class="form-control" placeholder="Npm" value="{{ $item->npm }}">
                </div>


                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="{{ $item->jenis_kelamin }}">Data Sebelumnya({{ $item->jenis_kelamin }})</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
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
                    <textarea name="" class="form-control" rows="10">{{ $item->alamat }}</textarea>
                </div>

                <div class="col">
                    <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" width="120" class="img-thumbnail mt-4 mb-4">
                    <p>{{ $item->gambar }}</p>
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control-file" placeholder="Gambar">
                </div>

                <div class="form-group">
                    <label for="">Nama Orang Tua</label>
                    <input type="text" name="nama_orang_tua" class="form-control" placeholder="Nama Orang Tua" value="{{ $item->nama_orang_tua }}">
                </div>


                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" name="no_telpon" class="form-control" placeholder="No Telpon" value="{{ $item->no_telpon }}">
                </div>

                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="jurusan_id" class="form-control">
                        <option value="{{ $item->jurusan_id }}">Jangan diubah({{ $item->jurusan->nama_jurusan }})</option>
                        @foreach ($jurusan as $j)
                        <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Akun</label>
                    <select name="user_id" class="form-control">
                        <option value="{{ $item->user_id }}">jangan diubah({{ $item->user->email }})</option>
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
