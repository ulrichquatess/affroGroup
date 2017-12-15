@extends('layouts.main1')
@section('content')
		 <!--Page Title-->
    <section class="page-title" style="background-image:url('http://bmetechnology.dev/assets/BME/images/footer/footer6.JPG');">
        <div class="auto-container">
            <div class="content-box">
                <h1>DÉTAILS <span>DES SERVICES</span></h1>
                <ul class="bread-crumb">
                    <li><a href="/">Accuiel</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <?php 
      $ulrich = App\Service::all();
      ?>

     <!--Sidebar Page Container-->
    <section class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="service-details">
                    	<h2>{{ $service->service_title }}</h2>
                        <figure class="image">
                        	<img src="{{asset('images/service/'.$service->image)}}" alt="service-image" />
                        </figure>
                        <div class="text">
                        	<p>{!! $service->service_description !!}</p>
                        </div>
                    </div>
                </div>
				
				<!--Sidebar Side-->
            	<div class="sidebar-side pull-left col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<div class="sidebar">
                        
                        <!--Sidebar Category-->
                        <div class="sidebar-widget sidebar-category">
                        	<!--Sidebar Title-->
                            @foreach($ulrich as $ulrich)
                            <ul class="list">
                                <li class="current"><a href="{{ url('serve/'.$service->id)}}"><span class="icon flaticon-nuclear-plant"></span>{{ substr(strip_tags($service->service_title), 0, 30) }} {{ strlen(strip_tags($service->service_title)) > 12 ? "..." : ""  }}</a></li>
                                </ul>
                             @endforeach   
                        </div>
                    </div>         
            </div>
        </div>
    </section>
    <!--End Sidebar Page Container-->	
    @include('layouts.main2')
@endsection