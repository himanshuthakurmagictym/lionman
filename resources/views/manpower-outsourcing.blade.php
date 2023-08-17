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
                        <img src="/images/icon/Contract-Staffing.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Contract Staffing</h3>
                        <p>We also offer manpower for any task – both on long term basis and short erm basis. Complete HR services will be provided including recruiting (if required), wages distribution and all statutory payments.</p>
                        </div>
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Office-Manpower.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Office Manpower</h3>
                        <p>You can outsource complete/ partial office manpower to us. We offer recruiting, HR, wages distribution, ESI deposition, EPF deposition, GST deposition etc. This will help your company to concentrate on core business and leave complete HR process to us.</p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Payroll-Management.png" class="img-fluid  imageicon">
                        <h3 class="serv-left textCenter" style="">Payroll Management</h3>
                        <p>We also offer payroll services for your existing employees</p>
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