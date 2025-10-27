@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
@include('sweetalert::alert')

<!-- <audio autoplay>
        <source src="{{ asset('assetGuest/sound/y2mate.mp3') }}" type="audio/ogg" />
    </audio> -->
@if (session('message'))
{!! session('message') !!}
@endif

<div>
    <!-- slider  -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade rounded-4 shadow-lg overflow-hidden"
    data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Indicators -->
    <div class="carousel-indicators mb-0">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="https://apps.lps.go.id/BankPesertaLPSRate" target="_blank">
            <img src="{{ asset('assetGuest/img/cover/SLIDER-WEBSITE-4.png') }}"
                class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 1">
        </a>
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assetGuest/img/cover/SLIDER-WEBSITE-1.png') }}"
            class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 1">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assetGuest/img/cover/SLIDER-WEBSITE-2.png') }}"
            class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 2">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assetGuest/img/cover/SLIDER-WEBSITE-3.png') }}"
            class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 4">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assetGuest/img/cover/SLIDER-WEBSITE-5.png') }}"
            class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 4">
    </div>
</div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark bg-opacity-50 rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark bg-opacity-50 rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<style>
    .bg-waway-navy {
            background-color: #12264b;
        }
</style>

    <div class="bg-waway-navy text-center py-3">
        <h3 style="color: white;">Bank Waway Lampung</h3>
    </div>

    <!-- content -->

    <!--<div class="modal fade show" id="popupModal" tabindex="-1" style="display: block; background: rgba(0, 0, 0, 0.5);"-->
    <!--    aria-modal="true" role="dialog">-->
    <!--    <div class="modal-dialog modal-dialog-centered" style="max-width: 350px;">-->
            <!-- Atur lebar modal -->
    <!--        <div class="modal-content border-0">-->
    <!--            <button type="button" class="btn btn-primary btn-sm w-100" id="closePopup">Tutup</button>-->
    <!--            <div class="modal-body p-0">-->
    <!--                <img style="width: 100%; height: auto;" src="{{ asset('assetGuest/img/PERUBAHAN-NAMA.jpg') }}"-->
    <!--                    alt="Perubahan Nama" class="img-fluid">-->
    <!--            </div>-->


    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- <div style="margin: 10px 10px; height: auto;" class="row row-cols-1 mx-auto row-cols-md-3 g-4 px-5">
        <div class="col">
            <a style="color: black;text-decoration: none; " href="{{ url('/deposito') }}">
                <div class="card content-home-card h-100 shadow p-3 bg-body">
                    <img style="width: 320px; height: 200px; object-fit: cover;"
                        src="{{ asset('assetGuest/img/index/deposito.jpg') }}"
                        class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Deposito</h5>
                        <p class="card-text">Deposito adalah salah satu jawaban yang tepat untuk milenial yang ingin
                            berinvestasi dengan aman.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a style="color: black;text-decoration: none; " href="{{ url('kredit') }}">
                <div class="card content-home-card h-100 shadow p-3 bg-body">
                    <img style="width: 320px; height: 200px; object-fit: cover;"
                        src="{{ asset('assetGuest/img/index/pinjaman.jpg') }}"
                        class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pinjaman</h5>
                        <p class="card-text">Bank Waway memiliki banyak berbagai produk pinjaman sesuai
                            kebutuhan para nasabah yaitu pinjaman pegawai, pinjaman UMKM, dan produk pinjaman
                            lainnya.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a style="color: black;text-decoration: none; " href="{{ url('tabungan') }}">
                <div class="card content-home-card h-100 shadow p-3 bg-body">
                    <img style="width: 320px; height: 200px; object-fit: cover;"
                        src="{{ asset('assetGuest/img/index/tabungan.jpg') }}"
                        class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tabungan</h5>
                        <p class="card-text">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                            pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                    </div>
                </div>
            </a>
        </div>
    </div> -->

    <!-- <style>
    .card-hover {
        position: relative;
        overflow: hidden;
    }

    .card-hover img {
        width: 100%;
        height: auto;
        display: block;
    }

    .card-hover .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 123, 255, 0.75); /* Bootstrap primary + opacity */
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
        padding: 20px;
    }

    .card-hover:hover .overlay {
        opacity: 1;
    }

    .label-bawah {
        background: white;
        text-align: center;
        font-weight: bold;
        padding: 8px 0;
    }
