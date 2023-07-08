<header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    
                    <?php $segments = ''; ?>
                    
                    <h4>
                    <a href="/"> Home </a> /
                    @foreach(Request::segments() as $key => $segment)
                        @if($segment == 'services')
                            <a href="/"> Services </a> / 
                        @endif 
                        @if($segment !== 'services')
                        {{$segment}} </h4>
                            <h3> {{$segment}}</h3>
                        @endif  
                    @endforeach
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>