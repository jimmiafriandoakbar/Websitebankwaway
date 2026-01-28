@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
<!-- cover -->
<div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width: 100%; height: 310px;object-fit: cover;
            object-position: 15% 50%; filter: brightness(65%);" src="{{asset('assetGuest/img/Bantuan.png')}}"
                class="card-img" alt="...">
            <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                <h1 class="card-title text-white">BANTUAN</h1>
                <p class="card-text">Kami akan membantu ada dengan pelayanan terbaik kami, silahkan kunjungi kantor
                    pusat kami BANK WAWAY</p>
                <p class="card-text">Kami Berkembang Bersama Masyarakat</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-waway-red text-center  py-3">
    <h3 style="color: white;">FAQ</h3>
</div>


<div class="shadow p-4 mb-5 bg-white rounded-4 mt-4 mx-5 border border-2 border-primary-subtle">
    <h4 class="text-center mb-4 text-navy fw-bold">Pertanyaan yang Sering Ditanyakan</h4>

    <div class="accordion" id="accordionFaq">

        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="faqHeadingOne">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
                    Apa saja yang dibutuhkan untuk membuka rekening?
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                <div class="accordion-body text-secondary">
                    Hai teman setia Waway, untuk membuka rekening nasabah diharapkan membawa KTP dan Kartu Keluarga.
                    Silakan datang ke kantor pusat Bank Waway.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
                    Apa itu rekening SIMPEL?
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                <div class="accordion-body text-secondary">
                    Rekening SIMPEL adalah tabungan untuk pelajar dengan persyaratan mudah dan ringan.
                    Silakan kunjungi kantor kami untuk informasi lebih lanjut.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faqCollapseThree">
                    Bagaimana cara membuat rekening?
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                <div class="accordion-body text-secondary">
                    Nasabah cukup membawa KTP dan Kartu Keluarga ke kantor pusat Bank Waway, atau melakukan
                    pendaftaran melalui
                    <a href="{{ url('pembukaanRekening') }}" class="text-decoration-none text-primary fw-semibold">
                        halaman pembukaan rekening
                    </a>.
                </div>
            </div>
        </div>

    </div>
</div>

<div class="shadow p-4 mb-5 bg-white rounded-4 mt-4 mx-5 border border-2 border-primary-subtle">
    <h4 class="text-center mb-4 text-navy fw-bold">Prosedur dan Tata Cara Bertransaksi</h4>

    <div class="accordion" id="accordionProsedur">

        <!-- Pembukaan Rekening -->
        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Pembukaan Rekening di kantor bank
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse"
                data-bs-parent="#accordionProsedur">
                <div class="accordion-body text-secondary">
                    <ol>
                        <li>
                            Nasabah menyiapkan dokumen: Pembukaan rekening perorangan: Identitas diri (KTP, NPWP, SIM, Kartu Keluarga, akta kelahiran (khusus pembukaan rekening anak)). Pembukaan rekening berbadan hukum: Akta Pendirian, akta perubahan terakhir, NPWP, NIB, KTP pengurus, surat keterangan domisili.
                        </li>
                        <li>Mengisi formulir pembukaan rekening yang telah disediakan oleh bank.</li>
                        <li>Pihak bank akan meneliti kembali formulir pembukaan rekening yang telah diisi oleh nasabah apakah telah sesuai dan lengkap.</li>
                        <li>Jika formulir aplikasi dinyatakan sesuai dan sudah lengkap, petugas bank akan memvalidasi.</li>
                        <li>Nasabah diberikan bukti kepemilikan dana di bank, seperti: buku tabungan, bilyet deposito.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Penyetoran Uang Tunai -->
        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Penyetoran Uang Tunai di kantor bank
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                data-bs-parent="#accordionProsedur">
                <div class="accordion-body text-secondary">
                    <ol>
                        <li>Siapkan slip setoran: isi slip setoran dengan tanggal, nama, nomor rekening, jumlah uang yang akan di setor dan tandatangan penyetor.</li>
                        <li>Serahkan slip setoran dan uang: Serahkan slip setoran dan uang kepada petugas teller</li>
                        <li>Ambil bukti setoran: Simpan bukti setoran sebagai bukti penyetoran.</li>
                        <li>Buku Tabungan : Cetak buku tabungan kepada petugas teller sebagai bukti transaksi tercatat di bank.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Pengambilan Uang Tunai -->
        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    Pengambilan Uang Tunai di kantor bank
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse"
                data-bs-parent="#accordionProsedur">
                <div class="accordion-body text-secondary">
                    <ol>
                        <li>Siapkan slip penarikan: isi slip setoran dengan tanggal, nama, nomor rekening, jumlah uang yang akan di ambil dan tandatangan penarik.</li>
                        <li>Serahkan slip penarikan: Serahkan slip penarikan kepada petugas teller.</li>
                        <li>Buku Tabungan: Cetak buku tabungan kepada petugas teller sebagai bukti transaksi tercatat di bank.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Transfer -->
        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFour">
                    Transfer di kantor bank
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse"
                data-bs-parent="#accordionProsedur">
                <div class="accordion-body text-secondary">
                    <ol>
                        <li>Siapkan bukti kiriman uang: Isi dengan tanggal, nama penerima,nomor rekening, bank, alamat,atas perintah.</li>
                        <li>Serahkan bukti kiriman uang: Serahkan bukti kiriman uang kepada petugas teller.</li>
                        <li>Ambil bukti transfer: Simpan bukti kiriman uang sebagai bukti transfer.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Permohonan Kredit -->
        <div class="accordion-item border-0 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed custom-accordion-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFive">
                    Permohonan Kredit di kantor bank
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse"
                data-bs-parent="#accordionProsedur">
                <div class="accordion-body text-secondary">
                    <ol>
                        <li>Siapkan formulir permohonan kredit: Calon debitur mengisi dengan jelas dan lengkap data yang diperlukan pada formulir permohonan kredit.</li>
                        <li>Melengkapi syarat - syarat yang ditetapkan oleh petugas bank.</li>
                        <li>Pemberitahuan Persetujuan Kredit- Notifikasi: Petugas bank memberikan notifikasi kredit ke calon debitur bahwa permohonan kredit disetujui oleh bank.</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
</div>



<style>
    .custom-accordion-btn {
        background-color: #001f3f;
        /* Navy */
        color: #fff;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
    }

    .custom-accordion-btn:not(.collapsed) {
        background-color: #003366;
        color: #fff;
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1);
    }

    .custom-accordion-btn:hover {
        background-color: #002b5c;
        color: #f8f9fa;
    }

    .accordion-body {
        background-color: #f8f9ff;
        padding: 1rem 1.25rem;
        border-top: 1px solid #dee2e6;
    }

    .accordion-button::after {
        transition: transform 0.3s ease-in-out;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(90deg);
    }
</style>


@endsection