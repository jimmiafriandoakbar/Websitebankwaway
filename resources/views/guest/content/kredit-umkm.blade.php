@extends('guest.partials.layout')

@section('title', 'Kredit UMKM')

@section('content')

    <div class="bg-waway-red text-center py-3">
        <h3 style="color: white;">Pinjaman UMKM</h3>
    </div>

    <!-- paragraf -->
    <div class="text-center my-5">
        <h5>UMKM Waway</h5>
    </div>

    <!-- according  -->
    <div class="accordion mx-5 px-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    KELEBIHAN DAN KEUNTUNGAN
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Berhadiah undian UMROH</strong> It is shown by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the
                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                    this with custom CSS or overriding our default variables. It's also worth noting that just about any
                    HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    SYARAT DAN KETENTUAN
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Persyaratan Kredit</strong>
                    <div class="pt-0">
                    <ul>
                        <li>Mengisi Blanko permohonan</li>
                        <li>Fotokopi KTP Pemohon 4 Lembar</li>
                        <li>Fotokopi KTP Pasangan 3 Lembar</li>
                        <li>Fotokopi Kartu Keluarga Pemohon dan penjamin</li>
                        <li>Surat Rekomendasi Atasan</li>
                        <li>Surat Pertanyaan Debitur</li>
                        <li>SK RT/KaLing (ASLI)</li>
                        <li>Ijazah Terakhir (ASLI)</li>
                        <p>Semua berkas dimasukan ke <strong> Map Folio</strong> </p>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    SUKU BUNGA
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body px-5">
                    <table class="table table-striped text-center text-black">
                        <thead style="color: rgb(255, 166, 0);" class="table-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">Suku Bunga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>25.000 < 7.500.000</td>
                            <td>1,0%</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>7.500.000 < 100.000.000</td>
                            <td>1,5%</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>100.000.000 < 500.000.000</td>
                            <td>2,0%</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection