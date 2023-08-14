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
                        <img src="/images/icon/Building-Management.png" class="img-fluid serviceIcon imageicon">
                        <h3 class="serv-left textCenter" style="">Building Management</h3>
                        <p>A building needs a lot of services for efficient functioning. The aim is to ensure that there is no interruption in day today services being offered to the owners/ tenants/ workers. This involves security services, Horticulture including gardening services, Generator and electricity services, Lift operation and maintenance, Car paring and traffic management, CCTV management, HVAC services, windows cleaning, stairs cleaning, common bathrooms cleaning, establishment of a control room etc. We also offer garbage collection and disposal. We also help in setting up vermiculture.</p>
                        </div>
                        <div class="col-lg-6 serviceBox" >
                        <img src="/images/icon/Real-Estate-Management.png" class="img-fluid serviceIcon imageicon">
                        <h3 class="serv-left textCenter" style="">Real Estate Management</h3>
                        <p>During construction of a project; there is a requirement of security of the site as well safety of the construction material. Later on; there is a requirement of efficient traffic management of the workers, machinery and visitors. We offer efficient services for the same including Horticulture including gardening services, Generator and electricity services, Lift operation and maintenance, CCTV management etc.</p>
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