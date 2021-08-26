@extends('layouts.admin')

@section('title', 'Halaman Dosen')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dosen</h1>
      <a href="{{ route('admin.dosen.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" cellspacing="0" width="100%" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                      @foreach ($items as $item)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->tempat_lahir . ','. ' ' . \Carbon\Carbon::parse($item->tanggal_lahir)->format('d F Y') }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" width="150" class="img-thumbnail">
                        </td>
                        <td>{{ $item->user->email }}</td>
                        <td>
                            <a href="{{ route('admin.dosen.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-sm fa-edit"></i>
                            </a>

                            <a href="{{ route('admin.dosen.destroy', $item->id) }}" class="btn btn-sm btn-danger delete-confirm">
                                <i class="fas fa-sm fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




  </div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>

<script src="{{ asset('backend/sweetalert.min.js') }}"></script>
<script>
    $('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Anda yakin?',
        text: 'Data yang terhapus tidak dapat dikembalikan!',
        icon: 'warning',
        dangerMode: true,
        buttons: ["Tidak", "Hapus!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>



<script>
   @if (session('status'))
   swal({
  title: "{{ session('status') }}",
  text: "{{ session('status_text') }}",
  icon: "{{ session('status_code') }}"
});

setTimeout(window.location.reload.bind(window.location), 2500);
   @endif
</script>
@endpush
