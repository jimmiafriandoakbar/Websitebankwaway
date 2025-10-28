@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{ route('uploadKtpPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">Step 4: Data Pengajuan Kredit</div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Aturan Upload File
                    </div>
                    <div class="card-body">
                        <p><strong>required:</strong> Wajib diisi, tidak boleh kosong.</p>
                        <p><strong>image:</strong> File harus berupa gambar.</p>
                        <p><strong>mimes: jpeg, png, jpg, gif:</strong> Format file yang diperbolehkan hanya jpeg, png, jpg,
                            atau gif.</p>
                        <p><strong>max: 2048:</strong> Ukuran file maksimal 2 MB.</p>
                    </div>
                </div>


                <div class="card-body">
                    <div class="form-group row">
                        <label for="ktp" class="col-sm-2 col-form-label">Upload KTP</label>
                        <div class="col-sm-10">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error('ktp') is-invalid @enderror"
                                    id="ktp" name="ktp" accept="image/*" onchange="previewKtp(event)" required>
                                <label class="custom-file-label" for="ktp">Choose file</label>
                                @error('ktp')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <img id="ktp-preview" src="{{ asset('img/imgktp.jpg') }}" alt="Preview KTP"
                                    style="max-width:200px;max-height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kartu_keluarga" class="col-sm-2 col-form-label">Upload Kartu Keluarga</label>
                        <div class="col-sm-10">
                            <div class="custom-file mb-3">
                                <input type="file"
                                    class="custom-file-input @error('kartu_keluarga') is-invalid @enderror"
                                    id="kartu_keluarga" name="kartu_keluarga" accept="image/*"
                                    onchange="previewKartu_keluarga(event)">
                                <label class="custom-file-label" for="ktp">Choose file</label>
                                @error('kartu_keluarga')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <img id="kartukeluarga-preview" src="{{ asset('img/kartu_keluarga.jpg') }}"
                                    alt="Preview kartu Keluarga" style="max-width:200px;max-height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surat_nikah" class="col-sm-2 col-form-label">Upload Surat Nikah</label>
                        <div class="col-sm-10">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error('surat_nikah') is-invalid @enderror"
                                    id="surat_nikah" name="surat_nikah" accept="image/*"
                                    onchange="previewSurat_nikah(event)">
                                <label class="custom-file-label" for="ktp">Choose file</label>
                                @error('surat_nikah')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <img id="suratnikah-preview" src="{{ asset('img/surat_nikah.jpg') }}"
                                    alt="Preview Surat Nikah" style="max-width:200px;max-height:200px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="izin_usaha" class="col-sm-2 col-form-label">Upload Jenis Izin Usaha</label>
                        <div class="col-sm-10">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error('izin_usaha') is-invalid @enderror"
                                    id="izin_usaha" name="izin_usaha" accept="image/*" onchange="previewIzin_usaha(event)">
                                <label class="custom-file-label" for="ktp">Choose file</label>
                                @error('izin_usaha')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <img id="izinusaha-preview" src="{{ asset('img/izin_usaha.jpg') }}" alt="Preview Izin Usaha"
                                    style="max-width:200px;max-height:200px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <a href="{{ route('agunan') }}" class="btn btn-danger pull-right">Previous</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <script>
        function previewKtp(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('ktp-preview').src = URL.createObjectURL(file);
            }
        }

        function previewKartu_keluarga(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('kartukeluarga-preview').src = URL.createObjectURL(file);
            }
        }

        function previewSurat_nikah(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('suratnikah-preview').src = URL.createObjectURL(file);
            }
        }

        function previewIzin_usaha(event) {
            const [file] = event.target.files;
            if (file) {
                document.getElementById('izinusaha-preview').src = URL.createObjectURL(file);
            }
        }
    </script>
@endsection
