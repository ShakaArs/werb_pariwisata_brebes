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
    <h1 class="heading1">KALIGUA</h1> <br>
    <center>
        <section class="home" id="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/kaligua3.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/kaligua2.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/goajepang.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/kaligua1.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/kaligua4.jpeg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/kaligua5.jpeg" class="box">
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
            <p>Kawasan wisata agro Kebun Teh Kaligua, di Desa Pandansari, Kecamatan Paguyangan Brebes, Jawa Tengah, menawarkan panorama alam yang sungguh permai, serta udara yang bersih dan segar. Inilah salah satu perkebunan teh peninggalan penjajahan kolonial
                Belanda. Kebun Teh Kaligua bukan sekedar kawasan perkebunan. Kawasan ini menyimpan eksotisme alam yang sungguh mempesonakan. Kamu yang ingin liburan Tahun Baru menghirup udara segar, ramai-ramai saja bersama keluarga ke sini

                <br>
                <br> Kebun Teh Kaligua ini merupakan milik PTPN IX dan didirikan pada tahun 1889 oleh Cultur Onderneming dari Belanda. Untuk perwakilan Indonesia ditunjuk Fan Jhon Pletau co, dan dikelola oleh seorang pengusaha bernama Van De Joeng (baca
                Van Di Yong). Kebun teh ini berada pada 20 Km sebelah timur kota Kecamatan Bumiayu atau 15 km dari pertigaan Kaligua (dekat Flyover Kretek). Kawasan ini memiliki ketinggian bervariasi antara 1.500 - 2.050 mdpl. Untuk suhu udara berkisar
                antara 4 sampai 20 derajat celcius.
                <br><br> Untuk menuju ke kawasan ini, dari arah utara (Tegal) bisa melalui jalur Tegal Purwokerto. Sesampai pertigaan Kaligua) di dekat Flyover Kretek), belok ke kanan dengan menempuh jarak sekitar 15 km. Menikmati pemandangan Kebun Teh
                seluas 600 hektar ini bisa menggunakan mobil sewaan. Dengan mobil wisata ini, wisatawan bisa puas berkeliling menyusuri seluruh areal perkebunan. Di samping menikmati indahnya kawasan kebun teh, wisatawan juga berkesempatan melihat dari
                dekat proses pembuatan teh hitan khas Kaligua. Mulai dari proses pelayuan daun, penggilingan, sampai proses akhir. Wisatawan juga bisa menikmati kesegaran teh hitam.


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