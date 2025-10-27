@extends('guest.partials.layout')

@section('title', 'Kredit Pegawai')

@section('content')

    <div class="bg-waway-red text-center py-3">
        <h3 style="color: white;">Pinjaman Pegawai</h3>
    </div>

    <!-- paragraf -->
    <div class="text-center my-5">
        <h5>Pinjaman Waway</h5>
        <p class="text-justify mx-5 px-5 my-3">Plafon pinjaman s.d 500jt, jangka waktu s.d 20 tahun dan pinjaman tidak
            dikenakan bunga penalti setelah mencapai 50%</p>
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
                            <li>Slip Gaji & Daftar Gaji (Dilegalisir)</li>
                            <li>NPWP Asli & Fotokopi 1 Lembar</li>
                            <li>Karpeg Asli & Fotokopi 1 Lembar</li>
                            <li>Taspen Asli & Fotokopi 1 Lembar</li>
                            <li>SK 80% & SK 100% (Asli) & Fotokopi 1 Lembar</li>
                            <li>SK Pangkat Terakhir (Asli) & Fotokopi 1 Lembar</li>
                            <li>Rekening Koran Tabungan (Gaji) 3 Bulan terakhir</li>
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

@endsection
