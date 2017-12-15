@extends('layouts.main')
@section('content')
    <?php 
     $page = App\Page::find(1);
     $service = App\Service::paginate(6);
     $setting = App\Setting::find(1);
     $staff = App\Staff::paginate(3);
     $project = App\Project::all();
     $slide = App\Slide::all();
     $prof = App\Project::orderBy('created_at', 'desc')->limit(2)->get();
     ?>

    <!--Main Slider-->
    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">
        
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    @foreach($slide as $slide)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('images/slide/'.$slide->image)}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{asset('images/slide/'.$slide->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-110"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h4 class="text-center">Bienvenue à BME Technologie</h4></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 class="text-center">{{ $slide->title }}<span class="theme_color"></span></h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="60"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-center">{{ $slide->content}}</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="120"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="/team" class="theme-btn btn-style-one">Notre équipe</a></div>
                    </li>    
                    @endforeach
                </ul>
                
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Column-->
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <h2>A <span>Propos</span></h2>
                        </div>
                        <div class="text">{{ substr(strip_tags($page->content), 0, 600) }} {{ strlen(strip_tags($page->content)) > 200 ? "..." : ""  }}<br>
                        <a href="/about" class="theme-btn btn-style-one">lire Plus!</a>
                       </div>
                    </div>
                </div>
                
                <!--Side-Bar Column with picture-->
                <div class="graph-column col-md-5 col-sm-12 col-xs-12">
                    <div class="inner">
                         <div class="video-box">
                            <figure class="image">
                                <img src="{{ asset('assets/BME/images/about/about.JPG')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!--End About Section-->
    
    <!--Services Section-->
    <section class="services-section" style="background-image:url('assets/BME/images/background/1.jpg');">
        <div class="auto-container">
            <div class="row clearfix">
            
                <!--Title Column-->
                <div class="title-column col-md-3 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <!--Sec Title Two-->
                        <div class="sec-title-two">
                            <h2>Nos Service & <span>Sites</span></h2>
                        </div>
                        <div class="map-image">
                            <img src="{{asset('assets/BME/images/background/map-pattern.png')}}" alt="" />
                        </div>
                        <!--list style-->
                        <ul class="list-style">
                            <li><span class="icon-box flaticon-location-pin"></span><strong>35</strong>PROJETS ACHEVÉS</li>
                        </ul>
                    </div>
                </div>
                <!--End Title Column-->
                

                <!--Services Column-->
                <div class="services-column col-md-9 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                    
                        <!--Services Block-->
                        @foreach($service as $service)
                        <div class="services-block col-md-4 col-sm-6 col-xs-12">
    
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-oil-pumps"></span>
                                </div>
                                <h3><a href="{{ url('serve/'.$service->id)}}">{{ substr(strip_tags($service->service_title), 0, 40) }} {{ strlen(strip_tags($service->service_title)) > 30 ? "..." : ""  }}</a></h3>
                                <div class="text">{{ substr(strip_tags($service->service_description), 0, 200)}} {{ strlen(strip_tags($service->service_description)) > 100 ? "...." : "" }}</div>
                            </div>
                            
                        </div>  
                        @endforeach      
                    </div>
                </div>
                 
                <!--End Services Column-->
                
            </div>
        </div>
    </section>
    <!--End Services Section-->
                
  
         <!--Project Section-->
    <section class="project-section no-padding-bottom">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Nos <span>Projets</span></h2>
            </div>
        </div>
        
        <!--Tabs Content-->
        <div class="tabs-content">
            
            <!--Tab / Active Tab-->
            <div class="tab active-tab clearfix" id="tab-one">
                <div class="five-item-carousel owl-carousel owl-theme">
                    <!--Gallery Item-->
                    @foreach($project as $project)
                    <div class="gallery-item">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{asset('images/project-thumnail/'.$project->image)}}" alt="" />
                                <div class="overlay-box">
                                    <ul class="options-box">
                                        <li><a class="lightbox-image" title="{{ $project->project_title}}" data-fancybox-group="gallery-one" href="{{asset('images/project-thumnail/'.$project->image)}}"><span class="icon flaticon-search"></span></a></li>
                                    </ul>
                                    <!--Content Box-->
                                    <div class="content-box">
                                        <h3><a href="{{ url('projec/'.$project->id)}}">{{ $project->project_title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
         </div>
    </div>
            
        </div>
        
    </section>
    <!--End Project Section-->
    <!--End Project Section-->
    
    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title Three-->
            <div class="sec-title-three">
                <h2>Notre <span> Equipe</span></h2>
                <div class="text">Une équipe de jeunes ingénieurs dy-namiques BME Technology est convaincu que l’énergie solaire est l’une des meilleures solutions d’aide au développement économique des pays.</div>
            </div>
            
            <div class="row clearfix">
            @foreach($staff as $staff)
                <!--Team Member-->
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('images/staff-thumnail/'.$staff->image)}}" alt=""></figure>
                            <ul class="social-links">
                                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-vimeo"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h4>{{$staff->staff_name}}</h4>
                            <div class="designation">{{$staff->position }}</div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
                
            </div>
            
        </div>
    </section>
    <!--End Team Section-->
    
    
    <!--Call To Action-->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="">
                   
                </div>
                <!--Column-->
            </div>
        </div>
    </section>

    <!--End Call To Action-->
    
    <!--Mian Footer-->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Footer Column-->
                <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget logo-widget">
                        <div class="footer-logo"><figure><a href="index-2.html"><img src="{{asset('assets/BME/images/logo.png')}}" alt=""></a></figure></div>
                        <div class="widget-content">
                            <ul class="contact-info">
                                <li><div class="icon"><span class="flaticon-technology-1"></span></div><strong>Mobile :</strong>{{ $setting->phone }}</li>
                                <li><div class="icon"><span class="flaticon-interface-2"></span></div><strong>Mail</strong> : {{ $setting->email }}</li>
                                <li><div class="icon"><span class="flaticon-location-pin"></span></div><strong>Address</strong> : {{ $setting->address }}.</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                <!--Footer Column-->
                <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget posts-widget">
                        <div class="widget-content">
                            <div class="posts">
                                @foreach($prof as $prof)
                                <div class="post">
                                    <figure class="post-thumb" style="background-position: center; background-size: cover; height: 85px; background-image:url({{asset('images/project/'.$project->image)}})"></figure>
                                    <div class="desc-text"><a href="{{ url('projec/'.$project->id)}}">{{ substr(strip_tags($prof->project_title), 0, 95) }} {{ strlen(strip_tags($prof->project_title)) > 90 ? "...." : "" }}</a></div>
                                    <div class="time">{{ date('M j, Y', strtotime($prof->created_at)) }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                        
                <!--Footer Column-->
                <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget gallery-widget">
                        <br><br> 
                        <div class="images-outer clearfix">
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer1.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer1.JPG')}}" alt=""></a></figure>
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer2.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer2.JPG')}}" alt=""></a></figure>
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer3.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer3.JPG')}}" alt=""></a></figure>
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer4.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer4.JPG')}}" alt=""></a></figure>
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer5.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer5.JPG')}}" alt=""></a></figure>
                            <figure class="image"><a href="{{asset('assets/BME/images/footer/footer6.JPG')}}" class="lightbox-image" title="Caption Here"><img src="{{asset('assets/BME/images/footer/footer6.JPG')}}" alt=""></a></figure>                            
                        </div>
                    </div>
                </div>

                    
            </div>
        </div>

         <!--footer bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-5 col-sm-12 col-xs-12">
                        <div class="copyright">Copyrights &copy; 2017 BME TECHNOLOGY. All Rights Reserved</div>
                    </div>
                    <div class="column col-md-7 col-sm-12 col-xs-12">
                        <div class="footer-nav">
                            <ul class="clearfix">
                                <li class="current"><a href="/">Accuiel</a></li>
                                <li><a href="/about">À propos</a></li>
                                <li><a href="/service">services</a></li>
                                <li><a href="/contact">Contactez nous</a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Mian Footer-->
@endsection        