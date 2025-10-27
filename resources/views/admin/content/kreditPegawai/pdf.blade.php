@php
    use Illuminate\Support\Facades\Crypt;
    use App\Models\CustomClass;
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Permohonan Kredit Multiguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.6;
        }

        h2 {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            vertical-align: top;
            padding: 4px;
        }

        .judul {
            font-weight: bold;
        }

        .foto {
            text-align: right;
            margin-bottom: 20px;
        }

        .foto img {
            width: 20px;
            /* ukuran pas foto 3x4 kira-kira */
            height: auto;
            border: 1px solid #000;
        }
    </style>
</head>

<body>

    {{-- <div class="foto">
        <img src="{{ asset('assetGuest/img/dina.jpg') }}" alt="Pas Foto"
            style="width: 250px; height: 130px; border: 1px solid #000;">
    </div> --}}

    <p>Kepada Yth.<br>
        Pimpinan PT BPR WAWAY LAMPUNG<br>
        Jl. Diponegoro No.28, Gulak Galik, <br> Kec. Tlk. Betung Utara,<br> Kota Bandar Lampung, Lampung 35212<br>
        <strong></strong><br>
        Perihal: <strong>{{ $data->jenis_kredit }}</strong>
    </p>

    <p>Dengan Hormat,</p>

    <p>Yang bertanda tangan di bawah ini :</p>

    <h2>PEMOHON</h2>
    <table>
        <tr>
            <td class="judul">NIK</td>
            <td>: {{ $data->nik }}</td>
        </tr>
        <tr>
            <td class="judul">Nama lengkap</td>
            <td>: {{ $data->nama_lengkap }}</td>
        </tr>
        <tr>
            <td class="judul">Tempat/tgl. Lahir</td>
            <td>: {{ $data->tempat_lahir }}</td>
        </tr>
        <tr>
            <td class="judul">Alamat Rumah</td>
            <td>: {{ $data->alamat }}</td>
        </tr>
        <tr>
            <td class="judul">Pekerjaan/Jabatan</td>
            <td>: {{ $data->pekerjaan }}</td>
        </tr>
        <tr>
            <td class="judul">Nomor Telpon</td>
            <td>: {{ $data->no_tlp }}</td>
        </tr>
    </table>

    <h2>DATA PENGAJUAN KREDIT</h2>
    <table>
        <tr>
            <td class="judul">Jenis Kredit</td>
            <td>: {{ $data->jenis_kredit }}</td>
        </tr>
        <tr>
            <td class="judul">Mengajukan Krdit Ke:</td>
            <td>: Kantor {{ $data->tujuan }}</td>
        </tr>
        <tr>
            <td class="judul">Nominal Pinjaman:</td>
            <td>: {{ app(CustomClass::class)->formatRupiah($data->nominal) }}</td>

        </tr>
        <tr>
            <td class="judul">Jangka Waktu</td>
            <td>: {{ $data->jangka_waktu }} (Bulan)</td>
        </tr>
        <tr>
            <td class="judul">Tujuan Pengajuan Kredit</td>
            <td>: {{ $data->tujuan_pengajuan_kredit }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <hr>
                <h2>Jenis Agunan</h2>
                <hr>
            </td>
        </tr>
        <tr>
    </table>

    <table>
        <tr>
            <td class="judul">Agunan</td>
            <td>: {{ $data->jenis_agunan }} </td>
        </tr>
    </table>

</body>

</html>
