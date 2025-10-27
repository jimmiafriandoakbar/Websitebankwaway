<!DOCTYPE html>
<html lang="en">

</html>
</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        line-height: 1.6;
    }

    h1 {
        text-align: center;
        font-size: 24px;
    }

    .section {
        margin-bottom: 20px;
    }

    .label {
        font-weight: bold;
        width: 200px;
        display: inline-block;
    }

    .value {
        display: inline-block;
    }

    .attachment img {
        max-width: 100%;
        height: auto;
        border: 1px solid #ddd;
        margin-top: 10px;
    }

    .box {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
</style>
</head>

<body>
    {{-- <h1>Laporan Pengaduan</h1> --}}

    <div class="section">
        <span class="label">ID: </span> <span class="value">{{ $data->id }}</span><br>
        <span class="label">Tanggal Dibuat:</span> <span class="value">{{ $data->created_at }}</span><br>
    </div>

    <div class="section">
        <h2>Data Pelapor</h2>
        <div class="box">
            <span class="label">Nama Pelapor:</span> <span class="value">{{ $data->nama_pelapor }}</span><br>
            <span class="label">Jabatan:</span> <span class="value">{{ $data->jabatan_pelapor }}</span><br>
            <span class="label">No. KTP:</span> <span class="value">{{ $data->ktp }}</span><br>
            <span class="label">No. HP:</span> <span class="value">{{ $data->no_hp }}</span><br>
            <span class="label">Email:</span> <span class="value">{{ $data->email }}</span>
        </div>
    </div>

    <div class="section">
        <h2>Detail Pengaduan</h2>
        <div class="box">
            <span class="label">Kriteria:</span> <span class="value">{{ $data->kriteria }}</span><br>
            <span class="label">Waktu Kejadian:</span> <span class="value">{{ $data->waktu_kejadian }}</span><br><br>
            <div>
                <strong>Kronologi Kejadian:</strong><br>
                <p>
                    {{ $data->kronologi_kejadian }}
                </p>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Lampiran</h2>
        <div class="attachment">
            <a href="{{ asset($data->lampiran) }}" target="_blank">Lampiran</a>
        </div>
    </div>

</body>

</html>
