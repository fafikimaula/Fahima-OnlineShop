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
                    <a href="./index.html"><img  alt=""></a>
                </div>
                <div class="header-right">


                <form action="pencarian.php" class="navbar-form navbar-right" method="get">
                <input type = "text" class="form-control" name="keyword">
                </form>



                    
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

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>Orders over Rp. 250.000,00- </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>If the order doesn't match</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Open all day long </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="img/f-box-1.jpeg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2020 </span>
                                        <h2>Medina Square</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="categories.php" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="img/f-box-2.jpeg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2020 Trend</span>
                                        <h2>Namira Square</h2>
                                        <span class="trend-alert">Hijab Segiempat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <video controls>
                                <source src="img/f-box-3.mp4" type="video/mp4" />
                                
                              </video>
                            
                            <div class="box-text">
                                <span class="trend-year">2020</span>
                                <h2>New Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".pashmina">Pashmina</li>
                            <li data-filter=".segiempat">Segiempat</li>
                            <li data-filter=".instan">Instan</li>
                            <li data-filter=".inner">Inner</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" id="product-list">
            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while ($perproduk = $ambil->fetch_assoc()){ ?>
            <div class = "col-md-3">

                <div class = "thumbnail">
                
                    <img src = "admin/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
                    <div class = "caption">   
                    <p> <?php echo $perproduk['nama_produk']; ?> </p>  
                    <h6> Rp. <?php echo number_format($perproduk['harga_produk']); ?> </h6>
                    <a href = "beli.php?id=<?php echo $perproduk['id_produk']; ?>"
                    class = "btn btn-primary"> Add to cart </a>
                    <a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>"
                     classs="btn btn-default"> Detail </a>
                </div>
            </div>
            </div>
            <?php } ?>

            
           
                
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2020 <br />#lookbook</h2>
                        </div>
                        <p>Presents Our New Baby! ✨⁣⁣ <br>
                            ⁣⁣<br>
                            💎JEEHAN SHAWL⁣⁣💎<br>
                            pashmina ceruty babdoll⁣⁣<br>
                            dengan finishing crochet super cantik⁣⁣<br>
                            dan label acyrlic premium yg makin⁣<br>
                            membuat looks hijab kamu super mewah💕⁣⁣<br>
                            ⁣⁣<br>
                            📐DETAILS⁣⁣<br>
                            material: ceruty babydoll⁣⁣<br>
                            size: 180 x 75 cm⁣⁣<br>
                            toleransi beberapa cm ⁣<br>
                            untuk merapikan jahitan⁣⁣<br>
                            ⁣⁣<br>
                            BEST DEAL ONLY 48K !<br>⁣⁣
                            promo spesial launching⁣<br>⁣
                            harga normal 53,000 🤩</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="img/lookbok.jpeg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

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