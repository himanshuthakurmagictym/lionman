@extends('layout.master')
@section('content')
@php
$commercial = \App\Models\Services::where(['service_category' => 'commercial'])->get();
$guarding_services = \App\Models\Services::where(['service_category' => 'guarding_services'])->get();
$office_security = \App\Models\Services::where(['service_category' => 'office_security'])->get();
$Housekeeping_services = \App\Models\Services::where(['service_category' => 'Housekeeping_services'])->get();
$facility = \App\Models\Services::where(['service_category' => 'facility'])->get();
$manpower = \App\Models\Services::where(['service_category' => 'manpower'])->get();
@endphp
<section class="about-section aboutpg">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-sm-5 col-xs-12">
                    <!--About right-->
                    <div class=" about-right keyimage "><img alt="about" class="about-img_1" src="images/key.png">
                    </div>
                    <!--/About right-->
                </div>
                <!--/.col-lg-6 col-md-8 col-md-7-->
                <div class="col-lg-8 col-sm-5 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Guarding-Services.png" class="img-fluid imageicon ">
                        <h3 class="serv-left textCenter" style="">Guarding Services</h3>
                        <ul>
                        @foreach($guarding_services as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                        </ul>
                        </div>
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Office-Security.png" class="img-fluid imageicon ">
                        <h3 class="serv-left textCenter" style="">Office Security</h3>
                        <ul>
                        @foreach($office_security as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-top: 60px;">
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Commercial-&-Industrial-Security.png" class="img-fluid imageicon ">
                        <h3 class="serv-left textCenter" style="">Commercial & Industrial Security</h3>
                        <ul>
                        @foreach($commercial as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}">{{$service->service_name}}</a></li>
                                            @endforeach
                        </ul>
                        </div>
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/CCTV-Monitoring.png" class="img-fluid imageicon ">
                        <h3 class="serv-left textCenter" style="">CCTV Monitoring</h3>
                        <p>As a leading provider of CCTV remote monitoring services for commercial and non-commercial assets, our remote software enables you to monitor your premises 24/7 to ensure on-site safety. Video surveillance services are designed for real-time video surveillance, monitoring threats, tracking intruders, and alerting organizations when needed.</p>
                    </div>
                </div>
                </div>
                <!--/.col-lg-6 col-md-4 col-sm-5-->
            </div>
            <!--/.row-->
        </div>
        <!--/container-->
    </section>

@endsection 