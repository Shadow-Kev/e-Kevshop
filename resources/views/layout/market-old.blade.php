<!doctype html>
<html class="no-js" lang="en">
<head>
@include('layout._market-head')
<!-- JavaScripts -->
<!-- <script src="js/vendors/modernizr.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> 

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<title>KADMARKET,Numéro 1 de la vente des téléphones Portables au Gabon</title>
	@yield('css')
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
  @include('layout._market-partenaire')
  <!-- Footer -->
 @include('layout._market-footer')
  
  @include('layout._market-endpage')
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <a href=" http://m.me/kadmarket" target="_blank" style="z-index:2500;right:55px; opacity: 1;border: none;position:fixed; bottom : 10px; width:40px;"><img src="{{asset('assets/img/facebook.png')}}" alt="" style="width:40px;"></a> 
  <a href="https://wa.me/24174980303"  target="_blank" style="z-index:2500;right:100px; opacity: 1;border: none;position:fixed; bottom : 10px; width:40px;"><img src="{{asset('assets/img/whatsapp.png')}}" alt="" style="width:40px;"></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 


@include('layout._market-modals')
@include('layout._market-js')

@yield('js')
</body>
</html>