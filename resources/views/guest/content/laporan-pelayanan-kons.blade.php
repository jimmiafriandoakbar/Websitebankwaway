@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')

<div class="bg-waway-red text-center mb-3  py-3">
    <h3 style="color: white;">Laporan Pelaksanaan Pelayanan & Penyelesaian Pengaduan</h3>
</div>

<style>
    .content-container {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        transition: transform 0.3s;
    }

    .content-container:hover {
        transform: scale(1.02);
    }

    p {
        text-align: justify;
        line-height: 1.8;
    }

    .img-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>
<div class="g-4 mx-5 px-5 my-3">
    <h5>Prosedur Layanan Pengaduan Konsumen</h5>
    <p>
        Pengaduan layanan dan pengaduan konsumen sama-sama merupakan bentuk keluhan yang diajukan oleh pengguna atau
        konsumen terkait ketidaksesuaian, kesalahan, atau ketidakpuasan terhadap suatu produk atau jasa. Pengaduan
        layanan
        umumnya berkaitan dengan kualitas atau sistem pelayanan yang diberikan oleh suatu perusahaan, instansi, atau
        penyedia jasa, seperti keterlambatan pelayanan atau ketidaktepatan informasi. Sementara itu, pengaduan konsumen
        lebih spesifik terhadap hak-hak konsumen, misalnya terkait produk yang rusak, jasa yang tidak sesuai dengan
        perjanjian, atau hal lain yang merugikan konsumen.
    </p>
    <p>Secara umum prosedur layanan pengaduan konsumen digambarkan sebagai berikut:</p>
</div>
<div class="container mt-2 mb-5">
    <div class=" mx-auto col-md-10">
        <div class="img-container content-container">
            <img src="{{ asset('assetGuest/img/Pengaduan-Pelayanan.jpeg') }}" alt="Prosedur Layanan Pengaduan Konsumen">
        </div>
    </div>
</div>


<h5 class="g-4 mx-5 px-5 my-3">Laporan Pelayanan & Pengaduan Konsumen</h5>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5 px-5 mb-5">
    @foreach ($stmtPelayananKons as $item)
    <div class="col content-home-card">
        <div style="border-radius: 10%;" class="card">
            <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                src="{{asset('assetGuest/img/cover_buku/cover_buku.jpg')}}"
                class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Laporan Pelayanan & Pengaduan Konsumen</h5>
                <p class="card-text text-center">{{$item->judul}}</p>
                <a target="_blank" href="{{url('public/'. $item->file)}}"> Download</a>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection