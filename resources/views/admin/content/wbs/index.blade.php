@extends('admin.template')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>WBS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">WBS</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <div class="card-body">
                                <table id="example1" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Pelapor</th>
                                            <th>Email</th>
                                            {{-- <th>Kronologi Kejadian</th> --}}
                                            <th>Kriteria</th>
                                            <th>Lampiran</th>
                                            <th>-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $e)
                                            <tr>
                                                <td>{{ date('d M Y H:i', strtotime($e->created_at)) }}</td>
                                                {{-- <td>{{$e->created_at}}</td> --}}
                                                <td><a href="#">{{ $e->nama_pelapor }}</a></td>
                                                <td><b>{{ $e->email }}</b> </td>
                                                {{-- <td>{{ $e->kronologi_kejadian }}</td> --}}
                                                <td>{{ $e->kriteria }}</td>
                                                <td><a href="{{ asset($e->lampiran) }}" target="_blank">Lihat
                                                        Lampiran</a>
                                                </td>
                                                <td><a href="{{ route('admin.wbsDetail', encrypt($e->id)) }}"
                                                        class="btn btn-outline-primary" target="_blank"><i class="fad fa-download"
                                                            title="download"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
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
@endpush
