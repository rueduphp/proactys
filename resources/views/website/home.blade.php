@extends('layouts.main')

@section('content')
    <!-- HOME MAIN SLIDER -->
    <section class="home-slide">
        <ul class="slides">

            <!-- SLIDER 1 -->
            <li class="slide-img-1" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>Information on Demand</h1>
                    <h5>Truly Corporate Theme</h5>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> </div>
            </li>

            <!-- SLIDER 2 -->
            <li class="slide-img-2" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>iod HTML5 template</h1>
                    <h5>Truly Corporate Theme</h5>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> </div>
            </li>
        </ul>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- SERVICES -->
        <section class="services padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Services</h4>
                </div>
            </div>
            <div class="best-services">
                <!-- Row -->
                <div class="container">
                    <ul class="row list">
                        <!-- Analytics -->
                        <li class="col-md-4" data-content="#colio_c1">
                            <article class="thumb"> <a class="button colio-link" href="#"> <i class="far
                            fa-chart-bar"></i>
                                    <h5>Analytics</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>

                        <!-- Storage -->
                        <li class="col-md-4" data-content="#colio_c2">
                            <article class="thumb"><a class="button colio-link" href="#"> <i class="fa fa-archive"></i>
                                    <h5>Storage</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>

                        <!-- Security -->
                        <li class="col-md-4" data-content="#colio_c3">
                            <article class="thumb"><a class="button colio-link" href="#"> <i class="fas
                            fa-shield-alt"></i>
                                    <h5>Security</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4" data-content="#colio_c4">
                            <article class="thumb"><a class="button colio-link" href="#"> <i class="fa fa-rocket"></i>
                                    <h5>Worth</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4" data-content="#colio_c5">
                            <article class="thumb"><a class="button colio-link" href="#"> <i class="far
                            fa-comments"></i>
                                    <h5>Dialogue</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4" data-content="#colio_c6">
                            <article class="thumb"><a class="button colio-link" href="#"> <i class="fa fa-bullhorn"></i>
                                    <h5>Direction</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a> </article>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Analytics Tab Open -->
            <div id="colio_c1" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Analytics</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                                <div class="col-md-4 text-right"> <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Storage Tab Open -->
            <div id="colio_c2" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-4 text-left"> <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Storage</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Tab Open -->
            <div id="colio_c3" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Security</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                                <div class="col-md-4 text-right"> <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Storage Tab Open -->
            <div id="colio_c4" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Worth</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                                <div class="col-md-4 text-right"> <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Tab Open -->
            <div id="colio_c5" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-4 text-left"> <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Dialogue</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Security Tab Open -->
            <div id="colio_c6" class="colio-content">
                <div class="main">
                    <div class="container">
                        <div class="inside-colio">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Heading -->
                                    <div class="heading text-left margin-bottom-40">
                                        <h4>Direction</h4>
                                    </div>
                                    <p> <strong> Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.</strong> <br>
                                        <br>
                                        Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. <br>
                                        <br>
                                        Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam. </p>
                                    <a href="#." class="btn btn-1 margin-top-30 margin-right-20">Contact Now <i class="fa fa-caret-right"></i></a> <a href="#." class="btn btn-1 margin-top-30">View Services <i class="fa fa-caret-right"></i></a> </div>
                                <div class="col-md-4 text-right">
                                    <img class="img-responsive" src="{{ asset('images/ipad.png') }}" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="portfolio light-gray-bg padding-top-70 padding-bottom-20">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Recent Work</h4>
                </div>

                <!-- PORTOFLIO ITEMS FILTER -->
                <div class="text-center">
                    <div id="ajax-work-filter" class="cbp-l-filters-buttonCenter filter-style-2">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".ana" class="cbp-filter-item"> Analytics
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".dial" class="cbp-filter-item"> Dialogue
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".direc" class="cbp-filter-item"> Direction
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".growth" class="cbp-filter-item"> Growth
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".sec" class="cbp-filter-item">Security
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".storage" class="cbp-filter-item">Storage
                            <div class="cbp-filter-counter"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PORTFOLIO ROW -->
            <div class="ajax-work col-3">
                <!-- ITEMS -->
                <div class="cbp-item ana dial growth">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-1.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-1.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana dial sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-2.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-2.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-3.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-3.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-4.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-4.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana sec">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-5.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-5.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana dial direc">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-6.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i class="fa fa-link"></i>
                                </a>
                                <a href="{{ asset('assets/images/portfolio/img-6.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- BLOG -->
        <section class="blog padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Latest from the blog</h4>
                </div>
                <!-- Blog Row -->
                <div class="row blog-slide">
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-1.jpg') }}" alt="" >

                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>

                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">April stats Details</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-2.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">EU LAWs vs US Laws</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">Team Expanded</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-2.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">EU LAWs vs US Laws</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">Team Expanded</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">Team Expanded</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features light-gray-bg padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>outstanding features</h4>
                </div>

                <!-- Features -->
                <div class="list-style-featured">
                    <div class="row no-margin">
                        <!-- LIST LEFT -->
                        <div class="col-md-4 no-padding">
                            <ul class="text-right">
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Gorgeous Design</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fa fa-paint-brush"></i> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Responsive Design</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fa fa-tablet"></i> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Cross Browser Support</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fab fa-chrome"></i> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- LIST IMAGE -->
                        <div class="col-md-4 text-center no-padding"> <img class="img-responsive"
                                                                           src="{{ asset('assets/images/iphone.png') }}" alt=""> </div>

                        <!-- LIST ICON RIGHT -->
                        <div class="col-md-4 no-padding">
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="fa fa-cog"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Easy to Customize</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="icon-layers"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Exlusive Features</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="icon-bulb"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Innovative Ideas</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testi -->
        <section class="testi-bg padding-top-100 padding-bottom-100" >
            <div class="container">
                <div class="testi">
                    <p> There are design companies, and then there are user experience, design, consulting, interface design, brilliant, and professional. UOU Apps, is by far one of the worlds best known brands.</p>
                    <h6>Jane Doe / <span class="primary-color">Company Inc.</span></h6>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="light-gray-bg padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Team</h4>
                </div>

                <!-- Team -->
                <div class="team">
                    <div class="row">

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-1.jpg') }}"
                                           alt="" >
                                <h5>Jeff Walsh</h5>
                                <span>CEO</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-2.jpg') }}"
                                           alt="" >
                                <h5>Janet Adams</h5>
                                <span>Human Resources</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-3.jpg') }}" alt="" >
                                <h5>Colin Weiland</h5>
                                <span>New Business Manager</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-4.jpg') }}" alt="" >
                                <h5>Wendy Willings</h5>
                                <span>Public Relations</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter -->
        <section class="counter padding-top-50 padding-bottom-50">
            <div class="container">

                <!-- Team Member -->
                <ul class="row">
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="16812" data-from="0"></span> </span>
                            <h5>Satisfied Clients</h5>
                        </div>
                    </li>

                    <!-- Line Of Codes -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="482" data-from="0"></span> </span>
                            <h5>Millions $ Equity</h5>
                        </div>
                    </li>

                    <!-- Satisfied Client -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="92" data-from="0"></span> </span>
                            <h5>Partners in Holding</h5>
                        </div>
                    </li>

                    <!-- PSD file included -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="2980" data-from="0"></span> </span>
                            <h5>Professionals</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Counter -->
        <section class="clients padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Amazing Clients</h4>
                    <span>We trust in longlasting partnerships with the most important brands on the market</span> </div>

                <!-- Clients -->
                <div class="single-slide">
                    <div class="item">
                        <ul class="row col-5">
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-2.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-5.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="row col-5">
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-5.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-2.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
