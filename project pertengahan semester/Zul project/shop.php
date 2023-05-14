<?php

require_once 'admin/dbkoneksi.php';

$sql = "SELECT * FROM produk";

$item = $dbh->query($sql);

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
    <title>Products</title>
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
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
    <!-- product section start -->
    <div class="product_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="product_taital">PRODUK KAMI</h1>
                    <p class="product_text">Kami menawarkan produk-produk terbaik dari berbagai merek terkenal dan kami
                        selalu berupaya untuk memastikan bahwa pelanggan kami mendapatkan produk dengan harga yang
                        terbaik.</p>
                </div>
            </div>
            <div class="product_section_2 layout_padding">
                <div class="row">
                    <?php foreach ($item as $row) { ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <h4 class="bursh_text"><?php echo $row['nama']  ?></h4>
                                <p class="lorem_text ml-1 mr-1" style="text-align: center;"> layanan pembelian yaitu <br>
                                    pembelian di tempat(COD),<br> pembelian online(Credit Card), <br>dan layanan
                                    pengiriman(Express).</p>
                                <img src="images/img-9.png" class="image_1">
                                <div class="btn_main">
                                    <div class="buy_bt">
                                        <ul>
                                            <li class="active"><a href="detail-produk.php?id=<?= $row['id'] ?>">Detail</a>
                                            </li>
                                            <li><a href="shop.php#form-pemesanan">Buy Now</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="price_text"><?php echo number_format($row['harga'], 0, ',', '.')  ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="seemore_bt"><a href="shop.php">Produk Lainnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- product section end -->

    <div class="about_section layout_padding" id="form-pemesanan">
        <div class="container">
            <div class="about_section_main">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-3" style="text-align: center;"><strong>FORM PEMESANAN</strong></h1>
                        <form action="tamu/pesanan/proses_pesanan.php" method="post" class="contact-form">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pesanan</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Produk</label><br>
                                <?php
                                $sqljenis = "SELECT * FROM produk";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select name="nama_produk" id="nama" class="form-control" required>
                                    <option value="">-- Pilih Produk --</option>
                                    <?php foreach ($rsjenis as $row) : ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nama_pemesan">Nama Lengkap</label>
                                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control" placeholder="Nama Anda" required />
                            </div>
                            <div class="form-group">
                                <label for="alamat_pemesan">Alamat Lengkap</label>
                                <textarea id="alamat_pemesan" name="alamat_pemesan" class="form-control" rows="9" placeholder="Jl Lenteng Agung, Jakarta Selatan" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="qty">QTY</label>
                                <input type="number" id="qty" name="qty" class="form-control" placeholder="10" required />
                            </div>
                            <div class="form-group">
                                <label for="total_harga">Total Harga</label>
                                <input type="number" id="total_harga" name="total_harga" class="form-control" placeholder="1000000" required />
                            </div>
                            <button type="submit" name="proses" value="Simpan" class="btn btn-warning tm-btn-white text-white">Pesan
                                Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Jl. Lenteng Agung Tim. Blok Realita
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
                                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : inzusta@gmail.com</span>
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
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://github.com/zulfiabdillah19">M. Zulfi Abdillah</a></p>
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