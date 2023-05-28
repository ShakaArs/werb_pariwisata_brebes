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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;1,100;1,300&family=Raleway:wght@500;600;700&family=Rancho&display=swap');
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: -2s linear;
}

:root {
    --green: #219150;
    --black: #10221b;
    --white: #fff;
    --light-bg: #eee;
    --border: .2rem solid var(--black);
    --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

body {
    background: white;
    height: 100vh;
    margin: 0;
    padding: 0;
    align-items: center;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 5rem;
}
        .heading {
    text-align: center;
    margin-bottom: 2.5rem;
    font-size: 4rem;
    color: var(--black);
}
        .header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding: 2rem 9%;
    z-index: 1000;
    display: flex;
    align-items: center;
    background: var(--white);
    box-shadow: var(--box-shadow);
}

.logo {
    margin-right: auto;
    font-size: 2.5rem;
    color: var(--black);
    font-weight: bolder;
}

i {
    color: var(--green);
}

a {
    margin-left: 2rem;
    font-size: 1.7rem;
    color: var(--black);
}

a:hover {
    color: var(--green);
}

#nav-close {
    font-size: 5rem;
    cursor: pointer;
    color: var(--black);
    display: none;
}

.fa-bars,
.fa-shopping-cart {
    font-size: 2.5rem;
    margin-left: 2rem;
    cursor: pointer;
    color: var(--black);
}

.fa-search {
    font-size: 2.5rem;
    margin-left: 2rem;
    cursor: pointer;
    color: var(--black);
}

.fa-bars:hover,
.fa-shopping-cart:hover,
.fa-search:hover {
    color: var(--green);
}

#menu-btn {
    display: none;
}

.search-form {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, .8);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10000;
    transform: translateY(-110%);
}

.active {
    transform: translateY(0%);
}

#close-search {
    position: absolute;
    top: 1.5rem;
    right: 2.5rem;
    cursor: pointer;
    color: var(--white);
    font-size: 6rem;
}

#close-search:hover {
    color: var(--green);
}
.heading1 {
    text-align: center;
    margin-top: 10rem;
    font-size: 4rem;
    color: var(--black);
}
        input[type=text], select{
                    width:100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #CCC;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                input[type=submit]{
                    width:100%;
                    background-color: #4CAF50;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
                input[type=submit]:hover{
                    background-color: #45a049;
                }
                div{
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
                }
                textarea{
                    width: 100%;
                    height: 150px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: #f8f8f8;
                    font-size: 16px;
                    resize: none;
                }
                #tamu{
                    font-family: "Trebuchet MS", Arial, Helvetica,sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }
                #tamu td,#tamu th{
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                #tamu tr:nth-child(even){
                    background-color: #f2f2f2;
                }
                #tamu tr:hover{
                    background-color: #ddd;
                }
                #tamu th{
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #4CAF50;
                    color: white;
                }
                .footer {
    padding: 10x 0;
    background-color: #333;
    color: white;
    text-align: center;
    font-size: 20px;
}
                @media (max-width:1200px) {
    .header {
        padding: 2rem;
    }
    section {
        padding: 3rem 2rem;
    }
}

@media (max-width:991px) {
    html {
        font-size: -55%;
    }
    .home .box {
        justify-content: center;
        background-position: right !important;
    }
    .home .second {
        justify-content: center;
        background-position: left !important;
    }
    .content {
        text-align: center;
    }
    .content span {
        font-size: 3rem;
    }
    .content h3 {
        font-size: 4rem;
    }
}

@media (max-width:768px) {
    #menu-btn {
        display: inline-block;
    }
    .navbar {
        position: fixed;
        top: 0;
        left: -110%;
        background: var(--white);
        z-index: 10000;
        width: 35rem;
        height: 100%;
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
    }
    .active {
        left: 0;
        box-shadow: 0 0 0 100vw rgba(0, 0, 0, .8);
    }
    .active a {
        margin: 1rem 0;
        font-size: 3rem;
    }
    #nav-close {
        display: block;
        position: absolute;
        top: 1rem;
        right: 2rem;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        display: none;
    }
}

@media (max-width:450px) {
    html {
        font-size: -50%;
    }
    .heading {
        font-size: 3rem;
    }
}
    </style>

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

        </div>
    </header>
    <h1 class="heading1">BREBES BERHIAS</h1> <br>
    <center>
        <h2>BUKU TAMU KUNJUNGAN KE BREBES</h2>
    </center>
    <div class="row">
                <div class="column">
                    <h2>Buku tamu</h2>
                    <div>
                        <form method="POST" action="<?-$_SERVER['PHP_SELF'];?>">
                        <label>Nama</label>
                        <input type="text" name="fnama" placeholder="Nama anda..">
                        <label>Asal kota</label>
                        <input type="text" name="fasal" placeholder="Asal kota..">
                        <label>Provinsi</label>
                        <select name="fprovinsi" id="prov">
                            <option value="Jateng">Jateng</option>
                            <option value="Jabar">Jabar</option>
                            <option value="Jatim">Jatim</option>
                        </select>
                        <label>Pesan dan kesan untuk Brebes</label>
                        <textarea name="fpesan">
                        </textarea>
                        <input type="submit" value="Submit">
                    </form>
                    </div>

                </div>
            </div>
            <div>
                <?php
                    if (isset($_POST['fnama'])){
                        $nama=$_POST['fnama'];
                        $email=$_POST['fasal'];
                        $prov=$_POST['fprovinsi'];
                        $pesan=$_POST['fpesan'];
                        
                        echo "Daftar Tamu";
                        echo "<table id='tamu'>";
                        echo "<tr><th>No</th><th>Nama</th><th>Asal</th><th>Provinsi</th><th>Pesan</th></tr>";
                        echo "<tr><td>1</td><td>$nama</td>$asal</td><td>$prov</td><td>$pesan</td></tr>";
                    }
                    ?>
            </div>

</body>
<!-- footer/Copyright -->
<footer>
    <div class="footer ">
        <small>Copyright &copy; 2021 - Shaka Arisya. All Rights Reserved. </small>
    </div>
</footer>
</html>