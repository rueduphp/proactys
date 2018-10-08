<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Proactys">
    <title>Proactys</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/ico/logo-identité-48x48.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/ico/logo-identité.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/logo-identité-184x184.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/ico/logo-identité.png') }}" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}?gg" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800,200,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600italic,400italic,300,300italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic,400,700' rel='stylesheet' type='text/css'>

    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="{{ asset('assets/css/colors/proactysColor.css') }}">

    @yield('css')

    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Wrap -->
<div id="wrap">

    <!-- header -->
    <header>

        <!-- Top bar -->
        <div class="top-bar">
            <div class="top-info">
                <div class="container">
                    <ul class="personal-info">
                        <li>
                            <p><i class="fa fa-phone"></i> +1 123 456 7890 </p>
                        </li>
                        <li>
                            <p>Hi! Here comes custom txt line </p>
                        </li>
                        <li>
                            <p>example@example.com </p>
                        </li>
                    </ul>

                    <!-- Right Sec -->
                    <div class="right-sec">

                        <!-- Language -->
                        <select class="selectpicker">
                            <option>English</option>
                            <option>French</option>
                            <option>Relish</option>
                        </select>

                        <!-- social -->
                        <ul class="social">
                            <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fab fa-google"></i></a></li>
                            <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar">
            <div class="sticky">
                <div class="container">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="/">
                            <img height="35px" src="{{ asset('assets/ico/log1.svg') }}" alt="" >
                            <img height="35px" src="{{ asset('assets/ico/log2b.svg') }}" alt="" >
                        </a>
                    </div>

                    <!-- Nav -->
                    <ul class="nav ownmenu">
                        <li class="active"> <a href="/">Home </a>
                            <ul class="dropdown">
                                <li> <a href="/">Home Boxed</a> </li>
                            </ul>
                        </li>
                        <li> <a href="/">Pages </a>
                            <ul class="dropdown">
                                <li> <a href="/">About</a> </li>
                                <li> <a href="/">Shop</a>
                                    <ul class="dropdown">
                                        <li> <a href="/">Shop</a> </li>
                                        <li> <a href="/">Shop Single</a> </li>
                                        <li> <a href="/">Checkout Step1</a> </li>
                                        <li> <a href="/">Checkout Step2</a> </li>
                                        <li> <a href="/">Checkout Step3</a> </li>
                                        <li> <a href="/">Checkout Address(step2)</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="/">Services </a>
                                    <ul class="dropdown">
                                        <li> <a href="/">Services Version 1</a> </li>
                                        <li> <a href="/">Services Version 2</a> </li>
                                        <li> <a href="/">Services Version 3</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="/">Team </a>
                                    <ul class="dropdown">
                                        <li> <a href="/">Team 2 Columns</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="/">Jobs </a>
                                    <ul class="dropdown">
                                        <li> <a href="/">Jobs Right Sidebar </a></li>
                                    </ul>
                                </li>
                                <li> <a href="/">Revenues </a></li>
                                <li> <a href="/">Company Presentation</a></li>
                                <li> <a href="/">Blog </a></li>
                                <li> <a href="/">Blog Single </a></li>
                                <li> <a href="/">Contact</a></li>
                            </ul>
                        </li>
                        <li> <a href="/">About </a> </li>
                        <li> <a href="/">Services </a>
                            <ul class="dropdown">
                                <li> <a href="/">Services Version 1</a> </li>
                                <li> <a href="/">Services Version 2</a> </li>
                            </ul>
                        </li>
                        <li> <a href="/">Team </a>
                            <ul class="dropdown">
                                <li> <a href="/">Team 2 Columns</a> </li>
                                <li> <a href="/">Team 3 Columns</a> </li>
                                <li> <a href="/">Team 4 Columns</a> </li>
                            </ul>
                        </li>
                        <li> <a href="/">Jobs </a>
                            <ul class="dropdown">
                                <li> <a href="/">Jobs Right Sidebar </a></li>
                                <li> <a href="/">Jobs Left Sidebar </a></li>
                                <li> <a href="/">Jobs (single) Left Sidebar </a></li>
                                <li> <a href="/">Jobs (single) Right Sidebar </a></li>
                            </ul>
                        </li>
                        <li> <a href="/">Blog </a></li>
                        <li> <a href="/">Contact</a> </li>
                    </ul>
                    <!-- Search -->
                    <div class="search-icon"> <a href="#."><i class="fa fa-search"></i></a>
                        <form>
                            <input class="form-control" type="search" placeholder="Type Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <!-- ABOUT -->
                <div class="col-md-3">
                    <img height="50px" src="{{ asset('assets/ico/log1.svg') }}" alt="" >
                    <img height="50px" src="{{ asset('assets/ico/log2.svg') }}" alt="" >
                    <div class="about-foot">
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone"></i> (123) 456-7890</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope"></i> example@example.com</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Twitter Feed -->
                <div class="col-md-3">
                    <h6>Twitter Feed</h6>
                    <ul class="tweet">
                        <li>
                            <p>A Guide to Better Brainstorming <a href="#." class="primary-color">http://enva.to/nfNrz</a> by @jeff_haden </p>
                            <span>May 22, 2014</span> </li>
                        <li>
                            <p>Are you a student? You only have 48 hours left to grab a full year on Tuts+ for just $45! Don't miss out. <a href="#." class="primary-color">http://ow.ly/McvuJ</a> </p>
                            <span>May 22, 2014</span> </li>
                    </ul>
                </div>

                <!-- Photostream -->
                <div class="col-md-3">
                    <h6>Photostream</h6>
                    <ul class="photo-steam">
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-1.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-2.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-3.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-4.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-5.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-6.jpg') }}" alt="" ></a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="col-md-3">
                    <h6>Categories</h6>
                    <ul class="tags">
                        <li><a href="#.">User Experience</a></li>
                        <li><a href="#.">html 5</a></li>
                        <li><a href="#.">Css 3</a></li>
                        <li><a href="#.">Web Design</a></li>
                        <li><a href="#.">Social Media</a></li>
                        <li><a href="#.">Web Development</a></li>
                        <li><a href="#.">Print Design</a></li>
                        <li><a href="#.">e-commerce</a></li>
                        <li><a href="#.">Java script</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- RIGHTS -->
    <div class="rights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p> © All Rights Reserved <span class="primary-color">Proactys </span></p>
                </div>
                <div class="col-md-6 text-right"> <a href="#.">Privacy Policy</a> <a href="#.">Terms & Conditions</a> </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/own-menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.colio.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
</body>

</html>
