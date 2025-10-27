@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
<div class="bg-waway-red text-center py-4 text-white">
    <h3 class="fw-bold" style="color: white;">INFORMASI TERBARU</h3>
</div>

<div class="container my-5">
    <div class="d-flex flex-column align-items-center" id="informasi-container">
        @foreach ($stmtDataInformasi as $index => $informasi)
        <div class="card card-custom w-100 mb-4 p-3 shadow-lg" data-page="{{ floor($index / 3) + 1 }}"
            style="display: {{ $index < 3 ? 'block' : 'none' }};">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($informasi->cover) }}" class="img-fluid rounded mb-3 img-thumbnail zoomable"
                        alt="{{ $informasi->judul }}" data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-img="{{ asset($informasi->cover) }}">
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <h4 class="fw-bold">{{ $informasi->judul }}</h4>
                        <p class="text-muted small">{{ date('d M Y', strtotime($informasi->created_at)) }}</p>
                        <p class="text-secondary text-justify">{{ Str::limit($informasi->deskripsi, 500, '...') }}</p>
                        @if ($informasi->file != null)
                        <a href="{{ url('public/' . $informasi->file) }}" target="_blank"
                            class="btn btn-primary mt-3">Download</a>
                        @else
                        <span class="text-muted mt-3">Tidak ada file</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
            <button id="prev-page" class="btn btn-outline-secondary px-4 py-2 rounded-pill shadow-sm" style="display: none; transition: all 0.3s;">
                <i class="fas fa-chevron-left"></i> Prev
            </button>
            <span id="page-indicator" class="mx-3 fw-bold">1</span>
            <button id="next-page" class="btn btn-outline-secondary px-4 py-2 rounded-pill shadow-sm" style="transition: all 0.3s;">
                Next <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Modal untuk zoom gambar -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Modal ukuran sedang -->
        <div class="modal-content">
            <!-- Bagian Header Modal dengan Tombol Close -->
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid rounded shadow" alt="Zoomed Image">
            </div>
        </div>
    </div>
</div>

<style>
    /* Efek shadow merah saat gambar disentuh */
    .zoomable {
        transition: box-shadow 0.3s ease-in-out;
        cursor: pointer;
        /* Kursor berubah menjadi tangan */
    }

    .zoomable:hover {
        box-shadow: 0px 4px 10px #12264b;
        /* Shadow merah */
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let modalImage = document.getElementById("modalImage");
        let zoomableImages = document.querySelectorAll(".zoomable");

        zoomableImages.forEach(img => {
            img.addEventListener("click", function () {
                modalImage.src = this.getAttribute("data-img");
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
            let items = document.querySelectorAll(".card-custom");
            let currentPage = 1;
            let totalPages = Math.ceil(items.length / 3);
            let prevPageBtn = document.getElementById("prev-page");
            let nextPageBtn = document.getElementById("next-page");
            let pageIndicator = document.getElementById("page-indicator");

            function showPage(page) {
                items.forEach(item => {
                    item.style.display = item.getAttribute("data-page") == page ? "block" : "none";
                });
                pageIndicator.textContent = page;
                prevPageBtn.style.display = page > 1 ? "inline-block" : "none";
                nextPageBtn.style.display = page < totalPages ? "inline-block" : "none";
            }

            nextPageBtn.addEventListener("click", function () {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            prevPageBtn.addEventListener("click", function () {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });
        });
</script>
@endsection
