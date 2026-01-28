@extends('guest.partials.layout')

@section('title', 'Kredit Konsumer')

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

<div class="bg-waway-red text-center py-3">
    <h3 style="color: white;">Kredit Konsumer </h3>
</div>

<!-- paragraf -->
<div class="text-center my-5">
    <h5>Kredit Konsumer PT BPR WAWAY LAMPUNG</h5>

    <div class="text-justify my-5">
        <div class="container">
            <div class="sidebar">
                <div class="panel-header" onclick="togglePanel('panelContent1')">
                    Kredit Pegawai (PNS, BUMD, BUMN, DPRD)
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent2')">
                    Kredit Pegawai Pemerintah Dengan Perjanjian Kerja (PPPK)
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent3')">
                    Kredit Pegawai Pemerintah Dengan Perjanjian Kerja (PPPK) Paruh Waktu
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent4')">
                    Kredit Tunjangan Kinerja Pegawai Negeri Sipil
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent5')">
                    Kredit Back To Back (B2B)
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent6')">
                    Kredit Prapensiun Pegawai Negeri Sipil
                </div>
                <div class="panel-header" onclick="togglePanel('panelContent7')">
                    Kredit Pensiun Pegawai Negeri Sipil
                </div>
            </div>


            <div class="content">
                <div class="panel-content" id="panelContent1">
                    <h5 class="text-center fw-bold mb-3">
                        KREDIT PEGAWAI (PNS,BUMD,BUMN,DPRD)
                    </h5>

                    <h6 class="fw-bold">DESPKRIPSI PRODUK</h6>
                    <p>
                        FASILITAS UNTUK MEMBIAYAI KONSUMSI PEGAWAI
                        (PNS,BUMD,BUMN,DPRD)
                    </p>

                    <h6 class="fw-bold">INFORMASI KREDIT</h6>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 35%;">TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Rp.5.000.000,- SD Rp.500.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>12 Bulan SD 240 Bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK PEGAWAI</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>7,45% SD 8,90% PERTAHUN</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>FLAT</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>


                    <h6 class="fw-bold">PERSYARATAN</h6>
                    <p class="fw-bold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>
                            Telah memiliki SK pengangkatan sebagai CPNS / PNS 100%.
                            Usia calon debitur tidak lebih dari 2 bulan sebelum masa pensiun
                            bagi PNS,BUMD,BUMN
                        </li>
                        <li>
                            Telah memiliki SK pengangkatan sebagai Anggota Dewan,
                            jangka waktu tidak lebih dari masa SK sebagai Anggota Dewan.
                        </li>
                        <li>
                            Gaji dibayarkan melalui payroll bank yang telah bekerjasama
                            dengan Bank Waway atau telah bekerjasama dengan bendahara instansi debitur.
                        </li>
                    </ol>

                    <p class="fw-bold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko permohonan kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi NPWP</li>
                        <li>Rekening Koran Gaji 3 Bulan Terakhir</li>
                        <li>NCR/Daftar Gaji Bulan Berjalan (Legalisir)</li>
                        <li>KARPEG</li>
                        <li>TASPEN</li>
                        <li>SK CPNS 80%</li>
                        <li>SK PNS 100%</li>
                        <li>SK Pangkat/Golongan Terakhir</li>
                        <li>Surat Rekomendasi Pimpinan Yang Berwenang</li>
                        <li>Rekening Tabungan Bank Waway</li>
                    </ol>
                </div>
                <div class="panel-content" id="panelContent2">
                    <h5 class="text-center fw-bold mb-3">
                        KREDIT PEGAWAI PEMERINTAH DENGAN PERJANJIAN KERJA (PPPK)
                    </h5>

                    <h6 class="fw-bold">DESPKRIPSI PRODUK</h6>
                    <p>
                        FASILITAS UNTUK MEMBIAYAI KONSUMSI PEGAWAI PPPK
                    </p>

                    <h6 class="fw-bold">INFORMASI KREDIT</h6>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width:35%;">TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Rp.5.000.000,- SD Rp.150.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>60 bulan atau 1 bulan sebelum berakhirnya masa kerja sesuai SK PPPK</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK PPPK dan Ijazah sesuai klasifikasi pendidikan saat pendaftaran PPPK</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>11.50 % efektif anuitas pertahun</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>EFFEKTIF ANUITAS</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>0.25% dari Plafond Kredit</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>


                    <h6 class="fw-bold">PERSYARATAN</h6>
                    <p class="fw-bold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>
                            Telah memiliki SK pengangkatan sebagai PPPK.
                            Usia calon debitur tidak lebih dari 1 bulan sebelum masa SK berakhir bagi PPPK.
                        </li>
                        <li>
                            Gaji dibayarkan melalui payroll bank yang telah bekerjasama dengan Bank Waway
                            atau telah bekerjasama dengan bendahara instansi debitur.
                        </li>
                    </ol>

                    <p class="fw-bold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko Permohonan Kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi NPWP</li>
                        <li>Rekening Koran Gaji 3 Bulan Terakhir</li>
                        <li>NCR/Daftar Gaji Bulan Berjalan</li>
                        <li>SK PPPK Asli</li>
                        <li>Ijazah Asli sesuai klasifikasi pendidikan saat pendaftaran PPPK</li>
                        <li>Rekening Tabungan Bank Waway</li>
                    </ol>
                </div>
                <div id="panelContent3" class="panel-content collapse">
                    <h5 class="fw-bold mb-3">
                        KREDIT PEGAWAI PEMERINTAH DENGAN PERJANJIAN KERJA (PPPK) PARUH WAKTU
                    </h5>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>DESPKRIPSI PRODUK</th>
                                <td>FASILITAS UNTUK MEMBIAYAI KONSUMSI PEGAWAI PPPK PARUH WAKTU</td>
                            </tr>
                            <tr>
                                <th>TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Maksimal Rp.21.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>12 bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK PPPK Paruh Waktu dan Ijazah pendidikan saat pendaftaran PPPK</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>20.90 % anuitas pertahun</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>ANUITAS</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>Rp.150.000,-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">PERSYARATAN</h6>

                    <p class="fw-semibold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>Telah memiliki SK pengangkatan sebagai PPPK Paruh Waktu. Usia calon debitur tidak lebih dari
                            1 bulan sebelum masa SK berakhir bagi PPPK Paruh Waktu.</li>
                        <li>Gaji dibayarkan melalui payroll bank yang telah bekerjasama dengan Bank Waway atau telah
                            bekerjasama dengan bendahara instansi debitur.</li>
                    </ol>

                    <p class="fw-semibold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko Permohonan Kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Rekening Koran Gaji 3 Bulan Terakhir</li>
                        <li>Melampirkan Status Usulan PPPK Paruh Waktu pada aplikasi MOLA</li>
                        <li>Melampirkan Status Telah mengisi daftar Riwayat Hidup</li>
                        <li>SK PPPK Paruh Waktu Asli</li>
                        <li>Ijazah Asli sesuai klasifikasi pendidikan saat pendaftaran PPPK</li>
                        <li>Daftar Absensi 1 bulan terakhir</li>
                        <li>Daftar Gaji bulan terakhir</li>
                        <li>Rekening Tabungan Bank Waway</li>
                        <li>Surat Rekomendasi Pimpinan Yang Berwenang</li>
                    </ol>
                </div>
                <div id="panelContent4" class="panel-content collapse">
                    <h5 class="fw-bold mb-3">
                        KREDIT TUNJANGAN KINERJA PEGAWAI NEGERI SIPIL
                    </h5>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>DESPKRIPSI PRODUK</th>
                                <td>FASILITAS UNTUK MEMBIAYAI KONSUMSI PNS</td>
                            </tr>
                            <tr>
                                <th>TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Rp.5.000.000,- SD Rp.200.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>Maksimal 24 bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK Jabatan Terakhir/ SK Golongan terakhir</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>12.00 % flat pertahun</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>FLAT</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>0.25% dari Plafond Kredit</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">PERSYARATAN</h6>

                    <p class="fw-semibold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>Pegawai Negeri Sipil (PNS) penerima tukin yang instansinya sudah bekerja sama dengan Bank
                            Waway untik pemotongan angsuran atau pemotongan angsuran dilakukan melalui kerja sama dengan
                            Bank Lampung.</li>
                        <li>Tidak memiliki fasilitas sejenis di Bank Lain (pembayaran apinjaman bersumber dari tunjangan
                            kinerja).</li>
                        <li>Apabila Debitur memiliki fasilitas kredit ditempat lain selain kredit tukin, wajib dalam
                            kondisi lancar (kolektiblitas 1),namun kolektibilitas 2 dapat dijalankan dengan melunasi
                            tungggakan kredit.</li>
                    </ol>

                    <p class="fw-semibold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko Permohonan Kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi NPWP</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Rekening Koran Tunjangan Kinerja 3 Bulan Terakhir</li>
                        <li>NCR/Daftar Tunjangan Kinerja Bulan Berjalan</li>
                        <li>SK Jabatan Terakhir/ SK Golongan terakhir</li>
                        <li>Rekening tabungan Bank Waway</li>
                    </ol>
                </div>
                <div id="panelContent5" class="panel-content collapse">
                    <h5 class="fw-bold mb-3">
                        KREDIT Back to Back (B2B)
                    </h5>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>DESPKRIPSI PRODUK</th>
                                <td>Fasilitas untuk membiayai debitur atau calon debitur dengan menggunakan simpanan
                                    deposito di BPR Waway Lampung sebagai agunan.</td>
                            </tr>
                            <tr>
                                <th>TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Maksimal 90% dari total nominal bilyet deposito</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>1 Bulan SD 60 Bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>Bilyet Deposito yang ada pada PT BPR Waway Lampung An.debitur sendiri</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>
                                    1. Untuk pinjaman B2B Flat : Suku bunga atas deposito yang dijaminkan ditambah
                                    spread sebesar 2% (dua persen)
                                    <br>
                                    2. Untuk pinjaman B2B Sliding : Suku bunga atas deposito yang dijaminkan ditambah
                                    spread sebesar 3% (tiga persen)
                                </td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>FLAT dan Efektif</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">PERSYARATAN</h6>

                    <p class="fw-semibold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>Debitur atau calon debitur memiliki simpanan deposito pada PT BPR Waway Lampung an.pribadi
                            (diri sendiri)</li>
                    </ol>

                    <p class="fw-semibold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko permohonan kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi NPWP</li>
                        <li>Asli Bilyet Deposito</li>
                        <li>Memberikan surat kuasa pencairan deposito</li>
                    </ol>
                </div>
                <div id="panelContent6" class="panel-content collapse">
                    <h5 class="fw-bold mb-3">
                        KREDIT PRAPENSIUN PEGAWAI NEGERI SIPIL
                    </h5>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>DESPKRIPSI PRODUK</th>
                                <td>FASILITAS UNTUK MEMBIAYAI KONSUMSI</td>
                            </tr>
                            <tr>
                                <th>TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Rp.5.000.000,- SD Rp.500.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>12 Bulan SD 240 Bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK PEGAWAI</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>17.10% ANUITAS PERTAHUN</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>ANUITAS</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>Rp.1.300.000,-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">PERSYARATAN</h6>

                    <p class="fw-semibold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>Pegawai Negeri Sipil maksimal 10 (sepuluh) tahun sebelum tanggal pensiun dan usia maksimal
                            pada saat kredit jatuh tempo yaitu 75 (tujuh puluh lima)tahun atau sesuai ketentuan yang
                            dapat di cover asuransi.</li>
                        <li>Gaji dibayarkan melalui payroll bank yang telah bekerjasama dengan Bank Waway atau telah
                            bekerjasama dengan bendahara instansi debitur.</li>
                    </ol>

                    <p class="fw-semibold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko permohonan kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi NPWP</li>
                        <li>Fotokopi Buku Nikah/Akta cerai/Surat Kematian pasangan</li>
                        <li>Rekening Koran Gaji 3 Bulan Terakhir</li>
                        <li>NCR/Daftar Gaji Bulan Berjalan (Legalisir)</li>
                        <li>KARPEG</li>
                        <li>TASPEN</li>
                        <li>SK CPNS 80%</li>
                        <li>SK PNS 100%</li>
                        <li>SK Pangkat/Golongan Terakhir</li>
                        <li>Pas foto debitur</li>
                        <li>Pas Foto suami/Istri</li>
                        <li>Rekening Tabungan Bank Waway</li>
                    </ol>
                </div>
                <div id="panelContent7" class="panel-content collapse">
                    <h5 class="fw-bold mb-3">
                        KREDIT PENSIUN PEGAWAI NEGERI SIPIL
                    </h5>

                    <table class="table table-bordered text-dark">
                        <tbody>
                            <tr>
                                <th>DESPKRIPSI PRODUK</th>
                                <td>FASILITAS UNTUK MEMBIAYAI KONSUMSI PENSIUNAN PNS</td>
                            </tr>
                            <tr>
                                <th>TUJUAN KREDIT</th>
                                <td>KONSUMTIF</td>
                            </tr>
                            <tr>
                                <th>PLAFOND PINJAMAN</th>
                                <td>Rp.5.000.000,- SD Rp.500.000.000,-</td>
                            </tr>
                            <tr>
                                <th>JANGKA WAKTU</th>
                                <td>12 Bulan SD 240 Bulan</td>
                            </tr>
                            <tr>
                                <th>JENIS AGUNAN</th>
                                <td>SK Pensiun</td>
                            </tr>
                            <tr>
                                <th>SUKU BUNGA</th>
                                <td>17.10% ANUITAS PERTAHUN</td>
                            </tr>
                            <tr>
                                <th>JENIS BUNGA</th>
                                <td>ANUITAS</td>
                            </tr>
                            <tr>
                                <th>BIAYA PROVISI</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ADMINSTRASI</th>
                                <td>Rp.1.300.000,-</td>
                            </tr>
                            <tr>
                                <th>BIAYA ASURANSI JIWA</th>
                                <td>SESUAI DENGAN KETENTUAN ASURANSI YANG BERLAKU</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="fw-bold mt-4">PERSYARATAN</h6>

                    <p class="fw-semibold mb-1">Kriteria Debitur :</p>
                    <ol>
                        <li>Pensiunan Pegawai Negeri Sipil dan usia maksimal pada saat kredit jatuh tempo yaitu 75
                            (tujuh puluh lima)tahun atau sesuai ketentuan yang dapat di cover asuransi.</li>
                        <li>Gaji dibayarkan melalui payroll bank yang telah bekerjasama dengan Bank Waway.</li>
                    </ol>

                    <p class="fw-semibold mb-1">Persyaratan yang dibutuhkan :</p>
                    <ol>
                        <li>Mengisi Blangko permohonan kredit</li>
                        <li>Fotokopi e-KTP Pemohon</li>
                        <li>Fotokopi e-KTP Istri / Suami / Keluarga (Jika status single)</li>
                        <li>Fotokopi Kartu Keluarga</li>
                        <li>Fotokopi NPWP</li>
                        <li>Fotokopi Buku Nikah/Akta cerai/Surat Kematian pasangan</li>
                        <li>Rekening Koran Gaji 3 Bulan Terakhir</li>
                        <li>Slip Gaji Bulan Berjalan yang dikeluarkan PT TASPEN</li>
                        <li>SK Pensiun</li>
                        <li>Pas foto debitur</li>
                        <li>Pas Foto suami/Istri</li>
                        <li>Rekening Tabungan Bank Waway</li>
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