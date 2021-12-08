<?php
session_start();
$koneksi = new mysqli("localhost","root","","admin");
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

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-headig">
                    <br>
                    <br>
                        <h3 class="panel-tittle"> Register Customer </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                        <div class="form-group">
                                <label> Nama </label>
                                <input type ="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label> Email </label>
                                <input type ="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label> Password </label>
                                <input type ="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label> Address </label>
                                <textarea class="form-control" name="alamat" required> </textarea>
                            </div>
                            <div class="form-group">
                                <label> No. HP </label>
                                <input type ="number" class="form-control" name="telepon" required>
                            </div>
                            <button class="btn btn-primary" name="daftar"> Register </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if (isset($_POST["daftar"]))
{
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];


    $ambil = $koneksi->query("SELECT * FROM pelanggan
    WHERE email_pelanggan = '$email'");

    $yangcocok = $ambil->num_rows;

    if ($yangcocok==1)
    {
        
        echo "<script> alert('E-mail sudah digunakan');</script>";
        echo "<script> location='register.php';</script>";
    }
    else
    {
        $koneksi->query("INSERT INTO pelanggan
        (email_pelanggan,password_pelanggan,nama_pelanggan,
        telepon_pelanggan,alamat) VALUES 
        ('$email','$password','$nama','$telepon','$alamat') ");

        
        echo "<script> alert('Register berhasil, silahkan login');</script>";
        echo "<script> location='login.php';</script>";

    }
}

?>
    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="img/logos/logo-1.png" alt="">
            </div>
            <div class="logo-item">
                <img src="img/logos/logo-2.png" alt="">
            </div>
            <div class="logo-item">
                <img src="img/logos/logo-3.png" alt="">
            </div>
            <div class="logo-item">
                <img src="img/logos/logo-4.png" alt="">
            </div>
            <div class="logo-item">
                <img src="img/logos/logo-5.png" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->

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
                                <li>2020 Lookbook</li>
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