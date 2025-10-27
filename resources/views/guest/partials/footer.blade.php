<!-- footer -->
<div class="container-fluid bg-secondary text-white mt-1 py-3 px-sm-3 px-md-5">
   <div>
                <a style="color: white;">
                    Bank Waway Berizin & Diawasi <strong>Otoritas Jasa Keuangan</strong>
                </a>
                 <a style="color: white;">
                   | Bank Waway Lampung merupakan peserta penjaminan <strong> LPS</strong>
                </a>
            </div>
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <img class="img-fluid" src="{{ asset('assetGuest/img/logo-website2.png') }}" alt="" width="250px" height="58px">
            <p>Jl. Diponegoro No.28, Gulak Galik, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung
                35212</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-white rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-white rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px;" href="https://web.facebook.com/BankWawayLampung/?_rdc=1&_rdr"><i
                        class="fab fa-facebook-f"></i></a>

                <a class="btn btn-outline-white rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px;" href="https://www.instagram.com/bankwawaylampung/"
                    target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-white rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px;"
                    href="whatsapp://send?text=Hallo, saya ingin bertanya sesuatu Terkait Produk PT BPR Waway Lampung&phone=+6281327288668"
                    target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="d-flex">
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-white"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <a style="color: white;" href="mailto:Bankwawaylampung@yahoo.com" target="_blank">
                        Bankwawaylampung@yahoo.com</a>
                </div>
            </div>
            
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-white"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Phone</h5>
                    <p>+0721 266 869</p>
                    <!--<img class="img-fluid" src="{{ asset('assetGuest/img/logo-ojk-lps-bpr.png') }}" alt="">-->
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="d-flex flex-column justify-content-start">

            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-white">Pengaduan Nasabah</h3>
            <form action="{{ route('kritik') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nama" class="form-control border-0 py-4" placeholder="Your Name"
                        required>
                    @error('nama')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control border-0 py-4" placeholder="Your Email"
                        required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Kritik dan Saran" required></textarea>
                    @error('pesan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" name="submit" type="submit">Submit
                        Now</button>
                </div>
            </form>

        </div>
    </div>
    <div class="container-fluid pt-0" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
        <p class="m-2 text-center text-white">
            &copy; <a href="#">BANK Waway Lampung</a>. All Rights Reserved
        </p>
    </div>
</div>
