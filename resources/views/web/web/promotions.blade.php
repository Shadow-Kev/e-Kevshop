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
    
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Side Bar -->
          <div class="col-md-3 hidden-sm hidden-xs">
          @include('layout._market-sidebar')
          </div>
          
          <!-- Products -->
          <div class="col-md-9"> 
            
            <!-- Short List -->
            <div class="short-lst">
            <h2> {{ $page }} {{isset($catToDisplay) ? ' / '.$catToDisplay->nom : (isset($storeToDisplay) ? ' / '.$storeToDisplay->nom :( isset($marqueToDisplay) ?  ' / '.$marqueToDisplay->title  : '') ) }}</h2>
              <ul>
                <!-- Short List -->
                <!-- <li>
                 
                </li> -->
              </ul>
            </div>
            
            <!-- Items -->
            <div class="item-col-3"> 
              <!-- Product -->
                @foreach($promotions as $p)
                
                  @if($p->produit)
                  <?php $p = $p->_produit; ?>

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

                      <span><a target='_blank' href="{{$p->lien_details_constructeur ? $p->lien_details_constructeur : '#'}}">Voir plus</a></span>
                        
                        </p>
                        
                        <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{number_format($p->getShopPrice(),1,',',' ')}}</span>  @endif  </div>
                        <a href="#" class="cart-btn" i="{{time().'-'.$p->id.'-'.$p->slug}}">
                          <i class="fa fa-shopping-cart"></i>
                        </a> 
                      </article>
                    </div>
                    @elseif($p->categorie)
                      @foreach($p_categorie->produits as $sousp)
                        <div class="product">
                          <article> 
                            <a href="{{ url('/store/afficher/'.time().'-'.$sousp->id.'-'.$sousp->slug) }}">
                              <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$sousp->image)  ? asset('assets/img/articles/'.$sousp->image) :  (  file_exists(url('storage').'/'.$sousp->nom) ? url('storage').'/'.$sousp->nom : asset('storage/'.$sousp->images->first()->nom )) !!}" alt="" >
                            </a>
                            <?php 
                              $d1=new DateTime($sousp->created_at);
                              $d2=new DateTime();
                              $diff=$d2->diff($d1);
                            ?>
                            @if($diff->d <= 7)
                            <span class="new-tag">New</span> 
                            @endif

                            <!-- Content --> 
                            <span class="tag">{{$sousp->_categorie->nom}}</span> 
                            <a href="#." class="tittle">{{$sousp->nom}}</a> 
                            <!-- Reviews -->
                            <p class="rev">
                        <span class="badge badge-primary" style="background:#F44336">{{$sousp->getDevise()}}  {{number_format($sousp->getFinalPrice(),1,',',' ')}} </span> 

                          <span><a target='_blank' href="{{$sousp->lien_details_constructeur ? $sousp->lien_details_constructeur : '#'}}">Voir plus</a></span>
                            
                            </p>
                            
                            <div class="price">{{$sousp->shop_['nom']}} @if($sousp->isPromo())  <span>{{number_format($sousp->getShopPrice(),1,',',' ')}}</span>  @endif  </div>
                            <a href="#" class="cart-btn" i="{{time().'-'.$sousp->id.'-'.$sousp->slug}}">
                              <i class="fa fa-shopping-cart"></i>
                            </a> 
                          </article>
                        </div>
                      @endforeach

                    @endif
            @endforeach
            </div>
            <div class="col-sm-12 text-center">
               
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
                      
                      <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getNonPromoPrice()}}</span>  @endif  </div>
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