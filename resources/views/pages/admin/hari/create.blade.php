@extends('layouts.admin')

@section('title', 'Halaman Tambah Hari')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Hari</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.hari.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Hari</label>
                    <input type="text" name="hari" class="form-control" placeholder="Hari" value="{{ old('hari') }}">
                </div>

                <button class="btn btn-sm btn-primary" type="submit">
                    Simpan
                </button>
            </form>
        </div>
    </div>


  </div>
@endsection
