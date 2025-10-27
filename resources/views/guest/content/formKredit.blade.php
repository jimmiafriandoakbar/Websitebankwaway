<!DOCTYPE html>
<html>

<head>
    <title>Form Kredit</title>
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../master_komponen_sisko/dist/main.min.css" />

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#permohonan").maskMoney({
                prefix: "",
                thousands: ",",
                decimal: ".",
                precision: 0,
            });
        });
    </script>

    <style type="text/css">
        body {
            background-image: url(bgsample3.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }

        .form-style-10 {
            max-width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        }

        .form-style-10 .inner-wrap {
            padding: 30px;
            background: #f8f8f8;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .form-style-10 h1 {
            background: #2a88ad;
            padding: 20px 30px 15px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            -webkit-border-radius: 10px 10px 0 0;
            -moz-border-radius: 10px 10px 0 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px "Bitter", serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257c9e;
        }

        .form-style-10 h1>span {
            display: block;
            margin-top: 2px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style-10 label {
            display: block;
            font: 13px Arial, Helvetica, sans-serif;
            color: #888;
            margin-bottom: 15px;
        }

        .form-style-10 input[type="text"],
        .form-style-10 input[type="date"],
        .form-style-10 input[type="datetime"],
        .form-style-10 input[type="email"],
        .form-style-10 input[type="number"],
        .form-style-10 input[type="search"],
        .form-style-10 input[type="time"],
        .form-style-10 input[type="url"],
        .form-style-10 input[type="password"],
        .form-style-10 textarea,
        .form-style-10 select {
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border: 2px solid #fff;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        }

        .form-style-10 .section {
            font: normal 20px "Bitter", serif;
            color: #2a88ad;
            margin-bottom: 5px;
        }

        .form-style-10 .section span {
            background: #2a88ad;
            padding: 5px 10px 5px 10px;
            position: absolute;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border: 4px solid #fff;
            font-size: 14px;
            margin-left: -45px;
            color: #fff;
            margin-top: -3px;
        }

        .form-style-10 input[type="button"],
        .form-style-10 input[type="submit"] {
            background: #2a88ad;
            padding: 8px 20px 8px 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px "Bitter", serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257c9e;
            font-size: 15px;
        }

        .form-style-10 input[type="button"]:hover,
        .form-style-10 input[type="submit"]:hover {
            background: #2a6881;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        }

        .form-style-10 .privacy-policy {
            float: right;
            width: 250px;
            font: 12px Arial, Helvetica, sans-serif;
            color: #4d4d4d;
            margin-top: 10px;
            text-align: right;
        }

        /*noinspection CssUnusedSymbol*/
        .input-group,
        input.test-value-input {
            max-width: 250px;
        }

        .input-group-wide {
            max-width: 320px;
        }

        .code {
            background-color: #f1f2f3;
            font-family: Courier, monospace;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            $("#riwayat_pinjaman").click(function() {
                if ($(this).is(":checked")) {
                    $("#berapakali_pinjam").show();
                } else {
                    $("#berapakali_pinjam").hide();
                }
            });
        });
        $(function() {
            $("#pegawai").click(function() {
                if ($(this).is(":checked")) {
                    $("#status_pegawai").show();
                } else {
                    $("#status_pegawai").hide();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#status").change(function() {
                if ($(this).val() == "Kawin") {
                    $("#nama_pasangan").show();
                } else {
                    $("#nama_pasangan").hide();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#data_jaminan").click(function() {
                if ($(this).is(":checked")) {
                    $("#agunan_non_bergerak").show();
                } else {
                    $("#agunan_non_bergerak").hide();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#data_jaminan2").click(function() {
                if ($(this).is(":checked")) {
                    $("#agunan_bergerak").show();
                } else {
                    $("#agunan_bergerak").hide();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $("#data_jaminan3").click(function() {
                if ($(this).is(":checked")) {
                    $("#agunan_lainnya").show();
                } else {
                    $("#agunan_lainnya").hide();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $("#data_pinjaman_lembaga_lain").click(function() {
                if ($(this).is(":checked")) {
                    $("#pinjaman_lain").show();
                } else {
                    $("#pinjaman_lain").hide();
                }
            });
        });
    </script>
</head>

<body background="{{ asset('img/SIMBOLTANPANAMA (1).gif') }}">
    <div id="header-image">
        <center><img width="360" height="75" alt="" class="header-image"
                src="{{ asset('assetGuest/img/logo.png') }}" /></center>
    </div>
    <div class="form-style-10">
        <h1>Form Permohonan Kredit</h1>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Anda Harus mengisi data dengan lengkap
            </div>
            @foreach ($errors->keys() as $errorKey)
                <div class="alert alert-danger" role="alert">
                    <li> {{ $loop->iteration }} {{ $errors->first($errorKey) }}</li>
                </div>
            @endforeach
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- <form name="formPendaftaran" action="aksi_simpan_keong.php" method="post" enctype='multipart/form-data' onsubmit="return validateForm()"> -->
        <form action="{{ route('formKreditPost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="section">
                <a href="http://www.bankwawaylampung.com" class="fa fa-home">Home </a>
                <br />
            </div>
            <div class="section"><span>1</span>Data Pribadi</div>
            <div class="inner-wrap">
                {{-- <input type="hidden" name="kode_debitur" readonly="readonly" class="form-control @error('nama') is-invalid @enderror" />
                <input type="hidden" name="nocif" readonly="readonly" class="form-control @error('nama') is-invalid @enderror" />
                <input type="hidden" name="id_survey" readonly="readonly" class="form-control @error('nama') is-invalid @enderror" />
                <input type="hidden" name="Kode_BPR" readonly="readonly" class="form-control" />
                <input type="hidden" name="kd_ao" readonly="readonly" class="form-control" /> --}}
                <label>Nama Langkap
                    <input type="text" name="nama" maxlength="40"
                        class="form-control @error('nama') is-invalid @enderror @error('nama') is-invalid @enderror"
                        placeholder="Nama Lengkap" value="{{ old('nama') }}" />
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Nama Panggilan<input type="text" name="nama_panggilan_pemohon" maxlength="40"
                        class="form-control @error('nama_panggilan_pemohon') is-invalid @enderror"
                        placeholder="Nama Panggilan" value="{{ old('nama_panggilan_pemohon') }}" />
                    @error('nama_panggilan_pemohon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Tempat Lahir<input type="text" name="tmplahir" maxlength="40"
                        class="form-control @error('tmplahir') is-invalid @enderror" value="{{ old('tmplahir') }}"
                        placeholder="Tempat Lahir" />
                    @error('tmplahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Tanggal Lahir<input type="date" name="tgllahir" id="date1"
                        class="form-control @error('tmplahir') is-invalid @enderror" value="{{ old('tgllahir') }}"
                        placeholder="Tgl Lahir" />
                    @error('tmplahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Jenis Identitas
                    <select name="jnsid" class="form-control @error('jnsid') is-invalid @enderror">
                        <option value="">-Pilih Jenis Identitas-</option>
                        <option value="KTP" {{ old('jnsid') == 'KTP' ? 'selected' : '' }}>KTP</option>
                        <option value="SIM" {{ old('jnsid') == 'SIM' ? 'selected' : '' }}>SIM</option>
                        <option value="Pasport" {{ old('jnsid') == 'Pasport' ? 'selected' : '' }}>Pasport</option>
                        <option value="Lainnya" {{ old('jnsid') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('jnsid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>No. Identitas<input type="text" name="noid" maxlength="17"
                        class="form-control @error('noid') is-invalid @enderror" value="{{ old('noid') }}"
                        placeholder="No. Identitas" onkeypress="return hanyaAngka(event)" />
                    @error('noid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Pekerjaan Sesuai KTP<input type="text" name="pekerjaan" maxlength="45"
                        class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan') }}"
                        placeholder="Pekerjaan Sesuai KTP" />
                    @error('pekerjaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Alamat Sesuai KTP
                    <textarea name="alamat" cols="160" rows="4" maxlength="160"
                        class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Sesuai KTP">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Provinsi
                    <select name="provinsi" class="form-control @error('provinsi') is-invalid @enderror"
                        id="provinsi" placeholder="Pilih Provinsi">
                        <option value="">-Pilih Provinsi-</option>
                        @foreach ($stmtProvinsi as $item)
                            <option value="{{ $item->nama }}"
                                {{ old('provinsi') == $item->nama ? 'selected' : '' }}>
                                {{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('provinsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <img src="asset/img/loading.gif" width="35" id="load1" style="display: none" />
                <label>Kota/Kabupaten<select name="kota" id="kota"
                        class="form-control @error('kota') is-invalid @enderror" placeholder="Pilih Kota/Kabupaten">
                        <option value="">-Pilih Kota/Kabupaten-</option>
                        @foreach ($stmtKabKota as $item)
                            <option value="{{ $item->nama }}" {{ old('kota') == $item->nama ? 'selected' : '' }}>
                                {{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('kota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <img src="asset/img/loading.gif" width="35" id="load2" style="display: none" />

                <label>Kecamatan<select name="kecamatan" id="kecamatan" placeholder="Pilih Kecamatan">
                        <option value="">-Pilih Kecamatan-</option>
                        @foreach ($stmtKecamatan as $item)
                            <option value="{{ $item->nama }}"
                                {{ old('kecamatan') == $item->nama ? 'selected' : '' }}>{{ $item->nama }}</option>
                        @endforeach
                    </select></label>
                <img src="asset/img/loading.gif" width="35" id="load3" style="display: none" />

                <label>Desa/Kelurahan
                    <select name="kelurahan" id="kelurahan" placeholder="Pilih Desa/Kelurahan"
                        class="form-control @error('kelurahan') is-invalid @enderror"
                        value="{{ old('kelurahan') }}">
                        <option value="">-Pilih Desa/Kelurahan-</option>
                        @foreach ($stmtKelurahan as $item)
                            <option value="{{ $item->nama }}"
                                {{ old('kelurahan') == $item->nama ? 'selected' : '' }}>{{ $item->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('kelurahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <script>
                    $("#kecamatan").change(function() {
                        var kecamatan = $("#kecamatan").val();
                        $.ajax({
                            type: "POST",
                            dataType: "html",
                            url: "ambildesa.php",
                            data: "kecamatan=" + kecamatan,
                            success: function(data) {
                                $("#desa_kel").html(data);
                            },
                        });
                    });
                </script>
                <label>RT<input type="text" name="rt" size="2" maxlength="3" placeholder="RT"
                        onkeypress="return hanyaAngka(event)" class="form-control @error('rt') is-invalid @enderror"
                        value="{{ old('rt') }}" />
                </label>
                @error('rt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>RW
                    <input type="text" name="rw" size="2" maxlength="3" placeholder="RW"
                        onkeypress="return hanyaAngka(event)" value="{{ old('rw') }}" />
                    @error('rw')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Kewarganegaraan<select name="kewarganegaraan">
                        <option value="">-Pilih Kewarganegaraan-</option>
                        <option value="WNI" {{ old('kewarganegaraan') == 'WNI' ? 'selected' : '' }}>WNI</option>
                        <option value="WNA" {{ old('kewarganegaraan') == 'WNA' ? 'selected' : '' }}>WNA</option>
                    </select>
                    @error('kewarganegaraan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Alamat Tempat Tinggal Saat ini
                    <textarea name="tmpt_tinggal_sekarang" cols="160" rows="4" maxlength="160"
                        class="form-control @error('tmpt_tinggal_sekarang') is-invalid @enderror"
                        placeholder="Alamat Tempat Tinggal Saat ini"></textarea>
                    @error('tmpt_tinggal_sekarang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Status Tempat Tinggal
                    <select id="status_tempat_tinggal" name="status_tempat_tinggal">
                        <option value="">-Pilih Status Tempat Tinggal-</option>
                        <option value="MILIK SENDIRI"
                            {{ old('status_tempat_tinggal') == 'MILIK SENDIRI' ? 'selected' : '' }}>MILIK SENDIRI
                        </option>
                        <option value="MILIK ORANG TUA"
                            {{ old('status_tempat_tinggal') == 'MILIK ORANG TUA' ? 'selected' : '' }}>MILIK ORANG TUA
                        </option>
                        <option value="MILIK ORANG LAIN"
                            {{ old('status_tempat_tinggal') == 'MILIK ORANG LAIN' ? 'selected' : '' }}>MILIK ORANG LAIN
                        </option>
                    </select>
                    @error('status_tempat_tinggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Atas Nama Sendiri
                    <select id="atas_nama_sendiri" name="atas_nama_sendiri">
                        <option value="">-Pilih Atas Nama Sendiri-</option>
                        <option value="atas_nama_sendiri" {{ old('atas_nama_sendiri') == 'Ya' ? 'selected' : '' }}>YA
                        </option>
                        <option value="atas_nama_sendiri" {{ old('atas_nama_sendiri') == 'TIDAK' ? 'selected' : '' }}>
                            TIDAK</option>
                    </select>
                </label>

                <label>Alamat Usaha
                    <textarea type="text" name="alamat_usaha" cols="160" rows="4" maxlength="160"
                        class="form-control @error('alamat_usaha') is-invalid @enderror" value="{{ old('alamat_usaha') }}"
                        placeholder="Alamat Usaha"></textarea>
                    @error('alamat_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Pendidikan
                    <select id="pendidikan" name="pendidikan">
                        <option value="">-Pilih Pendidikan-</option>
                        <option value="pendidikan" {{ old('pendidikan') == 'Tidak Sekolah' ? 'selected' : '' }}>Tidak
                            Sekolah</option>
                        <option value="SD" {{ old('pendidikan') == 'SD' ? 'selected' : '' }}>SD</option>
                        <option value="SMP" {{ old('pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SMA" {{ old('pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="D1" {{ old('pendidikan') == 'D1' ? 'selected' : '' }}>D1</option>
                        <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="S1" {{ old('pendidikan') == 'S1' ? 'selected' : '' }}>S1</option>
                        <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                    @error('pendidikan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>No. Telp/Hp
                    <input type="text" id="no_tlp_hp" name="no_tlp_hp" maxlength="35"
                        class="form-control @error('no_tlp_hp') is-invalid @enderror" value="{{ old('no_tlp_hp') }}"
                        placeholder="No. Telp/Hp" onkeypress="return hanyaAngka(event)" />
                    @error('pendidikan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>No. Telp Rumah<input type="text" id="telp_rumah" name="telp_rumah" maxlength="35"
                        class="form-control @error('nama') is-invalid @enderror" placeholder="No. Telp Rumah"
                        onkeypress="return hanyaAngka(event)" />
                </label>

                <label>Keluarga tdk serumah yg bs dihub<input type="text" id="saudara_yang_bisa_dihubungi"
                        name="saudara_yang_bisa_dihubungi" maxlength="50"
                        class="form-control @error('saudara_yang_bisa_dihubungi') is-invalid @enderror"
                        value="{{ old('saudara_yang_bisa_dihubungi') }}"
                        placeholder="Keluarga tdk serumah yg bs dihub" />
                    @error('saudara_yang_bisa_dihubungi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>No. Telp/Hp Kel tdk serumah yg bs dihub
                    <input type="text" id="telp_saudara" name="telp_saudara"
                        class="form-control @error('telp_saudara') is-invalid @enderror"
                        placeholder="No. Telp/Hp Kel tdk serumah yg bs dihub" value="{{ old('telp_saudara') }}" />
                    @error('telp_saudara')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Nama Lengkap Pendamping<input type="text" id="pendamping" name="pendamping" maxlength="50"
                        class="form-control @error('pendamping') is-invalid @enderror"
                        value="{{ old('pendamping') }}" placeholder="Nama Lengkap Pendamping" />
                    @error('pendamping')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Nama Panggilan Pendamping<input type="text" id="panggilan_pendamping"
                        name="panggilan_pendamping" maxlength="50"
                        class="form-control @error('panggilan_pendamping') is-invalid @enderror"
                        placeholder="Nama Panggilan Pendamping" value="{{ old('panggilan_pendamping') }}" />
                    @error('panggilan_pendamping')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>No. Telp/Hp Pendamping<input type="text" id="no_hp_pendamping" name="no_hp_pendamping"
                        maxlength="35" class="form-control @error('no_hp_pendamping') is-invalid @enderror"
                        placeholder="No. Telp/Hp Pendamping" onkeypress="return hanyaAngka(event)"
                        value="{{ old('no_hp_pendamping') }}" />
                    @error('panggilan_pendamping')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Status Pendamping<select id="status_pendamping" name="status_pendamping">
                        <option value="">-Pilih Status Pendamping-</option>
                        <option value="SUAMI">SUAMI</option>
                        <option value="ISTRI">ISTRI</option>
                        <option value="ANAK">ANAK</option>
                        <option value="ORANG TUA">ORANG TUA</option>
                        <option value="SAUDARA KANDUNG">SAUDARA KANDUNG</option>
                    </select>
                    @error('status_pendamping')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Status Pernikahan
                    <select id="status" name="status">
                        <option value="">-Pilih Status Pernikahan-</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Tidak Kawin">Tidak Kawin</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>Nama Pasangan
                    <input type="text" id="nama_pasangan" name="nama_pasangan" placeholder="Nama Pasangan"
                        value="{{ old('nama_pasangan') }}" />
                    @error('nama_pasangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label>
                    Perkawinan Ke
                    <input id="colorful" class="form-control @error('perkawinan_ke') is-invalid @enderror"
                        type="number" name="perkawinan_ke" value="0" min="0" max="10"
                        onkeypress="return hanyaAngka(event)" value="{{ old('perkawinan_ke') }}" />
                    @error('perkawinan_ke')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>
                    Jumlah Anak
                    <input id="colorful2" class="form-control @error('jmlh_anak') is-invalid @enderror"
                        type="number" name="jmlh_anak" value="0" min="0" max="50"
                        onkeypress="return hanyaAngka(event)" value="{{ old('jmlh_anak') }}" />
                    @error('jmlh_anak')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Nama Ibu Kandung<input type="text" name="nama_ibu_kndung" maxlength="40"
                        class="form-control @error('nama_ibu_kndung') is-invalid @enderror"
                        value="{{ old('nama_ibu_kndung') }}" placeholder="Nama Ibu Kandung" />
                    @error('nama_ibu_kndung')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <div class="section"><span>2</span>Data Usaha</div>
                <!--<label><input type="text" name="usaha_pokok" class="form-control @error('nama') is-invalid @enderror" placeholder="Jenis Usaha Pokok"></label>-->
                <label>Jenis Usaha Pokok
                    <textarea type="text" name="usaha_pokok" cols="160" rows="4"
                        class="form-control @error('usaha_pokok') is-invalid @enderror" placeholder="Jenis Usaha Pokok"
                        value="{{ old('usaha_pokok') }}"></textarea>
                    @error('usaha_pokok')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Jenis Usaha Sampingan
                    <textarea type="text" name="usaha_smpingn" cols="160" rows="4"
                        class="form-control @error('usaha_smpingn') is-invalid @enderror" placeholder="Jenis Usaha Sampingan"
                        value="{{ old('usaha_smpingn') }}"></textarea>
                    @error('usaha_smpingn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Lama Usaha<input type="text" name="lm_usaha" maxlength="40"
                        class="form-control @error('lm_usaha') is-invalid @enderror" value="{{ old('lm_usaha') }}"
                        placeholder="Lama Usaha" />
                    @error('lm_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Referensi Oleh<input type="text" name="referensi" maxlength="40"
                        class="form-control @error('referensi') is-invalid @enderror" placeholder="Referensi Oleh" />
                    @error('referensi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <div class="section">Surat - Surat IZIN Usaha</div>

                <label>NPWP Pemilik Usaha/Perusahaan<input type="text" name="npwp" maxlength="50"
                        class="form-control @error('npwp') is-invalid @enderror" value="{{ old('npwp') }}"
                        placeholder="NPWP Pemilik Usaha/Perusahaan" />
                    @error('npwp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>SIUP / SKU<input type="text" name="siup" maxlength="50"
                        class="form-control @error('siup') is-invalid @enderror" placeholder="SIUP / SKU" />
                    @error('siup')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>TDP<input type="text" name="tdp" maxlength="50"
                        class="form-control @error('tdp') is-invalid @enderror" value="{{ old('npwp') }}"
                        placeholder="TDP" />
                    @error('tdp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <div class="section">Data Sebagai Karyawan</div>

                <label for="pegawai">
                    <input type="checkbox" id="pegawai" name="pegawai" value="Y" />
                    Apakah Anda Sebagai Karyawan ?
                </label>

                <hr />

                <label>nama_perusahaan<input type="text" name="nama_perusahaan" maxlength="45"
                        class="form-control @error('nama_perusahaan') is-invalid @enderror"
                        placeholder="Nama Perusahaan" value="{{ old('nama_perusahaan') }}" />
                    @error('nama_perusahaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Jenis Usaha<input type="text" name="jenis_usaha" maxlength="45"
                        class="form-control @error('jenis_usaha') is-invalid @enderror"
                        value="{{ old('jenis_usaha') }}" placeholder="Jenis Usaha" />
                    @error('jenis_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Lama Bekerja (Bulan)<input type="numeric" name="lama_bekerja" maxlength="45"
                        class="form-control @error('lama_bekerja') is-invalid @enderror" placeholder="Lama Bekerja"
                        value="{{ old('jenis_usaha') }}" />
                    @error('jenis_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Jabatan<input type="text" name="jabatan" maxlength="45"
                        class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}"
                        placeholder="Jabatan" />
                    @error('jabatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>NPWP Pribadi<input type="text" name="npwp_debitur" maxlength="45"
                        class="form-control @error('npwp_debitur') is-invalid @enderror" placeholder="NPWP Pribadi"
                        value="{{ old('npwp_debitur') }}" />
                    @error('npwp_debitur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <div class="section"><span>3</span>Permohonan Kredit</div>

                <label>Tujuan Penggunaan
                    <select name="tujuan">
                        <option value="">-Pilih Tujuan Penggunaan-</option>
                        <option value="MODAL USAHA">MODAL USAHA</option>
                        <option value="INVESTASI">INVESTASI</option>
                        <option value="KONSUMTIF">KONSUMTIF</option>
                        <option value="LAINNYA">LAINNYA</option>
                    </select>
                    @error('tujuan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Instansi<input type="text" class="form-control @error('instansi') is-invalid @enderror"
                        placeholder="Instansi" name="instansi" value="{{ old('instansi') }}" />
                    @error('instansi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Keterangan Tujuan Penggunaan<input type="text" name="ket_penggunaan"
                        class="form-control @error('ket_penggunaan') is-invalid @enderror"
                        value="{{ old('ket_penggunaan') }}" placeholder="Ket Tujuan Penggunaan" />
                    @error('instansi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>Nilai Permohonan<input type="text" id="permohonan" name="permohonan"
                        class="form-control @error('permohonan') is-invalid @enderror" placeholder="Nilai Permohonan"
                        value="{{ old('permohonan') }}" onkeypress="return hanyaAngka(event)" />
                    @error('permohonan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>
                    Jangka Waktu Kredit (Bulan)<input id="colorful4"
                        class="form-control @error('jk') is-invalid @enderror" type="text" name="jk"
                        placeholder="contoh: 3" value="{{ old('jk') }}"
                        onkeypress="return hanyaAngka(event)" />
                    @error('jk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <label>
                    <select name="sumber_penghasilan">
                        <option value="">-Pilih Sumber Penghasilan-</option>
                        <option value="Gaji">Gaji</option>
                        <option value="Hibah">Hibah</option>
                        <option value="Warisan">Warisan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('sumber_penghasilan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <div class="section"><span>4</span>Riwayat Kredit</div>
                <label for="riwayat_pinjaman">
                    <input type="checkbox" id="riwayat_pinjaman" name="riwayat_pinjaman" value="Y" />
                    Apakah Anda Pernah Meminjam Sebelumnya ?
                </label>

                <hr />

                <div id="berapakali_pinjam">
                    <label>
                        Sudah Berapa Kali Pinjam
                        <input id="colorful3" class="form-control @error('berapakali_pinjam') is-invalid @enderror"
                            type="number" name="berapakali_pinjam" value="0" min="0" max="50"
                            onkeypress="return hanyaAngka(event)" value="{{ old('berapakali_pinjam') }}" />
                        @error('berapakali_pinjam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>Plafon Terakhir<input type="text" id="plafon_terakhir" name="plafon_terakhir"
                            maxlength="45" class="form-control @error('plafon_terakhir') is-invalid @enderror"
                            value="{{ old('plafon_terakhir') }}" placeholder="Besar Plafon Terakhir"
                            onkeypress="return hanyaAngka(event)" />
                        @error('berapakali_pinjam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        Jangka Waktu Kredit Terakhir (Bulan)<input id="colorful5"
                            class="form-control @error('jk_terakhir') is-invalid @enderror" type="number"
                            name="jk_terakhir" value="0" min="0" max="50"
                            onkeypress="return hanyaAngka(event)" value="{{ old('jk_terakhir') }}" />
                        @error('jk_terakhir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        Untuk Keperluan
                        <textarea type="text" id="berapakali_pinjam" name="tujuan_pinjaman_sebelumnya" cols="160" rows="4"
                            maxlength="160" class="form-control @error('tujuan_pinjaman_sebelumnya') is-invalid @enderror"
                            value="{{ old('tujuan_pinjaman_sebelumnya') }}" placeholder="Untuk Keperluan"></textarea>
                        @error('tujuan_pinjaman_sebelumnya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>Tanggal Pelunasan<input type="date" id="tglpelunasan" name="tglpelunasan"
                            id="date2" placeholder="Tgl Pelunasan" value="{{ old('tglpelunasan') }}"
                            class="form-control @error('tglpelunasan') is-invalid @enderror" />
                        @error('tglpelunasan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <div class="section"><span>5</span>Data Jaminan</div>
                <label for="data_jaminan">
                    <input type="checkbox" id="data_jaminan" name="data_jaminan" value="Y" />
                    Agunan Tidak Bergerak ?
                </label>

                <hr />

                <div id="agunan_non_bergerak">
                    <label>
                        <textarea type="text" id="agunan_non_bergerak" name="ket_agunan_non_bergerak" cols="160" rows="4"
                            maxlength="160" class="form-control @error('ket_agunan_non_bergerak') is-invalid @enderror"
                            value="{{ old('ket_agunan_non_bergerak') }}" placeholder="Keterangan Agunan Tidak Bergerak"></textarea>
                        @error('ket_agunan_non_bergerak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>Nilai Agunan Tidak Bergerak<input type="text" id="nilai_jaminan_non_bergerak"
                            name="nilai_jaminan_non_bergerak" maxlength="45"
                            class="form-control @error('nilai_jaminan_non_bergerak') is-invalid @enderror"
                            placeholder="Nilai Agunan Tidak Bergerak" onkeypress="return hanyaAngka(event)"
                            value="{{ old('nilai_jaminan_non_bergerak') }}" />
                        @error('nilai_jaminan_non_bergerak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        Presentasi Taksasi Agunan (%)<input id="colorful6"
                            class="form-control @error('taksasi_1') is-invalid @enderror" type="number"
                            name="taksasi_1" value="0" min="0" max="100"
                            value="{{ old('taksasi_1') }}" onkeypress="return hanyaAngka(event)" />
                        @error('taksasi_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>Jenis Agunan<select name="j_agunan_liquidasi1">
                            <option value="">-Pilih Jenis Agunan-</option>
                            <option value="Tanah dan Bangunan">Tanah dan Bangunan</option>
                            <option value="Tanah">Tanah</option>
                            <option value="Kios">Kios</option>
                            <option value="Lapak">Lapak</option>
                        </select>
                        @error('taksasi_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>

                <label for="data_jaminan2">
                    <input type="checkbox" id="data_jaminan2" name="data_jaminan2" value="Y" />
                    Agunan Bergerak ?
                </label>
                <hr />

                <div id="agunan_bergerak">
                    <label>Keterangan Agunan Bergerak
                        <textarea type="text" id="agunan_bergerak" name="ket_agunan_bergerak" cols="160" rows="4"
                            maxlength="160" class="form-control @error('ket_agunan_bergerak') is-invalid @enderror"
                            value="{{ old('ket_agunan_bergerak') }}" placeholder="Keterangan Agunan Bergerak"></textarea>
                        @error('ket_agunan_bergerak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label><input type="text" id="agunan_bergerak" name="nilai_jaminan_bergerak" maxlength="45"
                            class="form-control @error('nilai_jaminan_bergerak') is-invalid @enderror"
                            placeholder="Nilai Agunan Bergerak" onkeypress="return hanyaAngka(event)"
                            value="{{ old('nilai_jaminan_bergerak') }}" />
                        @error('nilai_jaminan_bergerak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        Presentasi Taksasi Agunan (%)<input id="colorful7"
                            class="form-control @error('taksasi_2') is-invalid @enderror" type="number"
                            name="taksasi_2" value="0" min="0" max="100"
                            onkeypress="return hanyaAngka(event)" value="{{ old('taksasi_2') }}" />
                        @error('taksasi_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        <select name="j_agunan_liquidasi2">
                            <option value="">-Pilih Jenis Agunan-</option>
                            <option value="Kendaraan Baru">Kendaraan Baru</option>
                            <option value="Kendaraan Bekas">Kendaraan Bekas</option>
                            <option value="Kendaraan Bekas>15th">
                                Kendaraan Bekas>15th
                            </option>
                        </select>
                        @error('j_agunan_liquidasi2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                </div>
                <label for="data_jaminan3">
                    <input type="checkbox" id="data_jaminan3" name="data_jaminan3" value="Y" />
                    Agunan Lainnya ?
                </label>
                <hr />

                <div id="agunan_lainnya">
                    <label>
                        <textarea type="text" id="agunan_lainnya" name="ket_agunan_lainnya" cols="160" rows="4"
                            maxlength="160" class="form-control @error('ket_agunan_lainnya') is-invalid @enderror"
                            value="{{ old('ket_agunan_lainnya') }}" placeholder="Keterangan Agunan Lainnya"></textarea>
                        @error('ket_agunan_lainnya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        <input type="text" id="agunan_lainnya" name="nilai_jaminan_lainnya" maxlength="45"
                            class="form-control @error('nilai_jaminan_lainnya') is-invalid @enderror"
                            placeholder="Nilai Agunan Lainnya" onkeypress="return hanyaAngka(event)"
                            value="{{ old('nilai_jaminan_lainnya') }}" />
                        @error('nilai_jaminan_lainnya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>
                        Presentasi Taksasi Agunan (%)<input id="colorful8"
                            class="form-control @error('taksasi_3') is-invalid @enderror" type="number"
                            name="taksasi_3" value="0" min="0" max="100"
                            value="{{ old('taksasi_3') }}" onkeypress="return hanyaAngka(event)" />
                        @error('taksasi_3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label>Pilih Jenis Agunan<select name="j_agunan_liquidasi3">
                            <option value="">-Pilih Jenis Agunan-</option>
                            <option value="Deposito/Tabungan">Deposito/Tabungan</option>
                        </select>
                        @error('j_agunan_liquidasi3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                </div>
                <div class="section"><span>6</span>Pinjaman di Lembaga Lain</div>
                <label for="data_pinjaman_lembaga_lain">
                    <input type="checkbox" id="data_pinjaman_lembaga_lain" name="data_pinjaman_lembaga_lain"
                        value="Y" />
                    Apakah memiliki pinjaman di lembaga lain ?
                </label>
                <hr />

                <div id="pinjaman_lain">
                    <label>Keterangan
                        <textarea type="text" id="pinjaman_lain" name="ket_pinjaman_lain" cols="160" rows="4" maxlength="255"
                            class="form-control @error('ket_pinjaman_lain') is-invalid @enderror" value="{{ old('ket_pinjaman_lain') }}"
                            placeholder="Pinjaman di lembaga lain"></textarea>
                        @error('ket_pinjaman_lain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                </div>
            </div>
            <div class="button-section">
                <input type="button" style="color:red;" value="KEMBALI" onclick="history.back(-1)" />
                <input type="submit" id="addpendaftaran" name="addpendaftaran" value="SIMPAN" />
                &nbsp
            </div>
        </form>
        <script>
            function hanyaAngka(event) {
                var angka = event.which ? event.which : event.keyCode;
                if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                    return false;
                return true;
            }
        </script>

        {{-- bootstrap js --}}
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
            // Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
            $("#colorful").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful2").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful3").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful4").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful5").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful6").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful7").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
            $("#colorful8").bootstrapNumber({
                upClass: "success",
                downClass: "danger",
            });
        </script>
    </div>
</body>

</html>
