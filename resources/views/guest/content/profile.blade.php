@extends('guest.partials.layout')

@section('title', 'Profile')

@section('content')

<!--Cover -->
<div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width: 100%; height: 30%;object-fit: cover;
            object-position: 50% 50%; filter: brightness(65%);"
            src="{{ asset('assetGuest/img/cover/PROFILE.png') }}" class="card-img my-2" alt="...">

            <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                <h1 class="card-title text-white">Tentang Kami</h1>
                <p class="card-text">Kami memiliki perjalanan yang cukup baik dalam mengelola keuangan UMKM.</p>
                <p class="card-text">Bank Waway menetapkan nilai-nilai yang harus selalu menjadi
                    dasar perilaku sehari-hari bagi setiap pegawai.
                </p>
            </div>
        </div>
    </div>
</div>
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

<!-- paragraf -->
<div class="text-justify my-5">
    <div class="container">
        <div class="sidebar">
            <div class="panel-header" onclick="togglePanel('panelContent1')">Pendirian Perusahaan</div>
            <div class="panel-header" onclick="togglePanel('panelContent2')">Tempat Kedudukan</div>
            <div class="panel-header" onclick="togglePanel('panelContent3')">Maksud dan Tujuan Serta Kegiatan Usaha
            </div>
            <div class="panel-header" onclick="togglePanel('panelContent4')">Perijinan dan Legalitas Usaha</div>
            <div class="panel-header" onclick="togglePanel('panelContent5')">Modal</div>
            <div class="panel-header" onclick="togglePanel('panelContent6')">Susunan Pengurus</div>
            <div class="panel-header" onclick="togglePanel('panelContent7')">Visi & Misi</div>
            <div class="panel-header" onclick="togglePanel('panelContent8')">Prestasi & Penghargaan</div>
            <div class="panel-header" onclick="togglePanel('panelContent9')">Pengurus</div>
        </div>
        <div class="content">
            <div class="panel-content" id="panelContent1">
                <h5 class="text-center">PENDIRIAN PERUSAHAAN</h5>
                <p>
                    PT BPR WAWAY LAMPUNG (Perseroda) pertama kali didirikan bernama PD Bank Pasar Daerah Tingkat II
                    Bandar Lampung
                    berdasarkan Keputusan Walikotamadya Kepala Daerah Tingkat II Tanjungkarang - Telukbetung Nomor :
                    44/1970
                    tertanggal 30 Juli 1970 melalui persetujuan D.P.R.G.R dengan keputusan Nomor : 13/D.P.R.G.R/1969
                    tertanggal 24
                    Juli 1969, yang secara struktural Bank Pasar dibawah sekretariat Pemerintah Kotamadya Daerah Tingkat
                    II
                    Tanjungkarang - Telukbetung termasuk kedalam perusahaan daerah. Kemudian melalui Keputusan
                    Walikotamadya Kepala
                    Daerah Tingkat II Bandar Lampung Nomor : 68/1971 tertanggal 23 September 1971, Bank Pasar dipisahkan
                    dan berdiri
                    sendiri dari sekretariat Pemerintah Kotamadya Daerah Tingkat II Tanjungkarang - Telukbetung.
                    Selanjutnya Keputusan Nomor : 44/1970 dipertegas dengan Keputusan Nomor : 10/HK/1972 tertanggal 10
                    Oktober 1972,
                    dan disempurnakan dengan Keputusan Nomor : 10/HK/1973 tertanggal 26 April 1973 yang berlaku sebagai
                    dasar hukum
                    Bank Pasar sebelum Peraturan Daerah Nomor : 14 Tahun 1983 tentang Pembentukan Perusahaan Daerah Bank
                    Pasar
                    Kotamadya Daerah Tingkat II Bandar Lampung. Perubahan Pertama Peraturan Daerah Tingkat II Bandar
                    Lampung Nomor :
                    14 Tahun 1993 tertanggal 25 November 1993 memuat perubahan modal dasar dan perubahan susunan
                    organisasi Bank
                    Pasar. Kemudian Peraturan Daerah Nomor : 6 tahun 1994 tertanggal 30 November 1994 mengubah nama
                    Perusahaan
                    Daerah Bank Pasar Kotamadya Daerah Tingkat II Bandar Lampung menjadi Perusahaan Daerah Bank
                    Perkreditan Rakyat
                    Bandar Lampung yang mendapat persetujuan dari Departemen Keuangan Republik Indonesia Nomor :
                    19/BPR/HK/1995.
                    Kemudian Peraturan Daerah Kotamadya Bandar Lampung Nomor : 4 tahun 1998 tertanggal 29 April 1998
                    yang merupakan
                    perubahan Peraturan Daerah Nomor : 4 tahun 1994 yaitu dari Perusahaan Daerah Bank Perkreditan Rakyat
                    Daerah
                    Tingkat II Bandar Lampung menjadi Perusahaan Daerah Bank Perkreditan Rakyat Bank Pasar Kota Bandar
                    Lampung (PD
                    BPR Bank Pasar Kota Bandar Lampung), yang telah mendapat persetujuan dari Deputi Gubernur Senior
                    Bank Indonesia
                    lewat Keputusan Deputi Gubernur Senior Bank Indonesia Nomor : 1/8 /KEP.DGS/1999. Pemerintah Daerah
                    Kota Bandar
                    Lampung menerbitkan Peraturan Daerah Kota Bandar Lampung Nomor : 7 Tahun 2001 tanggal 22 Oktober
                    2001 tentang
                    Perusahaan Daerah Bank Perkreditan Rakyat Bank Pasar Kota Bandar Lampung, yang kemudian diadakan
                    perubahan
                    pertama melalui Peraturan Daerah Kota Bandar Lampung Nomor : 5 tahun 2003 tanggal 10 Oktober 2003.
                    Tanggal 12
                    Januari 2009 Pemerintah Daerah Kota Bandar Lampung mengeluarkan Peraturan Daerah Kota Bandar Lampung
                    Nomor : 3
                    Tahun 2009 tentang Pengelolaan Perusahaan Daerah Bank Perkreditan Rakyat Bank Pasar Kota Bandar
                    Lampung.
                    Tanggal 15 Desember 2015 dikeluarkan Peraturan Daerah Kota Bandar Lampung Nomor : 9 Tahun 2015
                    tentang Perubahan
                    atas Peraturan Daerah Kota Bandar Lampung Nomor 3 Tahun 2009 tentang Pengelolaan Perusahaan Daerah
                    Bank
                    Perkreditan Rakyat Bank Pasar Kota Bandar Lampung. Berdasarkan Peraturan Menteri Dalam Negeri Nomor
                    94 tahun
                    2017 tentang Pengelolaan Bank Perkreditan Rakyat Milik Pemerintah Daerah, maka diterbitkanlah
                    Peraturan Daerah
                    Kota Bandar Lampung Nomor 12 tahun 2018 tanggal 20 Desember 2018 untuk merubah bentuk badan hukum
                    BPR dari
                    Perusahaan Daerah (PD) menjadi Perseroan Terbatas (PT) sekaligus merubah nama BPR dari Bank Pasar
                    Kota Bandar
                    Lampung menjadi BPR Waway Lampung (Perseroda), kemudian dituangkan kedalam Akta Pendirian Perseroan
                    Terbatas
                    Nomor 5 tahun 2019 tanggal 22 Februari 2019 yang dibuat dihadapan Notaris Tubagus Lukman Suheru, SH,
                    Notaris di
                    Bandar Lampung dan telah disahkan melalui Keputusan Menteri Hukum dan HAM Republik Indonesia Nomor
                    AHU-011065.AH.01.01 tahun 2019 tanggal 28 Februari 2019.
                </p>
            </div>
            <div class="panel-content" id="panelContent2">
                <h5 class="text-center">TEMPAT KEDUDUKAN</h5>
                <p>Kantor Pusat PT BPR WAWAY LAMPUNG (Perseroda) beralamatkan di Jl. Diponegoro No. 28 Kelurahan Gulak
                    Galik,
                    Kecamatan Teluk Betung Utara Bandar Lampung. Telp. (0721) 266869 Fax. (0721) 266389. Bank Waway
                    memiliki 3
                    (tiga) unit Kantor Kas yaitu :
                    <ul>
                        <li>Kantor Kas Pasar Bawah, Jl. Raden Intan Blok A No. 6 Pasar Bawah - Bandar Lampung</li>
                        <li>Kantor Kas Pemda, Jl. Dr. Susilo No. 2 Teluk Betung, Gedung Layanan Satu Atap</li>
                        <li>Kantor Kas Pesawaran, Jl. Ahmad Yani Gedong Tataan Pesawaran</li>
                    </ul>
                </p>
                <P>Jangka Waktu Pendirian: PT BPR WAWAY LAMPUNG (Perseroda) didirikan untuk jangka waktu yang tidak
                    terbatas.</p>
            </div>
            <div class="panel-content" id="panelContent3">
                <h5 class="text-center">MAKSUD DAN TUJUAN</h5>
                <p>
                    <p>Maksud dan tujuan usaha PT BPR WAWAY LAMPUNG (Perseroda) adalah berusaha dalam bidang Bank
                        Perkreditan Rakyat.
                        Untuk maksud dan tujuan tersebut, maka PT BPR WAWAY LAMPUNG (Perseroda) melaksanakan kegiatan
                        usaha sebagai
                        berikut:</p>
                    <ul>
                        <li>Mendorong pertumbuhan ekonomi daerah kota Bandar Lampung</li>
                        <li>Meningkatkan taraf hidup masyarakat Kota Bandar Lampung, mendorong pertumbuhan ekonomi
                            masyarakat golongan
                            ekonomi lemah melalui pemberdayaan UMKM</li>
                        <li>Sebagai sumber Pendapatan Asli Daerah (PAD)</li>
                    </ul>
                    <p>Sedangkan kegiatan pokok PT BPR WAWAY LAMPUNG (Perseroda) adalah :</p>
                    <ul>
                        <li>Menerima simpanan masyarakat berupa tabungan dan deposito berjangka.</li>
                        <li>Memberikan kredit berjangka pendek, menengah dan panjang kepada para pedagang/
                            pengusaha/pegawai.</li>
                        <li>Melakukan kerjasama antar BPR dan lembaga perbankan atau lembaga keuangan lainnya.
                            Menempatkan dananya dalam
                            bentuk Sertifikat Bank Indonesia, deposito berjangka dan atau tabungan lainnya</li>
                        <li>Menjalankan usaha-usaha perbankan lainnya sepanjang tidak bertentangan dengan Peraturan
                            Perundang- Undangan
                            yang berlaku.</li>
                    </ul>
                </p>
            </div>
            <div class="panel-content" id="panelContent4">
                <h5 class="text-center">PERIJINAN SERTA LEGALITAS</h5>
                <p>Perijinan serta legalitas PT BPR WAWAY LAMPUNG (Perseroda) yang didaftarkan dan disetujui oleh pihak
                    yang
                    berwenang adalah sebagai berikut:</p>
                <ul>
                    <li>Akta Pendirian PT BPR Waway Lampung (Perseroda) Nomor 5 tanggal 22 Februari 2019 yang dibuat
                        dihadapan
                        Notaris Tubagus Lukman Suheru, S.H.</li>
                    <li>Keputusan Menteri Hukum dan HAM RI Nomor : AHU-011065.AH.01.01.Tahun 2019 tanggal 28 Februari
                        2019 tentang
                        Pengesahan Pendirian Badan Hukum PT BPR WAWAY (Perseroda). </li>
                    <li>Keputusan Kepala Otoritas Jasa Keuangan (OJK) Provinsi Lampung Nomor KEP-34/KO.074/2019 tanggal
                        03 Mei 2019
                        tentang Pengalihan Izin Usaha atas Perubahan Nama dan Bentuk Badan Hukum dari PD BPR Bank Pasar
                        Kota Bandar
                        Lampung menjadi PT BPR Waway Lampung (Perseroda).</li>
                    <li>Nomor Pokok Wajib Pajak 90.698.082.6.324.000 yang dikeluarkan oleh Kantor Pelayanan Pajak Teluk
                        Betung.</li>
                </ul>
            </div>
            <div class="panel-content" id="panelContent5">
                <h5 class="text-center">MODAL</h5>
                <p>Sesuai dengan Peraturan Daerah Kota Bandar Lampung No. 12 Tahun 2018 tanggal 20 Desember 2018 Pasal
                    10 ayat (1),
                    Modal Dasar PT BPR WAWAY LAMPUNG (Perseroda) ditetapkan sebesar Rp. 75.000.000.000,- (tujuh puluh
                    lima miliar
                    rupiah). Sampai dengan tahun 2014 dari Modal Dasar tersebut telah disetor modal sejumlah Rp.
                    20.000.000.000,-
                    (dua puluh milyar rupiah) oleh Pemegang Saham.
                    Tahun 2016 Bank Waway mendapatkan Setoran Modal dalam bentuk Aset Tetap Tanah dan Bangunan, setelah
                    mendapat
                    persetujuan dari OJK dibukukan pada tanggal 29 Desember 2016 Modal Disetor dalam bentuk Tanah
                    senilai Rp.
                    11.187.600.000,- dan Bangunan senilai Rp. 5.602.900.000,- yang terletak di Jalan Diponegoro No. 28
                    Teluk Betung,
                    yang saat ini digunakan untuk Operasional sebagai gedung kantor pusat Bank Waway. Penambahan Modal
                    Disetor
                    tersebut berdasarkan Perda Nomor : 11 Tahun 2016 tentang Penambahan Modal Disetor berupa Tanah dan
                    Bangunan yang
                    ditetapkan pada tanggal 26 Oktober 2016 serta diundangkan pada tanggal 27 Oktober 2016. Tahun 2017
                    mendapatkan
                    setoran modal dalam bentuk dana tunai sebesar Rp. 5.000.000.000,- dan telah disetujui oleh OJK
                    dibukukan pada
                    tanggal 29 Desember 2017. Tahun 2018 mendapatkan setoran modal sebesar Rp. 5.000.000.000,- tanggal
                    14 Desember
                    2018, disetujui oleh OJK tanggal 07 Januari 2019 sehingga akumulasi Modal Disetor milik Pemerintah
                    Kota Bandar
                    Lampung berjumlah Rp. 46.790.500.000,- (empat puluh enam milyar tujuh ratus sembilan puluh juta lima
                    ratus ribu
                    rupiah).
                    Pada tanggal 03 Mei 2019 OJK menyetujui penambahan modal setor dari Pemegang Saham lain yaitu
                    Koperasi Jasa
                    Karyawan ARTHA SEJAHTERA BAPAS sebesar Rp. 250.000.000,- (dua ratus lima puluh juta rupiah) sehingga
                    akumulasi
                    Modal Setor PT BPR Waway Lampung (Perseroda) saat ini berjumlah Rp. 47.040.500.000,- (empat puluh
                    tujuh milyar
                    empat puluh juta lima ratus ribu rupiah).
                    Pada tanggal 27 Juli 2023 Koperasi Jasa Karyawan ARTHA SEJAHTERA BAPAS melepaskan sebagian sahamnya
                    sebesar Rp.
                    210.500.000,- (dua ratus sepuluh juta lima ratus ribu rupiah) kepada Pemegang Saham Pengendali
                    (Pemda Kota
                    Bandar Lampung), OJK menyetujui penjualan saham modal setor dari Pemegang Saham lain yaitu Koperasi
                    Jasa
                    Karyawan ARTHA SEJAHTERA BAPAS kepada Pemda Kota Bandar Lampung sebesar Rp. 210.500.000,- (dua ratus
                    sepuluh
                    juta lima ratus ribu rupiah) melalui surat Nomor : S-240/KO.0741/2023 tanggal 07 September 2023.
                </p>
                <h5>Komposisi Kepemilikan Saham PT BPR Waway Lampung (Perseroda) sebagai berikut :</h5>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pemegang Saham</th>
                            <th>Jumlah Lembar</th>
                            <th>Jumlah Nominal</th>
                            <th>%</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pemerintah Daerah Kota Bandar Lampung</td>
                            <td>94.002</td>
                            <td>Rp 47.001.000.000</td>
                            <td>99,92%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Koperasi Jasa Karyawan Artha Sejahtera Bapas</td>
                            <td>79</td>
                            <td>Rp 39.500.000</td>
                            <td>0,08%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel-content" id="panelContent6">
                <h5 class="text-center">SUSUNAN PENGURUS</h5>
                <P>PT BPR WAWAY LAMPUNG (Perseroda) saat ini dipimpin oleh Direksi yang terdiri dari 1 (satu) orang
                    Direktur
                    Utama
                    dan 1 (satu) orang Direktur yaitu Direktur Operasional. Direksi bertanggung jawab kepada Rapat Umum
                    Pemegang
                    Saham (RUPS). </P>
                <P>Susunan Dewan Komisaris PT BPR WAWAY LAMPUNG (Perseroda) sesuai dengan Surat Keputusan Walikota
                    Bandar
                    Lampung
                    No. 129/BPR/HK/2019 tanggal 30 Januari 2019 tentang Pengangkatan Dewan Komisaris dan Direksi PT BPR
                    WAWAY
                    LAMPUNG (Perseroda) adalah sebagai berikut :</P>
                <h6>Dewan Komisaris</h6>
                <ul>
                    <li>Komisaris Utama: Robi Suliska Sobri, S.IP., M.IP., QCRO (Masa Jabatan 16-07-2024 s.d 15-07-2028)
                    </li>
                    <li>Komisaris: Yusdiyanto, S.H., M.H. (Masa Jabatan 31-03-2022 s.d 30-03-2026)</li>
                </ul>
                <P>Susunan Direksi PT BPR WAWAY LAMPUNG (Perseroda) sesuai dengan Surat Keputusan Walikota Bandar
                    Lampung No.
                    287/PT BPR WAWAY/HK/2024 tanggal 18 Januari 2024 tentang Pengangkatan Direktur Utama PT BPR WAWAY
                    LAMPUNG
                    (Perseroda) dan Surat Keputusan Walikota Bandar Lampung No. 288/PT BPR WAWAY/HK/2024 tanggal 18
                    Januari 2024
                    tentang Pengangkatan Direktur Operasional PT BPR Waway Lampung (Perseroda).</P>
                <h6>Direksi</h6>
                <ul>
                    <li>Direktur Utama: Firdaus Andiko (Masa Jabatan 18-01-2024 s.d 18-01-2029)</li>
                    <li>Direktur Operasional: Anang Sofi (Masa Jabatan 18-01-2024 s.d 18-01-2029)</li>
                </ul>
            </div>
            <div class="panel-content" id="panelContent7">

                <h5>Visi</h5>
                <p class="text-justify">Menjadi Bank milik Pemerintah Daerah yang Sehat, Prima dalam
                    Pelayanan
                    serta
                    berperan dalam meningkatkan Perekonomian masyarakat di wilayah Provinsi Lampung. </p>
                <h5>Misi</h5>
                <p class="text-justify mx-5 px-5 my-3">
                    <ul>
                        <li>Membantu dan mendorong pertumbuhan ekonomi masyarakat di wilayah
                            Provinsi Lampung.</li>
                        <li>Menyediakan dan mengembangkan pelayanan keuangan yang inovatif dan berkualitas.
                        </li>
                        <li>Membina jaringan kerjasama saling menguntungkan yang dilandasi rasa saling percaya.
                        </li>
                        <li>Menciptakan lingkungan kerja yang meningkatkan profesionalisme dan mendorong
                            pembaharuan Organisasional dengan semangat
                            kekeluargaan.</li>
                        <li>Membangun kepercayaan publik melalui perilaku Etikal, Peduli, dan Hati-hati. </li>
                </p>
                </ul>

            </div>
            <style>
                .awards {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 10px;
                }

                .awards img {
                    width: 300px;
                    height: auto;

                }
            </style>
            <div class="panel-content" id="panelContent8">
                <h5 class="text-center">PRESTASI & PENGHARGAAN</h5>
                <p class="text-center">Pengakuan atas dedikasi dan kinerja luar biasa kami</p>

                <h4 class="text-center">INFOBANK GOLDEN AWARD</h4>
                <div class="awards">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2011-2015.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2012-2016.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2013-2017.jpg')}}">
                </div>
                <div class="text-center description my-4">
                    Sebagai BPR dengan kinerja keuangan Sangat Bagus selama 3 tahun berturut-turut<br>
                    Tahun : 2011-2017 (6 Tahun)<br>
                    Perolehan : 3 kali
                </div>
                <h4 class="text-center">INFOBANK AWARD</h4>
                <div class="awards">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2009.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2010.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2013.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 2015.jpg')}}">
                    <img src="{{ asset('assetGuest/img/awards/INFOBANK 20201.jpg')}}">
                </div>
                <div class="text-center description my-4">
                Sebagai BPR dengan kinerja keuangan Sangat Bagus<br>
                    Tahun : 2009-2010, 2013, 2015, 2020 (5 Tahun)<br>
                </div>




                <div class="row justify-content-center g-4">
                    <div class="col-md-6 col-lg-4">

                        <img src="{{ asset('assetGuest/img/awarding1.jpg') }}" class="card-img-top img-fluid"
                            alt="Top BUMD Awards 2021">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Top BUMD Awards 2021</h5>
                            <p class="card-text text-muted">PT Bank Perkreditan Rakyat Waway Lampung (Perseroda)
                                menjadi Finalis
                                TOP BUMD Awards 2021 oleh Majalah Top Business.</p>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4">

                        <img src="{{ asset('assetGuest/img/awarding1.jpg') }}" class="card-img-top img-fluid"
                            alt="BPR Awarding">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">BPR Awarding</h5>
                            <p class="card-text text-muted">Meraih penghargaan InfoBank BPR Awards dengan
                                predikat “SANGAT
                                BAGUS” dari segi Kinerja Keuangan selama 9 tahun berturut-turut (2010 - 2018).
                            </p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="panel-content" id="panelContent9">
                <!-- PIMPINAN -->
                <br>

                <div class="d-flex justify-content-center">
                    <div class="card shadow border-0 rounded-3 text-center" style="width: 250px;">
                        <img class="card-img-top mx-auto mt-4"
                            style="width: 200px; height: 200px; object-fit: cover; object-position: 50% 10%;"
                            src="{{ asset('assetGuest/img/Pengurus/walikota.jpg') }}" alt="Eva Dwiana">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Eva Dwiana</h5>
                            <p class="card-text">Walikota Bandar Lampung / Pemegang Saham Pengendali Bank Waway</p>
                        </div>
                    </div>
                </div>
                <br>
                <h5 class="text-center">PENGURUS</h5>
                <div class="d-flex flex-wrap justify-content-center mx-2 my-2">
                    <div class="row">
                        <div class="col my-3">
                            <div class="card shadow border-0 rounded-3 text-center" style="width: 250px;">
                                <img class="card-img-top mx-auto mt-4"
                                    style="width: 180px; height: 180px; object-fit: cover; object-position: center;"
                                    src="{{ asset('assetGuest/img/Pengurus/Firdaus-Andiko.jpg') }}"
                                    alt="Firdaus Andiko">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Firdaus Andiko</h5>
                                    <p class="card-text">Direktur Utama <br> PT BPR WAWAY LAMPUNG (Perseroda)</p>
                                </div>
                            </div>
                        </div>

                        <div class="col my-3">
                            <div class="card shadow border-0 rounded-3 text-center" style="width: 250px;">
                                <img class="card-img-top mx-auto mt-4"
                                    style="width: 180px; height: 180px; object-fit: cover; object-position: center;"
                                    src="{{ asset('assetGuest/img/Pengurus/anang_sofi.jpg') }}" alt="Anang Sofi">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Anang Sofi</h5>
                                    <p class="card-text">Direktur Operasional <br> PT BPR WAWAY LAMPUNG (Perseroda)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col my-3">
                            <div class="card shadow border-0 rounded-3 text-center" style="width: 250px;">
                                <img class="card-img-top mx-auto mt-4"
                                    style="width: 180px; height: 180px; object-fit: cover; object-position: center;"
                                    src="{{ asset('assetGuest/img/Pengurus/Robby.jpg') }}" alt="Anang Sofi">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Robby Suliska Sobri</h5>
                                    <p class="card-text">Komisaris Utama <br> PT BPR WAWAY LAMPUNG (Perseroda)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col my-3">
                            <div class="card shadow border-0 rounded-3 text-center" style="width: 250px;">
                                <img class="card-img-top mx-auto mt-4"
                                    style="width: 180px; height: 180px; object-fit: cover; object-position: center;"
                                    src="{{ asset('assetGuest/img/Pengurus/yusdianto.jpg') }}" alt="Yusdianto">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Yusdianto</h5>
                                    <p class="card-text">Komisaris Independen <br> PT BPR WAWAY LAMPUNG (Perseroda)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
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