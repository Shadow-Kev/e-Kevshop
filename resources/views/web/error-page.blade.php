@extends('layout.market')


@section('content')

<div id="wrap"> 

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
        <li class="active">{{$page}}</li>
      </ol>
    </div>
  </div>

  <!-- Content -->
  <div id="content"> 
   <!-- Oder-success -->
   <section>
     <div class="container">
        <div class="order-success error-page"> 
            <img src="images/error-img.png" alt="" >
            <h3>
                Erreur 
                <span>404</span> 
                Non trouvé
            </h4>
            <p><h3 style="color:#777;">{{$message}}</h3></p>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 

  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>

@endsection

@section('css')
<style>
        section {
            position: relative;
            width: 100%;
            background: #f9f9f9;
        }
</style>
@endsection