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
    <h1 class="heading1">TELAGA RENJENG</h1> <br>
    <center>
        <section class="home" id="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/telagarenjeng3.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/telagarenjeng2.jpg" class="box">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/telagarenjeng.jpg" class="box">
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
            <p>Sebuah telaga di dataran tinggi di Kecamatan Paguyangan, Brebes, Jawa Tengah, menyimpan mitos dan sejarah yang unik. Kolam alami ini masih tergolong perawan dan masih dihuni ribuan ikan jinak. Nama tempat ini adalah Telaga Ranjeng yang berada
                di kaki Gunung Slamet tepatnya di Desa Pandansari, Kecamatan Paguyangan. Lokasinya berada di ketinggian 1.200 Mdpl (meter di atas permukaan laut).

                <br>
                <br> Karena keberadaan ikan-ikan yang dinilai keramat itulah, Telaga Ranjeng dianggap mistis baik bagi warga setempat maupun warga yang datang dari luar daerah. Dilansir dari laman Gotravelly.com, di tempat itu banyak orang yang menjalani
                ritual pencarian berkah. Tak hanya itu banyak yang percaya pula bahwa air di telaga tersebut bisa digunakan untuk mencegah lahan pertanian dari serangan hama. Oleh karena itulah, banyak orang yang datang ke sana untuk mengambil air agar
                sawah mereka terhindar dari hama.
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