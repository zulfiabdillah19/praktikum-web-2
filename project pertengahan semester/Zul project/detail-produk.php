<?php

require_once 'admin/dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$produk = $st->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="shop.php">Shop</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <a class="logo" href="index.pdp">
                    <h1><strong>NBeautyShop</strong></h1>
                </a>
                <form class="form-inline ">
                    <div class="login_text">
                        <ul>
                            <li><a href="#"><img src="images/user-icon.png"></a></li>
                            <li><a href="#"><img src="images/bag-icon.png"></a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                        </ul>
                    </div>
                </form>
            </nav>
        </div>
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_main">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_taital_main">
                            <h1 class="about_taital" style="margin-bottom: -15px;"><?php echo $produk['nama'] ?></h1>
                            <?php

                            for ($i = 0; $i < 6; $i++) {
                                echo '<i class="fa fa-star text-warning"></i>';
                            }

                            ?>(4.8)
                            <h4 class="mt-3"><strong>Harga</strong></h4>
                            <p class="about_text mb-3" style="text-align: justify;">Rp.
                                <?php echo number_format($produk['harga'], 0, ',', '.') ?>
                            </p>
                            <h4><strong>Deskripsi</strong></h4>
                            <p class="about_text" style="text-align: justify;"> Produk kecantikan adalah produk yang
                                bertujuan untuk menjaga dan meningkatkan kesehatan dan kecantikan kulit. Ini termasuk
                                produk seperti pelembab, sunscreen, toner, masker, serum, exfoliator, dan lainnya yang
                                membantu menjaga dan meningkatkan kesehatan kulit. Produk ini juga dapat membantu untuk
                                mengurangi tanda-tanda penuaan dan melindungi kulit dari kerusakan akibat sinar
                                matahari. Produk kecantikan juga dapat membantu untuk membuat wajah terlihat lebih cerah
                                dan segar. Produk ini biasanya diformulasikan dengan bahan-bahan alami seperti ekstrak
                                tanaman atau minyak esensial yang bermanfaat bagi kesehatan kulit.</p>
                            <div class="readmore_bt"><a href="shop.php#form-pemesanan">Pesan Sekarang</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><img src="images/about-img.png" class="image_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="address_text">HUBUNGI KAMI</h3>
                        <div class="address_bt">
                            <ul>
                                <li>
                                    <a href="#" style="text-align: justify;">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span
                                            class="padding_left10">Address : Jl. Lenteng Agung Tim. Blok Realita
                                            No.50,
                                            RT.5/RW.1, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah
                                            Khusus Ibukota Jakarta 10550, gang realita, warung matak kabita belok
                                            kiri</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+6281282205295">
                                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call
                                            : +62 81282205295</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:inzusta@gmail.com">
                                        <i class="fa fa-envelope" aria-hidden="true"></i><span
                                            class="padding_left10">Email : inzusta@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer_logo_1"><a href="index.php">
                                <h1 class="text-white">NBeautyShop</h1>
                            </a></div>
                        <p class="dummy_text">NBeautyShop adalah toko online yang menyediakan berbagai produk kecantikan
                            dan perawatan kulit yang berkualitas.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="main">
                            <h3 class="address_text">Best Products</h3>
                            <p class="ipsum_text">Skin Care, Body Wash, dan Body Lotion.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social_icon">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/zulfiabdillah19"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a
                    href="https://github.com/zulfiabdillah19">M. Zulfi Abdillah</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
</body>

</html>