@extends('admin.template')

@section('content')
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
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                        <tr>
                            <td>hello world</td>
                            <td>hello world</td>
                        </tr>
                    @endfor
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection



<!-- /.card -->

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
