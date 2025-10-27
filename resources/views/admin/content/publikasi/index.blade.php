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
            <h1>Pubikasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Laporan</a></li>
              <li class="breadcrumb-item active">Publikasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mailbox-messages" style="height: 220px;">
                <div class="card-body">
                  <table id="example1" class="table table-striped table-hover"> 
                    <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Judul</th>
                      <th>File</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody> 
                      @foreach ($stsmGetDataPublikasi as $item)
                        <tr>
                          <td>{{date('d M Y H:i', strtotime($item->created_at))}}</td>
                          <td>{{$item->judul}}</a></td>
                          <td><a href="{{url('public/'. $item->file)}}" target="_blank">Download</a> </td>
                          <td>
                            <button type="button" class="btn btn-light" title="Delete" data-toggle="modal" data-target="#akumodal{{$item->id }}">
                              <i class="far fa-trash" style="color: #f92506;"></i>
                            </button>
                            
                            <div class="modal fade" id="akumodal{{$item->id }}">
                              <div class="modal-dialog">
                                <div class="modal-content bg-light">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Yakin Hapus..?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Data akan terhapus permanen..!!&hellip;</p>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{route('admin.publikasiDelete', encrypt($item->id) )}}" type="button" class="btn btn-outline-danger">Delete</a>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        
                      </tr>
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
        <div class="col-md-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3>Input Publikasi </h3>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mailbox-messages" style="height: 220px;">
                <div class="card-body">
                  <form action="{{route('admin.uploadPublikasi')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}  
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            Anda Harus mengisi data dengan lengkap
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend center">
                            <span class="input-group-text"><span class="text-danger font-weight-bold">&ast;</span> Judul Laporan Pelayanan</span>
                            </div>
                            <input type="text" name="judul" value="{{ old('judul') }}" class="form-control {{ $errors->has('judul') ? ' is-invalid' : '' }}" placeholder="Judul . . .">
                            @if ($errors->has('judul'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('judul') }}
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend center">
                            <span class="input-group-text"><span class="text-danger font-weight-bold">&ast;</span> File PDF</span>
                            </div>
                            <input type="file" name="file" value="{{ old('file') }}" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}" placeholder="file . . .">
                            @if ($errors->has('file'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{ $errors->first('file') }}
                                </div>
                            @endif
                        </div>
                        <div class="modal-footer justify-content">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                  </form>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
            <div class="card card-danger card-outline">
              <h2 class="text-primary text-center">Preview</h2>
              <iframe src="https://bankwawaylampung.com/laporan" height="520px" title="description"></iframe> 
            </div>
        </div>
        
      </div>
    </section>
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