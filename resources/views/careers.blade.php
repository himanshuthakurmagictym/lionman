@extends('layout.master')

@section('content')
<section class="contact-section">
        <div class="container-fulid">
            <!-- <div id="map" class="map-container"></div> -->
           <br>
            <!-- Google Map -->
            <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3> Apply  <span class="ylow_clr">Now</span></h3>
                    <p>Find your dream job with us. Apply now and we will get in touch with you. </p>
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
                            <form method="post" action="{{ route('applyForm') }}" enctype="multipart/form-data"  id="contact-form">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input class="con-field" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="con-field" name="email" id="email" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="con-field" name="mobile" id="messageForm" type="phone" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="">Your Resume</label>
                                    <input class="con-field" name="resume" id="messageForm" type="file" placeholder="resume">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                                        <div class="submit-area">
                                            <input type="submit" id="submit-contact" class="btn-alt" value="Send Now">
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
@endsection 
