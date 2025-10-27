@include('admin.partials.head')

@section('title', 'Page Title')



<body>
    <div class="container">
        <div class="card my-3 border-primary">
            <div class="card-header">
                <div class="row">

                    <div class="col">
                        <a href="{{ url('/profile') }}">
    <img src="{{ asset('assetGuest/img/logo-website.png') }}" class="img-fluid" width="320" alt="Logo">
</a>
                            
                    </div>
                    <!-- <div class="col">-->
                    <!--    <img src="{{ asset('assetGuest/img/debug.png') }}" class="img-fluid" alt=""-->
                    <!--        style="position: fixed; top: 0; right: 0; width:80px; height:80px">-->
                    <!--</div> -->
                </div>
            </div>
            <div class="alert bg-info" role="alert">
                <h3 class="font-weight-bold text-center">Permohonan Pembukaan <br> Rekening Perorangan</h3>
            </div>
            <a href="{{ url()->previous() }}">⬅ Kembali</a>
            <form action="{{ route('pembukaanRekeningPost') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Anda Harus mengisi data dengan lengkap
                    </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <div class="card card-info">
                                <div class="card-header" style="background: rgb(60, 3, 93)">
                                    <h3 class="card-title">Informasi Pribadi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend center">
                                            <span class="input-group-text"><span
                                                    class="text-danger font-weight-bold">&ast;</span> Nama
                                                Lengkap</span>
                                        </div>
                                        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                            class="form-control {{ $errors->has('nama_lengkap') ? ' is-invalid' : '' }}"
                                            placeholder="Nama Lengkap Tanpa Gelar">
                                        @if ($errors->has('nama_lengkap'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            {{ $errors->first('nama_lengkap') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend center">
                                            <span class="input-group-text">Nama Alias</span>
                                        </div>
                                        <input type="text" name="nama_alias" value="{{ old('nama_alias') }}"
                                            class="form-control {{ $errors->has('nama_alias') ? ' is-invalid' : '' }}"
                                            placeholder="Nama Alias">
                                        @if ($errors->has('nama_alias'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            {{ $errors->first('nama_alias') }}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="">
                                        <div class="form-group">
                                            <select name="kartu_identitas" value="{{ old('kartu_identitas') }}"
                                                class="form-control {{ $errors->has('kartu_identitas') ? ' is-invalid' : '' }}">
                                                <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Identitas
                                            </option>
                                                <option value="KTP"
                                                    {{ old('kartu_identitas') == 'KTP' ? 'selected' : '' }}>KTP
                                                </option>
                                                <option value="SIM"
                                                    {{ old('kartu_identitas') == 'SIM' ? 'selected' : '' }}>SIM
                                                </option>
                                                <option value="Paspor"
                                                    {{ old('kartu_identitas') == 'Paspor' ? 'selected' : '' }}>Paspor
                                                </option>
                                            </select>
                                            @if ($errors->has('kartu_identitas'))
                                            <div id="validationServer05Feedback" class="invalid-feedback">
                                                {{ $errors->first('kartu_identitas') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend center">
                                            <span class="input-group-text"><span
                                                    class="text-danger font-weight-bold">&ast;</span>Nomor Identitas
                                            </span>
                                        </div>
                                        <input type="number" name="no_identitas" value="{{ old('no_identitas') }}"
                                            class="form-control {{ $errors->has('no_identitas') ? ' is-invalid' : '' }}"
                                            placeholder="Nomor Kartu">
                                        @if ($errors->has('no_identitas'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            {{ $errors->first('no_identitas') }}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend center">
                                            <span class="input-group-text"><span
                                                    class="text-danger font-weight-bold">&ast;</span>Alamat</span>
                                        </div>
                                        <textarea type="text" row="3" name="alamat_identitas"
                                            class="form-control {{ $errors->has('alamat_identitas') ? ' is-invalid' : '' }}"
                                            placeholder="Alamat Sesuai Identitas">{{ old('alamat_identitas') ? old('alamat_identitas') : '' }}</textarea>
                                        @if ($errors->has('alamat_identitas'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            {{ $errors->first('alamat_identitas') }}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="">
                                                <div class="form-group">
                                                    <input list="kelurahann" name="kelurahan"
                                                        value="{{ old('kelurahan') }}"
                                                        class="form-control {{ $errors->has('kelurahan') ? ' is-invalid' : '' }}"
                                                        placeholder="*Kelurahan">
                                                    <datalist id="kelurahann">
                                                        @foreach ($kelurahan as $item)
                                                        <option value="{{ $item->nama }}"
                                                            {{ old('kelurahan') == '$item->nama' ? 'selected' : '' }}>
                                                            {{ $item->nama }}</option>
                                                        @endforeach
                                                    </datalist>
                                                    @if ($errors->has('kelurahan'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('kelurahan') }}
                                                    </div> 
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="">
                                                <div class="form-group">
                                                    <input list="kecamatann" name="kecamatan"
                                                        value="{{ old('kecamatan') }}"
                                                        class="form-control {{ $errors->has('kecamatan') ? ' is-invalid' : '' }}"
                                                        placeholder="*Kecamatan">
                                                    <datalist id="kecamatann">
                                                        @foreach ($kecamatan as $item)
                                                        <option value="{{ $item->nama }}"
                                                            {{ old('kecamatan') == '$item->nama' ? 'selected' : '' }}>
                                                            {{ $item->nama }}</option>
                                                        @endforeach
                                                    </datalist>
                                                    @if ($errors->has('kecamatan'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('kecamatan') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="">
                                                <div class="form-group">
                                                    <input list="kab/kotaa" name="kab/kota"
                                                        value="{{ old('kab/kota') }}"
                                                        class="form-control {{ $errors->has('kab/kota') ? ' is-invalid' : '' }}"
                                                        placeholder="*Kabupaten/Kota">
                                                    <datalist id="kab/kotaa">
                                                        @foreach ($kabKota as $item)
                                                        <option value="{{ $item->nama }}"
                                                            {{ old('kab/kota') == '$item->nama' ? 'selected' : '' }}>
                                                            {{ $item->nama }}</option>
                                                        @endforeach
                                                    </datalist>
                                                    @if ($errors->has('kab/kota'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('kab/kota') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="">
                                                <div class="form-group">
                                                    <input list="kodePos" name="kodePos" value="{{ old('kodePos') }}"
                                                        class="form-control {{ $errors->has('kodePos') ? ' is-invalid' : '' }}"
                                                        placeholder="*Kode Pos">
                                                    <datalist id="kodePos">
                                                        @foreach ($kodePos as $item)
                                                        <option value="{{ $item->kode_pos }}"
                                                            {{ old('kodePos') == '$item->kode_pos' ? 'selected' : '' }}>
                                                            {{ $item->kode_pos }}</option>
                                                        @endforeach
                                                    </datalist>
                                                    @if ($errors->has('kodePos'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('kodePos') }}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend center">
                                            <span class="input-group-text"><span
                                                    class="font-weight-bold text-danger">&ast;</span>Tanggal
                                                Lahir</span>
                                        </div>
                                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                            class="form-control {{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}"
                                            placeholder="Nama Gadis Ibu Kandung">
                                        @if ($errors->has('tanggal_lahir'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            {{ $errors->first('tanggal_lahir') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="">
                                        <div class="form-group">
                                            <input list="tempat_lahirr" name="tempat_lahir" id="tempat_lahir"
                                                value="{{ old('tempat_lahir') }}"
                                                class="form-control {{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}"
                                                placeholder="*Tempat Lahir Kabupaten/Kota">
                                            <datalist id="tempat_lahirr">
                                                @foreach ($kabKota as $item)
                                                <option value="{{ $item->nama }}">
                                                    @endforeach
                                            </datalist>
                                            @if ($errors->has('tempat_lahir'))
                                            <div id="validationServer05Feedback" class="invalid-feedback">
                                                {{ $errors->first('tempat_lahir') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                            class="form-control {{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Jenis Kelamin
                                            </option>
                                            <option value="Pria" {{ old('jenis_kelamin') == 'Pria' ? 'selected' : '' }}>
                                                Laki-Laki
                                            </option>
                                            <option value="Wanita"
                                                {{ old('jenis_kelamin') == 'Wanita' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('jenis_kelamin') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <select name="status_perkawinan" value="{{ old('status_perkawinan') }}"
                                            class="form-control {{ $errors->has('status_perkawinan') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Status Perkawinan
                                            </option>
                                            <option value="lajang"
                                                {{ old('status_perkawinan') == 'lajang' ? 'selected' : '' }}>Lajang
                                            </option>
                                            <option value="menikah"
                                                {{ old('status_perkawinan') == 'menikah' ? 'selected' : '' }}>Menikah
                                            </option>
                                            <option value="duda/janda"
                                                {{ old('status_perkawinan') == 'duda/janda' ? 'selected' : '' }}>
                                                Duda/Janda</option>
                                        </select>
                                        @if ($errors->has('status_perkawinan'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('status_perkawinan') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text"><span
                                                class="font-weight-bold text-danger">&ast;</span>Nama Gadis Ibu
                                            Kandung</span>
                                    </div>
                                    <input type="text" name="nama_gadis_ibu_kandung"
                                        value="{{ old('nama_gadis_ibu_kandung') }}"
                                        class="form-control {{ $errors->has('nama_gadis_ibu_kandung') ? ' is-invalid' : '' }}"
                                        placeholder="Nama Gadis Ibu Kandung">
                                    @if ($errors->has('nama_gadis_ibu_kandung'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('nama_gadis_ibu_kandung') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <select name="agama" value="{{ old('agama') }}"
                                            class="form-control {{ $errors->has('agama') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Agama</option>
                                            <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>
                                                Islam</option>
                                            <option value="Protestan"
                                                {{ old('agama') == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                            <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>
                                                Katolik</option>
                                            <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>
                                                Hindu</option>
                                            <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>
                                                Budha</option>
                                            <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>
                                                Konghucu</option>
                                            <option value="Lainnya" {{ old('agama') == 'Lainnya' ? 'selected' : '' }}>
                                                Lainnya</option>
                                        </select>
                                        @if ($errors->has('agama'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('agama') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <select name="kewarganegaraan" value="{{ old('kewarganegaraan') }}"
                                            class="form-control {{ $errors->has('kewarganegaraan') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>kewarganegaraan
                                            </option>
                                            <option value="Indonesia"
                                                {{ old('kewarganegaraan') == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                            </option>
                                            <option value="Asing"
                                                {{ old('kewarganegaraan') == 'Asing' ? 'selected' : '' }}>Asing
                                            </option>
                                        </select>
                                        @if ($errors->has('kewarganegaraan'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('kewarganegaraan') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text">Nomor NPWP </span>
                                    </div>
                                    <input type="number" name="npwp" value="{{ old('npwp') }}"
                                        class="form-control {{ $errors->has('npwp') ? ' is-invalid' : '' }}"
                                        placeholder="NPWP">
                                    @if ($errors->has('npwp'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('npwp') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <select name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}"
                                            class="form-control {{ $errors->has('pendidikan_terakhir') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Pendidikan
                                                Terakhir</option>
                                            <option value="SD"
                                                {{ old('pendidikan_terakhir') == 'SD' ? 'selected' : '' }}>SD</option>
                                            <option value="SMP"
                                                {{ old('pendidikan_terakhir') == 'SMP' ? 'selected' : '' }}>SMP
                                            </option>
                                            <option value="SMA/SLTA"
                                                {{ old('pendidikan_terakhir') == 'SMA/SLTA' ? 'selected' : '' }}>
                                                SMA/SLTA</option>
                                            <option value="Diploma"
                                                {{ old('pendidikan_terakhir') == 'Diploma' ? 'selected' : '' }}>Diploma
                                            </option>
                                            <option value="S1"
                                                {{ old('pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>S1</option>
                                            <option value="S2"
                                                {{ old('pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>S2</option>
                                            <option value="S3"
                                                {{ old('pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>S3</option>
                                        </select>
                                        @if ($errors->has('pendidikan_terakhir'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pendidikan_terakhir') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text"><span
                                                class="font-weight-bold text-danger">&ast;</span>Nomor Telepon </span>
                                    </div>
                                    <input type="number" name="no_tlpn" value="{{ old('no_tlpn') }}"
                                        class="form-control {{ $errors->has('no_tlpn') ? ' is-invalid' : '' }}"
                                        placeholder="NO TLP">
                                    @if ($errors->has('no_tlpn'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('no_tlpn') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text"><span
                                                class="font-weight-bold text-danger">&ast;</span>Nomor HP </span>
                                    </div>
                                    <input type="number" name="no_hp" value="{{ old('no_hp') }}"
                                        class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}"
                                        placeholder="NO HP">
                                    @if ($errors->has('no_hp'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('no_hp') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text"><span
                                                class="font-weight-bold text-danger">&ast;</span>Email</span>
                                    </div>
                                    <input type="email" name="alamat_email" value="{{ old('alamat_email') }}"
                                        class="form-control {{ $errors->has('alamat_email') ? ' is-invalid' : '' }}"
                                        placeholder="alamat_email">
                                    @if ($errors->has('alamat_email'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('alamat_email') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <select name="status_tempat_tinggal" value="{{ old('status_tempat_tinggal') }}"
                                            class="form-control {{ $errors->has('status_tempat_tinggal') ? ' is-invalid' : '' }}">
                                            <option value="">Status Tempat Tinggal</option>
                                            <option value="milikSendiri"
                                                {{ old('status_tempat_tinggal') == 'milikSendiri' ? 'selected' : '' }}>
                                                Milik Sendiri</option>
                                            <option value="milikKeluarga"
                                                {{ old('status_tempat_tinggal') == 'milikKeluarga' ? 'selected' : '' }}>
                                                Milik Keluarga</option>
                                            <option value="sewa/kontrakkan"
                                                {{ old('status_tempat_tinggal') == 'sewa/kontrakkan' ? 'selected' : '' }}>
                                                Sewa / Kontrakkan</option>
                                        </select>
                                        @if ($errors->has('status_tempat_tinggal'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('status_tempat_tinggal') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="">
                                    <div class="form-group">
                                        <select name="tujuan_pembuatan_rekening"
                                            value="{{ old('tujuan_pembuatan_rekening') }}"
                                            class="form-control {{ $errors->has('tujuan_pembuatan_rekening') ? ' is-invalid' : '' }}">
                                            <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span>Tujuan Pembukaan Rekening</option>
                                            <option value="simpanan"
                                                {{ old('tujuan_pembuatan_rekening') == 'simpanan' ? 'selected' : '' }}>
                                                Simpanan</option>
                                            <option value="kreedit"
                                                {{ old('tujuan_pembuatan_rekening') == 'kreedit' ? 'selected' : '' }}>
                                                kreedit</option>
                                            <option value="investasi"
                                                {{ old('tujuan_pembuatan_rekening') == 'investasi' ? 'selected' : '' }}>
                                                Investasi</option>
                                            <option value="transaksi"
                                                {{ old('tujuan_pembuatan_rekening') == 'transaksi' ? 'selected' : '' }}>
                                                Transaksi</option>
                                        </select>
                                        @if ($errors->has('tujuan_pembuatan_rekening'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tujuan_pembuatan_rekening') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend center">
                                        <span class="input-group-text">Bidang Usaha</span>
                                    </div>
                                    <input type="text" name="bidang_usaha" value="{{ old('bidang_usaha') }}"
                                        class="form-control {{ $errors->has('bidang_usaha') ? ' is-invalid' : '' }}"
                                        placeholder="bidang_usaha">
                                    @if ($errors->has('bidang_usaha'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('bidang_usaha') }}
                                    </div>
                                    @endif
                                </div>

                                <br>


                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Pekerjaan</h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="form-group">
                                    <select name="pekerjaan" value="{{ old('pekerjaan') }}"
                                        class="form-control {{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}">
                                        <option value=""><span
                                                    class="font-weight-bold text-danger">&ast;</span> Pekerjaan </option>
                                        <option value="PNS/TNI/POLRI"
                                            {{ old('pekerjaan') == 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI
                                        </option>
                                        <option value="BUMN/BUMD"
                                            {{ old('pekerjaan') == 'BUMN/BUMD' ? 'selected' : '' }}>BUMN/BUMD</option>
                                        <option value="Wiraswasta"
                                            {{ old('pekerjaan') == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta
                                        </option>
                                        <option value="Profresional"
                                            {{ old('pekerjaan') == 'Profresional' ? 'selected' : '' }}>Profresional
                                        </option>
                                        <option value="Pensiunan"
                                            {{ old('pekerjaan') == 'Pensiunan' ? 'selected' : '' }}>Pensiunan</option>
                                        <option value="ibuRumahTannga"
                                            {{ old('pekerjaan') == 'ibuRumahTannga' ? 'selected' : '' }}>Ibu Rumah
                                            Tannga</option>
                                        <option value="pelajar" {{ old('pekerjaan') == 'pelajar' ? 'selected' : '' }}>
                                            Pelajar</option>
                                        <option value="lainnya" {{ old('pekerjaan') == 'lainnya' ? 'selected' : '' }}>
                                            Lainnya</option>
                                    </select>
                                    @if ($errors->has('pekerjaan'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('pekerjaan') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">Tanggal Pendirian Perusahaan</span>
                                </div>
                                <br>
                                <input type="date" name="tempat_dan_tanggalpendirian_perusahaan"
                                    value="{{ old('tempat_dan_tanggalpendirian_perusahaan') }}"
                                    class="form-control {{ $errors->has('tempat_dan_tanggalpendirian_perusahaan') ? ' is-invalid' : '' }}"
                                    placeholder="Tempat dan Tanggal Pendirian Perusahaan">
                                @if ($errors->has('tempat_dan_tanggalpendirian_perusahaan'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('tempat_dan_tanggalpendirian_perusahaan') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">Jabatan</span>
                                </div>
                                <br>
                                <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                                    class="form-control {{ $errors->has('jabatan') ? ' is-invalid' : '' }}"
                                    placeholder="Jabatan">
                                @if ($errors->has('jabatan'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('jabatan') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">Mulai Bekerja</span>
                                </div>
                                <br>
                                <input type="date" name="mulai_bekerja" value="{{ old('mulai_bekerja') }}"
                                    class="form-control {{ $errors->has('mulai_bekerja') ? ' is-invalid' : '' }}"
                                    placeholder="Mulai Bekerja">
                                @if ($errors->has('mulai_bekerja'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('mulai_bekerja') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">NIP / GOL</span>
                                </div>
                                <br>
                                <input type="number" name="nip/gol" value="{{ old('nip/gol') }}"
                                    class="form-control {{ $errors->has('nip/gol') ? ' is-invalid' : '' }}"
                                    placeholder="Nip Gol">
                                @if ($errors->has('nip/gol'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('nip/gol') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">Alamat Kantor</span>
                                </div>
                                <textarea type="text" row="3" name="alamat_kantor"
                                    class="form-control {{ $errors->has('alamat_kantor') ? ' is-invalid' : '' }}"
                                    placeholder="Alamat Kantor">{{ old('alamat_kantor') ? old('alamat_kantor') : '' }}</textarea>
                                @if ($errors->has('alamat_kantor'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('alamat_kantor') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text">No Tlp Kantor</span>
                                </div>
                                <input type="number" name="no_tlpn_kantor" value="{{ old('no_tlpn_kantor') }}"
                                    class="form-control {{ $errors->has('no_tlpn_kantor') ? ' is-invalid' : '' }}"
                                    placeholder="No Tlp Kantor">
                                @if ($errors->has('no_tlpn_kantor'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('no_tlpn_kantor') }}
                                </div>
                                @endif
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <select name="pendapatan_rata_rata_perbulan"
                                        value="{{ old('pendapatan_rata_rata_perbulan') }}"
                                        class="form-control {{ $errors->has('pendapatan_rata_rata_perbulan') ? ' is-invalid' : '' }}">
                                        <option value=""><span
                                                class="font-weight-bold text-danger">&ast;</span>Pendapatan Perbulan
                                        </option>
                                        <option value="<1juta"
                                            {{ old('pendapatan_rata_rata_perbulan') == '<1juta' ? 'selected' : '' }}>
                                            <1juta </option> <option value="1-2juta"
                                                {{ old('pendapatan_rata_rata_perbulan') == '1=2juta' ? 'selected' : '' }}>
                                                <1-2juta </option> <option value=">2-5juta"
                                                    {{ old('pendapatan_rata_rata_perbulan') == '>2-5juta' ? 'selected' : '' }}>
                                                    >2-5juta
                                        </option>
                                        <option value=">5-10juta"
                                            {{ old('pendapatan_rata_rata_perbulan') == '>5-10juta' ? 'selected' : '' }}>
                                            >5-10juta </option>
                                        <option value=">10-50juta"
                                            {{ old('pendapatan_rata_rata_perbulan') == '>10-50juta' ? 'selected' : '' }}>
                                            >10-50juta </option>
                                        <option value=">50juta"
                                            {{ old('pendapatan_rata_rata_perbulan') == '>50juta' ? 'selected' : '' }}>
                                            >50juta </option>
                                        <option value="lainnya"
                                            {{ old('pendapatan_rata_rata_perbulan') == 'lainnya' ? 'selected' : '' }}>
                                            --Lainnya-- </option>
                                    </select>
                                    @if ($errors->has('pendapatan_rata_rata_perbulan'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('pendapatan_rata_rata_perbulan') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <select name="sumber_pendapatan" value="{{ old('sumber_pendapatan') }}"
                                        class="form-control {{ $errors->has('sumber_pendapatan') ? ' is-invalid' : '' }}">
                                        <option value=""><span class="font-weight-bold text-danger">&ast;</span>Sumber
                                            Pendapatan
                                        </option>
                                        <option value="gaji" {{ old('sumber_pendapatan') == 'gaji' ? 'selected' : '' }}>
                                            Gaji</option>
                                        <option value="lainnya"
                                            {{ old('sumber_pendapatan') == 'lainnya' ? 'selected' : '' }}>--Lainnya--
                                        </option>
                                    </select>
                                    @if ($errors->has('sumber_pendapatan'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{ $errors->first('sumber_pendapatan') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="input-group mb-3">
    <div class="input-group-prepend center">
        <span class="input-group-text">
            <span class="font-weight-bold text-danger">&ast;</span>Nominal Pendapatan
        </span>
    </div>

    <input type="text" 
           name="nominal_pendapatan" 
           id="nominal_pendapatan"
           value="{{ old('nominal_pendapatan') }}"
           class="form-control {{ $errors->has('nominal_pendapatan') ? ' is-invalid' : '' }}"
           placeholder="Nominal Pendapatan">

    @if ($errors->has('nominal_pendapatan'))
        <div id="validationServer05Feedback" class="invalid-feedback">
            {{ $errors->first('nominal_pendapatan') }}
        </div>
    @endif
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Kontak Darurat</h3>
                        </div>

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text"><span
                                            class="font-weight-bold text-danger">&ast;</span>Nama Lengkap Kontak
                                        Darurat</span>
                                </div>
                                <br>
                                <input type="text" name="nama_lengkap_kontak_darurat"
                                    value="{{ old('nama_lengkap_kontak_darurat') }}"
                                    class="form-control {{ $errors->has('nama_lengkap_kontak_darurat') ? ' is-invalid' : '' }}"
                                    placeholder="Nama Lengka Kontak Darurat">
                                @if ($errors->has('nama_lengkap_kontak_darurat'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('nama_lengkap_kontak_darurat') }}
                                </div>
                                @endif
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <select name="hubungan_dengan_pemohon" value="{{ old('hubungan_dengan_pemohon') }}"
                                        class="form-control {{ $errors->has('hubungan_dengan_pemohon') ? ' is-invalid' : '' }}">
                                        <option value=""><span class="font-weight-bold text-danger">&ast;</span>Hubungan
                                            Dengan
                                            Pemohon</option>
                                        <option value="keluarga"
                                            {{ old('hubungan_dengan_pemohon') == 'simpanan' ? 'selected' : '' }}>
                                            Keluarga</option>
                                        <option value="saudara"
                                            {{ old('hubungan_dengan_pemohon') == 'saudara' ? 'selected' : '' }}>
                                            Saudara</option>
                                        <option value="teman"
                                            {{ old('hubungan_dengan_pemohon') == 'teman' ? 'selected' : '' }}>Teman
                                        </option>
                                        <option value="lainnya"
                                            {{ old('hubungan_dengan_pemohon') == 'lainnya' ? 'selected' : '' }}>
                                            --Lainnya--</option>
                                    </select>
                                    @if ($errors->has('hubungan_dengan_pemohon'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('hubungan_dengan_pemohon') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text"><span
                                            class="font-weight-bold text-danger">&ast;</span>Alamat</span>
                                </div>
                                <textarea type="text" row="3" name="alamat_kontak_darurat"
                                    class="form-control {{ $errors->has('alamat_kontak_darurat') ? ' is-invalid' : '' }}"
                                    placeholder="Alamat Kontak Darurat">{{ old('alamat_kontak_darurat') ? old('alamat_kontak_darurat') : '' }}</textarea>
                                @if ($errors->has('alamat_kontak_darurat'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('alamat_kontak_darurat') }}
                                </div>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend center">
                                    <span class="input-group-text"><span
                                            class="font-weight-bold text-danger">&ast;</span>Nomo TLP Kontak
                                        Darurat</span>
                                </div>
                                <br>
                                <input type="number" name="no_tlpn_kontak_darurat"
                                    value="{{ old('no_tlpn_kontak_darurat') }}"
                                    class="form-control {{ $errors->has('no_tlpn_kontak_darurat') ? ' is-invalid' : '' }}"
                                    placeholder="Nama Lengka Kontak Darurat">
                                @if ($errors->has('no_tlpn_kontak_darurat'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('no_tlpn_kontak_darurat') }}
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Simpan
            </button>

        </div>



        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <div class="alert alert-warning" role="alert">
                                Peringatan !!!
                            </div>
                        </h5>
                    </div>
                    <div class="modal-body">
                        Dengan ini saya menyatakan bahwa semua data, informasi untuk aplikasi ini adalah benar, dan
                        apabila dikemudian hari terdapat kekeliruan, saya bersedia menerima segala ketentuan hukum yang
                        berlaku.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- Include library jQuery dan jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script>
        $(function () {
            // Cari elemen yang memiliki class "autocomplete"
            $(".autocomplete").autocomplete({
                // Tentukan URL untuk mengambil data dari server
                source: "/autocomplete/kelurahan",
                // Tentukan properti minLength untuk menentukan minimal jumlah karakter yang di-input sebelum autocomplete mulai berjalan
                minLength: 2,
                // Tentukan properti select untuk menentukan apa yang terjadi ketika user memilih salah satu opsi yang dihasilkan oleh autocomplete
                select: function (event, ui) {
                    // Set value pada select option dengan nilai yang dihasilkan oleh autocomplete
                    $(this).val(ui.item.value);
                    // Return false agar form tidak submit secara otomatis setelah user memilih opsi dari autocomplete
                    return false;
                }
            });
        });

        const inputRupiah = document.getElementById('nominal_pendapatan');

    // Format ke Rupiah saat user mengetik
    inputRupiah.addEventListener('keyup', function(e) {
        let value = this.value.replace(/[^,\d]/g, "");
        this.value = formatRupiah(value, "Rp ");
    });

    function formatRupiah(angka, prefix) {
        let numberString = angka.toString(),
            sisa = numberString.length % 3,
            rupiah = numberString.substr(0, sisa),
            ribuan = numberString.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            let separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        return prefix + rupiah;
    }

    // Bersihkan format sebelum submit form
    document.querySelector("form").addEventListener("submit", function() {
        inputRupiah.value = inputRupiah.value.replace(/[^0-9]/g, '');
    });
    </script>
    @include('sweetalert::alert')
</body>

</html>