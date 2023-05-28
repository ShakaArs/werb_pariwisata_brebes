<!DOCTYPE html>
<html lang="en">
<!--UAS DASAR DASAR KOMPUTASI 
Nama     : Shaka Arisya
Nim      : A11.2021.13406
kelompok : 4108
-->

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
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--header section dimulai-->
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-hiking"></i>  BREBES. </a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa--times"></div>
            <a href="index.php">Beranda</a>
            <a href="tentang.php">Tentang</a>
            <a href="index.php">Kuliner</a>
            <a href="buku_tamu.php">Registrasi</a>
            <a href="contact.php">Hubungi Kami</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>

    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>

        <form action="">
            <input type="search" placeholder="Cari Di sini..." id="search-box">
            <label for="search-btn" class="fas fa-search"></label>
        </form>
    </div>

    <!--Beranda-->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background: url(assets/img/landmark.jpg) no-repeat;">
                        <div class="content">
                            <span>Kota Kecil</span>
                            <h3>Sejuta Pesona</h3>
                            <p>Dijuluki sebagai kota bawang, dan merupakan kota yang sangat strategis karena berada pada jalan utama yaitu jalan tol Trans Jawa dan juga Pantura.</p>
                            <a href="#" class="btn">Jelajahi</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="second" style="background: url(assets/img/alun.jpg) no-repeat;">
                        <div class="content">
                            <span>Temui banyak Cerita</span>
                            <h3>Kenali Brebes</h3>
                            <p>Brebes juga memiliki potensi pariwisata yang banyak dan juga menarik. Objek wisata di kota Brebes selalu ditingkatkan agar lebih baik.</p>

                            <a href="#" class="btn">Jelajahi</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background: url(assets/img/pantura.jpg) no-repeat;">
                        <div class="content">
                            <span>OJO KLALEN</span>
                            <h3>Brebes BERHIAS</h3>
                            <p>Bahasa ngapak adalah bahasa keseharian masyarakat Brebes. Brebes memiliki banyak sekali kuliner yang banyak digemari salah satu contohnya telur asin.</p>
                            <a href="#" class="btn">Jelajahi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--Kategori-->
    <section class="category">
        <h1 class="heading">Object Wisata Brebes</h1>

        <div class="box-container">
            <div class="box">
                <img src="assets/img/kaligua3.jpg" alt="">
                <h3>Kaligua </h3>
                <p>Desa Pandansari, Kecamatan Paguyangan</p>
                <br>
                <br>
                <a href="kaligua.php" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="assets/img/telagarenjeng.jpg" alt="">
                <h3>Telaga Renjeng </h3>
                <p>Desa Pandansari, Kecamatan Paguyangan</p>
                <br>
                <br>
                <a href="telagarenjeng.php" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="assets/img/pabrikgulajatibarang.jpg" alt="">
                <h3>Stasiun Remise</h3>
                <p>Pabrik Gula Jatibarang,Jalan Jatibarang -Slawi, Desa Jatibarang Lor,Kecamatan Jatibarang</p>
                <a href="stasiunremis.php" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="assets/img/pantairandusanga.jpg" alt="">
                <h3>Pantai Randusanga </h3>
                <p> Desa Randusanga Kulon sekitar 7 KM ke arah utara dari jalan raya Pantura kota Brebes</p>
                <a href="pantairandusanga.php" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="assets/img/Hutanmangrove.jpg" alt="">
                <h3>Hutan Mangrove</h3>
                <p> Desa Pandansari, Kaliwlingi, Kecamatan Brebes</p>
                <br>
                <br>
                <a href="hutan.php" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="assets/img/curugputri.jpg" alt="">
                <h3>Curug Putri</h3>
                <p> Desa Padanama, Mendala, Kecamatan Sirampog.</p>
                <br>
                <br>
                <a href="curug.php" class="btn">read more</a>
            </div>
        </div>
        <!--Kuliner-->
        <section class="shop" id="shop">
            <h1 class="heading">Kuliner Brebes</h1>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/telurasin.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Telur asin </h3>
                            <div class="price">Rp 3.000 - Rp 7000/butir</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/kupatblengong..jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>sate Blengong </h3>
                            <div class="price">Rp 15.000 - Rp 20.000/porsi</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/kepitig.soka.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Kepiting Soka </h3>
                            <div class="price">Rp 45.000- Rp 50.000/porsi</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/olos.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Olos </h3>
                            <div class="price">Rp 500- 1.000/biji</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/nasilengko.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Nasi Lengko </h3>
                            <div class="price">Rp 5000- 7.000/biji</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/sotobrebes.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Soto Brebes </h3>
                            <div class="price">Rp 12000- 15.000/biji</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="assets/img/rujakbelut.jpg" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Rujak Belut </h3>
                            <div class="price">Rp 15.000- Rp 20.000/porsi.</div>
                        </div>

                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    </section>
    <!--JAVA SWIPPE-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--JAVASCRIPT-->
    <script src="main.js"></script>

</body>
<!-- footer/Copyright -->
<footer>
    <div class="footer">
        <small>Copyright &copy; 2021 - Shaka Arisya. All Rights Reserved. </small>
    </div>
</footer>

</html>