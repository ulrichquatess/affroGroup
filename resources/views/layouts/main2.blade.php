 
    <?php
        $setting = App\Setting::find(1);
        $project = App\Project::orderBy('created_at', 'desc')->limit(2)->get();
         ?>
         
    <!--Mian Footer / Footer Style Two-->
    <footer class="main-footer footer-dark-version" style="background-image:url('asset/assets/images/background/4.jpg');">
        <div class="auto-container">
            
            <div class="footer-counter">
                <!--Fun Facts / style-two-->
                <div class="fun-facts style-two">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-4 col-sm-4 col-xs-12 count-box">
                            <div class="inner">
                                <span class="counter-icon"><span class="icon flaticon-award-star-with-olive-branches"></span></span>
                                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2013">0</span></div>
                                <div class="counter-title">La Meilleure usine de l'année</div>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-md-4 col-sm-4 col-xs-12 count-box">
                            <div class="inner">
                                <span class="counter-icon"><span class="icon flaticon-man"></span></span>
                                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="657">0</span></div>
                                <div class="counter-title">Techniciens Disponibles</div>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-md-4 col-sm-4 col-xs-12 count-box">
                            <div class="inner">
                                <span class="counter-icon"><span class="icon flaticon-internet"></span></span>
                                <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="3178">0</span></div>
                                <div class="counter-title">Clients dans le monde</div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <!--End Fun Facts-->
            </div>
            
            <div class="row clearfix">
                <!--Footer Column-->
                <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget logo-widget">
                        <div class="footer-logo"><figure><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></figure></div>
                        <div class="widget-content">
                            <div class="text">REALISATION DES TRAVAUX D’ECLAIRAGE PUBLIC DANS LA VILLE D’OBALA.</div>
                            <ul class="contact-info">
                                <li><div class="icon"><span class="flaticon-technology-1"></span></div><strong>Mobile :</strong>{{ $setting->phone }}</li>
                                <li><div class="icon"><span class="flaticon-interface-2"></span></div><strong>Mail</strong> : {{ $setting->email }}</li>
                                <li><div class="icon"><span class="flaticon-location-pin"></span></div><strong>Address</strong> : {{ $setting->address }}</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                <!--Footer Column-->
                <div class="footer-column col-md-4 col-sm-6 col-xs-12" style="margin-left: 100px;">
                    <div class="footer-widget posts-widget">
                        <h2></h2>
                        <div class="widget-content">
                            <div class="posts">
                                @foreach($project as $project)
                                <div class="post">
                                    <figure class="post-thumb" style="background-position: center; background-size: cover; height: 85px; background-image:url({{asset('images/project/'.$project->image)}})"></figure>
                                    <div class="desc-text"><a href="{{ url('projec/'.$project->id)}}">{{ substr(strip_tags($project->project_title), 0, 95) }} {{ strlen(strip_tags($project->project_title)) > 90 ? "...." : "" }}</a></div>
                                    <div class="time">{{ date('M j, Y', strtotime($project->created_at)) }}</div>
                                </div>
                                @endforeach
                            </div>
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
                                <li><a href="/about">À propos de nous</a></li>
                                <li><a href="/serve">services </a></li>
                                <li><a href="/contact">Contactez nous</a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Mian Footer-->