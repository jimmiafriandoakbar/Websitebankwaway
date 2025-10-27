@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <style>
        .rounded-depo {
            border-radius: 20px 40px;
        }
    </style>

    @include('sweetalert::alert')
    <!--Cover -->
    <div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 100%; height: 310px;object-fit: cover;
            object-position: 15% 50%; filter: brightness(65%);"
                    src="{{ asset('assetGuest/img/Deposito-Cover.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                    <h1 class="card-title text-white">Form Kredit Pegawai</h1>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Syarat dan Ketentuan Pengajuan Kredit</h3>
                                <p>
                                    Dengan menekan tombol "Setuju &amp; Ajukan Pinjaman" di bawah ini, saya menyatakan
                                    hal-hal sebagai berikut :
                                </p>
                                <ul style="list-style: number">
                                    <li>Data dan informasi yang saya berikan dalam pengajuan ini adalah sesuai keadaaan yang
                                        sebenar-benarnya.</li>
                                    <li>Saya menyetujui bahwa PT. BPR Waway Lampung, selanjutnya disebut Bank,
                                        berwenang untuk:
                                        <ul style="list-style: lower-alpha">
                                            <li>Memeriksa kebenaran data yang saya sampaikan dalam pengajuan ini.</li>
                                            <li>Mencari dan memperoleh keterangan dan referensi dari sumber manapun dengan
                                                cara yang dianggap sah oleh Bank.</li>
                                            <li>Menyetujui atau menolak pengajuan pinjaman saya berdasarkan analisa Bank.
                                            </li>
                                            <li>Tidak mengembalikan seluruh dokumen yang telah saya serahkan kepada Bank.
                                            </li>
                                            <li>Memberikan secara terbatas dan/atau tidak terbatas data yang telah saya
                                                sampaikan dalam pengajuan ini kepada pihak ketiga dalam rangka kepentingan
                                                pemrosesan pengajuan pinjaman.</li>
                                        </ul>
                                    </li>
                                    <li>Saya memahami dan mengerti bahwa Bank tidak berkewajiban untuk memberikan fasilitas
                                        kredit kepada saya hingga saya memenuhi semua persyaratan yang berlaku pada Bank dan
                                        telah menandatangani dokumen yang diperlukan Bank dalam pemberian kredit.</li>
                                    <li>Apabila ternyata data dan informasi, serta pernyataan yang saya berikan/buat tidak
                                        sesuai dengan keadaan yang sebenarnya, maka segala risiko dan konsekuensi yang
                                        diakibatkannya menjadi sepenuhnya tanggung jawab saya.</li>
                                </ul>
                                <a href="{{route('stepOnePemohon')}}" class="btn btn-success btn-block">Setuju & lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


@endsection
