@extends('layout.master')

@section('content')
  <!-- Start : Slider -->
  <div class="slider-area" id="page-top">
        <div class="bend niceties preview-2">
            <div class="slides" id="ensign-nivoslider">
                <!-- slider image-->
                <img alt="image" src="images/slider/slider2.jpg" title="#slider-direction-1"> 
                <img alt="image" src="images/slider/slider1.jpg" title="#slider-direction-2">
                <img alt="image" src="images/slider/slider3.jpg" title="#slider-direction-1"> 
              
            
            </div>
            <!-- end : slider image-->
            <div class="t-cn slider-direction" id="slider-direction-3">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <!-- slider content-->
                    <div class="title-container s-tb-c title-compress">
                        <div class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig">
                            <span>MANPOWER</span> <span class="slide_st1">SERVICES</span>
                        </div>
                        <div class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                        We also offer manpower for any task – both on long term basis and short erm basis. Complete HR services will be provided including recruiting (if required), wages distribution and all statutory payments. We offer recruiting, HR, wages distribution, ESI deposition, EPF deposition, GST deposition etc. This will help your company to concentrate on core business and leave complete HR process to us.
                        </div>
                    </div>
                </div>
				    <div class="button tp-caption customin rs-parallaxlevel-0 wow zoomInUp" data-wow-delay="0.3s" data-wow-duration="3s">
                        <a href="{{route('contact')}}" class="slide_btm">Contact Us</a>
                    </div>
                <!-- End: slider content-->
            </div>
            <div class="t-cn slider-direction" id="slider-direction-2">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <!-- slider content-->
                    <div class="title-container s-tb-c title-compress">
                        <div class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig">
                        <span>Housekeeping</span> <span class="slide_st1">Services </span>
                        </div>
                        <div class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                        Lionman Commandos Certification  provides office area, furniture, equipment, floor, toilets, windows, carpets, computers, pantry, tiles etc. We have the best of advanced equipment, environment friendly cleansing agents and experienced and verified staff.
                        </div>
                    </div>
                </div>
				    <div class="button tp-caption customin rs-parallaxlevel-0 wow zoomInUp" data-wow-delay="0.3s" data-wow-duration="3s">
                        <a href="{{route('contact')}}" class="slide_btm">Contact Us</a>
                    </div>
                <!-- End: slider content-->
            </div>
            <div class="t-cn slider-direction" id="slider-direction-1">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <!-- slider content-->
                    <div class="title-container s-tb-c title-compress">
                        <div class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig">
                           
                            <span>Security</span> <span class="slide_st1">   Services </span>
                        </div>
                        <div class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                        Lionman Commandos Certification guarding services, office Security, commercial & industrial security, security services, etc
                        </div>
                    </div>
                </div>
				    <div class="button tp-caption customin rs-parallaxlevel-0 wow zoomInUp" data-wow-delay="0.3s" data-wow-duration="3s">
                        <a href="{{route('contact')}}" class="slide_btm">Contact Us</a>
                    </div>
                <!-- End: slider content-->
            </div>
            
        </div>

        
    </div>
    <!-- End:  slider
==================================================-->


    <!-- Start:About Section 
==================================================-->
    <section class="about-section aboutpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <!--About right-->
                    <div class="about-right"><img alt="about" class="about-img_1 pt-2" src="images/about.jpg">
                    </div>
                    <!--/About right-->
                </div>
                <!--/.col-lg-6 col-md-8 col-md-7-->
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <!--About Left-->
                    <div class="about-left">
                        <h3>LIONMAN <span class="ylow_clr">COMMANDOS</span> </h3>
                        <h4 class="subred"> WE ARE HIGHLY WELL-KNOWN IN THE MARKET FOR DELIVERING PREEMINENT AND CONSISTENT SECURITY SERVICES</h4>
                        <p>Lionman Commandos is one of the leading service providers of Human Resources including manpower & Security Personnel for an entire gamut of industries and Events. We have highly trained, qualiﬁed and motivated staff with more experience in this ﬁeld. We have ISO-9001:2008, ISO-9001:2015, ISO-45001:2018, SA8000:2014, PSARA2009, ISO-14001:2018, ISO-18788:2015, ISO-27001:2013, ISO-26000:2010, ISO-10667-1:2011, ISO-10677-2:2020 certiﬁcation. </p>
                  
						<a href="{{route('about-us')}}"><span class="serv-learn hvr-float-shadow">READ MORE <i class="arrow_right"></i></span></a>
                    </div>
                    <!--/About Left-->    
                </div>
                <!--/.col-lg-6 col-md-4 col-sm-5-->
            </div>
            <!--/.row-->
        </div>
        <!--/container-->
    </section>
    <!--  End:About Section
