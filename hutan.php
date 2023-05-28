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
    <h1 class="heading1">Hutan Mangrove</h1> <br>
    <center>
        <section class="home" id="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/Hutanmangrove.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/hutanmangrove2.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/hutanmangrove3.jpeg" class="box">
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
            <p>Mangrove Pandansari Sekitar pada tahun 1990, wilayah pesisir utara Brebes Jawa Tengah dihantam musibah abrasi. Namun dari musibah tersebut warga sekitar mulai berbenah dengan melakukan gerakan menanam pohon atau reboisasi mangrove. Kini wilayah
                tersebut melahirkan potensi wisata baru. Upaya reboisasi pohon mangrove di wilayah pesisir Brebes ini melahirkan sebuah destinasi wisata hutan bakau bernama Desa Wisata Mangrove Pandasari. Disingkat Dewi Mangrove Sari.Untuk dapat menjelajah
                ke kawasan Dewi Mangrove Sari pengunjung harus membeli tiket yang dibanderol seharga Rp 20.000 perorang di hari biasa atau weekdays. Sedangkan di hari libur atau weekend dikenakan biaya Rp 25.000,- per orang.
                <br>
                <br> Pengunjung yang ingin menjelajah kawasan ekowisata ini, mungkin memerlukan waktu seharian karena cukup luas. Selain itu wahana yang disediakan cukup banyak, apalagi untuk menambah wawasan. Dari wahana wisata ke wahana yang lain pengunjung
                akan terus melihat berbagai slogan. Berisi ajakan untuk menjaga dan mencintai lingkungan sekitar. Usaha dari warga sekitar ditambah kerjasama dari pemerintah setempat ini tidak heran jika kawasan wisata ini menerima penghargaan Kalpataru.
                Penghargaannya diberikan pada tahun 2017 oleh Presiden Indonesia.
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