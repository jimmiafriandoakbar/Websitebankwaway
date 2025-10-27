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
                    src="{{ asset('assetGuest/img/Deposito.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                    <h1 class="card-title text-white">DEPOSITO BERJANGKA</h1>
                    <p class="card-text">Bunga deposito BPR s/d 6%, Bisa menjadi pilihan dalam berinventasi </p>
                    <p class="card-text">Deposito adalah salah satu jawaban yang tepat untuk milenial yang ingin
                        berinvestasi dengan aman.</p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <h2 class="text-center text-black"> PELUANG DEPOSITO</h2>
    <!-- Card -->
    <div class=" mx-5 my-2 border rounded-depo shadow-sm bg-white">
        <div style="background-color: #12264b;" class=" card-header text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm fw-normal">
                        Deposito 1 Bulan
                    </div>
                    <div class="col-sm fw-normal">
                        Minimum Deposito
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="card-title text-white">5.5%</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="card-title text-white">Rp. 1.000.000-</h2>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('formdeposit') }}"> <button style="background-color: aqua;" type="button"
                                class="btn btn-lg btn-block">
                                <h5 class=" text-black"> Ajukan Deposito </h5>
                            </button> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h4 class="text-black">ARO</h4>
                        <p class="card-text align-middle">Automatic Roll Over (ARO) atau Perpanjang Otomotis adalah fitur
                            untuk memperpanjang langsung deposito Anda tanpa harus pengajuan lagi dengan nominal dan tenor
                            yang sama. Tetapi, bunga akan digabungkan dengan pokok setelah jatuh tempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mx-5 my-2 border rounded-depo shadow-sm bg-white">
        <div style="background-color: #12264b;" class=" card-header text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm fw-normal">
                        Deposito 3 Bulan
                    </div>
                    <div class="col-sm fw-normal">
                        Minimum Deposito
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="card-title text-white">5.75%</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="card-title text-white">Rp. 1.000.000-</h2>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('formdeposit') }}"> <button style="background-color: aqua;" type="button"
                                class="btn btn-lg btn-block">
                                <h5 class=" text-black"> Ajukan Deposito </h5>
                            </button> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h4 class="text-black">ARO</h4>
                        <p class="card-text align-middle">Automatic Roll Over (ARO) atau Perpanjang Otomotis adalah fitur
                            untuk memperpanjang langsung deposito Anda tanpa harus pengajuan lagi dengan nominal dan tenor
                            yang sama. Tetapi, bunga akan digabungkan dengan pokok setelah jatuh tempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=" mx-5 my-2 border rounded-depo shadow-sm bg-white">
        <div style="background-color: #12264b;" class="card-header text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm fw-normal">
                        Deposito 6 Bulan
                    </div>
                    <div class="col-sm fw-normal">
                        Minimum Deposito
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="card-title text-white">5.75%</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="card-title text-white">Rp. 1.000.000-</h2>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('formdeposit') }}"> <button style="background-color: aqua;" type="button"
                                class="btn btn-lg btn-block">
                                <h5 class=" text-black"> Ajukan Deposito </h5>
                            </button> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h4 class="text-black">ARO</h4>
                        <p class="card-text align-middle">Automatic Roll Over (ARO) atau Perpanjang Otomotis adalah fitur
                            untuk memperpanjang langsung deposito Anda tanpa harus pengajuan lagi dengan nominal dan tenor
                            yang sama. Tetapi, bunga akan digabungkan dengan pokok setelah jatuh tempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=" mx-5 my-2 border rounded-depo shadow-sm bg-white">
        <div style="background-color: #12264b;" class="card-header text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm fw-normal">
                        Deposito 12 Bulan
                    </div>
                    <div class="col-sm fw-normal">
                        Minimum Deposito
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="card-title text-white">6%</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="card-title text-white">Rp. 1.000.000-</h2>
                    </div>
                    <div class="col-sm">
                        <a href="{{ route('formdeposit') }}"> <button style="background-color: aqua;" type="button"
                                class="btn btn-lg btn-block">
                                <h5 class=" text-black"> Ajukan Deposito </h5>
                            </button> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h4 class="text-black">ARO</h4>
                        <p class="card-text align-middle">Automatic Roll Over (ARO) atau Perpanjang Otomotis adalah fitur
                            untuk memperpanjang langsung deposito Anda tanpa harus pengajuan lagi dengan nominal dan tenor
                            yang sama. Tetapi, bunga akan digabungkan dengan pokok setelah jatuh tempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- card -->
    <div class="border-top "> <br>
        <div class="container">
            <div style="background-color: #0f0a2f;" class="shadow-sm rounded-depo jumbotron">
                <h2 class=" text-center text-white lead font-weight-bold">Simulasi Perhitungan Deposito</h2>
                <hr class="text-white my-2">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group row text-white">
                                    <div class="input-group mb-2">
                                        <label for="nominal" class="col-sm-4 col-form-label">Nominal Saldo</label>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp. </div>
                                        </div>
                                        <input type="text" class="form-control" id="nominal" name="nominal"
                                            placeholder="Min 1 Juta">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">,-</div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label for="jangka" class="col-sm-4 col-form-label">Jangka Waktu (bulan)</label>
                                        <select name="jangka" id="jangka" class="form-control">
                                            <option value="1">1 bulan</option>
                                            <option value="3">3 bulan</option>
                                            <option value="6">6 bulan</option>
                                            <option value="12">12 bulan</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">

                                        </div>
                                    </div>
                                </div>

                            </form>
                            <button style="background-color: red;" class="btn btn-lg text-white font-weight-bold"
                                onclick="hitung()">Hitung</button>
                        </div>
                        <div class="col">
                            <table class="text-white table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Saldo Deposit</td>
                                        <td>
                                            <p id="saldoDeposit"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BUNGA DEPOSITO </td>
                                        <td>
                                            <p id="bungaDeposito"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BUNGA PERBULAN </td>
                                        <td id="bungaPerbulan"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- content -->
    <!-- <div style="margin: 10px 10px; width:90%; height: auto;"
                            class="row row-cols-1 mx-auto row-cols-md-3 text-white p-5">
                            <a href="./deposito-1-bulan.html" class="text-white">
                                <div class="col content-produk my-3 ">
                                    <img style="filter: brightness(50%);border-radius: 80px 10px;" src="./img/Home-1.jpg"
                                        class="card-img shadow bg-body " alt="...">
                                    <div class="card-img-overlay">
                                        <h3 style="color: white;" class="card-title text-center">1 Bulan</h3>
                                        <p class="card-text px-4">Suku bunga yang ditawarkan cukup tinggi, <strong> 5,50% P.A </strong> </p>
                                    </div>
                                </div>
                            </a>
                            <a href="./deposito-3&6-bulan.html" class="text-white">
                                <div class="col content-produk my-3 ">
                                    <img style="filter: brightness(50%);border-radius: 80px 10px;" src="./img/Home-1.jpg"
                                        class="card-img shadow bg-body " alt="...">
                                    <div class="card-img-overlay">
                                        <h3 style="color: white;" class="card-title text-center">3 & 6 Bulan</h3>
                                        <p class="card-text px-4">Suku bunga yang ditawarkan cukup tinggi, <strong> 5,75% P.A </strong> </p>
                                    </div>
                                </div>
                            </a> <a href="./deposito-12-bulan.html" class="text-white">
                                <div class="col content-produk my-3 ">
                                    <img style="filter: brightness(50%);border-radius: 80px 10px;" src="./img/Home-1.jpg"
                                        class="card-img shadow bg-body " alt="...">
                                    <div class="card-img-overlay">
                                        <h3 style="color: white;" class="card-title text-center">12 Bulan</h3>
                                        <p class="card-text px-4">Suku bunga yang ditawarkan cukup tinggi, <strong> 6,00% P.A </strong> </p>
                                    </div>
                                </div>
                            </a>
                        </div> -->



    <!-- <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script> -->


