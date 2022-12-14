<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Welcome - To Farmshop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="https://farmshop.mu/farmshop/images/farmshop.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://farmshop.mu/farmshop/images/farmshop.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="landing/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="landing/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="landing/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="landing/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Main Top -->

<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="https://farmshop.mu/farmshop/images/farmshop.png" height="70px" width="100px" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    {{--                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>--}}
                    {{--                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>--}}

                    {{--                --}}

                    <!-- {{--                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>--}} -->


                    <li class="nav-item"><a class="nav-link" href="/adminlogin">Admin Panel</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="/homepage">User Panel</a></li> -->


                    @if (Route::has('login'))

                        @auth
                            <a class="nav-link"
                               href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item">  <a href="{{ route('login') }}" class="nav-link" >Login</a> </li>

                            @if (Route::has('register'))
                                <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link">Register</a> </li>
                            @endif
                        @endif

                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
        {{--            <div class="attr-nav">--}}
        {{--                <ul>--}}
        {{--                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>--}}
        {{--                    <li class="side-menu">--}}
        {{--                        <a href="#">--}}
        {{--                            <i class="fa fa-shopping-bag"></i>--}}
        {{--                            <span class="badge">3</span>--}}
        {{--                            <p>My Cart</p>--}}
        {{--                        </a>--}}
        {{--                    </li>--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <!-- <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="landing/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="landing/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="landing/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div> -->
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
@yield('body')

<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">

            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>About Freshshop</h4>
                        <p>The main purpose of our ???Farmshop.com??? is to solve the problems of shopping groceries online and buying cattle???s, This is the best place to find their desired items at the best price.</p>
                        <p>Customer satisfaction is the top priority.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Information</h4>
                        <h3>Business Time</h3>
                        <ul class="list-time">
                            <li>Always Open</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Uttara Sector: 11, Road 10/b<br> House:13 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+8801615211102">+8801615211102</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactfarmshop@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">Farmshop.com</a>
      
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="landing/js/jquery-3.2.1.min.js"></script>
<script src="landing/js/popper.min.js"></script>
<script src="landing/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="landing/js/jquery.superslides.min.js"></script>
<script src="landing/js/bootstrap-select.js"></script>
<script src="landing/js/inewsticker.js"></script>
<script src="landing/js/bootsnav.js."></script>
<script src="landing/js/images-loded.min.js"></script>
<script src="landing//isotope.min.js"></script>
<script src="landing/js/owl.carousel.min.js"></script>
<script src="landing/js/baguetteBox.min.js"></script>
<script src="landing/js/form-validator.min.js"></script>
<script src="landing/js/contact-form-script.js"></script>
<script src="landing/js/custom.js"></script>
</body>

</html>