==================================================-->


    <!-- Start:Our Services Section
==================================================-->
<section class="service-section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>OUR <span class="ylow_clr"> SERVICES </span> </h3>
                <p>As the leader in home security, we can help you customize home security system to meet your safety needs. </p>
            </div>
            <!-- End: Heading -->
            <div class="row">
                <div class="timeline_posts">
                    
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <!-- about-item -->
                        <a href="{{route('housekeeping-services')}}"> 
                        <div class="service-item">
                        <img src="/images/service/housekeeping.svg" class="img-fluid serviceIcon">
                      
                            <h5 class="serv-left"> Housekeeping Services</h5>
                            <p>We offer total HR solution. There is no need to bother about Recruitment, Retention, Office Cleaning & Maintenance, Vegetation Pruning & Cutting, Home Cleaning payments and other management hassles.
</p>   
                        </div>
                        </a>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <!-- about-item -->
                        <a href="{{route('manpower-outsourcing')}}"> 
                        <div class="service-item"> 
                        <img src="/images/service/manpower.svg" class="img-fluid serviceIcon">
                      
                            <h5 class="serv-left">Manpower Services </h5>
                            <p>Lionman Commandos provides Contract Staffing, Office Manpower, Payroll Management, Superior Caretaking and Housekeeping facilities. Our staff is highly trained and professional.


</p>     
                        </div>
                        </a>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <!-- about-item -->
                        <a href="{{route('facility-management')}}"> 
                        <div class="service-item">
                        <img src="/images/service/facility-management.svg" class="img-fluid serviceIcon">
                        
                          
                            <h5 class="serv-left">Facility Management</h5> 
                            <p>At Lionman Commandos, we believe in providing end to end services. Keeping this in mind, we offer security for Civil/ Structural Consultation, Civil Contractors, Building Management, Real Estate Management electrical.</p>
                        </div>
                        </a>
                        <!-- End: .about-item -->
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <!-- about-item -->
                        <a href="{{route('security-services')}}">
                        <div class="service-item">
                            <img src="/images/service/security.svg" class="img-fluid serviceIcon">
                           
                            <h5 class="serv-left">Security Services </h5>
                            <p>A professional company to manage Administrative, Statutory, Home Security, PSO, Bouncers, Vehicle With Security, Armed Guards, Residential needs of your outsourced employees.
 <br/><br/></p>
                        </div>
                        </a>
                        <!-- End: .about-item -->
                    </div>
    
                




                </div>
                <!-- /. row -->
            </div>
            <!-- /. row -->
        </div>
        <!-- /. container -->
    </section>
    <!-- End:Our Services Section
==================================================-->


    <!-- Start:Get In Touch Section 
==================================================-->
    <section class="get-touch-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7 get-touch-text">
                    <div class="get-touch-warper">
                        <!-- <h3 class="hs1">ISO Certification</h3> -->
                        <h4 class="lp5"> As the leader in home security, we can help you customize home security system to meet your safety needs.</h4>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-5 get-touch-button">
                    <a href="{{route('get-a-quote')}}" class="more-link">GET a Quote</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-lg-1  ">
                   
                </div>
                <div class="col-lg-2 col-sm-7 boxblink">
                    <div>
                      <div></div>Compassion
                    </div>
                   
                </div>
                <div class="col-lg-2 col-xs-6 boxblink">
                <div>
                <div></div>Commitment
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 boxblink">
                <div>
                <div></div>Excellent
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 boxblink">
                <div>
                <div></div>Team Work
                    </div>
                </div>
                <div class="col-lg-2 col-xs-6 boxblink">
                <div>
                <div></div>Value
                   </div>
                </div>
                <div class="col-lg-1  ">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End:Get In Touch Section 
