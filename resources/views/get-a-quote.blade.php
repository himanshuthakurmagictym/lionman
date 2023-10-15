@extends('layout.master')

@section('content')
<section class="contact-section">
        <div class="container-fulid">
            <!-- <div id="map" class="map-container"></div> -->
           <br>
            <!-- Google Map -->
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3> REQUEST A <span class="ylow_clr">FREE QUOTES</span></h3>
                    <p>There are many reasons why an executive or VIP would choose personal security services. Executives could be in charge of large companies that are worth millions or more, leaving them to be a high-valued target.</p>
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
                            <form method="post" action="{{ route('getaquoteForm') }}"   id="contact-form">
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
                                    <div class="col-lg-4">
                                        <input class="con-field" name="company" id="name" type="text" placeholder="Company Name">
                                    </div>
                                    <div class="col-lg-4">
                                       <select name="officeSecurity" class="form-control" id="">
                                        <option value="OfficeSecurity">Office Security</option>
                                        <option value="BankSecurity">Bank Security</option>
                                        <option value="PersonalSecurity">Personal Security</option>
                                       
                                       </select>
                                    </div>
                                    <div class="col-lg-4">
                                    <select name="area" class="form-control" id="">
                                        <option value="serviceArea">service Area</option>
                                        <option value="DELHI">DELHI</option>
                                        <option value="HARIYANA">HARIYANA</option>
                                        <option value="PUNJAB">PUNJAB</option>
                                        <option value="UP">UP</option>
                                        <optgroup label="Other Services area">
                                            <option value="Kerala">Kerala</option>
                                            <option value="karnattaka">karnattaka</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Hariyana">Hariyana</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Punjab">Delhi</option>
                                            <option value="Punjab">Uttar Pardesh</option>
                                        </optgroup>

                                       </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <input class="con-field" name="facility" id="name" type="text" placeholder="Type of facility">
                                    </div>
                                    <div class="col-lg-4">
                                       <select name="guards" class="form-control" id="">
                                        <option value="">Select No. of Guards</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                       </select>
                                    </div>
                                    <div class="col-lg-4">
                                    <select name="service" class="form-control" id="">
                                        <option value="">service Needed By</option>
                                        <option value="hospital">Hospital</option>
                                        <option value="stores">Stores</option>
                                      
                                       </select>
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
