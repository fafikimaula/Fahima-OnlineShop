<?php
session_start();
$koneksi = new mysqli("localhost","root","","admin");

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('Empty shopping cart, please shop first');</script>";
    echo "<script>location='index.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fahima.mee</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger">
                    <img src="img/icons/man.png" alt="">
                    <a href="#">
                        <img src="img/icons/bag.png" alt="">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                <?php if (isset($_SESSION["pelanggan"])):?>
                        <li><a href="logout.php"> Logout </a> </li>
                    <?php else: ?>
                        <a href="register.php">Register</a> 
                        <a href="login.php" class="in">Sign in</a> 
                    <?php endif ?>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="./index.php">Home</a></li>
                        <li><a href="./categories.php">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.php">Product Page</a></li>
                                <li><a href="keranjang.php">Shopping Cart</a></li>
                                <li><a href="checkout.php">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="./product-page.php">About</a></li>
                       
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over Rp. 250.000,00-</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>5% off all item. Use code: 5OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Cart<span>.</span></h2>
                        <a href="#">Hijab</a>
                        <a href="#">Pashmina</a>
                        <a class="active" href="#">Ceruty Babydoll</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
        <div class="cart-table">
                <table >
                    <thead>
                        <tr>
                            <th class="product-h">Product</th>
                            <th>Price</th>
                            <th >Quantity</th>
                            <th>Total</th>
                            <th class="quan">Action </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($_SESSION["keranjang"] as $id_produk=> $jumlah); ?>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM produk 
                        WHERE id_produk='$id_produk'");
                        $pecah = $ambil->fetch_assoc();
                        $subharga = $pecah["harga_produk"]* $jumlah;
                        ?>

                        <tr>
                            <td class="product-col">
                            <img src="admin/foto_produk/<?php echo $pecah["foto_produk"]; ?>" alt="">
                                <div class="p-title">
                                    <h5><?php echo $pecah["nama_produk"]; ?> </h5>
                                </div>
                            </td>
                            <td> Rp. <?php echo number_format($pecah["harga_produk"]); ?> </td>
                            <td class="total"><?php echo $jumlah; ?> </td>
                            <td class="product-close">Rp. <?php echo number_format($subharga); ?> </td>
                            <td class="quan">
                                <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" 
                                class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <div class="shipping-info">
                            <h5>Choose a shipping</h5>
                            <div class="chose-shipping">
                                <div class="cs-item">
                                    <input type="radio" name="id_ongkir" id="one">
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM ongkir");
                                    while ($perongkir = $ambil->fetch_assoc()){
                                        ?>
                                    <label value="<?php echo $perongkir["id_ongkir"] ?>">
                                    <?php echo $perongkir["nama_kota"] ?>
                                    </label>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        
                        <?php
                                if (isset($_POST["checkout"]))
                                {
                                    $id_pelanggan = $_SESSION["pelanggan"] ["id_pelanggan"];
                                    $id_ongkir = $_POST["id_ongkir"];
                                    $tanggal_pembelian = date("Y-m-d");

                                    $ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
                                    $arrayongkir = $ambil->fetch_assoc();
                                    $tarif = $arrayongkir['tarif'];

                                    $total_pembelian = $totalbelanja + $tarif;

                                    $koneksi->query("INSERT INTO pembelian (
                                        id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian)
                                        VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian')");
                                    
                                    $id_pembelian_barusan = $koneksi->insert_id;
                                    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
                                    {
                                        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah)
                                        VALUES ('$id_pembelian_barusan','$id_produk','$jumlah')");
                                    }

                                    unset($_SESSION["keranjang"]);
                                    echo "<script>alert('pembelian sukses');</script>";
                                    echo "<script>location='nota.php?id=$id_pembelian_barusan':</script>";

                                }
                                ?>


                        <div class="total-info">
                            <div class="total-table">
                                <table>
                                    <thead>
                                    <?php $totalbelanja = 0; ?>
                                    <?php foreach ($_SESSION["keranjang"] as $id_produk=> $jumlah); ?>
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM produk 
                                    WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah["harga_produk"]*$jumlah;
                                    ?>

                                        <tr>
                                            <th>Total</th>
                                            <th>Subtotal</th>
                                            <th>Shipping</th>
                                            <th class="total-cart">Total Cart</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php $totalbelanjaa = $totalbelanja + 5000; ?>

                                            <td class="total">Rp. <?php echo number_format($totalbelanja); ?></td>
                                            <td class="sub-total">Rp. <?php echo number_format($totalbelanja); ?></td>
                                            <td class="shipping">Rp. 5.000,00-</td>
                                            <td class="total-cart-p">Rp. <?php echo number_format($totalbelanjaa);?> </td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="checkout.php" class="primary-btn chechout-btn" name="checkout">Proceed to checkout</a>
                                    <a href="index.php" class="primary-btn chechout-btn">Back to menu</a>
                                </div>
                            </div>

                            <?php
                                if (isset($_POST["checkout"]))
                                {
                                    $id_pelanggan = $_SESSION["pelanggan"] ["id_pelanggan"];
                                    $id_ongkir = $_POST["id_ongkir"];
                                    $tanggal_pembelian = date("Y-m-d");

                                    $ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
                                    $arrayongkir = $ambil->fetch_assoc();
                                    $tarif = $arrayongkir['tarif'];

                                    $total_pembelian = $totalbelanja + $tarif;

                                    $koneksi->query("INSERT INTO pembelian (
                                        id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian)
                                        VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian')");
                                    
                                    $id_pembelian_barusan = $koneksi->insert_id;
                                    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
                                    {
                                        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah)
                                        VALUES ('$id_pembelian_barusan','$id_produk','$jumlah')");
                                    }

                                    unset($_SESSION["keranjang"]);
                                    echo "<script>alert('pembelian sukses');</script>";
                                    echo "<script>location='nota.php?id=$id_pembelian_barusan':</script>";

                                }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="https://www.instagram.com/fahima.mee" class="instagram"><i class="fa fa-instagram"></i><span>Fahima.mee</span></a>
                    <a href="https://wa.me/6285831438074" class="whatsapp"><i class="fa fa-whatsapp"></i><span>Fahima.mee</span></a>
					<a href="https://shopee.co.id/fahima.mee"> <img src="https://cf.shopee.co.id/file/f0bfbe61296cce0f59ec3d0ca279eeb5"></i><span>Fahima.mee</span></a>
			
				</div>
			</div>


            <div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>



		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>