==================================================-->



    <!-- Start: Choose Us Section
==================================================-->
    <section class="chooseus-section" style="padding-bottom:0;">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header" style="width: 100%;">
                <h3>Why <span class="ylow_clr"> Choose Us ?</span></h3>
                
                <div class="row text-center about-left">
         <p style="color:black; ">The world is changing fast. The need for physical security of an organization can't be brushed aside or ignored. Security of physical assets and personnel is an extremely important for any organization to thrive in today's atmosphere. The role of professional security organization today is hence seen as equally important input in the growth of an organization- a need that cannot beglared over. Moreover, many organizations are turning to outsource their manpower requirement to either cut down on their HR resources and Legal responsibilities as well as to get professional services with the minimum of hassles.</p>
         </div>
            </div>
            <!-- End: Heading -->
         
            <!-- /. row -->
        </div>
        <!-- /. container -->
    </section>
    <!-- End: Choose Us Section
==================================================-->
<section class="about-section aboutpg">
        <div class="container">
            <div class="row">
              
                <!--/.col-lg-6 col-md-8 col-md-7-->
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <!--About Left-->
                    <div class="about-left">
                        <h3>Lionman Commandos  <span class="ylow_clr">Mission</span> </h3>
                        <p>Our aim is to provide such an excellent experience to our clients that they are more than satisfied and keep coming back to us. Our main focus is on clear and concise communication with both the clients and the resources. We combine on field experience of our seasoned experts and advanced technology to strive towards perfection across all the services we provide. Our ethics, morals, time commitment and aﬀordability makes us stand out from the crowd. Our resources are fully trained, disciplined, trustworthy and professional.</p>
                  
						<a href="{{route('about-us')}}"><span class="serv-learn hvr-float-shadow">READ MORE <i class="arrow_right"></i></span></a>
                    </div>
                    <!--/About Left-->    
                </div>
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <!--About right-->
                    <div class="about-right"><img alt="about" class="about-img_1 pt-2" src="images/mission.jpg">
                    </div>
                    <!--/About right-->
                </div>
                <!--/.col-lg-6 col-md-4 col-sm-5-->
            </div>
            <!--/.row-->
        </div>
        <!--/container-->
    </section>



    <!--Start: Video Section
==================================================-->
   
    <!-- VIDEO POPUP -->
    <!-- <div class="modal fade video-modal" id="video-modal" role="dialog">
        <div class="modal-content">
            <div class="row">
                <iframe allowfullscreen="" height="400" src="https://www.youtube.com/embed/BzMLA8YIgG0" width="712"></iframe>
            </div>
        </div>
    </div> -->
    <!-- End: VIDEO Section
==================================================-->


    <!--  Start: Work Section 
==================================================-->

    <!--  End: Work Section
==================================================-->


    <!--  Start:Team Section
