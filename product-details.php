<?php
require_once 'admin/functions/connect.php';
$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:39:01 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bigenja | Online Shopping Ecommerce Cart Html Template </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body> 
    
<!-- support bar area start -->
<div class="support-bar-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content-area"><!-- left content area -->
                        <div class="language-picker">
                                <div class="default">
                                    <div class="slang-wrap">
                                        <div class="img">
                                            <img src="assets/img/lang-flag/enf.jpg" alt="language flag">
                                        </div>
                                        <div class="name">English <i class="fas fa-angle-down"></i></div>
                                    </div>
                                    <ul class="all-lang">
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="img">
                                                        <img src="assets/img/lang-flag/fer.jpg" alt="language flag">
                                                    </div>
                                                    <div class="name">Frence </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="img">
                                                        <img src="assets/img/lang-flag/ger.jpg" alt="language flag">
                                                    </div>
                                                    <div class="name">German </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="img">
                                                        <img src="assets/img/lang-flag/ind.jpg" alt="language flag">
                                                    </div>
                                                    <div class="name">Hindi </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="currency-picker">
                                <div class="default">
                                    <div class="slang-wrap">
                                        <div class="name">USD <i class="fas fa-angle-down"></i></div>
                                    </div>
                                    <ul class="all-lang">
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="name">IND </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="name">AUD </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slang-wrap">
                                                    <div class="name">EUR </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                    </div><!-- //.left content area -->
                    <div class="right-content-area"><!-- right content area -->
                        <ul>
                            <li>
                                Ordered before 17:30, shipped today
                            </li>
                            <li>
                                <i class="fas fa-truck"></i>  Free Shipping
                            </li>
                            <li>
                                <i class="fas fa-clock"></i> 24/7 Online Support
                            </li>
                        </ul>
                    </div><!-- //. right content area -->
                </div>
            </div>
        </div>
    </div>
    <!-- support bar area end -->
    
    <!-- support bar area two start -->
    <div class="support-bar-two bg-white home-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <a href="index.php" class="logo main-logo">
                            <img src="assets/img/logo-6.png" alt="logo">
                        </a>
                    </div>
                    <div class="right-content">
                        <ul>
                            <li>
                                <div class="support-search-area">
                                    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.php" class="search-form">
                                        <div class="form-element has-icon">
                                            <input type="text" class="input-field" placeholder="Search your keyword">
                                            <div class="the-icon">
                                                <select class="category select selectpicker">
                                                    <option value="0">All Category</option>
                                                    <option value="0">Men's Wear</option>
                                                    <option value="0">Women's Wear</option>
                                                    <option value="0">Kids Wear</option>
                                                    <option value="0">Sports Wear</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="single-support-info-item">
                                    <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Email Us</h4>
                                        <span class="details">info@examplte.com</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-support-info-item">
                                    <div class="icon">
                                            <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Free Support</h4>
                                        <span class="details">(012) 800 456 789 - 10</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support bar area two end -->
    
    <!-- navbar area start -->
    <nav class="navbar navbar-area navbar-expand-lg navbar-light bg-light-blue home-6">
            <div class="container nav-container">
                <div class="logo-wrapper navbar-brand ">
                    <a href="index.php" class="logo main-logo mobile-logo">
                        <img src="assets/img/logo-white.png" alt="logo">
                    </a>
                    <div class="form-element has-icon">
                        <select class="category selectpicker" >
                            <option value="0">All Category</option>
                            <option value="0">Men's Wear</option>
                            <option value="0">Women's Wear</option>
                            <option value="0">Kids Wear</option>
                            <option value="0">Sports Wear</option>
                        </select>
                        <span class="the-icon">
                                <i class="fas fa-plus"></i>
                        </span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="mirex">
                    <!-- navbar collapse start -->
                    <ul class="navbar-nav">
                        <!-- navbar- nav -->
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0 dropdown-toggle" href="#" data-toggle="dropdown">Home
                                <span class="sr-only">(current)</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="index.php" class="dropdown-item">Home Style 01</a>
                                <a href="index-2.php" class="dropdown-item">Home Style 02</a>
                                <a href="index-3.php" class="dropdown-item">Home Style 03</a>
                                <a href="index-4.php" class="dropdown-item">Home Style 04</a>
                                <a href="index-5.php" class="dropdown-item">Home Style 05</a>
                                <a href="index-6.php" class="dropdown-item">Home Style 06</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                            <div class="mega-menu-wrapper">
                                <div class="container mega-menu-container">
                                    <div class="row">
                                      <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Inner Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="category.php">Category</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="product-details.php">Product Details</a></li>
                                                <li><a href="signup.php">Signup</a></li>
                                                <li><a href="sellers-products.php">Sellers Products</a></li>
                                                <li><a href="seller-dashboard.php">Sellers Dashboard</a></li>
                                            </ul>
                                        </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <div class="mega-menu-columns">
                                                <h6 class="title">Other Pages</h6>
                                                <ul class="menga-menu-page-links">
                                                    <li><a href="product_upload.php">Product Upload</a></li>
                                                    <li><a href="offers.php">Offer</a></li>
                                                    <li><a href="invoice.php">Invoice</a></li>
                                                    <li><a href="vendor-list.php">Vendor List</a></li>
                                                    <li><a href="partners.php">Partners</a></li>
                                                    <li><a href="404.php">404 Page</a></li>
                                                </ul>
                                            </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <div class="mega-menu-columns">
                                                <h6 class="title">Other Pages</h6>
                                                <ul class="menga-menu-page-links">
                                                    <li><a href="search.php">Search</a></li>
                                                    <li><a href="become-affiliats.php">Become Affiliant</a></li>
                                                    <li><a href="faq.php">Faq</a></li>
                                                    <li><a href="track-orders.php">Track Order</a></li>
                                                    <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-12">
                                            <a href="product-details.php">
                                                <img src="assets/img/mega-menu.jpg" alt="product image">
                                            </a>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </li><!-- mega menu start -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.php" class="dropdown-item">Blog</a>
                                <a href="blog-details.php" class="dropdown-item">Blog Details</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar btn wrapper -->
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- navbar collapse end -->
                <div class="right-btn-wrapper">
                   <ul>
                       <li class="search" id="search"><i class="fas fa-search"></i> </li>
                       <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i> 
                        <span class="badge">12</span>
                        </li>
                       <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
                   </ul>
                </div>
            </div>
        </nav>
        <!-- navbar area end -->

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Product Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

             
<!-- product details content area  start -->
    <div class="product-details-content-area">
    <?php
              
              $select_product_details = "SELECT *FROM products WHERE id  = '$id'";
              $result_product_details = $connect -> query($select_product_details);
              $show_product_details = $result_product_details -> fetch_assoc(); 

              $rate = $show_product_details['rate'];

              $imgs = $show_product_details['img'];
              $img_arr = explode(",",$imgs);
              
              
              ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area"><!-- left content area -->
                        <div class="product-details-slider" id="product-details-slider" data-slider-id="1">
                            <div class="single-product-thumb">
                                <img src="admin/img/<?php echo $img_arr[0];?>"  alt="product details image"  height= '500px;' >
                            </div>
                            <div class="single-product-thumb">
                                <img src="admin/img/<?php echo $img_arr[1];?>" alt="product details image" height= '500px;'>
                            </div>
                            <div class="single-product-thumb">
                                <img src="admin/img/<?php echo $img_arr[2];?>" alt="product details image" height= '600px;'>
                            </div>
                        </div>
                        <ul class="owl-thumbs product-deails-thumb" data-slider-id="1">
                            
                            <li class="owl-thumb-item">
                                <img src="admin/img/<?php echo $img_arr[0];?>" alt="product details thumb" height='180px;' width='150px;'>
                            </li>
                            <li class="owl-thumb-item">
                                <img src="admin/img/<?php echo $img_arr[1];?>" alt="product details thumb"   height='180px;' width='150px;'>
                            </li>
                            <li class="owl-thumb-item">
                                <img src="admin/img/<?php echo $img_arr[2];?>" alt="product details thumb"  height='180px;' width='160px;'>
                            </li>
                        </ul>
                    </div><!-- //.left content area -->
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area"><!-- right content area -->
                        <div class="top-content">
                            <?php
                            
                            if($rate == 1){


                            

                            ?>
                            <ul class="review">
                                <li><i id="star1"  _prod_id="<?php echo $id; ?>"  class="fas fa-star"></i></li>
                                <li><i id="star2"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li><i id="star3"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li><i id="star4"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li><i id="star5"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li class="reviewes">23 <small>reviews</small> </li>
                                <?php } ?>

                                <?php
                            
                             if($rate == 2){


                            

                            ?>
                            <ul class="review">
                                <li><i id="star1"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star2"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star3"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li><i id="star4"  _prod_id="<?php echo $id;?>"  class="far fa-star"></i></li>
                                <li><i id="star5"  _prod_id="<?php echo $id;?>"  class="far fa-star"></i></li>
                                <li class="reviewes">23 <small>reviews</small> </li>
                                <?php } ?>

                                <?php
                            
                            if($rate == 3){


                            

                            ?>
                            <ul class="review">
                                <li><i id="star1"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star2"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star3"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star4"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li><i id="star5"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li class="reviewes">23 <small>reviews</small> </li>
                                <?php } ?>
                                  
                                <?php
                            
                            if($rate == 4){


                            

                            ?>
                            <ul class="review">
                                <li><i id="star1"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star2"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star3"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star4"  _prod_id="<?php echo $id; ?>" class="fas fa-star"></i></li>
                                <li><i id="star5"  _prod_id="<?php echo $id; ?>" class="far fa-star"></i></li>
                                <li class="reviewes">23 <small>reviews</small> </li>
                                <?php } ?>  

                                <?php
                            
                            if($rate == 5){


                            

                            ?>
                            <ul class="review">
                                <li><i id="star1"  _prod_id="<?php echo $id;?>" class="fas fa-star"></i></li>
                                <li><i id="star2"  _prod_id="<?php echo $id;?>" class="fas fa-star"></i></li>
                                <li><i id="star3"  _prod_id="<?php echo $id;?>" class="fas fa-star"></i></li>
                                <li><i id="star4"  _prod_id="<?php echo $id;?>" class="fas fa-star"></i></li>
                                <li><i id="star5"  _prod_id="<?php echo $id;?>" class="fas fa-star"></i></li>
                                <li class="reviewes">23 <small>reviews</small> </li>
                                <?php } ?>


                                

                                

                                
                            </ul>
                            <span class="orders">Orders (200+)</span>
                        </div>
                        <div class="bottom-content">
                            <span class="cat">accessories</span>
                            <h3 class="title"><?php echo $show_product_details['description'];?></h3>
                            <div class="price-area">
                                <div class="left">
                                        <span class="sprice"><?php echo $show_product_details['price'];?></span>
                                        <span class="dprice"><del>$689</del></span>
                                </div>
                                <div class="right">
                                    <a href="#" class="size">size chart</a>
                                </div>
                            </div>
                            <ul class="product-spec">
                                <li>Brands:  <span class="right"><?php echo $show_product_details['sellar'];?> </span></li>
                                <li>Product Code: <span class="right">d12</span></li>
                                <li>Reward Points:  <span class="right">100 </span></li>
                                <li>Stock:  <span class="right base-color">In Stock </span></li>
                            </ul>
                            <div class="pdescription">
                                <h4 class="title">Overview</h4>
                                <p><?php echo $show_product_details['description'];?></p>

                            </div>
                            <div class="paction">
                                <div class="qty">
                                    <ul>
                                        <li><span class="qtminus"><i class="fas fa-minus"></i></span></li>
                                        <li><span class="qttotal">1</span></li>
                                        <li><span class="qtplus"><i class="fas fa-plus"></i></span></li>
                                    </ul>
                                </div>
                                <ul class="activities">
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-hourglass"></i></a></li>
                                    <li><a href="#"><i class="fas fa-share-square"></i></a></li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#" class="boxed-btn">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //. right content area -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-area">
                        <div class="product-details-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="item-review-tab" data-toggle="tab" href="#item_review" role="tab" aria-controls="item_review" aria-selected="true">item review</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="false">descriptions</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="method-tab" data-toggle="tab" href="#method" role="tab" aria-controls="method" aria-selected="false">Features</a>
                                </li>
                              </ul>
                        </div>
                          <div class="tab-content" >
                            <div class="tab-pane fade show active" id="item_review" role="tabpanel" aria-labelledby="item-review-tab">
                                <div class="item_review_content">
                                    <h4 class="title">Technical Specifications</h4>
                                    <ul class="product-specification"><!-- product specification -->
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Brand</span>
                                                <span class="details"><?php echo $show_product_details['sellar'];?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Height</span>
                                                <span class="details">18 Millimeters</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Width</span>
                                                <span class="details">31.4 Centimeters</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Screen Size</span>
                                                <span class="details">13 Inches</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item Weight</span>
                                                <span class="details">1.6 Kg</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Product Dimensions</span>
                                                <span class="details">21.9 x 31.4 x 1.8 cm</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Item model number</span>
                                                <span class="details">MF841HN/A</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Brand</span>
                                                <span class="details">Intel</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Type</span>
                                                <span class="details">Core i5</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Processor Speed</span>
                                                <span class="details">2.9 GHz</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">RAM Size</span>
                                                <span class="details">8 GB</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hard Drive Size</span>
                                                <span class="details">512 GB</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hard Disk Technology</span>
                                                <span class="details">Solid State Drive</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Graphics Coprocessor</span>
                                                <span class="details">Intel Integrated Graphics</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Graphics Card Description</span>
                                                <span class="details">Integrated Graphics Card</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Hardware Platform</span>
                                                <span class="details">Mac</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Operating System</span>
                                                <span class="details">Mac OS</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-spec"><!-- single specification -->
                                                <span class="heading">Average Battery Life (in hours)</span>
                                                <span class="details">9</span>
                                            </div>
                                        </li>
                                    </ul><!-- //.product specification -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="descr" role="tabpanel" aria-labelledby="descr-tab">
                                <div class="descr-tab-content">
                                    <h4 class="title">Product Descriptions</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncove
                                            many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                            and the like) Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum
                                            will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour and the like)..</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="method" role="tabpanel" aria-labelledby="method-tab">
                                <div class="more-feature-content">
                                    <h4 class="title">More Features</h4>
                                    <div class="feature-list-wrapper">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                    <li><i class="fas fa-check"></i> 24/7 Online Support</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Features</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                    <li><i class="fas fa-check"></i> 100% Pure cotton</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <ul class="features-list">
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                    <li><i class="fas fa-check"></i> Simple and easy</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncove
                                        many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                        and the like) Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum
                                        will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                        (injected humour and the like)..</p>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- product details content area end -->
