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
        <!-- Payout Method -->
        @if($isMail == false)
          <div class="order-success col-md-4 col-offset-md-4"> <i class="fa fa-check"></i>
              <h6>Veuillez saisir le code recu par SMS</h6>
              <form action="{{url(route('activate-account',$username,$token))}}">
                  <input type="text" name="a_code" placeholder="Code" >
              </form>
              <a href="{{url('/store')}}" class="btn-round">Retour a la boutique</a>
          </div>
        @else
        <div class="order-success"> 
          <i class="fa fa-check" style="color : green; border-color:green; margin-top:50px; "></i>
          <h6>{{ $message_title}}</h6>
          <p>{{$message}}</p>
          <a href="{{url('/store')}}" class="btn-round">Retour a la boutique</a>
        </div>
      @endif
      </div>
    </section>
    
   
  </div>
  <!-- End Content --> 
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>


@endsection

@section('js')

<script>
jQuery(document).ready(function($) {
  
  //  Price Filter ( noUiSlider Plugin)
    $("#price-range").noUiSlider({
    range: {
      'min': [ {{$minprice}} ],
      'max': [ {{$maxprice}} ]
    },
    start: [0, {{$maxprice}}],
        connect:true,
        serialization:{
            lower: [
        $.Link({
          target: $("#price-min")
        })
      ],
      upper: [
        $.Link({
          target: $("#price-max")
        })
      ],
      format: {
      // Set formatting
        decimals: 2,
        prefix: "{{'XAF'}}"
      }
        }
  })
})

</script>

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