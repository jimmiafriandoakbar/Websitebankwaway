    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">Admin Webside Bank Waway</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link d-block">
                        <i class="nav-icon fas fa-tachometer-alt-slowest fa-2x"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folders"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.publikasi') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Publikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tataKelola') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tata Kelola / GCG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pelayananKonsumen') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pelayanan Konsumen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fad fa-credit-card fa-2x"></i>
                        <p>
                            Kredit
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.kreditPegawai') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kredit Pegawai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.wbs') }}" class="nav-link d-block">
                        <i class="nav-icon fad fa-exclamation-square fa-2x"></i>
                        <p>
                            WBS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.informasi') }}" class="nav-link d-block">
                        <i class="nav-icon fas fa-newspaper fa-2x"></i>
                        <p>
                            Informasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.karir') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-headset fa-2x"></i>
                        <span>
                            Karir
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.emailNasabah') }}" class="nav-link">
                        <i class="nav-icon far fa-table fa-2x"></i>
                        <span>
                            Email Nasabah
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dataRekeningBaru') }}" class="nav-link">
                        <i class="nav-icon fad fa-file-spreadsheet fa-2x"></i>
                        <span>
                            Form Rekening Baru
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folders"></i>
                        <p>
                            Deposito
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.deposito') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Nasabah</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