==================================================-->
    <section class="team-section">
        <div class="container">
           
            <div class="base-header">
                <h3>Team <span class="ylow_clr">member</span></h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur. </p> -->
            </div>
          
            <div class="row">
                <div class="owl-carousel owl-theme" id="team">
                 
                  
                     
                    <div class="item">
                        <div class="member">
                            <div class="img">
                                <div class="timg_overlay">
                                    <img alt="team" class="img-responsive" src="images/team/sanjeev_kumar.jpg">
                                </div>
                                <div class="team_icon">
                                </div>
                                <div class="info">
                                    <h6>Sanjeev Kumar</h6>
                                    <p>Director - Sales and Marketing</p>
                                    <!-- <ul class="social list-inline">
                                        <li>
                                            <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="item">
                        <div class="member">
                            <div class="img">
                                <div class="timg_overlay">
                                    <img alt="team" class="img-responsive" src="images/team/anand_rai.jpg">
                                </div>
                                <div class="team_icon">
                                </div>
                                <div class="info">
                                    <h6>Anand Rai</h6>
                                    <p>director - Operation and finance</p>
                                    <!-- <ul class="social list-inline">
                                        <li>
                                            <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="item">

                        <div class="member">
                            <div class="img">
                                <div class="timg_overlay">
                                    <img alt="team" class="img-responsive" src="images/team/vipin_rai.jpg">
                                </div>
                                <div class="team_icon">
                                </div>
                                <div class="info">
                                    <h6>Vipin Rai </h6>
                                    <p>Director</p>
                                    <!-- <ul class="social list-inline">
                                        <li>
                                            <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul> -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                       
                       <div class="member">
                           <div class="img">
                               <div class="timg_overlay">
                                   <img alt="team" class="img-responsive" src="images/team/4.jpg">
                               </div>
                               <div class="team_icon">
                               </div>
                               <div class="info">
                                   <h6>Akshita Gupta</h6>
                                   <p>ABL - CEO</p>
                                   <!-- <ul class="social list-inline">
                                       <li>
                                           <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li>
                                           <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li>
                                           <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                       </li>
                                   </ul> -->
                               </div>
                           </div>
                       </div>
                   </div>

                    <div class="item">

                        <div class="member">
                            <div class="img">
                                <div class="timg_overlay">
                                    <img alt="team" class="img-responsive" src="images/team/4.jpg">
                                </div>
                                <div class="team_icon">
                                </div>
                                <div class="info">
                                    <h6>Darunendra dachar  </h6>
                                    <p>Mayabious art LLP</p>
                                   
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">

                        <div class="member">
                            <div class="img">
                                <div class="timg_overlay">
                                    <img alt="team" class="img-responsive" src="images/team/4.jpg">
                                </div>
                                <div class="team_icon">
                                </div>
                                <div class="info">
                                    <h6>Manik Jain director</h6>
                                    <p>Vijay sales</p>
                                   
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">

                            <div class="member">
                                <div class="img">
                                    <div class="timg_overlay">
                                        <img alt="team" class="img-responsive" src="images/team/4.jpg">
                                    </div>
                                    <div class="team_icon">
                                    </div>
                                    <div class="info">
                                        <h6>Sourabh Kapoor</h6>
                                        <p>director</p>
                                    
                                    </div>

                                </div>
                            </div>
                            </div>
                 
                </div>
            </div>
          
        </div>
      
    </section >
    <section class="get-touch-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 get-touch-text">
            
            <div class="ec-item-wrap ">
						<span> <i class="fa fa-users" aria-hidden="true"></i></span>
					    <div class="ec-right-content">
                            <span class="ec-count-number counter" data-enable='off' >100</span>
                           <span>+ </span><div class="ec-count-title">Customers</div>
						</div>
            </div>
            </div>
         
            <div class="col-lg-4 col-sm-6 get-touch-text">
            <div class="ec-item-wrap ">
					<span><i class="fa fa-globe" aria-hidden="true"></i></span>
					<div class="ec-right-content">
				        <span class="ec-count-number counter" data-enable='off' >26
</span><span>+ </span><div class="ec-count-title">Locations</div>
					</div> 
            </div>
            </div>
            <div class="col-lg-4 col-sm-6 get-touch-text">
            <div class="ec-item-wrap ">
						<span><i class="fa fa-user" aria-hidden="true"></i></span>
						<div class="ec-right-content">
                            <span class="ec-count-number counter" data-enable='off' >600</span>
                        <span>+ </span><div class="ec-count-title">Team Members</div>
						</div> 
            </div>
            </div>
        
        </div>
    </div>
    </section>
    <!--  End:Team Section 
