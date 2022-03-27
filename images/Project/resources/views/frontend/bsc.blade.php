@include('layouts.frontend.header')
 
    <!--navber-->
    @include('layouts.frontend.navber')
    <!--navber-->
 <!-- Page Header Start -->
 <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-size: 20px;">BSc in Engineering</h2>
                </div>
                <div class="col-12">
                    <a href="/" style="font-size: 14px;">Home</a>
                    <a href="" style="font-size: 14px;">Member List</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Class Start -->
    <div class="class">
        <div class="container">
            <div class="row class-container">
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{{asset('frontend/images/profile.jpg')}}" alt="Image">
                                <h3>Mizanur Rahaman</h3>
                                <a href="{{route('profiles')}}">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Network Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>Demo Company Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->


   <!--footer-->
   @include('layouts.frontend.footer')
    <!--footer-->

   <!--script-->
   @include('layouts.frontend.script')
    <!--script-->