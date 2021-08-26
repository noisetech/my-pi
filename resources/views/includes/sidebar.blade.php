  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard-admin') }}">
          <div class="sidebar-brand-text mx-3">UBLAPPS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard-admin') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Dashboard -->

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.manage-user.index') }}">
              <i class="fas fa-users fa-user-alt"></i>
              <span>Manage User</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.mahasiswa.index') }}">
              <i class="fas fa-users fa-tachometer-alt"></i>
              <span>Mahasiswa</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
              <i class="fas fa-fw fa-book-open"></i>
              <span>Jurusan</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.matakuliah.index') }}">
              <i class="fas fa-fw fa-book-open"></i>
              <span>Mata Kuliah</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.dosen.index') }}">
              <i class="fas fa-fw fa-users"></i>
              <span>Dosen</span></a>
      </li>



      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
              <i class="fas fa-fw fa-list-alt"></i>
              <span>KRS</span></a>
      </li>


      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
              <i class="fas fa-fw fa-list-alt"></i>
              <span>KHS</span></a>
      </li>


      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
              <i class="fas fa-fw fa-money-bill-alt"></i>
              <span>Pembayaran SPP</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
              <i class="fas fa-fw fa-list-alt"></i>
              <span>Transkrip Nilai</span></a>
      </li>







      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->
