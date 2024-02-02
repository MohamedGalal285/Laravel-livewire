<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

    <title>ChokoCake</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Owl Carousel Assets -->
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">

    <!-- jQuery and Modernizr-->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="index-page">
    <div class="wrap-body">

        <header class="clearfix">


            <!--Navigation-->
@include('home.inc.nav')

            <!-- Static Header -->
            <div class="header-text">
                <div class="col-md-12 text-center">
                    <span>So Yummy it will Melt Your Heart</span>
                    <h1>CHOCOLATE CAKES AND CANDIES</h1>
                    <p>A place where food and coziness compliment each other.<br>Call (999)123-4567</p>
                    <a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                </div>
            </div><!-- /header-text -->

        </header>
        <!-- /Section: intro -->

        <!-- /////////////////////////////////////////Content -->
        <div id="page-content">

            <!-- ////////////Content Box 01 -->
            <section class="box-content box-1 box-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title-block">
                                <span class="prefix">25</span>
                                <h3 class="sub">Years of</h3>
                                <h1 class="title">Experience</h1>
                            </div>
                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias
                                minus ipsa, placeat!</h5>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-icon">
                                        <div class="box-icon-image">
                                            <img src="images/ribbon.png" />
                                        </div>
                                        <div class="box-icon-aside">
                                            <div class="box-icon-title">
                                                <h3>Certification</h3>
                                            </div>
                                            <div class="box-icon-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-icon">
                                        <div class="box-icon-image">
                                            <img src="images/clock.png" />
                                        </div>
                                        <div class="box-icon-aside">
                                            <div class="box-icon-title">
                                                <h3>24/7 Opened</h3>
                                            </div>
                                            <div class="box-icon-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-icon">
                                        <div class="box-icon-image">
                                            <img src="images/price-tag.png" />
                                        </div>
                                        <div class="box-icon-aside">
                                            <div class="box-icon-title">
                                                <h3>Fair Prices</h3>
                                            </div>
                                            <div class="box-icon-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 02 -->
            <section class="box-content box-2 box-style-2">
                <div class="container-fluid">
                    <div class="row heading">
                        <div class="col-lg-12">
                            <h2>Our Food Menu</h2>
                            <div class="intro">Lorem ipsum dolor sit amet</div>
                        </div>
                    </div>
                    <div class="flex-box row">
                        <div class="col-sm-9">
                            <div id="owl-product-1" class="owl-carousel">
                                <div class="item">
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/1.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/2.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/3.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/4.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/1.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/2.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/3.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/4.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/1.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/2.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/3.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/4.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box-image intro-block">
                                <div class="heading-block">
                                    <h2>Right Picture Slide</h2>
                                </div>
                                <div class="content-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra
                                        convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.
                                        Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam
                                        viverra convallis auctor.</p>
                                    <a href="#" class="btn btn-skin">View All</a>
                                    <div class="owl-controls">
                                        <div class="btn next next-b_1-slide"><i class="fa fa-chevron-left"></i></div>
                                        <div class="btn prev prev-b_1-slide"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 03 -->
            <section class="box-content box-3 box-style-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-item">
                                <div class="box-item-header">
                                    <p>So Yummy it will Melt Your Heart !</p>
                                    <h3>Welcome to US!</h3>
                                </div>
                                <div class="box-item-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et adipisicing elit</p>
                                    <div class="signature">
                                        <span>--- ChokoCake ---</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 04 -->
            <section class="box-content box-4 box-style-2">
                <div class="container-fluid">
                    <div class="row heading">
                        <div class="col-lg-12">
                            <h2>Our Dessert Menu</h2>
                            <div class="intro">Lorem ipsum dolor sit amet</div>
                        </div>
                    </div>
                    <div class="row flex-box">
                        <div class="col-sm-3">
                            <div class="box-image intro-block">
                                <div class="heading-block">
                                    <h2>Right Picture Slide</h2>
                                </div>
                                <div class="content-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra
                                        convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.
                                        Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam
                                        viverra convallis auctor.</p>
                                    <a href="#" class="btn btn-skin">View All</a>
                                    <div class="owl-controls">
                                        <div class="btn next next-b_2-slide"><i class="fa fa-chevron-left"></i></div>
                                        <div class="btn prev prev-b_2-slide"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div id="owl-product-2" class="owl-carousel">
                                <div class="item">
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/5.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/6.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/7.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/8.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/9.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/10.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/7.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/8.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/9.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/10.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/5.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-box col-md-4 col-xs-6">
                                        <div class="portfolio-box-inner">
                                            <img src="images/6.jpg" class="img-responsive" alt="">
                                            <div class="portfolio-box-caption">
                                                <p class="product-price">12<sup>$</sup></p>
                                                <div class="portfolio-box-description">
                                                    <h3 class="product-name">Project Name</h3>
                                                    <p class="product-category">Category</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 05 -->
            <section class="box-content box-5 box-style-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 box-item">
                            <i class="fa fa-map-marker"></i>
                            <h3>Contact</h3>
                            <p>795 Folsom Ave, Suite 600 <br> San Francisco, CA 94107</p>
                        </div>
                        <div class="col-md-3 col-sm-6 box-item">
                            <i class="fa fa-clock-o"></i>
                            <h3>Opening Time</h3>
                            <p>Sun - Thu | 07:00 - 23:00 Hours<br> Fri - Sat | 08:00 - 01:00 Hours</p>
                        </div>
                        <div class="col-md-3 col-sm-6 box-item">
                            <i class="fa fa-calendar"></i>
                            <h3>Reservation</h3>
                            <p><strong>Mobile: </strong>+62-111-222-333<br><strong>Fax: </strong>(+62)-12-3456-7890</p>
                        </div>
                        <div class="col-md-3 col-sm-6 box-item">
                            <i class="fa fa-heart"></i>
                            <h3>Social Contact</h3>
                            <ul class="list-inline social-list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 06 -->
            <section class="box-content box-6 box-style-5">
                <div class="container">
                    <div class="row heading">
                        <div class="col-lg-12">
                            <h2>What people are saying about our restaurant</h2>
                            <div class="intro">Lorem ipsum dolor sit amet</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner1.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner2.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner3.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner1.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner3.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-item">
                                <img src="images/partner2.png" class="img-responsive icon" />
                                <h3>GREAT & FAST SERVICES</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ////////////Content Box 07 -->
            <section class="box-content box-7">
                <div class="container-fluid">
                    <div class="row">
                        <div id="map" style="height: 500px;"></div>
                    </div>
                </div>
            </section>

        </div>


        <!-- Footer -->
        @include('home.inc.footer')

        <!-- JS -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Google Map -->
        <script>
            var marker;
            var image = 'images/map-marker.png';

            function initMap() {
                var myLatLng = {
                    lat: 39.79,
                    lng: -86.14
                };

                // Specify features and elements to define styles.
                var styleArray = [{
                    featureType: "all",
                    stylers: [{
                        saturation: -80
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                            hue: "#000000"
                        },
                        {
                            saturation: 50
                        }
                    ]
                }, {
                    featureType: "poi.business",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                }];

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: false,
                    // Apply the map style array to the map.
                    styles: styleArray,
                    zoom: 7
                });

                var directionsDisplay = new google.maps.DirectionsRenderer({
                    map: map
                });

                // Create a marker and set its position.
                marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: myLatLng
                });
                marker.addListener('click', toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async
            defer></script>

        <!-- Owl Carusel JavaScript -->
        <script src="{{ asset('owlcarousel/owl.carousel.js') }}"></script>
        <script>
            $(document).ready(function() {
                var b1_box = $("#owl-product-1");
                b1_box.owlCarousel({

                    loop: true,
                    lazyLoad: true,
                    items: 1
                });
                // Custom Navigation Events 1
                $(".next-b_1-slide").click(function() {
                    b1_box.trigger('next.owl.carousel');
                });
                $(".prev-b_1-slide").click(function() {
                    b1_box.trigger('prev.owl.carousel');
                });

                var b2_box = $("#owl-product-2");
                b2_box.owlCarousel({

                    loop: true,
                    lazyLoad: true,
                    items: 1
                });
                // Custom Navigation Events 1
                $(".next-b_2-slide").click(function() {
                    b2_box.trigger('next.owl.carousel');
                });
                $(".prev-b_2-slide").click(function() {
                    b2_box.trigger('prev.owl.carousel');
                });
            });
        </script>

        <script src="{{ asset('js/main.js') }}"></script>

    </div>
</body>

</html>
