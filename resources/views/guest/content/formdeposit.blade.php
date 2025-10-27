@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <style>
        .rounded-depo {
            border-radius: 20px 40px;
        }
    </style>
    <div class="pt-5 pb-5" style="background-color: #dfe9f3;">
        <h3 class="pb-4 text-center text-black">Formulir Pengajuan Deposito</h3>
        {{-- <div class="mb-3 container">
            <center>
                @if (Session::has('errors'))
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }} <i class="fas fa-exclamation-triangle"></i></p>
                        @endforeach
                    </div>
                @endif
            </center>
        </div> --}}

        <div class="mb-5 container mx-auto card rounded-depo">
            <form action="{{ route('formdepositSubmit') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label font-weight-bold">Nama Lengkap Anda</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="formGroupExampleInput" placeholder="Masukan nama lengkap Anda disini"
                            value="{{ old('nama') }}">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label font-weight-bold">No Handphone</label>
                            <input type="text" name="nomorTlp"
                                class="form-control @error('nomorTlp') is-invalid @enderror"
                                placeholder="Contoh: 0818 8181 5555" aria-label="Contoh: 0818 8181 5555" min="11"
                                max="13" value="{{ old('nomorTlp') }}">
                            @error('nomorTlp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label font-weight-bold">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Contoh: Deposito@gmail.com" aria-label="Contoh: Deposito@gmail.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label font-weight-bold">Provinsi Domisili</label>
                        <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror"
                            id="formGroupExampleInput" placeholder="Provinsi domisili Anda" value="{{ old('provinsi') }}">
                        @error('provinsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" name="kota"
                            class="form-label font-weight-bold @error('kota') is-invalid @enderror">Kota/Kabupaten
                            Domisili</label>
                        <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror"
                            id="formGroupExampleInput" placeholder="Kota domisili Anda" value="{{ old('kota') }}">
                        @error('kota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p class="card-text text-danger">*Tim kami akan segera memproses permintaan Anda. Mohon bersabar
                        sejenak, karena kami akan segera menghubungi Anda setelah informasi Anda diverifikasi.</p>
                    <button type="submit" style="background-color: #0f0a2f;" href="#"
                        class="btn btn-primary font-weight-bold">Buka
                        Deposito</button>
                </div>
            </form>
        </div>

    </div>

    <div> <br>
        <div class="mt-5 container">
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
                            <button style="background-color: #df0124;" class="btn btn-lg text-white font-weight-bold"
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
