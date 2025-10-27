@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')

    <div class="bg-waway-red text-center mb-5  py-3">
        <h3 style="color: white;">Laporan Publikasi</h3>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mx-5 px-5 mb-5">
        @foreach ($stmtPublikasi as $item)
        <div class="col content-home-card">
            <div style="border-radius: 10%;" class="card">
                <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                    src="{{asset('assetGuest/img/cover_buku/cover_buku2.jpg') }}" class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Laporan keuangan Publikasi Triwulan</h5>
                    <p class="card-text">{{$item->judul}}</p>
                    <a target="_blank" href="{{url('public/'. $item->file)}}"> Download</a> 
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection