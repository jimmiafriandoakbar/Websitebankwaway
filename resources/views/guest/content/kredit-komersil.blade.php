@extends('guest.partials.layout')

@section('title', 'Kredit Komersil')

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
        color: dark;
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

<div class="text-center my-5">
    <h5>Kredit Komersil PT BPR WAWAY LAMPUNG</h5>

    <div class="text-justify my-5">
        <div class="container">
            <div class="sidebar">
                <div class="panel-header" onclick="togglePanel('panelContent1')">
                    Kredit Modal Kerja
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent2')">
                    Kredit Multiguna
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent3')">
                    Kredit PDRS Kredit Revolving DaN Non Revolving
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent4')">
                    Kredit Subsidi 0%
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent5')">
                    kredit UMKM
                </div>
            </div>

            <div class="content">
                <div class="panel-content" id="panelContent1">
                    <h5 class="fw-bold text-center mb-3">Kredit Modal Kerja</h5>

                    <p>
                        Kredit Modal Kerja – Linkage Program merupakan fasilitas pinjaman yang diberikan kepada lembaga
                        keuangan
                        baik Bank maupun Non Bank dengan menggunakan 3 (tiga) pola pembiayaan yaitu executing,
                        chanelling,
                        dan joint financing.
                    </p>

                    <h6 class="fw-bold mt-3">Sifat Kredit :</h6>
                    <p><strong>a. Non Revolving</strong></p>
                    <p>
                        Pinjaman ditarik sekaligus pada saat pencairan dan pengembalian pinjaman dengan cara mengangsur
                        pokok
                        dan bunga setiap bulan sampai dengan pinjaman lunas
                    </p>

                    <p><strong>b. Revolving</strong></p>
                    <p>
                        Penarikan dan pengembalian pinjaman dapat dilakukan setiap saat selama fasilitas belum jatuh
                        tempo.
                        Angsuran bunga dibayar setiap bulan sesuai jumlah penarikan dan pengembalian pokok dapat
                        dilakukan
                        sekaligus pada saat fasilitas jatuh tempo
                    </p>

                    <h6 class="fw-bold mt-4">Ketentuan Umum</h6>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <td>Plafon Pinjaman</td>
                                <td>5.000.000 s/d BMPK BPR Waway</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu Pinjaman</td>
                                <td>12 bulan</td>
                            </tr>
                            <tr>
                                <td>Jenis Agunan</td>
                                <td>SHM atau SHGB</td>
                            </tr>
                            <tr>
                                <td>Suku Bunga</td>
                                <td>15 - 18 %</td>
                            </tr>
                            <tr>
                                <td>Jenis Bunga</td>
                                <td>Effektif per tahun</td>
                            </tr>
                            <tr>
                                <td>Biaya Provisi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya materai</td>
                                <td>Sesuai kebutuhan</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengikatan kredit & agunan</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Asuransi Jiwa</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">Persyaratan</h6>
                    <p class="fw-bold mb-1">Kriteria Debitur</p>
                    <ol>
                        <li>
                            Untuk perorangan Usia calon debitur minimal 21 tahun atau telah menikah untuk usia 18 tahun
                            keatas
                            dan maksimal Usia calon debitur 65 tahun setelah kredit selesai.
                        </li>
                        <li>
                            Untuk calon bentuk badan hukum, berarti Anggaran Dasar perseroan telah mendapat pengesahan
                            dari
                            Kementrian Hukum dan Hak Asasi Manusia dan didaftarkan di Pengadilan Negeri serta diumumkan
                            dalam
                            Berita Negara RI.
                        </li>
                    </ol>

                    <p class="fw-bold mt-3 mb-1">Persyaratan Dokumen</p>
                    <ol>
                        <li>Mengisi Aplikasi Permohonan Kredit</li>
                        <li>Fotocopy KTP pemohon (yang masih berlaku)</li>
                        <li>Fotocopy KTP suami/ istri pemohon (yang masih berlaku)</li>
                        <li>Fotocopy Kartu Keluarga</li>
                        <li>Fotocopy Akta Nikah/ Cerai</li>
                        <li>Fotocopy Ijin usaha (NIB)</li>
                        <li>Fotocopy NPWP</li>
                        <li>
                            Surat keterangan usaha dari RT/RW dan Surat keterangan Domisili dari Kelurahan setempat.
                        </li>
                        <li>
                            Dokumen Badan Usaha (Akta Pendirian dan perubahannya, izin-izin usaha/NIB/Surat Keterangan
                            Usaha,
                            NPWP Badan usaha, KTP Pengurus dan atau pemegang saham (Bagi Nasabah Badan Usaha)
                        </li>
                        <li>Fotocopy rekening koran atau tabungan 6 (enam) bulan terakhir</li>
                        <li>Fotocopy Jaminan</li>
                        <li>Fotocopy rekening listrik dan PBB</li>
                        <li>Fotocopy Laporan keuangan usaha atau Neraca Proforma</li>
                    </ol>
                </div>
                <div class="panel-content" id="panelContent2">
                    <h5 class="fw-bold text-center mb-3">Kredit Multiguna</h5>

                    <p>
                        Kredit MULTIGUNA adalah fasilitas kredit yang diberikan berbagai kebutuhan konsumtif harian dan
                        pengembangan usaha dengan jaminan berupa tanah dan rumah atau asset lainnya.
                    </p>

                    <p class="fw-bold">Tujuan Kredit :</p>
                    <p>untuk kebutuhan konsumtif</p>

                    <h6 class="fw-bold mt-3">Ketentuan Umum</h6>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <td>Plafon Pinjaman</td>
                                <td>5.000.000 s/d BMPK BPR Waway</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu Pinjaman</td>
                                <td>6 bulan s/d 5 tahun</td>
                            </tr>
                            <tr>
                                <td>Jenis Agunan</td>
                                <td>SHM atau SHGB</td>
                            </tr>
                            <tr>
                                <td>Suku Bunga</td>
                                <td>10 % flat s/d 12 % flat (tergantung jangka waktu)</td>
                            </tr>
                            <tr>
                                <td>Jenis Bunga</td>
                                <td>Flat/tahhun</td>
                            </tr>
                            <tr>
                                <td>Biaya Provisi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya materai</td>
                                <td>Sesuai kebutuhan</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengikatan kedit & agunan</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Asuransi Jiwa</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">Persyaratan</h6>

                    <p class="fw-bold mb-1">Kriteria Debitur</p>
                    <p>
                        Untuk perorangan Usia calon debitur minimal 21 tahun atau telah menikah untuk usia 18 tahun
                        keatas
                        dan maksimal Usia calon debitur 65 tahun setelah kredit selesai.
                    </p>

                    <p class="fw-bold mt-3 mb-1">Persyaratan Dokumen</p>
                    <ol>
                        <li>Fotocopy KTP Pemohon dan pasangan, Kartu Keluarga</li>
                        <li>Fotocopy Akta Nikah/Cerai/Kematian/Perwalian</li>
                        <li>Slip Gaji 3 bulan terakhir untuk pegawai</li>
                        <li>Fotocopy SK Pengangkatan dan Surat Keterangan Kerja dari perusahaan.</li>
                        <li>Rekening Koran tabungan 6 (enam ) bulan terakhir</li>
                        <li>Fotocopy surat ijin usaha.</li>
                        <li>Jaminan berupa SHM/SHGB</li>
                    </ol>
                </div>
                <div class="panel-content" id="panelContent3">
                    <h5 class="fw-bold text-center mb-3">Kredit PDRS Revolving dan Non Revolving</h5>

                    <p>
                        Tujuan Kredit PDRS adalah fasilitas kredit yang diberikan diberikan kepada debitur pengusaha
                        baik
                        perorangan maupun badan usaha yang berjalan lebih dari satu tahun untuk memenuhi kebutuhan modal
                        kerja yang bersifat khusus seperti untuk membiayai inventory, piutang atau proyek yang mana
                        pemakaian dana berdasarkan kebutuhan harian debitur dengan maksimal plafon yang telah disepakati
                        antara bank dan debitur.
                    </p>

                    <p class="fw-bold">Sifat Kredit :</p>

                    <p class="fw-bold mb-1">
                        1. Kredit PDRS (Pinjaman Dalam Rekening Simpanan) Revolving (Kode 38)
                    </p>
                    <p>
                        Adalah Fasilitas Kredit Modal Kerja jangka pendek yang penarikan fasilitas kreditnya dapat
                        dilakukan
                        sesuai kebutuhan dengan sistem sebagai berikut :
                    </p>
                    <ol type="a">
                        <li>Pembayaran Bunga bulanan Efisien dihitung dari jumlah dana yang digunakan atau ditarik bukan
                            dari seluruh plafond kredit</li>
                        <li>Pelunasan atau pembayaran pokok kredit dapat dilakukan secara sebagian atau seluruhnya kapan
                            saja selama masa berlaku fasilitas kredit</li>
                        <li>Pokok kredit yang sudah dibayarkan otomatis menjadi pagu kredit kembali yang dapat ditarik
                            sesuai kebutuhan selama jangka waktu kredit masih aktif</li>
                    </ol>

                    <p class="fw-bold mt-3 mb-1">
                        2. Kredit PDRS (Pinjaman Dalam Rekening Simpanan) Non Revolving (Kode 38A)
                    </p>
                    <p>
                        Adalah Fasilitas Kredit Modal Kerja jangka pendek yang penarikan fasilitas kreditnya dapat
                        dilakukan
                        sesuai kebutuhan dengan sistem sebagai berikut :
                    </p>
                    <ol type="a">
                        <li>Pembayaran Bunga bulanan Efisien dihitung dari jumlah dana yang digunakan atau ditarik bukan
                            dari seluruh plafond kredit</li>
                        <li>Pelunasan atau pembayaran pokok kredit dapat dilakukan secara sebagian atau seluruhnya kapan
                            saja selama masa berlaku fasilitas kredit</li>
                        <li>
                            Pokok kredit yang sudah dibayarkan tidak dapat menjadi pagu kredit kembali yang dapat
                            ditarik,
                            fasilitas kredit diberikan dengan disesuaikan oleh jenis dan karakteristik arus kas usaha
                            yang
                            dijalankan calon debitur
                        </li>
                    </ol>

                    <h6 class="fw-bold mt-4">Ketentuan Umum</h6>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <td>Plafon Pinjaman</td>
                                <td>5.000.000 s/d BMPK BPR Waway</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu Pinjaman</td>
                                <td>12 bulan</td>
                            </tr>
                            <tr>
                                <td>Jenis Agunan</td>
                                <td>SHM atau SHGB</td>
                            </tr>
                            <tr>
                                <td>Suku Bunga</td>
                                <td>15 - 18 %</td>
                            </tr>
                            <tr>
                                <td>Jenis Bunga</td>
                                <td>Effektif per tahun</td>
                            </tr>
                            <tr>
                                <td>Biaya Provisi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya materai</td>
                                <td>Sesuai kebutuhan</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengikatan kredit & agunan</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Asuransi Jiwa</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">Persyaratan</h6>

                    <p class="fw-bold mb-1">Kriteria Debitur</p>
                    <ol>
                        <li>
                            Untuk perorangan Usia calon debitur minimal 21 tahun atau telah menikah untuk usia 18 tahun
                            keatas dan maksimal Usia calon debitur 65 tahun setelah kredit selesai.
                        </li>
                        <li>
                            Untuk calon bentuk badan hukum, berarti Anggaran Dasar perseroan telah mendapat pengesahan
                            dari
                            Kementrian Hukum dan Hak Asasi Manusia dan didaftarkan di Pengadilan Negeri serta diumumkan
                            dalam
                            Berita Negara RI.
                        </li>
                    </ol>

                    <p class="fw-bold mt-3 mb-1">Persyaratan Dokumen</p>
                    <ol>
                        <li>Mengisi Aplikasi Permohonan Kredit</li>
                        <li>Fotocopy KTP pemohon (yang masih berlaku)</li>
                        <li>Fotocopy KTP suami/ istri pemohon (yang masih berlaku)</li>
                        <li>Fotocopy Kartu Keluarga</li>
                        <li>Fotocopy Akta Nikah/ Cerai</li>
                        <li>Fotocopy Ijin usaha (NIB)</li>
                        <li>Fotocopy NPWP</li>
                        <li>Surat keterangan usaha dari RT/RW dan Surat keterangan Domisili dari Kelurahan setempat.
                        </li>
                        <li>
                            Dokumen Badan Usaha (Akta Pendirian dan perubahannya, izin-izin usaha/NIB/Surat Keterangan
                            Usaha,
                            NPWP Badan usaha, KTP Pengurus dan atau pemegang saham (Bagi Nasabah Badan Usaha)
                        </li>
                        <li>Fotocopy rekening koran atau tabungan 6 (enam) bulan terakhir</li>
                        <li>Fotocopy Jaminan</li>
                        <li>Fotocopy rekening listrik dan PBB</li>
                        <li>Fotocopy Laporan keuangan usaha atau Neraca Proforma</li>
                    </ol>
                </div>
                <div class="panel-content" id="panelContent4">
                    <h5 class="fw-bold text-center mb-3">Kredit UMKM Siger</h5>

                    <p>
                        Kredit UMKM Siger adalah Kredit Program Pemerintah Daerah Kota Bandar Lampung yang bekerja sama
                        dengan Bank Waway dalam pemberian pembiayaan tambahan modal usaha kepada usaha mikro produktif
                        dengan beban bunga yang timbul dari penyaluran fasilitas kredit yang keseluruhannya ditanggung
                        oleh Pemerintah Daerah melalui Anggaran Pendapatan dan Belanja Daerah (APBD) Kota Bandar Lampung
                    </p>

                    <p class="fw-bold mb-1">Tujuan Kredit :</p>
                    <p>
                        Bekerjasama dengan OPD Pemerintah Kota Bandar Lampung dalam teknis penyaluran kreditnya yaitu
                        untuk Dinas Perdagangan, Dinas Perindustrian, Dinas Koperasi &amp; UKM, Dinas Pertanian,
                        Dinas Kelautan dan Perikanan, Dinas Pariwisata untuk mendukung kebutuhan modal kerja maupun
                        investasi penunjang usaha para penggiat UMKM di Kota Bandar Lampung
                    </p>

                    <h6 class="fw-bold mt-4">Ketentuan Umum</h6>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <td>Plafon Pinjaman</td>
                                <td>Maks Rp 50.000.000,-</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu Pinjaman</td>
                                <td>Maks 36 bulan</td>
                            </tr>
                            <tr>
                                <td>Jenis Agunan</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Suku Bunga</td>
                                <td>6 % flat per tahun</td>
                            </tr>
                            <tr>
                                <td>Jenis Bunga</td>
                                <td>Flat/tahun</td>
                            </tr>
                            <tr>
                                <td>Biaya Provisi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya materai</td>
                                <td>Sesuai kebutuhan</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengikatan kedit &amp; agunan</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Asuransi Jiwa</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">Persyaratan</h6>

                    <p class="fw-bold mb-1">Kriteria Debitur</p>
                    <ol>
                        <li>
                            Untuk perorangan Usia calon debitur minimal 21 tahun atau telah menikah untuk usia 18 tahun
                            keatas dan maksimal Usia calon debitur 65 tahun setelah kredit selesai.
                        </li>
                        <li>
                            Berdomisili tempat tinggal dan usaha di Kota Bandar Lampung sesuai KTP Pemohon
                        </li>
                        <li>
                            Pemohon bukan termasuk dalam kategori ASN, TNI dan POLRI
                        </li>
                    </ol>

                    <p class="fw-bold mt-3 mb-1">Persyaratan Dokumen</p>
                    <ol>
                        <li>Fotocopy E KTP Pemohon</li>
                        <li>Fotocopy E KTP Pasangan Pemohon</li>
                        <li>Fotocopy Surat/Akte Nikah Pemohon</li>
                        <li>Fotocopy Kartu Keluarga (KK) Pemohon</li>
                        <li>
                            Surat Keterangan usaha (SKU) dari Kelurahan setempat dan atau Nomor Induk Berusaha (NIB)
                        </li>
                        <li>
                            Dokumentasi Transaksi Usaha (Nota Pembelian, Nota Penjualan dan atau catatan usaha)
                        </li>
                        <li>
                            Catatan Hutang Piutang (jika ada)
                        </li>
                    </ol>
                </div>
                <div class="panel-content" id="panelContent5">
                    <h5 class="fw-bold text-center mb-3">Kredit UMKM</h5>

                    <p>
                        Kredit UMKM adalah fasilitas kredit yang diberikan kepada pelaku usaha kecil atau perorangan
                        yang memiliki usaha produktif yang sudah berjalan minimal 1 tahun
                    </p>

                    <p class="fw-bold mb-1">Tujuan Kredit :</p>
                    <p>
                        untuk kebutuhan modal kerja maupun investasi dalam bentuk pinjaman angsuran (pokok + bunga)
                    </p>

                    <h6 class="fw-bold mt-4">Ketentuan Umum</h6>
                    <table class="table table-bordered table-sm">
                        <tbody>
                            <tr>
                                <td>Plafon Pinjaman</td>
                                <td>5.000.000 s/d BMPK BPR Waway</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu Pinjaman</td>
                                <td>6 bulan s/d 5 tahun</td>
                            </tr>
                            <tr>
                                <td>Jenis Agunan</td>
                                <td>SHM atau SHGB</td>
                            </tr>
                            <tr>
                                <td>Suku Bunga</td>
                                <td>
                                    - 10 % = sd Jw 2 tahun<br>
                                    - 11 % = &gt; 2 tahun sd 4 tahun<br>
                                    - 12 % = &gt; 4 tahun sd 5 tahun
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Bunga</td>
                                <td>Flat/tahun</td>
                            </tr>
                            <tr>
                                <td>Biaya Provisi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Administrasi</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya materai</td>
                                <td>Sesuai kebutuhan</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengikatan kedit &amp; agunan</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                            <tr>
                                <td>Biaya Asuransi Jiwa</td>
                                <td>Sesuai ketentuan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">Persyaratan</h6>

                    <p class="fw-bold mb-1">Kriteria Debitur</p>
                    <ol>
                        <li>
                            Untuk perorangan Usia calon debitur minimal 21 tahun atau telah menikah untuk usia 18 tahun
                            keatas dan maksimal Usia calon debitur 65 tahun setelah kredit selesai.
                        </li>
                        <li>
                            Untuk calon bentuk badan hukum, berarti Anggaran Dasar perseroan telah mendapat pengesahan
                            dari Kementrian Hukum dan Hak Azazi Manusia dan didaftarkan di Pengadilan Negeri serta
                            diumumkan dalam Berita Negara RI.
                        </li>
                    </ol>

                    <p class="fw-bold mt-3 mb-1">Persyaratan Dokumen</p>
                    <ol>
                        <li>Mengisi Aplikasi Permohonan Kredit</li>
                        <li>Fotocopy KTP pemohon (yang masih berlaku)</li>
                        <li>Fotocopy KTP suami/ istri pemohon (yang masih berlaku)</li>
                        <li>Fotocopy Kartu Keluarga</li>
                        <li>Fotocopy Akta Nikah/ Cerai</li>
                        <li>Fotocopy Ijin usaha (NIB)</li>
                        <li>Fotocopy NPWP</li>
                        <li>
                            Surat keterangan usaha dari RT/RW dan Surat keterangan Domisili dari Kelurahan setempat.
                        </li>
                        <li>
                            Dokumen Badan Usaha (Akta Pendirian dan perubahannya, izin-izin usaha/NIB/Surat Keterangan
                            Usaha, NPWP Badan usaha, KTP Pengurus dan atau pemegang saham (Bagi Nasabah Badan Usaha)
                        </li>
                        <li>Fotocopy rekening koran atau tabungan 6 (enam) bulan terakhir</li>
                        <li>Fotocopy Jaminan</li>
                        <li>Fotocopy rekening listrik dan PBB</li>
                        <li>Fotocopy Laporan keuangan usaha atau Neraca Proforma</li>
                    </ol>
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
