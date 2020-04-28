<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomeSpace &mdash; Colorlib Website Template @yield('content')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mediaelementplayer.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fl-bigmug-line.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">




</head>
<body>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
                        <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
                    <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
                    <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong> @yield('homespace')<span class="text-danger">.</span></strong></a></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="properties.html">Properties</a>
                                <ul class="dropdown">
                                    <li><a href="#">Buy</a></li>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">Lease</a></li>
                                    <li class="has-children">
                                        <a href="#">Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>

@yield('content')








<div class="site-section site-section-sm bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-white">Wide Range of Properties Just For You</h2>
                <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About HomeSpace</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                </div>



            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>



            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>

</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery-ui.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/popper.min.js.map')}}"  type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/mediaelement-and-player.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/aos.js')}}"  type="text/javascript"></script>

<script src="{{asset('js/main.js')}}"  type="text/javascript"></script>




</body>
</html>
