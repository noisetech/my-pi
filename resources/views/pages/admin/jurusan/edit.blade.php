@extends('layouts.admin')

@section('title', 'Halaman Ubah Jurusan')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Jurusan</h1>
    </div>

    <div class="card shadow">
      <div class="card-body">
        <form action="{{ route('admin.jurusan.update', $item->id) }}" method="POST">
            @csrf

            @method('put')

            <div class="form-group">
                <label for="">Kode Jurusan</label>
                <input type="text" name="kode_jurusan" class="form-control" placeholder="Kode Jurusan" value="{{ $item->kode_jurusan }}">
            </div>


            <div class="form-group">
                <label for="">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan" value="{{ $item->nama_jurusan }}">
            </div>

            <button class="btn btn-sm btn-warning">
                Ubah
            </button>
        </form>
      </div>
    </div>

  </div>
@endsection
