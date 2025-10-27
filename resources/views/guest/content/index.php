<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href='./img/logo-title.png' rel='shortcut icon'>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <title>Bank Waway Lampung</title>
</head>

<body>
    <!-- navabar -->
    <?php include 'partials/navbar.php'; ?>
    
    <div>
        <!-- slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a target="_blank" href="./Pdf_laporan/detailbrosur.pdf">
                        <img style="width: 200px; height: 410px;object-fit: cover;
                    object-position: 15% 50%;" src="./img/brosurbankwaway.png" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <img style="width: 200px; height: 410px;object-fit: cover;
                    object-position: 15% 50%;" src="./img/slide.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="width: 200px; height: 410px;object-fit: cover;
                    object-position: 15% 50%;" src="./img/slide-1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="bg-waway-red text-center py-3">
            <h3 style="color: white;">Bank Waway Lampung</h3>
        </div>

        <!-- content -->
        <div style="margin: 10px 10px; height: auto;" class="row row-cols-1 mx-auto row-cols-md-3 g-4 px-5">
            <div class="col">
                <a style="color: black;text-decoration: none; " href="deposito.html">
                    <div class="card content-home-card h-100 shadow p-3 bg-body">
                        <img style="width: 320px; height: 200px; object-fit: cover;" src="./img/index/deposito.jpg"
                            class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Deposito</h5>
                            <p class="card-text">Deposito adalah salah satu jawaban yang tepat untuk milenial yang ingin
                                berinvestasi dengan aman.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a style="color: black;text-decoration: none; " href="kredit.html">
                    <div class="card content-home-card h-100 shadow p-3 bg-body">
                        <img style="width: 320px; height: 200px; object-fit: cover;" src="./img/index/pinjaman.jpg"
                            class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pinjaman</h5>
                            <p class="card-text">Bank Waway memiliki banyak berbagai produk pinjaman sesuai
                                kebutuhan para nasabah yaitu pinjaman pegawai, pinjaman UMKM, dan produk pinjaman
                                lainnya.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a style="color: black;text-decoration: none; " href="tabungan.html">
                    <div class="card content-home-card h-100 shadow p-3 bg-body">
                        <img style="width: 320px; height: 200px; object-fit: cover;" src="./img/index/tabungan.jpg"
                            class="img-fluid mx-auto content-home-img shadow mb-3 bg-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tabungan</h5>
                            <p class="card-text">Di Bank Waway mempunyai banyak tabungan seperti Simpel untuk simpanan
                                pelajar, tabungan Tapis merupakan tabungan produktif & sejahtera.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php include 'partials/footer.php'; ?>
        
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>