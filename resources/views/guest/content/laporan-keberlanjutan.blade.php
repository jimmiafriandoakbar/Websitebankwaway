@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')

    <div class="bg-waway-red text-center mb-5  py-3">
        <h3 style="color: white;">Laporan Keberlanjutan</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mx-5 px-5">
    <!-- @foreach ($stmtLaporankeberlanjutan as $item)
        <div class="col content-home-card">
            <div style="border-radius: 10%;" class="card">
                <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                    src="{{asset('assetGuest/img/cover_buku/cover_buku.jpg') }}" class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">Laporan GCG</p>
                    <a target="_blank" href="{{url('public/'. $item->file)}}"> Download</a>
                </div>
            </div>
        </div>
        @endforeach -->
        <div class="col content-home-card mb-5">
            <div style="border-radius: 10%;" class="card">
                <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                    src="{{asset('assetGuest/img/cover_buku/cover_buku.jpg') }}" class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Laporan Keberlanjutan</h5>
                    <p class="card-text">Tahun 2023</p>
                    <a target="_blank" href="{{asset('assetGuest/Pdf_laporan/Laporanpublikasi-2023.pdf') }}"> Download</a>
                </div>
            </div>
        </div>
        <div class="col content-home-card mb-5">
            <div style="border-radius: 10%;" class="card">
                <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                    src="{{asset('assetGuest/img/cover_buku/cover_buku.jpg') }}" class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Laporan Keberlanjutan</h5>
                    <p class="card-text">Tahun 2024</p>
                    <a target="_blank" href="{{asset('assetGuest/Pdf_laporan/Laporanpublikasi-2024.pdf') }}"> Download</a>
                </div>
            </div>
        </div>
    </div>
    
    @endsection