</style>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-md-4">
            <a href="{{ url('/tabungan') }}" class="text-decoration-none">
                <div class="card-hover">
                    <img src="{{ asset('assetGuest/img/index/tabungan.jpg') }}" alt="Tabungan">
                    <div class="overlay">
                        <h5 class="fw-bold mb-2">TABUNGAN</h5>
                        <p class="mb-0">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                            pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ url('/deposito') }}" class="text-decoration-none">
                <div class="card-hover">
                    <img src="{{ asset('assetGuest/img/index/deposito.jpg') }}" alt="Deposito">
                    <div class="overlay">
                        <h5 class="fw-bold mb-2">DEPOSITO</h5>
                        <p class="mb-0">Deposito adalah salah satu jawaban yang tepat untuk milenial yang ingin
                            berinvestasi dengan aman.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ url('/kredit') }}" class="text-decoration-none">
                <div class="card-hover">
                    <img src="{{ asset('assetGuest/img/index/pinjaman.jpg') }}" alt="Kredit">
                    <div class="overlay">
                        <h5 class="fw-bold mb-2">KREDIT</h5>
                        <p class="mb-0">Bank Waway memiliki banyak berbagai produk pinjaman sesuai
                            kebutuhan para nasabah yaitu pinjaman pegawai, pinjaman UMKM, dan produk pinjaman
                            lainnya.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div> -->

    <style>
        .card-hover {
            position: relative;
            overflow: hidden;
        }

        .card-hover img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-hover .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 123, 255, 0.75);
            /* Bootstrap primary + opacity */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
            padding: 20px;
        }

        .card-hover:hover .overlay {
            opacity: 1;
        }

        .produk-kolom {
            padding: 0;
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .label-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 10px;
            font-weight: bold;
            color: #000;
            transition: opacity 0.3s ease-in-out;
            opacity: 1;
        }

        .produk-kolom:hover .label-bottom {
            opacity: 0;
        }
    </style>

    <div class="container-fluid px-0">
        <div class="row gx-0">
            <!-- TABUNGAN -->
            <div class="col-md-4 produk-kolom">
                <a href="{{ url('/tabungan') }}">
                    <div class="card-hover">
                        <img src="{{ asset('assetGuest/img/index/tabungan.jpg') }}" alt="Tabungan">
                        <div class="overlay">
                            <h5 class="fw-bold mb-2 text-white">TABUNGAN</h5>
                            <p class="mb-0">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                                pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                        </div>
                    </div>
                    <div class="label-bottom">TABUNGAN</div>
                </a>
            </div>

            <div class="col-md-4 produk-kolom">
                <a href="{{ url('/deposito') }}">
                    <div class="card-hover">
                        <img src="{{ asset('assetGuest/img/index/deposito.jpg') }}" alt="Deposito">

                        <div class="overlay">
                            <h5 class="fw-bold mb-2 text-white">DEPOSITO</h5>
                            <p class="mb-0">Deposito adalah salah satu jawaban yang tepat untuk milenial yang ingin
                            berinvestasi dengan aman.</p>
                        </div>
                    </div>
                    <div class="label-bottom">DEPOSITO</div>
                </a>
            </div>

            <div class="col-md-4 produk-kolom">
                <a href="{{ url('/kredit') }}">
                    <div class="card-hover">
                        <img src="{{ asset('assetGuest/img/index/pinjaman.jpg') }}" alt="Kredit">
                        <div class="overlay">
                            <h5 class="fw-bold mb-2 text-white">KREDIT</h5>
                            <p class="mb-0">Bank Waway memiliki banyak berbagai produk pinjaman sesuai
                            kebutuhan para nasabah yaitu pinjaman pegawai, pinjaman UMKM, dan produk pinjaman
                            lainnya.</p>
                        </div>
                    </div>
                    <div class="label-bottom">KREDIT</div>
                </a>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk Pop-Up -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("popupModal");
            const closePopup = document.getElementById("closePopup");

            // Tampilkan pop-up
            popup.style.display = "block";

            // Tutup pop-up saat tombol "Close" diklik
            closePopup.addEventListener("click", function () {
                popup.style.display = "none";
            });
        });
    </script>
</div>
@endsection