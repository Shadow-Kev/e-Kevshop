<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>KADMARKET,Numéro 1 de la vente des téléphones Portables au Gabon</title>
		@include('partials.front._css')

</head>

	<body>
    

		@include('partials.front._header')


        <style>
           .info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}
        </style>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            	
<!-- ============================================== SIDEBAR ============================================== -->
		@include('partials.front._sidebar')

 
<!-- ============================================== SIDEBAR : END ============================================== -->  
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
              @yield('content')
		</div><!-- /.container -->
	</div><!-- /#top-banner-and-menu -->
    
</div>
</div>
	
<!-- ============================================================= FOOTER : END============================================================= -->
		@include('partials.front._footer')


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
		@include('partials.front._js')

	

</body>
</html>