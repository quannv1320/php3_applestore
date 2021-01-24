<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('clients.style')
</head>
<!-- body -->

<body class="main-layout ">

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('theme/images/logo.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="special.html">Specials</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li class="last">
                                            <a href="#"><img src="{{ asset('theme/images/search_icon.png') }}" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="{{ asset('theme/icon/call.png') }}" />(+71)9876543109</li>
                                <li><img src="{{ asset('theme/icon/email.png') }}" />demo@gmail.com</li>
                                <li><img src="{{ asset('theme/icon/loc.png') }}" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('theme/images/banner.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('theme/images/banner.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('theme/images/banner.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Product</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/1.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/2.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/3.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/4.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/5.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="{{ asset('theme/images/6.png') }}" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                            <i><img src="{{ asset('theme/images/star.png') }}"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                                <p>(+71) 8522369417
                                    <br>demo@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Brand </a></li>
                                    <li> <a href="#">Specials  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    @include('clients.script')
</body>

</html>