==================================================-->
<div class="testimonials-section" id="testimo">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
            <h3> <span class="ylow_clr">Testimonial</span></h3>
                <p></p>
            </div>
            <!-- End: Heading -->
            <!-- End: Heading -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <!-- Testimonials-->
                    <div class="owl-carousel owl-theme" id="testimonial">
                        <!-- Start: Testimonial 1 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="col-lg-3 col-sm-12 col-xs-12"><img alt="testimonial" src="images/background/user-icon.png">
                                </div>
                                <div class="col-lg-8 col-sm-9 col-xs-12 cus-title">
                                    <span class="tes-nam">Akshita Gupta ABL</span>
                                    <br>
                                    <span class="tes-degree">CEO</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <p>Lionman Commandos is best manpower services provided company. They complete projects on time or ahead of schedule and are very reasonably priced. I highly recommend them!
</p>
                                </div>
                            </div>
                            <!--End: Testimonial 1 -->
                        </div>
                        <!-- Start: Testimonial 3 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="col-lg-3 col-sm-12 col-xs-12"><img alt="testimonial" src="images/background/user-icon.png">
                                </div>
                                <div class="col-lg-8 col-sm-9 col-xs-12 cus-title">
                                    <span class="tes-nam">Darunendra dachar</span>
                                    <br>
                                    <span class="tes-degree">Mayabious art LLP</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <p>They have best security services, very professional towards their commitment. They know how to get the job done. Nice company</p>
                                </div>
                            </div>
                            <!--End: Testimonial 3 -->
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="col-lg-3 col-sm-12 col-xs-12"><img alt="testimonial" src="images/background/user-icon.png">
                                </div>
                                <div class="col-lg-8 col-sm-9 col-xs-12 cus-title">
                                    <span class="tes-nam">Manik Jain</span>
                                    <br>
                                    <span class="tes-degree">Director</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <p>I am pleased with the performance of the Security Planet Services staff assigned to our facilities. The management responds quickly to questions and needs. I would definitely recommend Security Planet Services to others.</p>
                                </div>
                            </div>
                            <!--End: Testimonial 3 -->
                        </div>
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="col-lg-3 col-sm-4 col-xs-12"><img alt="testimonial" src="images/background/user-icon.png">
                                </div>
                                <div class="col-lg-8 col-sm-9 col-xs-12 cus-title">
                                    <span class="tes-nam">Sourabh Kapoor</span>
                                    <br>
                                    <span class="tes-degree">Director</span>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <p>I am impressed with the performance of the Security Planet Services staff assigned to our facilities.</p>
                                </div>
                            </div>
                            <!--End: Testimonial 3 -->
                        </div>
                    </div>
                </div>
               
                <!--/.col-lg-6-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
 @include('components.clients');
 
    <!-- Start: contact  Section 
==================================================-->
    <section class="contact-section">
        <div class="container-fulid">
            <!-- <div id="map" class="map-container"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7006.116022006755!2d77.0713745988308!3d28.59803645273432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRZB-33%2C%202nd%20Floor%2C%20Mahavir%20Enclave%20Part-1%2C%20New%C2%A0Delhi-110045!5e0!3m2!1sen!2sin!4v1694882117355!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Google Map -->
            <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3>Get in <span class="ylow_clr">Touch</span></h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus id lectus quis dui euismod con placerat massa nec elit egestas efficitur. </p> -->
                </div>
                <!-- End:  heading -->
            </div>
            <!--  END Page header  -->
            <!--  Content  -->
            <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 inner-contact">
                <div class="row">
                    <div class="col-lg-12">
                        <!--  Contact Form  -->
                        <div class="contact-form">
                            <form method="post" action="{{ route('contactForm') }}" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input class="con-field" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="con-field" name="email" id="email" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="con-field" name="messageForm" id="messageForm" type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                                        <div class="submit-area">
                                            <input type="submit" id="submit-contact" class="btn-alt" value="Send Message">
                                            <div id="msg" class="message"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End:Contact Form  -->
                    </div>
                </div>
                <!-- row /- -->
            </div>
            <!-- End:Content  -->
        </div>
        <!-- container /- -->
    </section>
    <!--End Contact Section
==================================================-->
 
@endsection