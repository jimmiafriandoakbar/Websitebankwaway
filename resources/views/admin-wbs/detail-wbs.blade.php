@extends('admin-wbs.layoutwbs.app')

@section('content')

<h4 class="mb-4">
    <i class="fas fa-file-alt mr-2"></i> Detail Laporan
</h4>

<div class="card shadow-sm">
    <div class="card-body">

        <table class="table table-bordered">

            <tr><th>ID</th><td>{{ $data->id }}</td></tr>
            <tr><th>Tanggal</th><td>{{ $data->created_at }}</td></tr>
            <tr><th>KTP</th><td>{{ $data->ktp }}</td></tr>
            <tr><th>No HP</th><td>{{ $data->no_hp }}</td></tr>
            <tr><th>Email</th><td>{{ $data->email }}</td></tr>
            <tr><th>Nama Pelapor</th><td>{{ $data->nama_pelapor }}</td></tr>
            <tr><th>Jabatan</th><td>{{ $data->jabatan_pelapor }}</td></tr>
            <tr><th>Kriteria</th><td>{{ $data->kriteria }}</td></tr>
            <tr><th>Waktu Kejadian</th><td>{{ $data->waktu_kejadian }}</td></tr>
            <tr><th>Kronologi</th><td>{{ $data->kronologi_kejadian }}</td></tr>

            <tr>
                <th>Lampiran</th>
                <td>
                    @if($data->lampiran)
                        <a href="{{ asset($data->lampiran) }}" target="_blank">
                            Lihat File
                        </a>
                    @else
                        -
                    @endif
                </td>
            </tr>

        </table>

        <a href="/admin-wbs" class="btn btn-secondary">
            ← Kembali
        </a>

    </div>
</div>

@endsection