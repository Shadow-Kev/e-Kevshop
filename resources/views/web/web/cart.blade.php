@extends('layout.market')

@section('content')

<div id="wrap"> 
  
  <!-- Content -->
  <div id="content"> 
    
  @include('layout._market-shipsteps')
    
    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Articles</th>
              <th class="text-center">Prix</th>
              <th class="text-center">Quantité</th>
              <th class="text-center">Prix Total </th>
              <th>&nbsp; </th>
            </tr>
          </thead>
          <tbody>success
            @foreach($listepanier as $p)
            <!-- Item Cart -->
            <?php $prod = $p->produit; ?>
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href="{{url('/store/afficher/'.time().'-'.$prod->id.'-'.$prod->slug)}}."> <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$prod->image)  ? asset('assets/img/articles/'.$prod->image) :  (  file_exists(url('storage').'/'.$prod->nom) ? url('storage').'/'.$prod->nom : asset('storage/'.$prod->images->first()->nom )) !!}" alt="" > </a> </div>
                  <div class="media-body">
                    <p>{{$prod->nom}} </p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60">{{number_format($prod->getFinalPrice(),2)}}</td>
              <td class="text-center"><!-- Quinty -->
                <div class="row">
                    <div class="quinty padding-top-20 col-sm-9" style="width:auto;">
                        <input type="text" disabled='true' value="{{$p->quantite_produit}}" name="quantiteproduit-{{$p->produit_id}}">
                    </div>
                    <div class="col-sm-3">
                        <a class="btn-round btn-success  text-white text-center" style="background-color: dodgerblue;color: white;font-size: 14px;border-radius: 4px; padding: 5px 10px;">+</a>
                        <a class="btn-round  bg-danger text-white text-center" style="font-size: 14px;border-radius: 4px; padding: 5px 10px;">-</a>
                    </div>
                </div>
              </td>
              <td class="text-center padding-top-60">{{ number_format($prod->getFinalPrice() * $p->quantite_produit,2) }}</td>
              <td class="text-center padding-top-60"><a href="{{url('/removeFromCart')}}" class="remove"><i class="fa fa-close"></i></a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
        
        <!-- Promotion -->
        <div class="promo">
          <div class="coupen">
            
          </div>
          
          <!-- Grand total -->
          <div class="g-totel">
            <h5>Grand total: <span id="total">{{ number_format($mnt_total,2)}}</span></h5>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn"> <a href="{{url(route('store'))}}" class="btn-round btn-light">Retour a la boutique </a>
        <a href="{{url(route('paymentMethods'))}}" class="btn-round">Choisir un moyen de payement</a> </div>
      </div>
    </section>
   
  </div>
  <!-- End Content --> 
  
</div>


@endsection

@section('js')

<script>
jQuery(document).ready(function($) {

    $("[name^='quantiteproduit-']").change(function(e){
        e.preventDefault();
        e.stopPropagation();
        var getid= $(e.target).attr('name');
        var myvalue = '';
        if(getid){
            myvalue = getid.split('-')[1];
        }
        $.ajax({

            url : "{{url('/updateqte')}}/"+myvalue+'/'+e.target.value,
            type : 'GET',
            success : function(data){
                console.log(data);
                if(data.r){
                    window.location.href = "{{url(route('monPanier'))}}";
                }
            }
        })
    })

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