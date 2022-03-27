<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend.header')
</head>

<body>

    <!--navber-->
         @include('layouts.frontend.navber')
    <!--navber-->

         @yield('content')

     <!--Footer-->
         @include('layouts.frontend.footer')
    <!--Footer-->
   
</body>

</html>
  
