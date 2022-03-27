@include('layouts.frontend.header')

    <!--navber-->
    @include('layouts.frontend.navber')
    <!--navber-->
    
    <link href="{{asset('frontend/css/profiles.css')}}" rel="stylesheet">


<div style="width: 100%;height:50px ; "></div>

<div class="container bootstrap snippets bootdey">
     <div class="row">
         <div class="profile-nav col-md-3">
             <div class="panel">
                 <div class="user-heading round">
                     <a href="#">
                         <img src="{{asset('images/team/profile.jpg')}}" alt="">
                     </a>
                     <h1>Mizanur Rahaman</h1>
                     <p>Network Engineer</p>
                 </div>

                 <ul class="nav nav-pills nav-stacked">
                     <li class="active"><a href=""> <i class="fa fa-user"></i> Profile</a></li>
                     <li> <a href="https://www.facebook.com/apurbo.cse"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://www.linkedin.com/apurbocse"><i class="fab fa-linkedin-in"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="profile-info col-md-9">

             <div class="panel">

                 <div class="panel-body bio-graph-info"  style="border:1px solid gray;">
                     <h1 style="font-weight: 600;">Bio Graph</h1>
                     <div class="row">
                         <div class="bio-row">
                             <p><span>Name</span>:&nbsp;&nbsp;&nbsp; Mizanur Rahaman</p>
                         </div>
                         <div class="bio-row">
                             <p><span>Designation </span>:&nbsp;&nbsp;&nbsp; Network Engineer</p>
                         </div>
                         <div class="bio-row">
                             <p><span>Workplace</span>:&nbsp;&nbsp;&nbsp; Nazz ltd. Dhaka</p>
                         </div>
                         <div class="bio-row">
                             <p><span>Job Type</span>:&nbsp;&nbsp;&nbsp; Company</p>
                         </div>
                         <div class="bio-row">
                             <p><span>Email </span>:&nbsp;&nbsp;&nbsp; mizanur@gmail.com</p>
                         </div>
                         <div class="bio-row">
                             <p><span>Phone </span>:&nbsp;&nbsp;&nbsp; +880 1732 955973</p>
                         </div>


                         <div class="bio-roa">
                             <p><span
                                     style="font-weight: 600;">Name</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                 &nbsp;&nbsp;Mizanur Rahaman</p>
                         </div>
                         <div class="bio-roa">
                             <p><span style="font-weight: 600;">Designation </span>:&nbsp;&nbsp;&nbsp;Network
                                 Engineer</p>
                         </div>
                         <div class="bio-roa">
                             <p><span
                                     style="font-weight: 600;">Workplace</span>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;Nazz
                                 ltd. Dhaka</p>
                         </div>
                         <div class="bio-roa">
                             <p><span style="font-weight: 600;">Job
                                     Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>:&nbsp;&nbsp;Company
                             </p>
                         </div>
                         <div class="bio-roa">
                             <p><span
                                     style="font-weight: 600;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>:&nbsp;mizanur@gmail.com
                             </p>
                         </div>
                         <div class="bio-roa">
                             <p><span style="font-weight: 600;">Phone
                                 </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +880 1732
                                 955973</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h3 class="red" style="color: seagreen;">Education</h3>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="red">Computer Science & Engineering</h4>
                                     <p>Daffodil International University</p>
                                     <p>MSc in Engineering (Study Level)</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques">Computer Science & Engineering</h4>
                                     <p>Daffodil International University</p>
                                     <p>BSc in Engineering</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques" style="color: seagreen;">Science</h4>
                                     <p>Dhaka College</p>
                                     <p>HSC</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!--Guardian-->
                     <div class="col-md-12">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h3 class="green">Guardian</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="red">Father</h4>
                                     <p>Not Found</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques">Mother</h4>
                                     <p>Not Found</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--Guardian End-->

                     <!-- Address -->
                     <div class="col-md-12">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h3 class="purple">Address</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="green">Present Address</h4>
                                     <p>Mirpur-2, Dhaka</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques">Permanent Address</h4>
                                     <p>Kenduly, Amdai, Joypuhat</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Address End -->

                     <!--Others-->
                     <div class="col-md-12">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h3 class="green">Others</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="red">Religion</h4>
                                     <p>Islam</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques">Gander</h4>
                                     <p>Male</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="red">Date Of Birth</h4>
                                     <p>01/01/1998</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="red" style="color: seagreen;">Blood Group</h4>
                                     <p>A+ve</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="panel">
                             <div class="panel-body">
                                 <div class="bio-desk">
                                     <h4 class="terques"style="color: orange;">NID</h4>
                                     <p>8128542242</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--othersEnd-->
                 </div>
             </div>
         </div>
     </div>
 </div>


    
   <!--footer-->
   @include('layouts.frontend.footer')
    <!--footer-->

   <!--script-->
   @include('layouts.frontend.script')
    <!--script-->