<!-- recently added start -->
<div class="recently-added-area product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recently-added-nav-menu"><!-- recently added nav menu -->
                    <ul>
                        <li>recently added</li>
                    </ul>
                </div><!-- //.recently added nav menu -->
            </div>
            <div class="col-lg-12">
                <div class="recently-added-carousel" id="recently-added-carousel"><!-- recently added carousel -->
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/09.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">accesories</a>
                            <h4 class="title">Milo Hoverboard</h4>
                            <div class="price"><span class="sprice">$7.00</span> <del class="dprice">$42.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/10.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Bike</a>
                            <h4 class="title">Dart Moto Bike</h4>
                            <div class="price"><span class="sprice">$30.00</span> <del class="dprice">$45.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/11.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$120.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/12.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">hat</a>
                            <h4 class="title">Red Yello Hat</h4>
                            <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$156.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/03.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$90.00</del></div>
                        </div>
                    </div>
                </div><!-- //. recently added carousel -->
            </div>
        </div>
    </div>
</div>
<!-- recently added end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.php" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Abir Khan</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Rex Rifat</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="checkout.php" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
<!-- footer area one start -->
<footer class="footer-arae-one">
        <div class="footer-top-one blue-bg"><!-- footer top one-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget about">
                            <div class="widget-body">
                                <a href="index.php" class="footer-logo">
                                    <img src="assets/img/logo.png" alt="footer logo">
                                </a>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">198 West 21th Street, Suite 721, New York NY 10010</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">youremail@yourdomain.com</span>
                                                <span class="details">example@yourdomain.com</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">+88 (0) 101 0000 000</span>
                                                <span class="details">+99 (989) 101 0000 000</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Shopping Guide</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="blog.php">--  Blog</a></li>
                                    <li><a href="faq.php">--  Faq</a></li>
                                    <li><a href="#">--  Payment</a></li>
                                    <li><a href="track-orders.php">--  Shipment</a></li>
                                    <li><a href="#">--  Where is my order</a></li>
                                    <li><a href="#">--  Return policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Style Adviser</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="signup.php">--  Your Account</a></li>
                                    <li><a href="#">--  Information</a></li>
                                    <li><a href="#">--  Address</a></li>
                                    <li><a href="#">--  Discount</a></li>
                                    <li><a href="#">--  Order History</a></li>
                                    <li><a href="track-orders.php">--   Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Information</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="#">--  Sitemap</a></li>
                                    <li><a href="#">--  Search Terms</a></li>
                                    <li><a href="#">--  Advanced Search</a></li>
                                    <li><a href="about.php">--  About us</a></li>
                                    <li><a href="contact.php">--  Contact Us</a></li>
                                    <li><a href="partners.php">--  Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.footer top one -->
        <div class="copyright-area blue-bg"><!-- copyright area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-inner"><!-- copyright inner -->
                            <div class="left-content-area">
                                <span class="copyright-text">Copyright by@Bigenza - 2018</span>
                            </div>
                            <div class="right-content-area">
                                <ul class="payment-logo">
                                    <li>
                                        <img src="assets/img/payment-logo/01.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/02.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/03.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/04.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/05.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/06.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/07.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/08.png" alt="payment logo">
                                    </li>
                                </ul>
                            </div>
                        </div><!-- //. copyright inner -->
                    </div>
                </div>
            </div>
        </div><!-- //. copyright area -->
    </footer>
    <!-- footer area one end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- owl carousel2 thumb -->
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <script>
     
     $(document).ready(function(){
      
      $('#star1').click(function(){

          var prod_rate_id = $(this).attr("_prod_id");
          var rate = 1;

            // console.log(prod_rate_id);

          $.post('admin/functions/rate.php',{
             
             x_prod_rate_id : prod_rate_id,
             x_rate         : rate 


          },function(){

          })
          
      })

    //   ###############################################

    $('#star2').click(function(){

 var prod_rate_id = $(this).attr("_prod_id");
 var rate = 2;

 //   console.log(prod_rate_id);

 $.post('admin/functions/rate.php',{
   
   x_prod_rate_id : prod_rate_id,
   x_rate         : rate 


 },function(){

 })

 })
    
        //   ###############################################
 $('#star3').click(function(){
 var prod_rate_id = $(this).attr("_prod_id");
 var rate = 3;

  console.log(rate);

 $.post('admin/functions/rate.php',{
   
   x_prod_rate_id : prod_rate_id,
   x_rate         : rate 


 },function(){

 })

 })
    //   ###############################################
    $('#star4').click(function(){

 var prod_rate_id = $(this).attr("_prod_id");
 var rate = 4;

//   console.log(prod_rate_id);

 $.post('admin/functions/rate.php',{
   
   x_prod_rate_id : prod_rate_id,
   x_rate         : rate 


 },function(){

 })

 })


 // #####################################
 $('#star5').click(function(){

var prod_rate_id = $(this).attr("_prod_id");
var rate = 5;

//   console.log(prod_rate_id);

$.post('admin/functions/rate.php',{
   
   x_prod_rate_id : prod_rate_id,
   x_rate         : rate 


},function(){

})

})

         
     })


    </script>
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:39:05 GMT -->
</html>