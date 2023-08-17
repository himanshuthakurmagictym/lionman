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
                <div class="col-lg-8 col-sm-5 col-xs-12" style="margin-top: 60px;">
                    <div class="row">
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Office-Cleaning-&-Maintenance.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Office Cleaning & Maintenance</h3>
                       <p>We take care of the office area, furniture, equipment, floor, toilets, windows, carpets, computers, pantry, tiles etc. We have the best of advanced equipment, environment friendly cleansing agents and experienced and verified staff.</p>
                        </div>
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Vegetation-Pruning-&-Cutting.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Vegetation Pruning & Cutting</h3>
                        <p>In open areas especially around Air Force Stations, Ammunition dumps; there is excessive growth of shrubs, vegetation etc which needs to be cut and removed to reduce chances of fire. We have experience of managing the same in high security zones.</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 60px;">
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Home-Cleaning.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Home Cleaning</h3>
                       <p>We offer a host of services in home cleaning. Some of them are- Home deep cleaning, Sofa shampooing, Bathroom cleaning, Pest control, Carpet shampooing, Chimney cleaning, Windows Cleaning, Fridge cleaning, Kitchen cleaning, Combo offer, Marble floor polishing, Office cleaning, Disinfection services, Curtain cleaning etc.</p>
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