@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('stepOnePemohonPost') }}" method="post">
                @csrf
<br>
                <div class="card">
                    <div class="card-header">Step 1: Pemohon</div>

                    <div class="card-body">
                        {{-- Error Validation --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- NIK --}}
                        <div class="form-group row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" id="nik"
                                    class="form-control @error('nik') is-invalid @enderror"
                                    placeholder="Masukkan NIK"
                                    value="{{ old('nik', is_array($kreditPegawai) ? $kreditPegawai['nik'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->nik ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Nama Lengkap --}}
                        <div class="form-group row mb-3">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    placeholder="Masukkan Nama Lengkap"
                                    value="{{ old('nama_lengkap', is_array($kreditPegawai) ? $kreditPegawai['nama_lengkap'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->nama_lengkap ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Nama Panggilan --}}
                        <div class="form-group row mb-3">
                            <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_panggilan" id="nama_panggilan"
                                    class="form-control @error('nama_panggilan') is-invalid @enderror"
                                    placeholder="Masukkan Nama Panggilan"
                                    value="{{ old('nama_panggilan', is_array($kreditPegawai) ? $kreditPegawai['nama_panggilan'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->nama_panggilan ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Tempat Lahir --}}
                        <div class="form-group row mb-3">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    placeholder="Masukkan Tempat Lahir"
                                    value="{{ old('tempat_lahir', is_array($kreditPegawai) ? $kreditPegawai['tempat_lahir'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->tempat_lahir ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Tanggal Lahir --}}
                        <div class="form-group row mb-3">
                            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tgl_lahir" id="tgl_lahir"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror"
                                    value="{{ old('tgl_lahir', is_array($kreditPegawai) ? $kreditPegawai['tgl_lahir'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->tgl_lahir ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Alamat --}}
                        <div class="form-group row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" id="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    placeholder="Masukkan Alamat">{{ old('alamat', is_array($kreditPegawai) ? $kreditPegawai['alamat'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->alamat ?? '' : '')) }}</textarea>
                            </div>
                        </div>

                        {{-- No Telepon --}}
                        <div class="form-group row mb-3">
                            <label for="no_tlp" class="col-sm-2 col-form-label">No. Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_tlp" id="no_tlp"
                                    class="form-control @error('no_tlp') is-invalid @enderror"
                                    placeholder="Masukkan No. Telepon"
                                    value="{{ old('no_tlp', is_array($kreditPegawai) ? $kreditPegawai['no_tlp'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->no_tlp ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- Pekerjaan --}}
                        <div class="form-group row mb-3">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pekerjaan" id="pekerjaan"
                                    class="form-control @error('pekerjaan') is-invalid @enderror"
                                    placeholder="Masukkan Pekerjaan"
                                    value="{{ old('pekerjaan', is_array($kreditPegawai) ? $kreditPegawai['pekerjaan'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->pekerjaan ?? '' : '')) }}">
                            </div>
                        </div>

                        {{-- AO --}}
                        <div class="form-group row mb-3">
                            <label for="account_officer" class="col-sm-2 col-form-label">Account Officer</label>
                            <div class="col-sm-10">
                                <input type="text" name="account_officer" id="account_officer"
                                    class="form-control @error('account_officer') is-invalid @enderror"
                                    placeholder="Masukkan Nama Account Officer"
                                    value="{{ old('account_officer', is_array($kreditPegawai) ? $kreditPegawai['account_officer'] ?? '' : (isset($kreditPegawai) ? $kreditPegawai->account_officer ?? '' : '')) }}">
                            </div>
                        </div>
                    </div> {{-- end card-body --}}

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div> {{-- end card --}}
            </form>
            <br>
        </div>
    </div>
</div>
@endsection
