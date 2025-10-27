@extends('guest.partials.layout')

@section('title', 'Karir')

@section('content')

<div class="bg-waway-red text-center mb-5  py-3">
    <h3 class="text-white fw-bold">Saatnya Bergabung dan Berkembang Bersama Masyarakat</h3>
</div>

<div class="container px-4 px-md-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($stmtKarir as $item)
            <div class="col">
                <div class="card border-0 shadow-lg rounded-4 h-100 d-flex flex-column justify-content-between transition-card">
                    <div>
                        <img src="{{ asset('assetGuest/img/Recruitment.png') }}"
                             class="card-img-top rounded-top-4"
                             alt="{{ $item->judul }}"
                             style="height: 200px; object-fit: cover; object-position: center;">

                        <div class="card-body text-start">
                            <h5 class="fw-bold text-dark mb-2">{{ $item->judul }}</h5>
                            <p class="text-muted small">{{ Str::limit($item->deskripsi, 110) }}</p>
                        </div>
                    </div>

                    <div class="card-footer bg-white border-top-0 text-center pb-4">
                        <a href="{{ url('public/' . $item->file) }}" target="_blank"
                           class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">
                            <i class="bi bi-download me-1"></i> Download
                        </a>
                        <div class="text-muted mt-2 small">
                            <i class="bi bi-calendar-event me-1"></i>{{ date('d M Y', strtotime($item->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col text-center">
                <p class="text-muted">Belum ada lowongan tersedia saat ini.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection


<style>
.transition-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.transition-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
}


</style>