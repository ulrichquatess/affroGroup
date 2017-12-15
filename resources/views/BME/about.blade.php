@extends('layouts.main1')
@section('content')
	<?php
        $page = App\Page::find(1); // This Part causes the the about page to load well on this sites
        $staffs = App\Staff::paginate(3); 
    ?>
	 <!--Page Title-->
    <section class="page-title" style="background-image:url('assets/BME/images/footer/footer6.JPG');">
    	<div class="auto-container">
        	<div class="content-box">
            	<h1>À Propos <span>De Nous</span></h1>
                <ul class="bread-crumb">
                	<li><a href="/">Accuiel</a></li>
                    <li>À Propos De Nous</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Welcome Section-->
    <section class="welcome-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Content Column-->
            	<div class="content-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                            <h2>{{ $page->title }}</h2>
                        </div>
                        <div class="text">{{ $page->content}}</div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                        <div class="video-box">
                            <figure class="image"><br><br><br>
                                <img src="{{ asset('assets/BME/images/about/about.JPG')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Welcome Section-->

    <!--sponsors style One-->
    <section class="sponsors-style-one" style="background-image:url('assets/BME/images/background/3.jpg');">
    	<div class="auto-container">
        	<div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/5.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/BME/images/clients/5.png')}}" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Sponsors Style One-->
    
    <!--Who We Are Section-->
    <section class="">
    	
    </section>
    <!--End Who We Are Section-->
    
   
    <br><br><br>
    <!--Team Section-->
    <section class="team-section no-padding">
    	<div class="auto-container">
        	<!--Sec Title Three-->
            <div class="sec-title-three">
            	<h2>Notre <span> Equipe</span></h2>
                <div class="text">Une équipe de jeunes ingénieurs dy-namiques BME Technology est convaincu que l’énergie solaire est l’une des meilleures solutions d’aide au développement économique des pays.</div>
            </div>
            
            <div class="row clearfix">
            	@foreach($staffs as $staff)
            	<!--Team Member-->
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><img src="{{asset('images/staff-thumnail/'.$staff->image)}}" alt=""></figure>
                            <ul class="social-links">
                            	<li><a href="{{ $staff->facebook }}"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="{{ $staff->twitter }}"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="{{ $staff->gmail }}"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="{{ $staff->linkedin }}"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                        	<h4><a href="/team"></a>{{ $staff->staff_name }}</h4>
                            <div class="designation">{{ $staff->position }}</div>
                        </div>
                    </div>
                </div>
                
               @endforeach
                
            </div>
            
        </div>
    </section>
    <!--End Team Section-->

 @include('layouts.main2')
@endsection