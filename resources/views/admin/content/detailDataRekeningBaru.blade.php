@extends('admin.template')

@section('tittle', 'Pembukaan Rekening Baru')

@section('content')


    <style>
        @media print {
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                border: 1px solid rgb(129, 39, 39);
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #ddd;
            }
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembukaan Rekening Baru </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail</li>
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
            <button class="btn btn-secondary" id="export-csv-btn">Export CSV <i class="fas fa-file-download"></i></button>
            <a href="#" class="btn btn-primary"
                onclick="exportTableToCSV($('#my-table'), 'eyJpdiI6ImRMQU9QUlNJNUY3ZTU0UWNKSDNy.csv');">Export to Excel FIle
                <i class="fas fa-file-download"></i></a>
            <button class="btn btn-success" onclick="window.print()">Print <i class="far fa-print"></i></button>
            <br><br>
            <table id="my-table" class="table table-bordered table-striped">

                <tbody>
                    @foreach ($stmtDetailDataRekeningBaru as $data)
                        <tr>
                            <td>Rekening yang Dikehendaki</td>
                            <td>:</td>
                            <td>{{ $data->rekening_yang_dikehendaki }}</td>
                        </tr>

                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{ $data->nama_lengkap }}</td>
                        </tr>

                        <tr>
                            <td>Nama Alias</td>
                            <td>:</td>
                            <td>{{ $data->nama_alias }}</td>
                        </tr>

                        <tr>
                            <td>Kartu Identitas</td>
                            <td>:</td>
                            <td>{{ $data->kartu_identitas }}</td>
                        </tr>

                        <tr>
                            <td>No Identitas</td>
                            <td>:</td>
                            <td>{{ $data->no_identitas }}</td>
                        </tr>

                        <tr>
                            <td>Alamat Identitas</td>
                            <td>:</td>
                            <td>{{ $data->alamat_identitas }}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                        </tr>

                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{ $data->tempat_lahir }}</td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                        </tr>

                        <tr>
                            <td>Status Perkawinan</td>
                            <td>:</td>
                            <td>{{ $data->status_perkawinan }}</td>
                        </tr>

                        <tr>
                            <td>Nama Gadis Ibu Kandung</td>
                            <td>:</td>
                            <td>{{ $data->nama_gadis_ibu_kandung }}</td>
                        </tr>

                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ $data->agama }}</td>
                        </tr>

                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td>{{ $data->kewarganegaraan }}</td>
                        </tr>

                        <tr>
                            <td>NPWP</td>
                            <td>:</td>
                            <td>{{ $data->npwp }}</td>
                        </tr>

                        <tr>
                            <td>pendidikan_terakhir</td>
                            <td>:</td>
                            <td>{{ $data->pendidikan_terakhir }}</td>
                        </tr>

                        <tr>
                            <td>No Tlpn</td>
                            <td>:</td>
                            <td>{{ $data->no_tlpn }}</td>
                        </tr>

                        <tr>
                            <td>no_hp</td>
                            <td>:</td>
                            <td>{{ $data->no_hp }}</td>
                        </tr>

                        <tr>
                            <td>no_hp</td>
                            <td>:</td>
                            <td>{{ $data->no_hp }}</td>
                        </tr>

                        <tr>
                            <td>Alamat Email</td>
                            <td>:</td>
                            <td>{{ $data->alamat_email }}</td>
                        </tr>

                        <tr>
                            <td>Status Tempat Tinggal</td>
                            <td>:</td>
                            <td>{{ $data->status_tempat_tinggal }}</td>
                        </tr>

                        <tr>
                            <td>Status Tempat Tinggal</td>
                            <td>:</td>
                            <td>{{ $data->status_tempat_tinggal }}</td>
                        </tr>

                        <tr>
                            <td>Tujuan Pembuatan Rekening</td>
                            <td>:</td>
                            <td>{{ $data->tujuan_pembuatan_rekening }}</td>
                        </tr>

                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{ $data->pekerjaan }}</td>
                        </tr>

                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>:</td>
                            <td>{{ $data->nama_perusahaan }}</td>
                        </tr>

                        <tr>
                            <td>Bidang Usaha</td>
                            <td>:</td>
                            <td>{{ $data->bidang_usaha }}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Pendirian Perusahaan</td>
                            <td>:</td>
                            <td>{{ $data->tanggal_pendirian_perusahaan }}</td>
                        </tr>

                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{ $data->jabatan }}</td>
                        </tr>

                        <tr>
                            <td>nip_gol</td>
                            <td>:</td>
                            <td>{{ $data->nip_gol }}</td>
                        </tr>

                        <tr>
                            <td>Mulai Bekerja</td>
                            <td>:</td>
                            <td>{{ $data->mulai_bekerja }}</td>
                        </tr>

                        <tr>
                            <td>Alamat Kantor</td>
                            <td>:</td>
                            <td>{{ $data->alamat_kantor }}</td>
                        </tr>

                        <tr>
                            <td>No tlpn Kantor</td>
                            <td>:</td>
                            <td>{{ $data->no_tlpn_kantor }}</td>
                        </tr>

                        <tr>
                            <td>Pendapatan Rata-Rata Perbulan</td>
                            <td>:</td>
                            <td>{{ $data->pendapatan_rata_rata_perbulan }}</td>
                        </tr>

                        <tr>
                            <td>Sumber Pendapatan</td>
                            <td>:</td>
                            <td>{{ $data->sumber_pendapatan }}</td>
                        </tr>

                        <tr>
                            <td>Sumber Pendapatan</td>
                            <td>:</td>
                            <td>{{ 'Rp ' . number_format($data->nominal_pendapatan, 0, ',', '.') }}</td>
                        </tr>

                        <tr>
                            <td>Nama Lengkap Kontak Darurat</td>
                            <td>:</td>
                            <td>{{ $data->nama_lengkap_kontak_darurat }}</td>
                        </tr>

                        <tr>
                            <td>Hubungan Dengan Pemohon</td>
                            <td>:</td>
                            <td>{{ $data->hubungan_dengan_pemohon }}</td>
                        </tr>

                        <tr>
                            <td>Alamat Kontak Darurat</td>
                            <td>:</td>
                            <td>{{ $data->alamat_kontak_darurat }}</td>
                        </tr>

                        <tr>
                            <td>No Tlpn Kontak Darurat</td>
                            <td>:</td>
                            <td>{{ $data->no_tlpn_kontak_darurat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <!-- /.card-header -->

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
                                <th>Rekening yang Dikehendaki</th>
                                <th>Nama Lengkap</th>
                                <th>no_identitas</th>
                                <th>No Tlpn</th>
                                <th>No Hp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <a href="" class="btn btn-secondary"><i class="fad fa-search-plus"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
                "autoWidth": false
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#export-csv-btn').click(function() {
                var csv = [];
                var rows = $('table tr');

                // Ambil data dari setiap row dan tambahkan ke array csv
                for (var i = 0; i < rows.length; i++) {
                    var row = [],
                        cols = $(rows[i]).find('td, th');
                    for (var j = 0; j < cols.length; j++) {
                        row.push(cols[j].innerText);
                    }
                    csv.push(row.join(','));
                }

                // Download file CSV
                downloadCSV(csv.join('\n'), 'eyJpdiI6ImRMQU9QUlNJNUY3ZTU0UWNKSDNy.csv');
            });

            // Function untuk download file CSV
            function downloadCSV(csv, filename) {
                var csvFile;
                var downloadLink;

                // Buat objek Blob untuk file CSV
                csvFile = new Blob([csv], {
                    type: 'text/csv'
                });

                // Buat link untuk download file
                downloadLink = document.createElement('a');
                downloadLink.download = filename;
                downloadLink.href = window.URL.createObjectURL(csvFile);
                downloadLink.style.display = 'none';

                // Tambahkan link ke halaman
                document.body.appendChild(downloadLink);

                // Klik link untuk download file
                downloadLink.click();
            }
        });
    </script>

    <script>
        function exportTableToCSV($table, filename) {
            var $headers = $table.find('tr:has(th)'),
                $rows = $table.find('tr:has(td)'),
                tmpColDelim = String.fromCharCode(11), // vertical tab character
                tmpRowDelim = String.fromCharCode(0), // null character

                // jika browser bukan MSIE atau Edge, gunakan encodeURIComponent
                // jika browser MSIE atau Edge, gunakan encodeURI
                uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent($headers.map(function(i, el) {
                    var $el = $(el),
                        $cols = $el.find('th');

                    return $cols.map(function(j, el) {
                        var $col = $(el),
                            text = $col.text();

                        return text.replace(/"/g, '""'); // ganti double quote dengan 2 double quote
                    }).get().join(tmpColDelim);
                }).get().join(tmpRowDelim)) + tmpRowDelim + encodeURIComponent($rows.map(function(i, el) {
                    var $el = $(el),
                        $cols = $el.find('td');

                    return $cols.map(function(j, el) {
                        var $col = $(el),
                            text = $col.text();

                        return text.replace(/"/g, '""'); // ganti double quote dengan 2 double quote
                    }).get().join(tmpColDelim);
                }).get().join(tmpRowDelim));

            // buat link download
            var $link = $('<a>')
                .attr('href', uri)
                .attr('download', filename);

            // tambahkan link download ke dokumen dan klik link
            $('body').append($link);
            $link[0].click();
            $link.remove();
        }
    </script>
@endpush
