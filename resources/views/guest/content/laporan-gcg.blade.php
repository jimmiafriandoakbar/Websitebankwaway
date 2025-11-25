@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')

<div class="bg-waway-red text-center mb-5 py-3">
    <h3 style="color: white;">Laporan Tata Kelola / GCG</h3>
</div>

<div class="row row-cols-1 row-cols-md-4 g-4 mx-5 px-5 mb-5">
    @foreach ($stmtLaporanTataKelola as $item)
    <div class="col content-home-card">
        <div style="border-radius: 10%;" class="card">
            <img style="height: 250px; width: 200px; object-fit: cover; object-position: 50% 50%; border-radius: 5%;"
                src="{{asset('assetGuest/img/cover_buku/cover_buku.jpg') }}" 
                class="card-img-top img-fluid mx-auto mt-4 shadow bg-body" alt="...">

            <div class="card-body text-center">
                <h5 class="card-title">{{$item->judul}}</h5>
                <p class="card-text">Laporan GCG</p>

                <button class="btn btn-link p-0"
                    onclick="openDownloadModal('{{ url('public/'.$item->file) }}')">
                    Download
                </button>

            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="modal fade" id="downloadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title">Verifikasi Download</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label>Email</label>
                    <input id="emailInput" type="email" class="form-control" placeholder="Masukkan email..." required>
                </div>

                <div class="mb-3">
                    <label>Key</label>
                    <input id="keyInput" type="text" class="form-control" placeholder="Masukkan key..." required>
                </div>

                <small class="text-muted">key: <b>Hubungi Petugas Bank Waway</b></small>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="submitDownload()">Download</button>
            </div>

        </div>
    </div>
</div>


<script>
    let fileToDownload = "";

    function openDownloadModal(fileUrl) {
        fileToDownload = fileUrl;
        var modal = new bootstrap.Modal(document.getElementById('downloadModal'));
        modal.show();
    }

    function submitDownload() {
        let email = document.getElementById('emailInput').value;
        let key = document.getElementById('keyInput').value;

        if (!email || !key) {
            alert("Email dan key wajib diisi!");
            return;
        }

        if (key !== "Bapas1970") {
            alert("Key salah!");
            return;
        }

        // Setelah valid → download file
        window.open(fileToDownload, "_blank");

        // Tutup modal
        bootstrap.Modal.getInstance(document.getElementById('downloadModal')).hide();
    }
</script>

@endsection
