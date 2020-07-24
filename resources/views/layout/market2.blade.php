<!doctype html>
<html class="no-js" lang="en">
<head>
@include('layout._market-head')
<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap" class="layout-3 red"> 
  
  <!-- Top bar -->
  @include('layout._market-topbar')
  
  <!-- Header -->
  @include('layout._market-navbar')
  

    @yield('content')
  <!-- End Content --> 
  
  <!-- Footer -->
 @include('layout._market-footer')
  
  @include('layout._market-endpage')
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 


@include('layout._market-js')

@yield('js')
</body>
</html>