<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREBES BERHIAS</title>
    <!--CSS SWIPPE-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <!--header section dimulai-->
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-hiking"></i>  BREBES. </a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa--times"></div>
            <a href="index.php">Beranda</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </header>
    <h1 class="heading1">Curug Putri</h1> <br>
    <center>
        <section class="home" id="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/curugputri.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/curugputri2.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/curugputri3.jpg" class="box">
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
        </section>
        <h2><i>Swipe untuk melihat foto lainnya</i></h2>
    </center>
    <div class="sec">
        <center>
            <br>
            <p>Curug Putri Brebes ,Jawa Tengah memang selalu punya pesona bagi wisatawan baik lokal maupun mancanegara. Bagaimana tidak, disebelah mana saja terdapat objek wisata yang luar biasa indahnya dan memiliki kearifan lokal yang kuat. Kali ini, di
                pesisir utara Pulau Jawa ini terdapat sebuah kabupaten yang memiliki berbagai objek wisata yang indah. Kota ini adalah Kabupaten Brebes, kota yang berada di ujung perbatasan antara Jawa Tengah dan Jawa Barat di sisi utara. Ketika Anda
                berada di Brebes, atau hanya sekedar lewat, singgahlah sejenak untuk menikmati tempat wisata di Brebes. Salah satu objek wisata yang sering menjadi rekomendasi adalah Curug Putri Brebes.
                <br>
                <br>Air terjun menawan yang satu ini tepatnya berada di Dukuh Padanama, yang masih masuk wilayah Desa Mendala  Kecamatan Siamprog. Lokasinya memang tidak berada di jalur utama transportasi pantai utara yang terkenal. Akan tetapi, air
                terjun ini berada di area perbatasan ke selatan, yang mana disana terdapat perbukitan yang semakin melengkapi keindahan air terjun yang satu ini dimata para wisatawan.
                <br><br>

            </p>
    </div>
    <!--JAVA SWIPPE-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.home-slider', {
            loop: true,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
<!-- footer/Copyright -->
<footer>
    <div class="footer ">
        <small>Copyright &copy; 2021 - Shaka Arisya. All Rights Reserved. </small>
    </div>
</footer>

</html>