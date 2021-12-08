<?php
session_start();
$koneksi = new mysqli ("localhost","root","","admin");

if (!isset($_SESSION["pelanggan"]))
{
    echo "<script>alert('silahkan login');</script>";
    echo "<script>location='login.php';</script>";
}?>


<?php
$Nama = $StreetAddress = $City = $Email = $PostCode = $Phone = "";
$NamaErr = $StreetAddressErr = $CityErr = $EmailErr = $PostCodeErr = $PhoneErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Nama"])) {
    $NamaErr = "* Name must be filled out";
  } else {
    $Nama = test_input($_POST["Nama"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Nama)) {
			$NamaErr="* Invalid Name (Only letters and white space allowed)";
		}
  }

  if (empty($_POST["StreetAddress"])) {
    $StreetAddressErr = "* Street Address must be filled out";
  } else {
    $StreetAddress = test_input($_POST["StreetAddress"]);
  }

  if (empty($_POST["City"])) {
    $CityErr = "* City must be filled out";
  } else {
    $City = test_input($_POST["City"]);
  }

  if (empty($_POST["Email"])) {
    $EmailErr = "* Email must be filled out";
  } else {
    $Email = test_input($_POST["Email"]);
  }

  if (empty($_POST["PostCode"])) {
    $PostCodeErr = "* Post Code must be filled out";
  } else {
    $PostCode = test_input($_POST["PostCode"]);
  }
  
  if (empty($_POST["Phone"])) {
    $PhoneErr = "* Phone must be filled out";
  } else {
    $Phone = test_input($_POST["Phone"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}

if (!empty($_POST["Nama"]) & !empty($_POST["StreetAddress"]) & !empty($_POST["City"]) & !empty($_POST["Email"]) & !empty($_POST["PostCode"]) & !empty($_POST["Phone"]) ) {
  include_once("config.php");

  $sql = "insert into pelanggan (Nama,StreetAddress,City,Email,PostCode,Phone) 
  VALUES('$nama_pelanggan','$alamat','$city','$email_pelanggan','$code','$telepon_pelanggan')";
  $result = mysqli_query($mysqli,$sql);
  header("Location: cart.php");
  echo "<script> 
  alert('$Nama Successfully Checkout');
  </script>";
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
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" enctype="multipart/form-data" class="checkout-form">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Your Information</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Name*</p>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="Nama" placeholder="First Name">
                                <span class="error"> <?php echo $NamaErr; ?> </span>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Street Address*</p>  
                            </div>
                            <div class="col-lg-10">
                                
                                <input type="text" name="StreetAddress">
                                <span class="error"> <?php echo $StreetAddressErr; ?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Country*</p>
                            </div>
                            <div class="col-lg-10">
                                <select class="cart-select country-usa">
                                    <option>IND</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">City*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="City">
                                <span class="error"> <?php echo $CityErr; ?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Email</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="Email">
                                <span class="error"> <?php echo $EmailErr; ?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Post Code/ZIP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="PostCode">
                                <span class="error"> <?php echo $PostCodeErr; ?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Phone*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="Phone">
                                <span class="error"> <?php echo $PhoneErr; ?> </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <div class="diff-addr">
                                    <input type="radio" id="one">
                                    <label for="one">Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>


            <div class="col-lg-3">
                <div class="container">
                <div class="cart-table">
                <table >
                    <thead>
                        <tr>
                            <th class="product-h">Product</th>
                            <th>Price</th>
                            <th >Quantity</th>
                            <th>Total</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION["keranjang"] as $id_produk=> $jumlah); ?>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM produk 
                        WHERE id_produk='$id_produk'");
                        $pecah = $ambil->fetch_assoc();
                        $subharga = $pecah["harga_produk"]* $jumlah;
                        $subhargaa = $subharga + 5000;
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
                            <td class="product-close">Rp. <?php echo number_format($subhargaa); ?> </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <h3>Payment</h3>
                            <ul>
                                <li>BCA - 8615231611 <img src="img/\" alt=""></li>
                                <li>Ovo - 085831438074 <img src="img/o" alt=""></li>
                                <li>Gopay - 085831438074 <img src="img" alt=""></li>
                                <li>Dana - 085831438074 <img src="img/" alt=""></li>
                                <li>
                                    <label for="two">Pay when you get the package</label>
                                    <input type="radio" id="two">
                                </li>
                            </ul>
                            <button type="submit" name="simpan" href="index.php">Place your order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->

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

