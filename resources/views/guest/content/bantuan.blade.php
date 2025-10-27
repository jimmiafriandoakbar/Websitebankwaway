@extends('guest.partials.layout')

@section('title', 'Bank Waway Lampung')

@section('content')
    <!-- cover -->
    <div id="carouselExampleSlidesOnly" class="carousel slide text-white" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 100%; height: 310px;object-fit: cover;
            object-position: 15% 50%; filter: brightness(65%);" src="{{asset('assetGuest/img/Bantuan.png')}}" class="card-img" alt="...">
                <div class="card-img-overlay top-50 start-0 translate-middle-y px-5">
                    <h1 class="card-title text-white">BANTUAN</h1>
                    <p class="card-text">Kami akan membantu ada dengan pelayanan terbaik kami, silahkan kunjungi kantor pusat kami BANK WAWAY</p>
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
    <div class="accordion" id="accordionExample">
        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed custom-accordion-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Apa saja yang dibutuhkan untuk membuka Rekening?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body text-secondary">
                    <strong>Hai teman setia Waway</strong>, jika ingin membuka rekening, nasabah diharapkan membawa KTP dan KK.
                    Silakan datang ke kantor pusat kami Bank Waway.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed custom-accordion-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Apa itu rekening SIMPEL?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body text-secondary">
                    <strong>Hai teman setia Waway</strong>, rekening SIMPEL adalah tabungan untuk pelajar dengan syarat mudah dan ringan.
                    Silakan kunjungi kantor kami untuk informasi lebih lanjut.
                </div>
            </div>
        </div>

        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed custom-accordion-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bagaimana cara membuat rekening?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body text-secondary">
                    <strong>Hai teman setia Waway</strong>, cukup bawa KTP dan KK ke kantor pusat kami, atau klik 
                    <a href="{{url('pembukaanRekening')}}" class="text-decoration-none text-primary fw-semibold">di sini</a>.
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.custom-accordion-btn {
    background-color: #001f3f; /* Navy */
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