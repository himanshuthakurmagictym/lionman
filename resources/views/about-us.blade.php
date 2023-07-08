@extends('layout.master')
@section('content')
 <!-- Start:About Section 
==================================================-->
<section class="about-section aboutpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <!--About right-->
                    <div class="about-right"><img alt="about" class="about-img_1" src="images/background/about.jpg">
                    </div>
                    <!--/About right-->
                </div>
                <!--/.col-lg-6 col-md-8 col-md-7-->
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <!--About Left-->
                    <div class="about-left">
                        <h3><span class="ylow_clr"> WHO WE ARE </span> </h3>
                        <p> Servitor Intelligence Services (SiS) is one of the leading service providers of Human Resources including Security Personnel for an entire gamut of industries and Events. We have highly trained, qualiﬁed and motivated staff with more than 13 years' experience in this ﬁeld. We have ISO-9001:2008, ISO- 9001 : 2015 , ISO- 45001 : 2018 , ISO- 45001:2018, SA8000:2014 & PSARA-2005 certiﬁcation. We are MSME, Udhyam and NSIC registered. We provide manpower solutions across a multitude of verticals- all kinds of manpower outsourcing be it technical, non-technical, clerical, house- keeping, sanitation, cleaning, vegetation clearance, drivers, construction workers etc. We provide the entire spectrum of manpower</p>
                        <a href="{{route('contact')}}" class="more-link text-white">Contact Us</a>
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
                    <a href="/contact.php" class="more-link">Enquire Now</a>
                </div>
            </div>
        </div>
    </section>
@include('components.clients');
@endsection 