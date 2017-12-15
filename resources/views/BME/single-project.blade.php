@extends('layouts.main1')
@section('content')

	    <!--Page Title-->
    <section class="page-title" style="background-image:url('http://bmetechnology.dev/assets/BME/images/footer/footer6.JPG');">
    	<div class="auto-container">
        	<div class="content-box">
            	<h1>Détail du<span>Projet</span></h1>
                <ul class="bread-crumb">
                	<li><a href="/">Accuiel</a></li>
                    <li>Détail du projet</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <section class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="project-single">
                    	<h2>{{ $project->project_title }}</h2>
                        <!--Thumb Carousel Box-->
                        <div class="thumb-carousel-box">
                            
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{asset('images/project/'.$project->image)}}" class="lightbox-image"  title="{{ $project->project_title }}" data-fancybox-group="gallery-single"><img src="{{asset('images/project/'.$project->image)}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                </ul>
                            </div>
                            
                        </div>
                        <!--End Carousel Section-->
                        <h2>{{ $project->project_title }}</h2>
                        <div class="text">
                        	<p>{!! $project->project_description !!}</p>         
                        </div>
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side pull-left col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<div class="sidebar">
                    	<!--Project Info Widget-->
                    	<ul class="project-info-widget">
                        	<li class="title">Project Details</li>
                        	<li><span class="icon-box flaticon-user-1"></span> Client: <br> {{ $project->client}}</li>
                            <li><span class="icon-box flaticon-calendar-2"></span> Date <br>{{ $project->date }}</li>
                            <li><span class="icon-box flaticon-money"></span> Budget: <br> {{ $project->budget }} </li>
                            <li><span class="icon-box flaticon-users"></span> Équipe:<br> {{ $project->team }} </li>
                            <li><span class="icon-box flaticon-location-pin"></span> Emplacement: <br>{{ $project->location }}</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Project Section-->
@include('layouts.main2')
@endsection