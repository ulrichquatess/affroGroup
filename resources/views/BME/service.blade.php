@extends('layouts.main1')
@section('content')  

     <!--Page Title-->
    <section class="page-title" style="background-image:url('assets/BME/images/footer/footer6.JPG');">
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
    <!--Services Section Three-->
    <section class="services-section-three">
        <div class="auto-container">
            
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Nos <span> Services</span></h2>
                <div class="text">Nos ingénieurs élaborent des concepts d’équipements optimisés sur le plan technique afin de pouvoir minimiser les pertes de rendement.</div>
            </div>
            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="four-item-carousel owl-carousel owl-theme">
                    <!--services block four-->
                    @foreach($services as $service)

                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{asset('images/service-thumnail/'.$service->image)}}" alt="" />
                                <!--icon box-->
                                <div class="icon-box">
                                    <span class="icon flaticon-oil-pumps"></span>
                                </div>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="content">
                                            <h3><a href="{{ url('serve/'.$service->id)}}">{{ substr(strip_tags($service->service_title), 0, 10) }} {{ strlen(strip_tags($service->service_title)) > 12 ? "..." : ""  }}</a></h3>
                                        <h3><a>Service de technologie BME</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                </div>
            </div>
            <!--End Carousel Service Box-->
            
            <!--Sites Box-->
            <div class="sites-box">
                <div class="row clearfix">
                    <!--Video Column-->
                    <div class="video-column col-md-6 col-sm-6 col-xs-12">
                        <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="{{ asset('assets/BME/images/slide/front3.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    
                    <!--Map Column-->
                    <div class="map-column col-md-6 col-sm-6 col-xs-12">
                        <!--Sec Title-->
                        <div class="sec-title">
                        
                        </div>
                        <div class="map-box">
                            <div class="map-image">
                                <img src="{{ asset('assets/BME/images/resource/map.png')}}" alt="" />
                            </div>
                            <div class="map-point one"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                            <div class="map-point two"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                            <div class="map-point three"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                            <div class="map-point four"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                            <div class="map-point five"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                            <div class="map-point six"><a href="#" class="tool-tip" data-toggle="tooltip" title="Rio de ganeiro"><span class="tool-dots"></span></a></div>
                        </div>
                        <ul class="list-style alternate">
                            <li><span class="icon-box flaticon-location-pin"></span><strong>35</strong>Projet Complet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Sites Box-->
            
        </div>
    </section>
    <!--End Services Section Three-->
    @include('layouts.main2')
    
@endsection                 
                       