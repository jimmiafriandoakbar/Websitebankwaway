@extends('guest.partials.layout')

@section('title', 'WBS')

@section('content')

    <style>
        .rounded-depo {
            border-radius: 20px 40px;
        }
    </style>

    <div class="container my-2">

        <div class="row justify-content-center">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="col-md-10">
                <form action="{{ route('wbsPost') }}" method="post" enctype="multipart/form-data">
                    {{-- CSRF Token --}}
                    @csrf

                    <div class="card">
                        <div class="card-header ">
                            <center>FORM ISIAN LAPORAN WHISTLEBLOWING SYSTEM</center>
                        </div>

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
                                <label for="ktp">Nomor Identitas KTP Pelapor: <span
                                        style="color: red;">*required</span></label>
                                <input type="text" class="form-control @error('ktp') is-invalid @enderror" id="ktp"
                                    name="ktp" placeholder="Masukkan Nomor Identitas KTP Pelapor">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone Pelapor: <span
                                        style="color: red;">*required</span></label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone Pelapor">
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email: <span style="color: red;">*required</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <p class="font-italic"> Kriteria Laporan : (pilih
                                    kriteria isi
                                    pelaporan) <span style="color: red;">*required</span> </p>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="penipuan" name="kriteria[]" value="Penipuan">
                                            </div>
                                        </div>
                                        <input type="text"
                                            class="form-control @error('kriteria')
                                        is-invalid
                                    @enderror"
                                            aria-label="Text input with checkbox" placeholder="Penipuan" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="kecurangan" name="kriteria[]" value="Kecurangan">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Kecurangan" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="penggelaran_aset" name="kriteria[]" value="Penggelaran Aset">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Penggelaran Aset" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="pembocoran_informasi" name="kriteria[]"
                                                    value="Pembocoran Informasi">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Pembocoran Informasi" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="kesalahan_operasional" name="kriteria[]"
                                                    value="Kesalahan Operasional">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Kesalahan Operasional" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="pelanggaran" name="kriteria[]" value="Pelanggaran">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Pelanggaran" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="suap/gratifikasi" name="kriteria[]" value="Suap/gratifikasi">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Suap/gratifikasi" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input"
                                                    id="penyalahgunaan_jabatan" name="kriteria[]"
                                                    value="Penyalahgunaan Jabatan">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            placeholder="Penyalahgunaan Jabatan" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control " id="lain-lain" name="kriteria[]"
                                            placeholder="Lain-lain">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_pelapor">Nama Pelapor: <span style="color: red;">*required</span></label>
                                <input type="text" class="form-control @error('nama_pelapor') is-invalid @enderror"
                                    id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan Nama Pelapor">
                            </div>

                            <div class="form-group">
                                <label for="jabatan_pelapor">Jabatan Pelapor: </label>
                                <input type="text" class="form-control @error('jabatan_pelapor') is-invalid @enderror"
                                    id="jabatan_pelapor" name="jabatan_pelapor" placeholder="Masukkan Jabatan Pelapor">
                            </div>

                            <div class="form-group">
                                <label for="waktu_kejadian">Waktu Kejadian:</label>
                                <input type="date" class="form-control @error('waktu_kejadian') is-invalid @enderror"
                                    id="waktu_kejadian" name="waktu_kejadian" placeholder="Masukkan Waktu Kejadian">
                            </div>

                            <div class="form-group">
                                <label for="kronologi_kejadian">Kronologi Kejadian:</label>
                                <textarea type="text" class="form-control @error('kronologi_kejadian') is-invalid @enderror"
                                    id="kronologi_kejadian" name="kronologi_kejadian" placeholder="Masukkan Kronologi Kejadian"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="lampiran">Lampiran: <span style="color: red;">*mimes:pdf,jpg,jpeg,png. Max
                                        2MB</span></label>
                                <input type="file" class="form-control @error('lampiran') is-invalid @enderror"
                                    id="lampiran" name="lampiran" placeholder="Masukkan Lampiran">
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">

                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
