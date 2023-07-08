@extends('layout.master')

@section('content')
<section class="about-section aboutpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <!--About right-->
                    <div class="about-right">
                        <!-- <img alt="about" class="about-img_1" src="images/background/about.jpg"> -->
                        <img alt="about" class="about-img_1" src="{{asset('images/singleService/'.$details->service_image)}}">
                    </div>
                    <!--/About right-->
                </div>
                <!--/.col-lg-6 col-md-8 col-md-7-->
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <!--About Left-->
                    <div class="about-left">
                      
                        <h3><span class="ylow_clr"> {{$details->service_name}} </span> </h3>
                        {{$details->service_content}}
                        <!-- <a href="{{route('contact')}}" class="more-link text-white">Contact Us</a> -->
                    </div>
                    <!--/About Left-->
                </div>
                <!--/.col-lg-6 col-md-4 col-sm-5-->
            </div>
            <!--/.row-->
        </div>
        <!--/container-->
    </section>
@endsection 
