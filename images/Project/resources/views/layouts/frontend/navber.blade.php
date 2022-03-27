<!-- Top Bar Start -->
<div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <p>Jouypurhat Engineer's Association</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+880 1738-426929</h2>
                        </div>
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 am - 5:00 pm</h2>
                            <p>Sat - Fri</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" >
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">JEA</a>
                        <div class="dropdown-menu">
                            <a href="/convening" class="dropdown-item">Convening</a>
                            <a href="/member" class="dropdown-item">Member</a>
                            <a href="/establish" class="dropdown-item">Established</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Engineer</a>
                        <div class="dropdown-menu">
                            <a href="{{route('msc')}}" class="dropdown-item">MSc. in Engineering</a>
                            <a href="{{route('bsc')}}" class="dropdown-item">BSc. in Engineering</a>
                            <a href="{{route('bsc_diploma')}}" class="dropdown-item">BSc+Diploma in Engineering</a>
                            <a href="{{route('diploma')}}" class="dropdown-item">Diploma in Engineering</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Info</a>
                        <div class="dropdown-menu">
                            <a href="job-notice-jea.html" class="dropdown-item">Job Notice</a>
                            <a href="service-jea.html" class="dropdown-item">Service</a>
                            <a href="trainer-jea.html" class="dropdown-item">Trainer</a>
                            <a href="class-jea.html" class="dropdown-item">Class</a>
                        </div>
                    </div>
                    <a href="{{route('gallery')}}" class="nav-item nav-link">Gellary</a>
                    <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                    <a href="contact-jea.html" class="nav-item nav-link">Contact</a>
                    <a href="{{route('signin')}}" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->