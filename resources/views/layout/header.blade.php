@php
$commercial = \App\Models\Services::where(['service_category' => 'commercial'])->get();
$guarding_services = \App\Models\Services::where(['service_category' => 'guarding_services'])->get();
$office_security = \App\Models\Services::where(['service_category' => 'office_security'])->get();
$Housekeeping_services = \App\Models\Services::where(['service_category' => 'Housekeeping_services'])->get();
$facility = \App\Models\Services::where(['service_category' => 'facility'])->get();
$manpower = \App\Models\Services::where(['service_category' => 'manpower'])->get();
@endphp


<div class="header_topbar">
        <!-- Logo -->
			<div class="container">
                <div class="row">
                    <div class="header_top_left">
                        <ul class="header_socil list-inline pull-left">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="https://instagram.com/" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
					<div class="header_top_right list-unstyled"> 
						<ul>
							<li><i class="fa fa-envelope"></i>lionman@gmail.com</li>
							<li><i class="fa fa-phone"></i>+91 73039 999999</li>
						</ul>	
					</div>
                </div>
            </div>
    </div>
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row ">
			<div class="logo col-md-2 reverseMenu">
                <a href="/"><img class="img-responsive" style="    height: 90%;" src="/images/logo.png" alt="">
                </a>
            </div>
                <div class="col-md-8 col-xs-3 col-md-offset-2">
                    <div id="navigation">
                        <ul>
                            <li>
                                <a  href="{{route('home')}}">Home</a>
                            </li>
                            
                            <li><a href="{{route('about-us')}}" title="About">About</a>
                            </li>
                  
							<li ><a href="{{route('our-clients')}}" title="page">Our Clients </a>
							
							</li>
                            <li class="has-subs"><a href="#" title="Clients">Other services </a>
                                <ul style="left: -300px!important;">
									<li class="has-subs"><a href="" title="Blog">Security Services</a>
										<ul style="  ">
                                            <li><a href="" title="blog">Guarding Services</a>
                                            <ul>
                                            @foreach($guarding_services as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                                            <!-- <li><a href="">Home Security</a></li>
                                        <li ><a href="">PSO</a></li>
                                        <li ><a href="">Bouncers</a></li>
                                        <li ><a href="">Vehicle with Security</a></li>
                                        <li ><a href="">Armed Guards</a></li>
                                        <li ><a href="">Residential Society Security</a></li> -->
                                            </ul>
                                            </li>
                                            <li><a href="" title="Single">Office Security</a>
                                            <ul>
                                            @foreach($office_security as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                                            <!-- <li><a href="{{route('home')}}" title="blog">Office Complex Security</a>
                                            
                                            <li><a href="{{route('home')}}" title="blog">CCTV Monitoring</a>
                                            </li>
                                            <li><a href="{{route('home')}}" title="Single">Control Room</a>
                                            </li>
                                            <li><a href="{{route('home')}}" title="Single">>Fire Fighting</a>
                                            </li>
                                            <li><a href="{{route('home')}}" title="Single">Vehicle Checking and Parking</a>
                                            </li>
                                            <li><a href="{{route('home')}}" title="Single">Individual Frisking</a>
                                            </li>
                                            <li><a href="{{route('home')}}" title="Single">Scanners</a>
                                            </li> -->
                                            </ul>
                                            </li>
                                            <li><a href="" title="Single">Commercial &#038; Industrial Security</a>
                                            <ul>
                                            @foreach($commercial as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                                            <!-- <li ><a href="">Premises Security</a></li>
                                            <li ><a href="">Individual Frisking</a></li>
                        <li ><a href="">CCTV Monitoring</a></li>
                        <li ><a href="">Control Room</a></li>
                        <li ><a href="">Fire Fighting</a></li>
                        <li ><a href="">Patrolling</a></li>
                        <li ><a href="">Vehicle Checking and Parking</a></li>
                        <li ><a href="">Special Arrangement for Educational Institutions</a></li> -->
                                            </ul>
                                            </li>
                                            <!-- <li><a href="{{route('home')}}" title="Single">CCTV Monitoring</a>
                                            </li> -->
										</ul>
									</li>
                                    <li><a href="" title="Blog">ManPower Outsourcing</a>
										<ul>
                                             @foreach($manpower as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
										</ul>
									</li>

                                    <li><a href="" title="Blog">Housekeeping Services</a>
										<ul>
                                        @foreach($Housekeeping_services as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                                        <!-- <li ><a href="">Office Cleaning &amp; Maintenance</a></li>
                                        <li ><a href="">Vegetation Pruning &amp; Cutting.</a></li>
                                        <li ><a href="">Home Cleaning</a></li> -->
                                            </li>
                                       
										</ul>
									</li>
                                    <li><a href="" title="Blog">Facility Management</a>
										<ul>
                                        @foreach($facility as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                                       
										</ul>
									</li>


                               </ul>
							</li>
                            <li><a href="{{route('careers')}}" title="About">Careers</a>
                                    </li>

							<li><a href="{{route('contact')}}" title="Contact">Contact</a>
							</li>
                        </ul>
                    </div>
                </div>
                <div class="logo col-md-2 reverseMenudesk">
                <a href="{{route('home')}}"><img class="img-responsive" style="    height: 90%;" src="/images/logo.png" alt="">
                </a>
            </div>
                 
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </div>