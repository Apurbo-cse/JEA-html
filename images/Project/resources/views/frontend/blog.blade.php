@include('layouts.frontend.header')

    <!--navber-->
    @include('layouts.frontend.navber')
    <!--navber-->


    <link href="{{asset('style/main.css')}}" rel="stylesheet">
    <link href="{{asset('style/nav.css')}}" rel="stylesheet">
    <link href="{{asset('style/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/most_post.css')}}">
    
    <div style="width: 100%;height:50px ; "></div>

    <div class="sidebar-page-container" style="margin:-70px 0px -70px ">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Category Tabs Box-->
                    <div class="category-tabs-box">
                        <!--Product Tabs-->
                        <div class="prod-tabs tabs-box">

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-alls">
                                    <div class="content">

                                        <div class="row clearfix">

                                            <!-- News Block Two -->
                                            <div class="news-block-two col-sm-12">

                                                <!--Marquee-->

                                                <div class="sec-news">
                                                    <marquee> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.
                                                    </marquee>
                                                </div>
                                                <div class="letest-title">
                                                    <p>Letest News</p>
                                                </div>

                                                <!--Marquee End-->

                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="images/bus5.jpg" />
                                                        <div class="category"><a href="#">Video</a></div>
                                                        <a href="https://www.youtube.com/watch?v=sL0oTexGTc4" target="_blank" class="lightbox-image overlay-box">
                                                            <span class="fa fa-play-circle"><i class="ripple">
                                                                </i></span></a>
                                                    </div>

                                                    <div class="lower-box">
                                                        <h3>
                                                            Bustand
                                                        </h3>
                                                        <ul class="post-meta">
                                                            <li><span class="icon fa fa-clock-o"></span>February 16, 2020
                                                            </li>
                                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                                        </ul>
                                                        <div class="text">There is a huge transport pool on the permanent campus for students to travel. There is a bus stand next to the main campus to keep the buses safe.</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--News Block Three-->
                                <div class="news-block-four">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="image">
                                                    <a href="#"><img src="images/bono.jpg" alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                                <div class="content-inner">
                                                    <div class="category"><a href="#">Bonomaya</a></div>
                                                    <h3><a href="#">Bonomaya is located at Daffodil International
                                                            University</a></h3>
                                                    <ul class="post-meta">
                                                        <li><span class="icon fa fa-clock-o"></span>March 04, 2017</li>
                                                        <li><span class="icon fa fa-comment-o"></span>7</li>
                                                        <li><span class="icon fa fa-eye"></span>20</li>
                                                    </ul>
                                                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti…</div>
                                                    <p><a href="{{route('detailes')}}">More</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END News Block Three-->

                                <!--News Block Three-->
                                <div class="news-block-four">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="image">
                                                    <a href="#"><img src="images/ino.jpg" alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                                <div class="content-inner">
                                                    <div class="category"><a href="#">INOVATION LAB</a></div>
                                                    <h3><a href="#">Our dreams just got one step closer to universal
                                                            reality</a></h3>
                                                    <ul class="post-meta">
                                                        <li><span class="icon fa fa-clock-o"></span>March 04, 2017</li>
                                                        <li><span class="icon fa fa-comment-o"></span>7</li>
                                                        <li><span class="icon fa fa-eye"></span>20</li>
                                                    </ul>
                                                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti…</div>
                                                    <p><a href="{{route('detailes')}}">More</a></p>
                                                    
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END News Block Three-->

                                <!-- Pagination -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center" style="font-size: 14px;padding: 5px;">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                1
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Pagination End -->

                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar-->
                @include('layouts.frontend.sideber')
                <!--Sidebar End-->
            </div>
        </div>
        </aside>
    </div>
    </div>
    </div>

    </div>

   
 


    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/window.js')}}"></script>

   <!--footer-->
   @include('layouts.frontend.footer')
    <!--footer-->

   <!--script-->
   @include('layouts.frontend.script')
    <!--script-->