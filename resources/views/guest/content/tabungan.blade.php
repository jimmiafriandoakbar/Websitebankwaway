@extends('guest.partials.layout')

@section('title', 'Tabungan')

@section('content')

    <!--Cover -->

    <div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 100%; height: 310px;object-fit: cover;
            object-position: 15% 50%; filter: brightness(65%);" src="{{asset('assetGuest/img/Tabungan.png')}}" class="card-img img-fluid" alt="...">
                <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                    <h1 class="card-title text-white">TABUNGAN</h1>
                    <p class="card-text">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                        pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                    <p class="card-text">Tabungan Cerdik merupakan tabungan Cermat untuk Pendidik dan Tabungan Pegawai merupakan tabungan untuk para pegawai.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div style="margin: 5px 5px; width:100%; height: auto;"
        class="row row-cols-1 mx-auto row-cols-md-4 text-white px-5">
        <a href="{{url('/warning')}}" class="text-white">
            <div class="col content-produk my-3 ">
                <img style="filter: brightness(50%);border-radius: 60px 10px;" src="{{asset('assetGuest/img/Home-1.jpg')}}"
                    class="card-img shadow bg-body " alt="...">
                <div class="card-img-overlay">
                    <h4 style="color: white;" class="card-title text-center">Tabungan Tapis</h4>
                    <p class="card-text px-4">Kami menyediakan tabungan bagi nasabah</p>
                </div>
            </div>
        </a>
        <a href="{{url('/warning')}}" class="text-white">
            <div class="col content-produk my-3 ">
                <img style="filter: brightness(50%);border-radius: 60px 10px;" src="{{asset('assetGuest/img/Home-1.jpg')}}"
                    class="card-img shadow bg-body " alt="...">
                <div class="card-img-overlay">
                    <h4 style="color: white;" class="card-title text-center">Tabungan Simpel</h4>
                    <p class="card-text px-4">Kami menyediakan bagi pelajar yang aktif
                    </p>
                </div>
            </div>
        </a> 
        <a href="{{url('/warning')}}" class="text-white">
            <div class="col content-produk my-3 ">
                <img style="filter: brightness(50%);border-radius: 60px 10px;" src="{{asset('assetGuest/img/Home-1.jpg')}}"
                    class="card-img shadow bg-body " alt="...">
                <div class="card-img-overlay">
                    <h4 style="color: white;" class="card-title text-center">Tabungan Cerdik</h4>
                    <p class="card-text px-4">Tabungan ini mempunyai beberapa keuntungan yang menarik</p>
                </div>
            </div>
        </a>
        <a href="{{url('/warning')}}" class="text-white">
            <div class="col content-produk my-3 ">
                <img style="filter: brightness(50%);border-radius: 60px 10px;" src="{{asset('assetGuest/img/Home-1.jpg')}}"
                    class="card-img shadow bg-body " alt="...">
                <div class="card-img-overlay">
                    <h4 style="color: white;" class="card-title text-center">Tabungan Pegawai</h4>
                    <p class="card-text px-4">Tabungan ini mempunyai beberapa keuntungan yang menarik</p>
                </div>
            </div>
        </a>
    </div>
    
    @endsection