@extends('layouts.admin')

@section('title', 'Halaman Ubah Manage User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Manage User</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.manage-user.update', $item->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $item->name }}">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $item->username }}">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $item->email }}">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $item->password }}">
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option value="{{ $item->role }}">Data Role({{ $item->role }})</option>
                        <option value="admin">Admin</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
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
