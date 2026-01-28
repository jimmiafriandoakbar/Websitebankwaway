@extends('guest.partials.layout')

@section('title', 'Kredit')

@section('content')

<!-- COVER -->
<div class="border border-2 container my-5">
    <h2 class="text-center fw-bold mb-4">PRODUK KREDIT</h2>
    <p class="text-center mb-5">
        PT BPR Waway Lampung (Perseroda) menyediakan dua jenis produk kredit
        yang dirancang untuk memenuhi kebutuhan pembiayaan usaha dan kebutuhan konsumtif masyarakat.
    </p>

    <div class="row row-cols-1 pb-3 row-cols-md-2 g-4 justify-content-center">


        <!-- KREDIT KOMERSIL -->
        <div class="col">
            <a href="{{ url('kredit-komersil') }}" class="text-decoration-none text-white">
                <div class="card shadow border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assetGuest/img/Home-1.jpg') }}"
                         class="card-img"
                         style="filter: brightness(55%); height: 280px; object-fit: cover;"
                         alt="Kredit Komersil">

                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center px-4">
                        <h3 class="fw-bold text-white ">Kredit Komersil</h3>
                        <p class="mt-3">
                            Kredit Komersil merupakan fasilitas pembiayaan yang diberikan kepada
                            pelaku usaha mikro, kecil, dan menengah (UMKM) untuk mendukung
                            pengembangan usaha produktif.
                        </p>
                        <p>
                            Kredit ini dapat digunakan untuk kebutuhan modal kerja maupun
                            investasi usaha sesuai ketentuan yang berlaku.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- KREDIT KONSUMER -->
        <div class="col">
            <a href="{{ url('kredit-konsumer') }}" class="text-decoration-none text-white">
                <div class="card shadow border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assetGuest/img/Home-1.jpg') }}"
                         class="card-img"
                         style="filter: brightness(55%); height: 280px; object-fit: cover;"
                         alt="Kredit Konsumer">

                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center px-4">
                        <h3 class="fw-bold text-white">Kredit Konsumer</h3>
                        <p class="mt-3">
                            Kredit Konsumer adalah fasilitas pinjaman yang diberikan kepada
                            perorangan, khususnya Pegawai Negeri Sipil (PNS) dan pegawai tetap,
                            untuk memenuhi kebutuhan konsumtif.
                        </p>
                        <p>
                            Kredit ini memiliki skema pembayaran yang ringan dan
                            tidak dikenakan bunga penalti setelah pelunasan mencapai 50%.
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

@endsection
