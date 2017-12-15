<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>BME TECHNOLOGY</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/BME/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('assets/BME/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{ asset('assets/BME/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{ asset('assets/BME/css/style.css')}}" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('assets/BME/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/BME/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{ asset('assets/BME/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">
        <?php
        $setting = App\Setting::find(1);
        $service = App\Service::all();
        $ulrich = App\Service::all();
         ?>

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><a href="/contact"><span class="icon flaticon-world"></span> {{ $setting->address }}</a></li>
                        <li><a href="/contact"><span class="icon flaticon-telephone-handle-silhouette"></span>{{ $setting->phone }}</a></li>
                    </ul>
                </div>
                
                <!--Top Right-->
                <div class="top-right pull-right">
                    <!--Links Nav Two-->
                    <ul class="links-nav-two">
                       <l1><a href="{{ $setting->facebook }}"><span class="fa fa-facebook"></span> &nbsp; facebook</a></l1>
                        <li><a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span> &nbsp; twitter</a></li>
                        <li><a href="{{ $setting->linkedin }}"><span class="fa fa-linkedin"></span> &nbsp; linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="/"><img src="{{asset('assets/BME/images/logo.jpg')}}" height="50px;" alt="" title=""></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li>{{ $setting->address }}</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-phone-call-1"></span></div>
                            <ul>
                                <li>{{ $setting->phone }}</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <a href="/contact" class="quote-btn theme-btn btn-style-one">OBTENIR UN DEVIS</a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Accuiel</a>
                                </li>
                                <li class="dropdown"><a>À Propos</a>
                                    <ul>
                                        <li><a href="/about">À Propos De Nous</a></li>
                                        <li><a href="/team">Our Team</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown"><a>Services</a>
                                    <ul>
                                        <li><a href="/serve">Service</a></li>
                                        @foreach($ulrich as $ulrich)
                                        <li><a href="{{ url('serve/'.$ulrich->id)}}">{{ $ulrich->service_title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                 <li><a href="/projec">Projets</a></li>
                                 <li><a href="/contact">Contactez nous</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Social Links-->
                    <ul class="social-links">
                        <li><a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span> &nbsp; twitter</a></li>
                        <li><a href="{{ $setting->linkedin }}"><span class="fa fa-linkedin"></span> &nbsp; linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" class="img-responsive"><img src="{{ asset('assets/BME/images/logo.jpg')}}" height="50px;" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Accuiel</a>
                                </li>
                                <li class="dropdown"><a href="/about">À Propos</a>
                                    <ul>
                                        <li><a href="/about">À Propos De Nous</a></li>
                                        <li><a href="/team">Notre Equipe</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown"><a>Services</a>
                                    <ul>
                                       <li><a href="/serve">Service</a></li>
                                        @foreach($service as $service)
                                        <li><a href="{{ url('serve/'.$service->id)}}">{{ $service->service_title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                 <li><a href="/projec">Projets</a></li>

                                <li><a href="/contact">Contactez nous</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

        @yield('content')

         <script src="{{ URL::to('assets')}}/BME/js/jquery.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/jquery-ui.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/bootstrap.min.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/revolution.min.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/jquery.fancybox.pack.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/jquery.fancybox-media.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/owl.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/appear.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/wow.js"></script>
<script src="{{ URL::to('assets')}}/BMEj/knob.js"></script>
<script src="{{ URL::to('assets')}}/BMEj/mixitup.js"></script>
<script src="{{ URL::to('assets')}}/BME/js/script.js"></script>   