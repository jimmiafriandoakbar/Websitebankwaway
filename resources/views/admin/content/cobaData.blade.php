@extends('admin.template')

@section('content')
    @php
        use Illuminate\Support\Facades\Crypt;
    @endphp

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembukaan Rekening Baru </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    {{-- bautkan table --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pembukaan Rekening Baru </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama Depan</th>
                        <th>jenis Kelamin</th>
                        <th>nama Ibu Kandung</th>
                        <th>tglLahir</th>
                        <th>kota Kelahiran</th>
                        <th>jenis Identitas</th>
                        <th>nomor Identitas</th>
                        <th>nomor Npwp</th>
                        <th>nama Alamat</th>
                        <th>kota Alamat</th>
                        <th>kelurahan</th>
                        <th>kecamatan</th>
                        <th>rt</th>
                        <th>rw</th>
                        <th>nomorTelepon</th>
                        <th>agama</th>
                        <th>propinsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stmtDataRekenignBaru as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->nama_gadis_ibu_kandung }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                            <td>{{ $item->kartu_identitas }}</td>
                            <td>{{ $item->no_identitas }}</td>
                            <td>{{ $item->npwp }}</td>
                            <td>{{ $item->alamat_identitas }}</td>
                            <td>{{ $item->kab_kota_alamat }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->kecamatan }}</td>
                            <td>0</td>
                            <td>0</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>Lampung</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@push('script')
    {{-- DataTables  & Plugins  --}}
    <script src="{{ asset('LTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('LTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    {{-- AdminLTE App  --}}
    <script src="{{ asset('LTE/dist/js/adminlte.min.js') }}"></script>
    {{-- AdminLTE for demo purposes  --}}
    <script src="{{ asset('LTE/dist/js/demo.js') }}"></script>
    {{-- Page specific script  --}}
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush



'nama_lengkap' => 'required|max:50', tidak boleh ada tanda baca, petik, dan spasi dua
'kartu_identitas' => 'required|max:50',
'no_identitas' => 'required|max:16', min: 16

'alamat_identitas' => 'required', Tidak boleh tanda baca
'tanggal_lahir' => 'required|date', Tahun/bulan/tanggal contoh: 20000112
'tempat_lahir' => 'required|max:50', sesuaikan

'jenis_kelamin' => 'required|max:50', Pria, Wanita
'status_perkawinan' => 'required|max:50',
'nama_gadis_ibu_kandung' => 'required|max:50', tidak boleh ada tanda baca, petik, dan spasi dua
'agama' => 'required|max:50',

'kewarganegaraan' => 'required|max:50',

'pendidikan_terakhir' => 'required|max:50', tidak boleh ada tanda baca, petik, dan spasi dua
'no_tlpn' => 'required|max:50', hanya angka
'alamat_email' => 'required|max:50',
'status_tempat_tinggal' => 'required|max:50',
'tujuan_pembuatan_rekening' => 'required|max:50',

'pekerjaan' => 'required|max:50', tidak boleh ada tanda baca, petik, dan spasi dua

'pendapatan_rata_rata_perbulan' => 'required',
'sumber_pendapatan' => 'required|max:50',

'nama_lengkap_kontak_darurat' => 'required|max:50', tidak boleh ada tanda baca, petik, dan spasi dua
'no_tlpn_kontak_darurat' => 'required|max:50', hanya angka
