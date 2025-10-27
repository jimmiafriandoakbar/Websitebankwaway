@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <div class="container mt-5">
        <div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading" target="_blank">Berhasil!</h4>
            <p>Data pengajuan kredit Anda telah berhasil disimpan.</p>
        </div>
        <div class="text-center mt-4">
            <a href="https://bankwawaylampung.com/simulasi" class="btn btn-success">⬅ Simulasi</a>

            <a href="https://bankwawaylampung.com/" class="btn btn-primary">Home</a>
        </div>
    </div>
@endsection
