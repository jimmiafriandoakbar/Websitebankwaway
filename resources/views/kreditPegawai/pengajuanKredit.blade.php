@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('stepTwoPengajuanKreditPost') }}" method="post">
                @csrf
                <br>
                <div class="card">
                    <div class="card-header">Step 2: Data Pengajuan Kredit</div>

                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="jenis_kredit">Jenis Kredit:</label>
                            <select class="form-control @error('jenis_kredit') is-invalid @enderror" id="jenis_kredit"
                                name="jenis_kredit">
                                <option value="">-- Pilih Jenis Kredit --</option>
                                <option value="Kredit Modal Kerja"
                                    {{ old('jenis_kredit', optional($kreditPegawai)->jenis_kredit ?? '') == 'Kredit Modal Kerja' ? 'selected' : '' }}>
                                    Kredit Modal Kerja</option>
                                <option value="Kredit Investasi"
                                    {{ old('jenis_kredit', optional($kreditPegawai)->jenis_kredit ?? '') == 'Kredit Investasi' ? 'selected' : '' }}>
                                    Kredit Investasi</option>
                                <option value="Kredit Konsumsi"
                                    {{ old('jenis_kredit', optional($kreditPegawai)->jenis_kredit ?? '') == 'Kredit Konsumsi' ? 'selected' : '' }}>
                                    Kredit Konsumsi</option>
                                <option value="Lainnya..."
                                    {{ old('jenis_kredit', optional($kreditPegawai)->jenis_kredit ?? '') == 'Lainnya...' ? 'selected' : '' }}>
                                    Lainnya...</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tujuan">Mengajukan Krdit Ke:</label>
                            <select class="form-control @error('tujuan') is-invalid @enderror" id="tujuan"
                                name="tujuan">
                                <option value="">-- Pilih Tujuan Kantor --</option>
                                <option value="PUSAT"
                                    {{ old('tujuan', optional($kreditPegawai)->tujuan ?? '') == 'PUSAT' ? 'selected' : '' }}>
                                    PUSAT
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal Pinjaman:</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control @error('nominal') is-invalid @enderror"
                                    id="nominal" name="nominal" placeholder="Masukkan Nominal Pinjaman"
                                    value="{{ old('nominal', optional($kreditPegawai)->nominal ?? '') }}">
                            </div>
                            @error('nominal')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jangka_waktu">Jangka Waktu (Bulan):</label>
                            <input type="number" class="form-control @error('jangka_waktu') is-invalid @enderror"
                                id="tasknominal" name="jangka_waktu" placeholder="Masukkan Jangka Waktu"
                                value="{{ old('jangka_waktu', optional($kreditPegawai)->nominal ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="tujuan_pengajuan_kredit">Tujuan Pengajuan Kredit:</label>
                            <input type="text"
                                class="form-control @error('tujuan_pengajuan_kredit') is-invalid @enderror"
                                id="tujuan_pengajuan_kredit" name="tujuan_pengajuan_kredit"
                                value="{{ optional($kreditPegawai)->tujuan_pengajuan_kredit ?? '' }}"
                                placeholder="Masukkan Tujuan Pengajuan Kredit">
                        </div>
                        <div class="form-group">
                            <label for="pinjaman_kur">Apakah ada Pinjaman KUR di Bank atau Lembaga Keuangan Lainnya:</label>
                            <input type="text"
                                class="form-control @error('pinjaman_kur') is-invalid @enderror"
                                id="pinjaman_kur" name="pinjaman_kur"
                                value="{{ optional($kreditPegawai)->pinjaman_kur ?? '' }}"
                                placeholder="Harap isi Ya atau Tidak">
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('stepOnePemohon') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<script>
    const nominalInput = document.getElementById('nominal');

    nominalInput.addEventListener('keyup', function (e) {
        let value = this.value.replace(/\D/g, ''); // hanya angka
        let formatted = new Intl.NumberFormat('id-ID').format(value);
        this.value = formatted;
    });

    // Saat submit, hapus format biar ke server tetap angka
    document.querySelector('form').addEventListener('submit', function () {
        nominalInput.value = nominalInput.value.replace(/\D/g, '');
    });
</script>
@endsection