{{-- <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="assets/index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-landmark"></i>
        </div>
        <div class="sidebar-brand-text mx-3">siatpenduk</div>
    </a>


    @can('masyarakat')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/pengajuan*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/dashboard/pengajuan">
                <i class="fas fa-envelope"></i>
                <span>Pengajuan Surat</span></a>
        </li>
    @endcan

    @can('admin')
        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <div class="sidebar-heading">
            Administrator
        </div>

        <li class="nav-item {{ Request::is('admin/pengajuan*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/pengajuan">
                <i class="fas fa-envelope-open-text"></i>
                <span>Pengajuan Masuk</span></a>
        </li>

        <li class="nav-item {{ Request::is('admin/pengguna*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/pengguna">
                <i class="fas fa-users"></i>
                <span>Pengguna</span></a>
        </li>

        <li class="nav-item {{ Request::is('admin/riwayat*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/riwayat">
                <i class="fas fa-history"></i>
                <span>Riwayat</span></a>
        </li>
    @endcan

    @can('kades')
        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <div class="sidebar-heading">
            Kepala Desa
        </div>

        <li class="nav-item {{ Request::is('kades/validasi*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/kades/validasi">
                <i class="fas fa-envelope-open-text"></i>
                <span>Butuh Acc</span></a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <div class="sidebar-heading">
        Setting
    </div>

    <li class="nav-item {{ Request::is('setting') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="/setting">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>
    <li class="nav-item {{ Request::is('setting/' . auth()->user()->id . '/edit') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="/setting/{{ auth()->user()->id }}/edit">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>
    <li class="nav-item {{ Request::is('ubah_password') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="/ubah_password">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-3">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar --> --}}
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon mt-3">
            <img src="/assets/img/logo2.png" alt="">
        </div>
        <div class="sidebar-brand-text mt-4">
            <p>Partai Kebangkitan Bangsa</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-4 mb-0">

    <li class="nav-item {{ Request::is('setting*') ? 'active' : '' }}">
        <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#akun"
            aria-expanded="true" aria-controls="akun">
            <i class="fas fa-house-user"></i>
            <span>Akun</span>
        </a>
        <div id="akun" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white collapse-inner rounded">
                <a class="collapse-item" href="/setting">Profile</a>
                <a class="collapse-item" href="/setting/{{ auth()->user()->id }}/edit">Edit Profile</a>
                <a class="collapse-item" href="/ubah_password">Ubah Password</a>
            </div>
        </div>
    </li>


    @can('admin')
        <li class="nav-item {{ Request::is('admin/verifikasi') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/verifikasi">
                <i class="fas fa-fw fa-user"></i>
                <span>Verifikasi</span></a>
        </li>
    @endcan

    @can('ketua')
        <li class="nav-item {{ Request::is('ketua/verifikasi') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/ketua/verifikasi">
                <i class="fas fa-fw fa-user"></i>
                <span>Verifikasi</span></a>
        </li>
    @endcan

    @can('admin')
        <li class="nav-item {{ Request::is('admin/anggota*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/anggota">
                <i class="fas fa-users"></i>
                <span>Anggota</span></a>
        </li>
    @endcan
    @can('ketua')
        <li class="nav-item {{ Request::is('admin/anggota*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/admin/anggota">
                <i class="fas fa-users"></i>
                <span>Anggota</span></a>
        </li>
    @endcan

    @can('anggota')
        <li class="nav-item {{ Request::is('anggota*') ? 'active' : '' }}">
            <a class="nav-link pb-0" href="/anggota/kta/{{ auth()->user()->id }}" target="blank">
                <i class="fas fa-file-pdf"></i>
                <span>Cetak KTA</span></a>
        </li>
    @endcan

    <!-- logout -->
    <li class="nav-item">
        <a class="nav-link" href="#logoutModal" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-rotate-180"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
