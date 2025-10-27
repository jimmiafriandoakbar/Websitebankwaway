@extends('admin.template')

@section('content')

@if (session('message'))
    {!! session('message') !!}
@endif

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cover</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cover</a></li>
              <li class="breadcrumb-item active">Index </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-8">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>no</th>
                        <th>File</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0 ?>
                        @foreach($stmtCover as $data)
                    <?php $i++; ?>
                    <tr>
                        <td>Cover {{$i}}</td>
                        <td><img src="{{asset( $data->file)}}"></td>
                        <td>
                            <a href="{{route('admin.coverEdit' ,encrypt($data->id) )}}" class="btn btn-warning">Edit</a>
                            
                            
                            <a href="" target="_blank">Preview</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('script')
    {{-- DataTables  & Plugins  --}}
    <script src="{{asset('LTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('LTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    {{-- AdminLTE App  --}}
    <script src="{{asset('LTE/dist/js/adminlte.min.js') }}"></script>
    {{-- AdminLTE for demo purposes  --}}
    <script src="{{asset('LTE/dist/js/demo.js')}}"></script>
    {{-- Page specific script  --}}
    <script>
      $(function () {
          $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false 
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
