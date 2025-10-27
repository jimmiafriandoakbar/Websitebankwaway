@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <style>
        .rounded-depo {
            border-radius: 20px 40px;
        }
    </style>
    <style>
        .step-form {
            display: none;
        }

        .step-form.active {
            display: block;
        }

        .captcha-box {
            height: 45px;
            width: 100px;
            background: #f2f2f2;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 45px;
            font-family: monospace;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 3px;
            user-select: none;
        }

        .captcha-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .error-text {
            color: red;
            margin-top: 5px;
            font-size: 0.9em;
            display: none;
        }
    </style>

    @include('sweetalert::alert')

    <div class="container mt-5">

        <form id="multiStepForm" method="POST" action="">
            @csrf

            <!-- STEP 1 -->
            <div class="step-form active" id="step1">
                <h5>Data Pemohon</h5>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                            required>
                        @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap"
                            class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                        @error('nama_lengkap')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Panggilan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_panggilan"
                            class="form-control @error('nama_panggilan') is-invalid @enderror" required>
                        @error('nama_panggilan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempat_lahir"
                            class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                        @error('tempat_lahir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_lahir"
                            class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                        @error('tgl_lahir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Tinggal</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat_tinggal"
                            class="form-control @error('alamat_tinggal') is-invalid @enderror" required>
                        @error('alamat_tinggal')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror"
                            required>
                        @error('no_tlp')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" name="pekerjaan" class="form-control @error('no_tlp') is-invalid @enderror"
                            required>
                        @error('pekerjaan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2 d-flex justify-content-between">
                        <a href="{{ url('/formKreditPegawai') }}" class="btn btn-light"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                        <button type="button" class="btn btn-success" onclick="nextStep(2)">Selanjutnya</button>
                    </div>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="step-form" id="step2">
                <h5>Data Pengajuan Kredit</h5>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Jenis Kredit -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kredit</label>
                                <div class="col-sm-9">
                                    <select name="jenis_kredit" id="jenis_kredit"
                                        class="form-control select2-hidden-accessible @error('jenis_kredit') is-invalid @enderror"
                                        required>
                                        <option value="">Pilih Jenis Kredit</option>
                                        <option value="72">KREDIT PEGAWAI</option>
                                        <option value="73">KREDIT UMUM</option>
                                        <option value="76">KREDIT MULTIGUNA</option>
                                        <option value="77">KREDIT IBADAH HAJI</option>
                                        <option value="79">KREDIT SERTIFIKASI PENDIDIK</option>
                                        <option value="82">KREDIT PERANGKAT DESA</option>
                                        <option value="85">KREDIT UMROH</option>
                                        <option value="94">KREDIT KURDA</option>
                                    </select>
                                    @error('jenis_kredit')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Kantor Tujuan -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mengajukan Kredit Ke</label>
                                <div class="col-sm-9">
                                    <select name="kantor_tujuan" id="kantor_tujuan"
                                        class="form-control select2-hidden-accessible @error('kantor_tujuan') is-invalid @enderror"
                                        required>
                                        <option value="">Pilih Kantor Tujuan</option>
                                        <option value="01" selected>PT BPR WAWAY LAMPUNG</option>
                                    </select>
                                    @error('kantor_tujuan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nominal Pinjaman -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nominal Pinjaman</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="number" name="nominal_pinjaman"
                                            class="form-control @error('nominal_pinjaman') is-invalid @enderror" required>
                                        @error('nominal_pinjaman')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Jangka Waktu -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jangka Waktu</label>
                                <div class="col-sm-9">
                                    <select name="jangka_waktu" id="Jangka_Waktu"
                                        class="form-control select2-hidden-accessible @error('jangka_waktu') is-invalid @enderror"
                                        required>
                                        <option value="">Pilih Jangka Waktu</option>
                                        <option value="6">6</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="28">28</option>
                                    </select>
                                    @error('jangka_waktu')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tujuan Pengajuan Kredit -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tujuan Pengajuan Kredit</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tujuan_kredit"
                                        class="form-control formtab @error('tujuan_kredit') is-invalid @enderror"
                                        placeholder="Contoh: Modal Usaha, Pendidikan, Renovasi Rumah" required>
                                    @error('tujuan_kredit')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2 d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="nextStep(1)">← Kembali</button>
                        <button type="button" class="btn btn-success" onclick="nextStep(3)">Selanjutnya</button>
                    </div>
                </div>

            </div>

            <!-- STEP 3 -->
            <div class="step-form" id="step3">
                <div class="card-body">
                    <h4 class="card-title">Data Agunan Pinjaman</h4>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Agunan</label>
                        <div class="col-sm-9">
                            <select name="agunan" class="form-control @error('agunan') is-invalid @enderror"
                                onchange="pilihAgunan(this.value)">
                                <option value="">Pilih Agunan</option>
                                <option value="1">BPKB Kendaraan</option>
                                <option value="2">Sertifikat Tanah/Bangunan</option>
                                <option value="4">Tanpa Agunan</option>
                                <option value="3">Lainnya</option>
                            </select>
                            @error('agunan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- FORM AGUNAN BPKB -->
                    <div id="form-bpkb" class="agunan-form" style="display: none;">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kendaraan</label>
                            <div class="col-sm-9">
                                <select name="jenis_kendaraan"
                                    class="form-control @error('jenis_kendaraan') is-invalid @enderror">
                                    <option value="">Pikih Kendaraan</option>
                                    <option value="Mobil">Mobil</option>
                                    <option value="Sepeda Motor">Sepeda Motor</option>
                                </select>
                                @error('jenis_kendaraan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Merek</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek"
                                    class="form-control @error('merek') is-invalid @enderror" name="merek" required>
                                @error('merek')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_kendaraan"
                                    class="form-control @error('merek') is-invalid @enderror" name="tahun_kendaraan"
                                    required>
                                @error('tahun_kendaraan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Polisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_polisi"
                                    class="form-control @error('no_polisi') is-invalid @enderror" required>
                                @error('no_polisi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Pemilik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pemilik"
                                    class="form-control @error('nama_pemilik') is-invalid @enderror" required>
                                @error('nama_pemilik')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- FORM AGUNAN SERTIFIKAT -->
                    <div id="form-sertifikat" class="agunan-form" style="display: none;">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Sertifikat</label>
                            <div class="col-sm-9">
                                <select name="jenis_sertifikat"
                                    class="form-control @error('jenis_sertifikat') is-invalid @enderror">
                                    <option value="">Pilih Satu</option>
                                    <option value="SHM">SHM</option>
                                    <option value="SHGB">SHGB</option>
                                </select>
                                @error('jenis_sertifikat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Luas Tanah</label>
                            <div class="col-sm-9">
                                <input type="number" name="luas_tanah"
                                    class="form-control @error('luas_tanah') is-invalid @enderror" placeholder="m2">
                                @error('luas_tanah')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Atas Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_sertifikat"
                                    class="form-control @error('nama_sertifikat') is-invalid @enderror" required>
                                @error('nama_sertifikat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- FORM TANPA AGUNAN -->
                    <div id="form-tanpa" class="agunan-form" style="display: none;">
                        <div class="alert alert-danger">Anda tidak memilih agunan fisik.</div>
                    </div>

                    <!-- FORM LAINNYA -->
                    <div id="form-lainnya" class="agunan-form" style="display: none;">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan Agunan</label>
                            <div class="col-sm-9">
                                <textarea name="keterangan_agunan" class="form-control @error('keterangan_agunan') is-invalid @enderror"></textarea>
                                @error('keterangan_agunan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2 d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="nextStep(2)">← Kembali</button>
                            <button type="button" class="btn btn-success" onclick="nextStep(4)">Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step-form" id="step4">
                <div class="card-body">
                    <h4 class="card-title" style="margin-top: 0px">Finalisasi Data Kredit</h4>
                    <p>
                        Dengan menandatangani form pengajuan ini, maka anda telah setuju dengan syarat dan ketentuan yang
                        berlaku di Bank WAWAY
                    </p>
                    <input type="hidden" name="_token" value="EkuIwhZ03wzg3e6dCIVenH1eLalr6KvWkY4Lp9IF">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Upload KTP</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" accept="image/*" required name="ktp"
                                            class="form-control @error('keterangan_agunan') is-invalid @enderror"
                                            id="customFile" onchange="previewKTP(event)">
                                        @error('ktp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="mt-2">
                                        <img id="ktpPreview" src="#" alt="Preview KTP"
                                            style="display: none; max-width: 300px; max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2 d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="nextStep(3)">←
                                        Kembali</button>
                                    <button type="submit" class="btn btn-success">Selanjutnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    @endsection

    @push('script')
        <script>
            function nextStep(step) {
                const steps = document.querySelectorAll(".step-form");
                steps.forEach(s => s.classList.remove("active"));
                document.getElementById("step" + step).classList.add("active");
            }

            const jenisSelect = document.getElementById("jenisAgunan");
            const sections = document.querySelectorAll(".form-section");

            jenisSelect.addEventListener("change", function() {
                sections.forEach(section => section.classList.remove("active"));
                const selected = this.value;
                const activeForm = document.getElementById(`form-${selected}`);
                if (activeForm) activeForm.classList.add("active");
            });

            function pilihAgunan(value) {
                // Sembunyikan semua form agunan
                document.querySelectorAll('.agunan-form').forEach(function(el) {
                    el.style.display = 'none';
                });

                // Tampilkan form sesuai pilihan
                if (value == "1") {
                    document.getElementById('form-bpkb').style.display = 'block';
                } else if (value == "2") {
                    document.getElementById('form-sertifikat').style.display = 'block';
                } else if (value == "4") {
                    document.getElementById('form-tanpa').style.display = 'block';
                } else if (value == "3") {
                    document.getElementById('form-lainnya').style.display = 'block';
                }
            }

            // Auto trigger saat reload (default)
            document.addEventListener('DOMContentLoaded', function() {
                const defaultAgunan = document.querySelector('select[name="agunan"]').value;
                pilihAgunan(defaultAgunan);
            });

            function previewKTP(event) {
                const input = event.target;
                const preview = document.getElementById('ktpPreview');
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @endpush
