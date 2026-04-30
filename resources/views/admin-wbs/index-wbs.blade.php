@extends('admin-wbs.layoutwbs.app')

@section('content')

<h4 class="mb-4">
    <i class="fas fa-inbox mr-2"></i> WBS Data Masuk
</h4>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover table-bordered">

                <thead class="thead-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                        <th>Email</th>
                        <th>Kriteria</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($data as $index => $e)
                        <tr>
                            <td class="text-center">
                                {{ $data->firstItem() + $index }}
                            </td>

                            <td>
                                {{ date('d M Y H:i', strtotime($e->created_at)) }}
                            </td>

                            <td>{{ $e->nama_pelapor }}</td>

                            <td>{{ $e->email }}</td>

                            <td>
                                <span class="badge badge-info">
                                    {{ $e->kriteria }}
                                </span>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.wbsDetail', $e->id) }}"
                                   class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Data tidak ditemukan
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        <!-- PAGINATION -->
        <div class="mt-3 d-flex justify-content-between">
            <div>
                {{ $data->firstItem() }} - {{ $data->lastItem() }} dari {{ $data->total() }}
            </div>
            <div>
                {{ $data->links() }}
            </div>
        </div>

    </div>
</div>

@endsection