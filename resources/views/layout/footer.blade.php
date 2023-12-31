@php

$guarding_services = \App\Models\Services::where(['service_category' => 'guarding_services'])->get();
@endphp
<footer class="footer-section">
        <div class="container">
            <div class="row">
                <!-- Start: About -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="widget">
                        <div class="col-md-12 col-xs-11">
                            
                            <div class="logo ">
                                <a href="/"><img class="img-responsive" style="   padding-bottom:20px; height: 100%;" src="/images/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-11 col-sm-11 col-xs-10">
                            <p class="footer_para">Lionman Commandos is  one of the leading service providers of Human Resources including Security Personnel for an entire gamut of industries and Events. </p>
                            
                        </div>
                    </div>
                </div>
                <!-- End: About -->
                <!-- Start: Latest post -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h5>Our Services</h5>
                        <ul style="    -webkit-text-fill-color: white;">
                                            @foreach($guarding_services as $service)
                                            <li><a href="{{route('services',['id'=>$service->slug])}}" style="color:white;">{{$service->service_name}}</a></li>
                                            @endforeach                                    
                           
                        </ul>
                    </div>
                </div>
                <!-- End: Latest post -->
                <!-- Start:Tag -->
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Contact Details</h5>
                        <!-- Start Subscribe -->
                        <div class="box-content">
                           
                               <ul style="list-style: none; padding: 0 0 0 20px; font-size: 18px;">
                                <p><li>
                                 <i class="fa fa-envelope"></i> : info@lionmancommandos.com</li>
                                <li><i class="fa fa-phone"></i> : 01142878279</li>
                                <li><i class="fa fa-home"></i> : RZB-33, 2nd Floor, Mahavir Enclave Part-1, New Delhi-110045 </li></p>
                               </ul>
                                
                           
                        </div>
                    </div>
                </div>
                <!-- End:Tag -->
                <!-- Start:Subfooter -->
                <div class="subfooter">
                    <div class="col-xs-6">
                        <p>2023 © Copyright <a href="#">Lionman Commandos.</a> All rights Reserved.</p>
                    </div>
                    <div class="col-xs-6">
                        <a class="scrollup" href="#">Top</a>
                    </div>
                </div>
                <!-- End:Subfooter -->
            </div>
        </div>
    </footer>