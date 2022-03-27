@include('layouts.frontend.header')

    <!--navber-->
    @include('layouts.frontend.navber')
    <!--navber-->

 <!-- Hero Start -->
 <div class="hero">
    <div class="container-fluid">
        <div class="row align-items-center">

        @foreach($abouts as $about)
            <div class="col-sm-12 col-md-6">
                <div class="hero-text">
                    <h1>{{$about->title}}</h1>

                    <p>
                        {{$about->description}}
                    </p>

                    <div class="hero-btn">
                        <a class="btn" href="">Join Now</a>
                        <a class="btn" href="">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="{{asset($about->image)}}" alt="Hero Image">
                </div>
            </div>
        @endforeach

        </div>
    </div>
</div>
<!-- Hero End -->

<div class="section about-area pt-100 pb-100" style="background-color: rgb(255, 255, 255);">
    <div class="container">


        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="about-content">
                    <h4>welcome to JEA</h4>
                    <p>
                        Joypurhat Engineer's Association - A single, uninterrupted and
                        well-organized platform for all engineers in Joypurhat. In order
                        to build a better Joypurhat where social and cultural responsibilities
                        are fulfilled. It is completely compromised and unprofitable.
                        The activities are being conducted in a
                        well-planned and well-organized manner respecting the views of
                        the competent administration panel and all the members.
                    </p>
                    <p>
                        Join the Joypurhat Engineers Association yourself and add your familiar
                        engineer siblings. All your help and cooperation is desired.
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">
                <div class="single-about">
                    <div class="icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div>
                        <h4>our mission</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam,
                            error amet ex excepturi neque at! Dolor, atque.</p>
                    </div>
                </div>
                <div class="single-about">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4>our vission</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam,
                            error amet ex excepturi neque at! Dolor, atque.</p>
                    </div>
                </div>
                <div class="single-about">
                    <div class="icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div>
                        <h4>our history</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam corrupti sunt quibusdam,
                            error amet ex excepturi neque at! Dolor, atque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End Here -->

   <!--footer-->
    @include('layouts.frontend.footer')
    <!--footer-->

   <!--script-->
   @include('layouts.frontend.script')
    <!--script-->