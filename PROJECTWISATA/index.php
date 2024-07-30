<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Palembang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .video-area {
            padding: 200px 0 60px 0;
            position: relative;
            background: url(./img/pindang.jpeg) no-repeat center center/cover;
        }

        .video-area .overlay-bg {
            opacity: .9;
        }

        .video-area .video-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .video-area .video-content a {
            display: inline-block;
            margin-bottom: 20px;
        }

        .video-area .video-content h3 {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .video-area .video-content h4 {
            font-weight: 300;
            font-size: 14px;
        }

        .video-area .video-content .video-desc {
            margin-top: 120px;
            text-align: right;
            align-self: flex-end;
        }

        .footer-area {
            padding-top: 100px;
            background-color: #222222;
        }

        .section-gap {
            padding: 120px 0;
        }


        .footer-social a {
            padding-right: 25px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .footer-social i {
            color: #cccccc;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        @media (max-width: 991px) {
            .footer-social {
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    Wisata Palembang
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#paketwisata">Paket Wisata</a></li>

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Pemesanan
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="formpemesanan.php">Form Pemesanan</a>
                                <a class="dropdown-item" href="daftarpemesanan.php">Daftar Pemesanan</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- End Header Area -->
    </section>

    <?php
    //array list wisata
    $wisata = [
        ['judul' => 'Pulau Kemaro', 'deskripsi' => 'Pulau Kemaro adalah salah satu destinasi wisata populer di Palembang, Sumatera Selatan. Pulau ini merupakan delta kecil di Sungai Musi, sekitar 6 kilometer dari Jembatan Ampera. Pulau Kemaro dikenal sebagai tempat rekreasi dan wisata religi', 'gambar' => 'https://www.rumah123.com/seo-cms/assets/Pagoda_4475a0c17c/Pagoda_4475a0c17c.jpg'],
        ['judul' => 'Benteng Kuto Besak', 'deskripsi' => 'Benteng Kuto Besak (BKB) merupakan salah satu tempat bersejarah yang ada di Kota Palembang. Berlokasi didaerah 19 Ilir, Bukit Kecil, Kota Palembang dan terletak di pinggir Sungai Musi. Mempunyai panjang 288,75 meter dan tinggi 9,99 meter serta tebal 1,99meter.', 'gambar' => 'https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/24/benteng-kuto-besak-4193764320.jpeg'],
        ['judul' => 'Jakabaring Sport City (JSC)', 'deskripsi' => 'Jakabaring Sport City (JSC) adalah kompleks olahraga di Kota Palembang, Sumatera Selatan, Indonesia, yang luasnya 355 Ha. JSC merupakan destinasi wisata olahraga dan memiliki berbagai objek wisata.', 'gambar' => 'https://images.bisnis.com/posts/2018/10/22/851893/stadion-jakabaring.jpg'],
    ];
    ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($wisata as $idx => $item): ?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $idx; ?>"
                    class="<?php echo ($idx == 0) ? 'active' : ''; ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($wisata as $idx => $item): ?>
                <div class="carousel-item <?php echo ($idx == 0) ? 'active' : ''; ?>">
                    <img src="<?php echo $item['gambar']; ?>" class="d-block w-100" alt="<?php echo $item['judul']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $item['judul']; ?></h5>
                        <p><?php echo $item['deskripsi']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="album py-5 bg-light" id="paketwisata">
        <div class="container-fluid">
            <div class="title text-center mt-3">
                <h1 class="mb-10">Paket Wisata</h1>
                <p>Temukan wisata favorit anda</p>
            </div>
            <div class="row">
                <?php
                foreach ($wisata as $item):
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="<?php echo $item['gambar']; ?>">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['judul']; ?></h5>
                                <p class="card-text text-justify"><?php echo $item['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- Start Video Area -->
    <section class="video-area pt-40 pb-40">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="video-content">
                <a href="https://www.youtube.com/watch?v=R-vaEMRH7qE" class="play-btn">
                    <img src="https://themewagon.github.io/adventure/img/play-btn.png" alt="">
                </a>
                <div class="video-desc">
                    <h3 class="h2 text-white text-uppercase">Bagaimana rasanya menikmati pempek di kota asalnya,
                        Palembang?</h3>
                    <h4 class="text-white">Inilah empat dari sekian rumah makan di kota Palembang.</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Video Area -->

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="text-white">
                        <h6>Tentang Wisata Palembang</h6>
                        <p>
                            Selamat datang di Tentang Wisata Palembang, sumber informasi terkini dan terpercaya mengenai
                            destinasi wisata di kota Palembang. Jelajahi keindahan alam, sejarah, budaya, dan kuliner
                            khas Palembang bersama kami. Temukan tempat-tempat menarik untuk dikunjungi dan rute
                            perjalanan yang memukau. Dapatkan pengalaman tak terlupakan di kota yang kaya akan pesona
                            ini. Selamat berwisata!
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer-text">Copyright ©
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with
                            <i class="fa fa-heart-o" aria-hidden="true"></i> powered by <a
                                href="https://getbootstrap.com" target="_blank">Bootstrap</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">

                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        "use strict";

        $('.play-btn').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

    });
</script>

</html>