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
                    <a href="./index.html"><img src="img/l" alt=""></a>
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
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Premium Hijab with Good Quality<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Fashion</a>
                        <a class="active" href="#">Hijab</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                        <option value="">Sort by</option>
                                        <option value="">Orders</option>
                                        <option value="">Newest</option>
                                        <option value="">Price</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>20 Products</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-9.jpeg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="img/products/img-9.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Instan Freeya</h6>
                            </a>
                            <p>Rp. 35.000,00-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-2.jpeg" alt="">
                                    <div class="p-status sale">sale</div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Pashmina Ceruty Babydoll Crochet</h6>
                                    </a>
                                    <p>Rp. 53.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-3.jpeg" alt="">
                                    <div class="p-status">new</div>
                                    <div class="hover-icon">
                                        <a href="img/products/img-3.jpeg" class="pop-up"><img
                                                src="img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Bella Square</h6>
                                    </a>
                                    <p>Rp. 25.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-6.jpeg" alt="">
                                    <div class="p-status sale">sale</div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Pashmina Ceruty Babydoll</h6>
                                    </a>
                                    <p>Rp. 45.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-1.jpeg" alt="">
                                    <div class="hover-icon">
                                        <a href="img/products/img-1.jpeg" class="pop-up"><img
                                                src="img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Crinkle Shawl</h6>
                                    </a>
                                    <p>Rp. 35.000,00-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-5.jpeg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="img/products/img-5.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Instan Zaara</h6>
                            </a>
                            <p>Rp. 37.500,00-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-4.jpeg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="img/products/img-4.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Najiha Square</h6>
                            </a>
                            <p>Rp. 35.000,00-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-8.jpeg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="img/products/img-8.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Pashmina Diamond</h6>
                            </a>
                            <p>Rp. 35.000,00-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-10.jpeg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="img/products/img-10.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Instan Freeya Syar'i</h6>
                            </a>
                            <p>Rp. 75.000,00-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-11.jpeg" alt="">
                                    <div class="p-status sale">sale</div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Instan Freeya Collection</h6>
                                    </a>
                                    <p>Rp. 35.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-12.jpeg" alt="">
                                    <div class="p-status">new</div>
                                    <div class="hover-icon">
                                        <a href="img/products/img-12.jpeg" class="pop-up"><img
                                                src="img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Namira Square</h6>
                                    </a>
                                    <p>Rp. 28.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-14.jpeg" alt="">
                                    <div class="p-status sale">sale</div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Ceruty Collection</h6>
                                    </a>
                                    <p>Rp. 45.000,00-</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="img/products/img-15.jpeg" alt="">
                                    <div class="hover-icon">
                                        <a href="img/products/img-15.jpeg" class="pop-up"><img
                                                src="img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Namira Collection</h6>
                                    </a>
                                    <p>Rp. 28.000,00-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="img/products/img-13.jpeg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="img/products/img-13.jpeg" class="pop-up"><img src="img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Crinkle Shawl</h6>
                            </a>
                            <p>Rp. 35.000,00-</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

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