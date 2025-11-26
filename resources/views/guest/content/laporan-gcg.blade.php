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
                <h5 class="card-title">{{ $item->judul }}</h5>
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

<!-- Modal besar (disamakan dengan semua halaman lain) -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title">Form Verifikasi Download</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    
                    <!-- Kolom kiri -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Nama</label>
                            <input id="namaInput" type="text" class="form-control" placeholder="Masukkan nama..." required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input id="emailInput" type="email" class="form-control" placeholder="Masukkan email..." required>
                        </div>

                        <div class="mb-3">
                            <label>No. Telepon</label>
                            <input id="telpInput" type="number" class="form-control" placeholder="Masukkan nomor telepon..." required>
                        </div>
                    </div>

                    <!-- Kolom kanan -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label>Instansi/Lembaga</label>
                            <input id="instansiInput" type="text" class="form-control" placeholder="Masukkan nama instansi..." required>
                        </div>

                        <div class="mb-3">
                            <label>Keperluan</label>
                            <textarea id="keperluanInput" class="form-control" placeholder="Tuliskan keperluan Anda..." rows="5" required></textarea>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="agreeCheck" required>
                            <label class="form-check-label" for="agreeCheck">
                                Saya tidak akan menyalahgunakan laporan ini.
                            </label>
                        </div>
                    </div>

                </div>
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
        let nama = document.getElementById('namaInput').value;
        let email = document.getElementById('emailInput').value;
        let telp = document.getElementById('telpInput').value;
        let instansi = document.getElementById('instansiInput').value;
        let keperluan = document.getElementById('keperluanInput').value;
        let agree = document.getElementById('agreeCheck').checked;

        if (!nama || !email || !telp || !instansi || !keperluan) {
            alert("Semua data wajib diisi!");
            return;
        }

        if (!agree) {
            alert("Anda harus menyetujui pernyataan.");
            return;
        }

        fetch("{{ route('verifikasi.download') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                nama: nama,
                email: email,
                no_telp: telp,
                instansi: instansi,
                keperluan: keperluan,
                agree: agree ? 1 : 0,
                file: fileToDownload
            })
        })
        .then(response => response.text())
        .then(text => {
            try {
                let data = JSON.parse(text);
                if (data.success) {
                    window.open(fileToDownload, "_blank");
                    bootstrap.Modal.getInstance(document.getElementById('downloadModal')).hide();
                } else {
                    alert("Gagal menyimpan data!");
                }
            } catch (e) {
                console.error("Response bukan JSON:", text);
                alert("Server tidak mengembalikan JSON. Cek log backend.");
            }
        });
    }
</script>

@endsection
