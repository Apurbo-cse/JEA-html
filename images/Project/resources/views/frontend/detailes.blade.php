@include('layouts.frontend.header')

    <!--navber-->
    @include('layouts.frontend.navber')
    <!--navber-->


    <link href="{{asset('style/main.css')}}" rel="stylesheet">
    <link href="{{asset('style/nav.css')}}" rel="stylesheet">
    <link href="{{asset('style/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/most_post.css')}}">

<div style="width: 100%;height:50px ; ">
    </div>
    <br><br>

    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="content-blocks">

                    <!--News Block Four-->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="image-column col-sm-12">
                                    <div class="image">
                                        <a href="blog-single.html"><img src="{{asset('images/bus7.jpg')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="content-box  col-sm-12">
                                    <div class="content-inner">
                                        <h3><a href="blog-single.html">Our dreams just got one step closer to universal reality</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 03, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>9</li>
                                            <li><span class="icon fa fa-eye"></span>7540</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti .Lorem ipsum dolor sit amet,
                                                consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti .Lorem ipsum dolor sit amet,
                                                consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti .Lorem ipsum dolor sit amet,
                                                consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <!--Sidebar-->
            @include('layouts.frontend.sideber1')
                <!--Sidebar End-->

                
        </div>
    </div>
    </div>
    <!--End Sidebar Page Container-->

    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/window.js')}}"></script>

   <!--footer-->
   @include('layouts.frontend.footer')
    <!--footer-->

   <!--script-->
   @include('layouts.frontend.script')
    <!--script-->