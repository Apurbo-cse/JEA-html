
        <div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="text-center">
            <img src="https://diutransport.com/assets/frontend/icons/profile.jpg" alt="" class="img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
            </div>

            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="/dashboard" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
            </li>

            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="#">User List</a></li>
                    <li><a href="#">Create New User</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Slider </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('slider.index')}}">Slider List</a></li>
                    <li><a href="{{route('slider.create')}}">Create New Slider</a></li>
                </ul>
            </li>
         

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span>About</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('about.index')}}">About List</a></li>
                    <li><a href="{{route('about.create')}}">Create New About</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-video-camera"></i> <span> Video </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="https://diutransport.com/admin/video">Video List</a></li>
                    <li><a href="https://diutransport.com/admin/video/create">Create New Video</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span> Gallery </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('gallery.index')}}">Gallery List</a></li>
                    <li><a href="{{route('gallery.create')}}">Create New Gallery</a></li>
                </ul>
            </li>
             <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span> Blog </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('blog.index')}}">blog List</a></li>
                    <li><a href="{{route('blog.create')}}">Create New blog</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->

