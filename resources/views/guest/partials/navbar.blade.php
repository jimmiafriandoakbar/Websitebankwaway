<div class="container-fluid bg-white shadow-sm position-relative">
    <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-5">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assetGuest/img/logo-website.png') }}" alt="Logo" width="200" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav font-weight-bold mx-auto align-items-center">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu border-0 shadow rounded-3 mt-2">
                        <a href="{{ url('/deposito') }}" class="dropdown-item">Deposito</a>
                        <a href="{{ url('/kredit') }}" class="dropdown-item">Pinjaman</a>
                        <a href="{{ url('/tabungan') }}" class="dropdown-item">Tabungan</a>
                        <a href="{{ url('/pembukaanRekening') }}" class="dropdown-item">Pembukaan Rekening</a>
                        <!--<a href="{{ url('/formKredit') }}" class="dropdown-item">Form Kredit</a>-->
                                                <a href="{{ route('formKreditPegawai') }}" class="dropdown-item">Form Kredit Pegawai</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/informasi') }}" class="nav-link">Informasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Laporan</a>
                    <div class="dropdown-menu border-0 shadow rounded-3 mt-2">
                        <a href="{{ url('/laporan-tahunan') }}" class="dropdown-item">Tahunan</a>
                        <a href="{{ url('/laporan-keberlanjutan') }}" class="dropdown-item">Keberlanjutan</a>
                        <a href="{{ url('/laporan') }}" class="dropdown-item">Publikasi</a>
                        <a href="{{ url('/laporan-gcg') }}" class="dropdown-item">Tata kelola/GCG</a>
                        <a href="{{ url('/laporan-pelayanan-kons') }}" class="dropdown-item">Pelayanan-Kons</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/bantuan') }}" class="nav-link">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('karir') }}" class="nav-link">Karier</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('wbs2') }}" class="nav-link">WBS</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<style>

.navbar-nav .nav-link {
    color: #333;
    padding: 8px 15px;
    transition: all 0.3s ease-in-out;
    border-radius: 6px;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: #0d6efd;
    background-color: #f0f2f5;
}

.dropdown-menu {
    min-width: 200px;
    transition: 0.2s ease;
    border-radius: 10px;
    padding: 10px 0;
}

.dropdown-item {
    padding: 10px 20px;
    font-size: 0.95rem;
    transition: background-color 0.2s ease-in-out;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #0d6efd;
}

.navbar-brand img {
    transition: transform 0.3s ease-in-out;
}
.navbar-brand img:hover {
    transform: scale(1.05);
}

</style>
