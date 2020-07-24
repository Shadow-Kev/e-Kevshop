@extends('layout.market')


@section('content')

<div id="wrap"> 

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
        <li class="active">Retour de paiement</li>
      </ol>
    </div>
  </div>

  <!-- Content -->
  <div id="content"> 
   <!-- Oder-success -->
   <section>
      <div class="container"> 
        <!-- Payout Method -->
        {{dd($_GET)}}
        <div class="order-success"> <i class="fa fa-check" style="border: 2px solid green;
          color: green;"></i>
          <h6>Merci pour la confiance !!!</h6>
          <p>Votre paiement a été reçu avec succes </p>
          <a href="{{url('/store')}}" class="btn-round">Retour a la boutique</a> </div>
      </div>
    </section>
    
   
  </div>
  <!-- End Content --> 

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