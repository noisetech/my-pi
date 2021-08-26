@extends('layouts.admin')

@section('title', 'Halaman Ubah Mata Kuliah')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Mata Kuliah</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('admin.matakuliah.update', $item->id) }}" method="POST">
               @csrf
               @method('put')

               <div class="form-group">
                <label for="">Kode Mata Kuliah</label>
                <input type="text" name="kode_mata_kuliah" class="form-control" placeholder="Kode Mata Kuliah" value="{{ $item->kode_mata_kuliah }}">
               </div>

               <div class="form-group">
                <label for="">Nama Mata Kuliah</label>
                <input type="text" name="nama_mata_kuliah" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $item->nama_mata_kuliah }}">
               </div>

               <div class="form-group">
                <label for="">Sks</label>
                <input type="text" name="sks" class="form-control" placeholder="Sks" value="{{ $item->sks }}">
               </div>

               <button class="btn btn-sm btn-warning" type="submit">
                Ubah
               </button>
           </form>
        </div>
    </div>




  </div>
@endsection