@endsection

@push('script')
    <script type="text/javascript">
        function hitung() {
            let jumlah_deposit = document.getElementById("nominal").value;
            // let jumlah_deposit = Number($('#nominal').val()); field input jumlah deposit required
            let jangka = Number($('#jangka').val()); // 1/3/6/12 dari selected option
            let bunga = 0;

            if (jangka == 1) {
                bunga = 5.50
            } else
            if (jangka == 3) {
                bunga = 5.75
            } else
            if (jangka == 6) {
                bunga = 5.75
            } else
            if (jangka == 12) {
                bunga = 6.0
            }

            // Nominal x 5,50 : 12 - 20% = Hasil
            // let hasil = jumlah_deposit * bunga / 12;
            // let pajak = 20 / 100;
            // let hasilBunga = hasil - pajak;
            let bungaPerbulan = jumlah_deposit * 80 / 100 * bunga / 100 / 12;
            let bungaPerbulanBulat = Math.round(bungaPerbulan);

            // let hsil = jumlah_deposit + bungaPerbulan;

            let formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            // document.getElementById("result").innerHTML = bungaPerbulan;
            document.getElementById("saldoDeposit").innerHTML = formatter.format(jumlah_deposit);
            document.getElementById("bungaDeposito").innerHTML = bunga + "%";
            document.getElementById("bungaPerbulan").innerHTML = formatter.format(bungaPerbulanBulat);


        };

        // function
    </script>
@endpush
