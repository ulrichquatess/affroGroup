@extends('layouts.main')
@section('content')    
    <!--Page Title-->
    <section class="page-title" style="background-image:url('assets/BME/images/footer/footer6.JPG');">
        <div class="auto-container">
            <div class="content-box">
                <h1>Contactez Nous</h1>
                <ul class="bread-crumb">
                    <li><a href="/">Accuiel</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
        <?php
          $setting = App\Setting::find(1);
          $page = App\Page::find(1);
         ?>

    <!--Map Section-->
    <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="8"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>

        </div>
    </section>
    <!--End Map Section-->
    
     <!--Form Section-->
    <div class="form-section">
        <div class="auto-container">
            <div class="form-inner">
                <h3>ENVOIE-NOUS UN MESSAGE</h3>
                <!--default form-->
                <div class="default-form contact-form">
                    <form action="{{url('contact')}}" method="POST" >
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-5 col-xs-12">
                            
                                <div class="form-group">s
                                    <input type="text" name="name" id="name" placeholder="Prénom" required>
                                </div>
                                
                                <div class="form-group ">
                                    <input type="text" name="subject" id="subject" placeholder="Sujets">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" required>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-8 col-sm-7 col-xs-12">    
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Entrez votre exigence" required></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="theme-btn btn-style-one">Envoyer le Message</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <!--End Default form-->
                
                <!--contact info box-->
                <div class="contact-info-box">
                    <div class="row clearfix">
                        <!--column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <h4>{{ $page->title }}</h4>
                            <div class="text">{{ substr(strip_tags($page->content), 0, 300) }} {{ strlen(strip_tags($page->content)) > 200 ? "..." : ""  }}</div>
                        </div>
                        <!--column-->
                        <div class="column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <h4>address</h4>
                            <div class="text">{{$setting->address}}.</div>
                        </div>
                        <!--column-->
                        <div class="column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <h4>Notre Contact</h4>
                            <ul class="contact-info">
                                <li><div class="icon"><span class="flaticon-technology-1"></span></div><strong>Mobile :</strong>{{$setting->phone}}</li>
                                <li><div class="icon"><span class="flaticon-interface-2"></span></div><strong>Mail</strong> : {{$setting->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End contact info box-->
                
            </div>
        </div>
    </div>
    <!--End Form Section-->
   @include('layouts.main2')
@endsection