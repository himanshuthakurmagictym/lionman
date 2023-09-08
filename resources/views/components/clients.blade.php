<div class="testimonials-section" id="testimo">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
            <h3>Our<span class="ylow_clr"> Clients</span></h3>
          <p></p>
            </div>
            <!-- End: Heading -->
            <!-- End: Heading -->
            <div class="row">
             
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <!-- Start: Client Section -->
                    <div class="owl-carousel owl-theme col-md-12" id="client">
                        <!-- client 1 -->
                        @for($j=1; $j<11; $j++)
                        <div class="item row">
                            <div class="col-md-12">
                                <div class="client-box"><img alt="client" src="images/background/{{ $j }}.jpg">
                                </div>
                            </div>
                        </div>
                        @endfor

                        @for($i=1; $i<28; $i++)
                        <div class="item row">
                            <div class="col-md-12">
                                <div class="client-box"><img alt="client" src="images/background/logo-{{ $i }}.jpg">
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- client 2 -->
                        
                    
                    </div>
                    <!--  End:Client Section -->
                </div>
                <!--/.col-lg-6-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>