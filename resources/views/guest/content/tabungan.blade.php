@extends('guest.partials.layout')

@section('title', 'Tabungan')

@section('content')
<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    table {
        width: 80%;
        max-width: 800px;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #12264b;
        color: white;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    td:nth-child(1),
    td:nth-child(5) {
        font-weight: bold;
    }

    td:nth-child(4) {
        color: #12264b;
        font-weight: bold;
    }

    .container {
        display: flex;
        align-items: flex-start;
        padding-right: 100px;
        padding-left: 100px;
        max-width: none;
        max-height: none;
    }

    .panel-header {
        cursor: pointer;
        background: #12264b;
        backdrop-filter: blur(10px);
        color: white;
        padding: 15px;
        border-radius: 10px;
        text-align: center;
        width: 300px;
        margin-bottom: 10px;
        transition: all 0.3s ease-in-out;
        font-weight: bold;
        font-size: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .panel-header::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 10%, transparent 80%);
        transform: translate(-50%, -50%) scale(0);
        transition: transform 0.5s ease-out;
    }

    .panel-header:hover {
        background: #12264b;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .panel-content {
        display: none;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.5s ease-in-out;
    }

    .sidebar {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<!--Cover -->

<div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width: 100%; height: 310px;object-fit: cover;
            object-position: 15% 50%; filter: brightness(65%);" src="{{asset('assetGuest/img/Tabungan.png')}}"
                class="card-img img-fluid" alt="...">
            <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                <h1 class="card-title text-white">TABUNGAN</h1>
                <p class="card-text">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                    pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                <p class="card-text">Tabungan Cerdik merupakan tabungan Cermat untuk Pendidik dan Tabungan Pegawai
                    merupakan tabungan untuk para pegawai.</p>
            </div>
        </div>
    </div>
</div>

<div class="text-justify my-5">
    <div class="container">
        <div class="sidebar">
            <div class="panel-header" onclick="togglePanel('panelContent1')">Tabungan Simpel (Simpanan Pelajar)</div>
            <div class="panel-header" onclick="togglePanel('panelContent2')">Tabungan Tapis (Tabungan Produktif dan
                Sejahtera)
            </div>
            <div class="panel-header" onclick="togglePanel('panelContent3')">Tabungan Pegawai</div>
            <div class="panel-header" onclick="togglePanel('panelContent4')">Tabungan Cerdik</div>
        </div>
        <div class="content">

            <!-- TABUNGAN SIMPEL -->
            <div class="panel-content" id="panelContent1">
                <h5 class="text-center mb-3">TABUNGAN SIMPEL (SIMPANAN PELAJAR)</h5>

                <p>
                    Tabungan SIMPEL adalah tabungan khusus bagi pelajar tingkat SD, SMP, dan SMA
                    sebagai bentuk mendorong budaya gemar menabung sejak dini.
                </p>

                <h6 class="fw-bold">Persyaratan</h6>
                <ul>
                    <li>Fotokopi KTP orang tua yang masih berlaku</li>
                    <li>Fotokopi Kartu Keluarga orang tua</li>
                    <li>Mengisi formulir aplikasi pembukaan rekening SIMPEL</li>
                    <li>Mengisi formulir slip penyetoran SIMPEL</li>
                </ul>

                <h6 class="fw-bold">Ketentuan</h6>
                <ul class="list-unstyled">
                    <li><strong>Setoran Awal:</strong> Rp5.000,-</li>
                    <li><strong>Setoran Selanjutnya:</strong> Minimal Rp1.000,-</li>
                    <li><strong>Saldo Minimal:</strong> Rp5.000,-</li>
                    <li><strong>Biaya Administrasi:</strong> Gratis</li>
                </ul>

                <h6 class="fw-bold">Keunggulan</h6>
                <ul>
                    <li>Suku bunga 0,5% per tahun</li>
                    <li>Dijamin oleh Lembaga Penjamin Simpanan (LPS)</li>
                    <li>Pencatatan transaksi transparan</li>
                    <li>Penarikan tabungan mudah</li>
                </ul>

                <h6 class="fw-bold">Manfaat</h6>
                <ul>
                    <li>Mendorong budaya menabung sejak dini</li>
                    <li>Edukasi pengelolaan keuangan</li>
                    <li>Membangun kemandirian finansial</li>
                </ul>
            </div>

            <!-- TABUNGAN TAPIS -->
            <div class="panel-content" id="panelContent2">
                <h5 class="text-center mb-3">TABUNGAN TAPIS<br>(TABUNGAN PRODUKTIF DAN SEJAHTERA)</h5>

                <p>
                    Tabungan TAPIS adalah produk tabungan yang diperuntukkan bagi masyarakat umum,
                    baik perorangan maupun badan usaha.
                </p>

                <h6 class="fw-bold">Persyaratan Perorangan</h6>
                <ul>
                    <li>Fotokopi KTP (WNI) yang masih berlaku</li>
                    <li>Fotokopi NPWP (jika ada)</li>
                    <li>Mengisi formulir aplikasi pembukaan rekening</li>
                    <li>Mengisi formulir slip penyetoran</li>
                </ul>

                <h6 class="fw-bold">Persyaratan Badan Usaha</h6>
                <ul>
                    <li>Akta pendirian dan akta perubahan terakhir</li>
                    <li>SIUP, NIB, NPWP, dan dokumen pendukung lainnya</li>
                    <li>KTP dan NPWP pengurus yang masih berlaku</li>
                    <li>Mengisi formulir aplikasi pembukaan rekening</li>
                    <li>Mengisi formulir slip penyetoran</li>
                </ul>

                <h6 class="fw-bold">Ketentuan</h6>
                <ul class="list-unstyled">
                    <li><strong>Setoran Awal:</strong> Rp50.000,-</li>
                    <li><strong>Setoran Selanjutnya:</strong> Minimal Rp10.000,-</li>
                    <li><strong>Biaya Administrasi:</strong> Rp5.000,- / bulan</li>
                </ul>

                <h6 class="fw-bold">Keunggulan</h6>
                <ul>
                    <li>Suku bunga 1% per tahun</li>
                    <li>Dijamin oleh Lembaga Penjamin Simpanan (LPS)</li>
                    <li>Pencatatan transaksi transparan</li>
                    <li>Penarikan tabungan mudah</li>
                </ul>

                <h6 class="fw-bold">Manfaat</h6>
                <ul>
                    <li>Menyimpan dana dengan aman</li>
                    <li>Memudahkan pengelolaan keuangan</li>
                    <li>Dapat digunakan untuk berbagai kebutuhan</li>
                    <li>Mendukung perencanaan keuangan jangka pendek dan panjang</li>
                </ul>
            </div>

            <!-- TABUNGAN PEGAWAI -->
            <div class="panel-content" id="panelContent3">
                <h5 class="text-center mb-3">TABUNGAN PEGAWAI</h5>

                <p>
                    Tabungan Pegawai merupakan produk Tabungan TAPIS yang dikhususkan
                    bagi pegawai PNS maupun tenaga honorer.
                </p>

                <h6 class="fw-bold">Persyaratan</h6>
                <ul>
                    <li>Fotokopi KTP (WNI) yang masih berlaku</li>
                    <li>Fotokopi NPWP (jika ada)</li>
                    <li>Mengisi formulir aplikasi pembukaan rekening</li>
                    <li>Mengisi formulir slip penyetoran</li>
                </ul>

                <h6 class="fw-bold">Ketentuan</h6>
                <ul class="list-unstyled">
                    <li><strong>Setoran Awal:</strong> Rp100.000,-</li>
                    <li><strong>Setoran Selanjutnya:</strong> Minimal Rp100.000,-</li>
                    <li><strong>Saldo Minimal:</strong> Rp50.000,-</li>
                    <li><strong>Biaya Administrasi:</strong> Rp5.000,- / bulan</li>
                </ul>

                <h6 class="fw-bold">Keunggulan</h6>
                <ul>
                    <li>Suku bunga 1% per tahun</li>
                    <li>Dijamin oleh Lembaga Penjamin Simpanan (LPS)</li>
                    <li>Pencatatan transaksi transparan</li>
                    <li>Penarikan tabungan mudah</li>
                </ul>

                <h6 class="fw-bold">Manfaat</h6>
                <ul>
                    <li>Menyimpan dana dengan aman</li>
                    <li>Memudahkan pengelolaan keuangan</li>
                    <li>Dapat digunakan untuk berbagai kebutuhan</li>
                    <li>Mendukung perencanaan keuangan jangka pendek dan panjang</li>
                </ul>
            </div>

            <!-- TABUNGAN CERDIK -->
            <div class="panel-content" id="panelContent4">
                <h5 class="text-center mb-3">TABUNGAN CERDIK</h5>

                <p>
                    Tabungan CERDIK merupakan produk Tabungan TAPIS yang dikhususkan
                    bagi guru PNS maupun tenaga honorer.
                </p>

                <h6 class="fw-bold">Persyaratan</h6>
                <ul>
                    <li>Fotokopi KTP (WNI) yang masih berlaku</li>
                    <li>Fotokopi NPWP (jika ada)</li>
                    <li>Mengisi formulir aplikasi pembukaan rekening</li>
                    <li>Mengisi formulir slip penyetoran</li>
                </ul>

                <h6 class="fw-bold">Ketentuan</h6>
                <ul class="list-unstyled">
                    <li><strong>Setoran Awal:</strong> Rp50.000,-</li>
                    <li><strong>Setoran Selanjutnya:</strong> Minimal Rp10.000,-</li>
                    <li><strong>Saldo Minimal:</strong> Rp50.000,-</li>
                    <li><strong>Biaya Administrasi:</strong> Rp5.000,- / bulan</li>
                </ul>

                <h6 class="fw-bold">Keunggulan</h6>
                <ul>
                    <li>Suku bunga 1% per tahun</li>
                    <li>Dijamin oleh Lembaga Penjamin Simpanan (LPS)</li>
                    <li>Pencatatan transaksi transparan</li>
                    <li>Penarikan tabungan mudah</li>
                </ul>

                <h6 class="fw-bold">Manfaat</h6>
                <ul>
                    <li>Menyimpan dana dengan aman</li>
                    <li>Memudahkan pengelolaan keuangan</li>
                    <li>Dapat digunakan untuk berbagai kebutuhan</li>
                    <li>Mendukung perencanaan keuangan jangka pendek dan panjang</li>
                </ul>
            </div>

        </div>
    </div>
</div>

<script>
    function togglePanel(panelId) {
        var panels = document.querySelectorAll('.panel-content');
        panels.forEach(panel => panel.style.display = 'none');
        document.getElementById(panelId).style.display = 'block';
    }
    // Tampilkan panelContent1 saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("panelContent1").style.display = "block";
    });
</script>
@endsection