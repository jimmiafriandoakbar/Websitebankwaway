@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <br>    
            <form action="{{ route('agunanPost') }}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-header">Step 3: Data Agunan</div>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>Isi Setidaknya 1</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="KARPEG"
                                                name="jenis_agunan[]" value="KARPEG">
                                            <label class="form-check-label" for="defaultCheck1">
                                                KARPEG
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_karpeg" id="ket_karpeg"
                                            class="form-control @error('ket_karpeg') is-invalid @enderror"
                                            value="{{ old('ket_karpeg', $kreditPegawai->ket_karpeg ?? '') }}"
                                            placeholder="Keterangan KARPEG">
                                        @error('ket_karpeg')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="TASPEN"
                                                name="jenis_agunan[]" value="TASPEN">
                                            <label class="form-check-label" for="defaultCheck1">
                                                TASPEN
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_taspen" id="ket_taspen"
                                            class="form-control @error('ket_taspen') is-invalid @enderror"
                                            value="{{ old('ket_taspen', $kreditPegawai->ket_taspen ?? '') }}"
                                            placeholder="Keterangan TASPEN">
                                        @error('ket_taspen')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="SK80"
                                                name="jenis_agunan[]" value="SK80">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SK 80%
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_sk80" id="ket_sk80"
                                            class="form-control @error('ket_sk80') is-invalid @enderror"
                                            value="{{ old('ket_sk80', $kreditPegawai->ket_sk80 ?? '') }}"
                                            placeholder="Keterangan SK 80%">
                                        @error('ket_sk80')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="SK100"
                                                name="jenis_agunan[]" value="SK100">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SK 100%
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_sk100" id="ket_sk100"
                                            class="form-control @error('ket_sk100') is-invalid @enderror"
                                            value="{{ old('ket_sk100', $kreditPegawai->ket_sk100 ?? '') }}"
                                            placeholder="Keterangan SK 100%">
                                        @error('ket_sk100')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sk"
                                                name="jenis_agunan[]" value="SK">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SK
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_sk" id="ket_sk"
                                            class="form-control @error('ket_sk') is-invalid @enderror"
                                            value="{{ old('ket_sk', $kreditPegawai->ket_sk ?? '') }}"
                                            placeholder="Keterangan SK">
                                        @error('ket_sk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-sm-3 col-form-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lainnya"
                                                name="jenis_agunan[]" value="lainnya">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lainnya
                                            </label>
                                        </div>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket_lainnya" id="ket_lainnya"
                                            class="form-control @error('ket_lainnya') is-invalid @enderror"
                                            value="{{ old('ket_lainnya', $kreditPegawai->ket_lainnya ?? '') }}"
                                            placeholder="Keterangan lainnya">
                                        @error('ket_lainnya')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('step-two-pengajuan-kredit') }}"
                                        class="btn btn-danger pull-right">Previous</a>
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
@endsection

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS (butuh Popper.js sudah termasuk) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            // Ambil tab yang aktif
            var activeTab = document.querySelector('.tab-pane.active');
            // Cari semua input/select/textarea yang ada required di tab aktif
            var requiredFields = activeTab.querySelectorAll('[required]');
            var valid = true;

            requiredFields.forEach(function(field) {
                if (!field.value) {
                    field.classList.add('is-invalid');
                    valid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!valid) {
                e.preventDefault();
                // Fokus ke field pertama yang tidak valid
                requiredFields[0].focus();
            }
        });
    </script>
