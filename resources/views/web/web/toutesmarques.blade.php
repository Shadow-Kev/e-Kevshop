@extends('layout.market')


@section('content')

<div id="wrap"> 
  
  <div class="row">
      <div class="col-md-12" style="text-align:center;">

        @foreach($toutesMarques as $i => $c)
          <a href="{{ url('/toutes-marques?marque='.time().'-'.$c->id.'-'.uniqid()) }}"> <span style="{{(  $marqueToDisplay != null && $marqueToDisplay->id == $c->id) ? 'background:#ED1C24;' : '' }}" class="fsbadge badge lg">{{$c->title}}</span></a>
        @endforeach
      </div>
  </div>


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
    
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
      
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Side Bar -->
          <div class="col-md-3">
          @include('layout._market-sidebar')
          </div>
          
          <!-- Products -->
          <div class="col-md-9"> 
            
            <!-- Short List -->
            <div class="short-lst">
            <h2> {{ $page }}{{isset($search) ? ' / '.$search :  '' }}</h2>
              <ul>
                <!-- Short List -->
                <li>
                  <p>{{$produits->firstItem()}}–{{$produits->lastItem()}} sur {{$produits->total()}} articles</p>
                </li>
              
              </ul>
            </div>
            
            <!-- Items -->
            <div class="col-list"> 
              <!-- Product -->
                @foreach($produits as $p)
                <div class="product">
                <article>                   
                  <!-- Product img -->
                  <div class="media-left">
                    <div class="item-img"> 
                    <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}">
                        <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$p->images->first()->nom )) !!}" alt="" >
                      </a>    
                    </div>
                  </div> 
                               
                  <!-- Content -->
                  <div class="media-body">
                    <div class="row">                       
                      <!-- Content Left -->
                      <div class="col-sm-7"> 
                      <?php 
                        $d1=new DateTime($p->created_at);
                        $d2=new DateTime();
                        $diff=$d2->diff($d1);
                      ?>
                      @if($diff->d <= 7)
                      <span class="new-tag">New</span> 
                      @endif
                      
                        <span class="tag">{{$p->_categorie->nom}}</span> 
                        <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}" class="tittle">{{$p->nom}}</a> 
                        <!-- Reviews -->

                        <ul class="bullet-round-list">
                          @foreach($p->caracteristiques as $c)
                          <li>{{$c->nom}} : {{$c->valeur}}</li>
                          @endforeach
                        </ul>
                      </div>                      
                      <!-- Content Right -->
                      <div class="col-sm-5 text-center">                         
                        <div class="position-center-center">
                        <span class="badge badge-primary custom-font-size" >{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}} </span> 
                        <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getShopPrice()}}</span>  @endif  </div>
                          <p>
                            Disponibilité: @if($p->enStock()) <span class="in-stock">En stock</span>  @else<span style="color:#d8263c">En rupture</span>@endif
                          </p>
                          <a href="#" class="btn-round" i="{{time().'-'.$p->id.'-'.$p->slug}}" style="padding:5px 10px;">
                            <i class="fa fa-shopping-cart"> </i>
                          </a> 
                      </div>
                    </div>
                  </div>
                </article>
              </div>

            @endforeach
            </div>
            <div class="col-sm-12 text-center">
                {{$produits->links('layout._market-links',compact('produits'))}}
            </div>
              <!-- pagination -->
          </div>
        </div>
      </div>
    </section>

    <!-- Your Recently Viewed Items -->
    <section class="padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Les plus visités</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-5 with-nav"> 
          <!-- Product -->
           <!-- Product -->
            @foreach($lesplusvisites as $p)
                <div class="product">
                    <article> 
                    <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}">
                      <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$p->images->first()->nom )) !!}" alt="" >                       
                      </a>
                      <?php 
                        $d1=new DateTime($p->created_at);
                        $d2=new DateTime();
                        $diff=$d2->diff($d1);
                      ?>
                      @if($diff->d <= 7)
                      <span class="new-tag">New</span> 
                      @endif

                      <!-- Content --> 
                      <span class="tag">{{$p->_categorie->nom}}</span> 
                      <a href="#." class="tittle">{{$p->nom}}</a> 
                      <!-- Reviews -->
                      <p class="rev">
                  <span class="badge badge-primary" style="background:#F44336">{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}} </span> 
                      
                      </p>
                      
                      <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{number_format($p->getShopPrice(),1,',',' ')}}</span>  @endif  </div>
                      <a href="#" class="cart-btn" i="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                        <i class="fa fa-shopping-cart"></i>
                      </a> 
                    </article>
                  </div>
            @endforeach
        </div>
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

  $(".cart-btn i").click(function(e) {
        e.stopPropagation();
        $(this).parent().click();
   });

   $('.cart-btn').on('click', function(e){
    e.preventDefault();
     $.ajax({
       url : "{{url('/api/addToCart')}}/"+$(e.target).attr('i')+'/1',
       type : 'POST',
      success : function(data){
        console.log(data);
        return;
        if(data.r){
          $('#cartQuantity').val(data.q);
          $('#cartTotal').val(data.m);
        }else{
          if(data['code'] == "12" || data['code'] == 12 ){
            window.location.href = "{{url(route('webLogin'))}}";
          }
        }
      }
     });
    });


  // $('.cart-btn').on('click', function(e){
    
  //   e.preventDefault();
  //    $.ajax({
  //      url : {{url('/api/addToCart/')}}+e.target.attr('i')+'/1',
  //      type : 'POST',
  //     success : function(data){
  //       console.log(data);
  //       if(data.r){
  //         $('#cartQuantity').val(data.q);
  //         $('#cartTotal').val(data.m);
  //       }
        
  //     }
  //    })
  // });
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
  });

  
});

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