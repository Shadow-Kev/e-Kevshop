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

          <div class="col-md-3">
          @include('layout._market-sidebar')
          </div>
          
          <!-- Products -->
          <div class="col-md-9">
            <div class="product-detail">
              <div class="product">
                <div class="row"> 
                  <!-- Slider Thumb -->
                  <div class="col-xs-5">
                    <article class="slider-item on-nav">
                      <div class="thumb-slider">
                        <ul class="slides">
                          <?php //dd($produit->images->count())  ?>
                          @if($produit->images->count())
                            @foreach($produit->images as $i)
                              <li data-thumb="{!! asset('storage/'.$i->nom ) !!}"> <img onclick="zoomImage(this)" src="{!! asset('storage/'.$i->nom ) !!}" alt="" > </li>
                            @endforeach
                          @else
                          
                            <li data-thumb="{!! file_exists('assets/img/articles/'.$produit->image)  ? asset('assets/img/articles/'.$produit->image) :  (  file_exists(url('storage').'/'.$produit->nom) ? url('storage').'/'.$produit->nom : '') !!}"> <img onclick="zoomImage(this)" src="{!!  file_exists('assets/img/articles/'.$produit->image)  ? asset('assets/img/articles/'.$produit->image) :  (  file_exists(url('storage').'/'.$produit->nom) ? url('storage').'/'.$produit->nom : '') !!}" alt="" > </li>
                          @endif
                        </ul>
                      </div>
                    </article>
                  </div>
                  <!-- Item Content -->
                  <div class="col-xs-7"> <span class="tags">{{$produit->_categorie->nom}}</span>
                    <h5>{{$produit->nom}}</h5>
                      <p class="rev">
                        <span class="badge badge-primary" style="background:#F44336">{{$produit->shop_['nom']}}</span> 
                      </p>
                    <div class="row">
                      <div class="col-sm-6"><span class="price">{{$produit->getDevise()}}  {{number_format($produit->getFinalPrice(),1,',',' ')}}</span></div>
                      <div class="col-sm-6">
                        <p>Disponibilité: @if($produit->enStock())<span class="in-stock">En stock</span></p>@else<span style="color:#d8263c">En rupture</span></p>@endif
                      </div>
                    </div>
                    <!-- List Details -->
                    <ul class="bullet-round-list">
                      @foreach($produit->caracteristiques as $c)
                       <li>{{$c->nom}} : {{$c->valeur}}</li>
                      @endforeach
                    </ul>
                   
                    <!-- Compare Wishlist -->
                    <ul class="cmp-list">
                      <li><a href="#."><i class="fa fa-heart"></i> Ajouter a mes favoris</a></li>
                      <li><a href="#."><i class="fa fa-envelope"></i> Partager</a></li>
                    </ul>
                    <!-- Quinty -->
                    <div class="quinty">
                      <input type="number" value="01">
                    </div>
                    <a href="#." class="btn-round">
                      <i class="fa fa-shopping-cart margin-right-5"></i> J'achète 
                    </a> 

                    @if($produit->lien_details_constructeur != null)
                     <span><a class="btn-round green" style="background: #fff205; color: black; border: 1px solid black;" target='_blank' href="{{$produit->lien_details_constructeur}}"><i class="fa fa-globe margin-right-5"></i>Voir plus</a></span>
                    @endif
                    </div>
                </div>
              </div>




              
              <!-- Details Tab Section-->
              <div class="item-tabs-sec"> 
                
                <!-- Nav tabs -->
                <ul class="nav" role="tablist">
                  <li role="presentation" class="active"><a href="#pro-detil"  role="tab" data-toggle="tab">Description</a></li>
                  <!-- <li role="presentation"><a href="#cus-rev"  role="tab" data-toggle="tab">Customer Reviews</a></li>
                  <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping & Payment</a></li> -->
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="pro-detil"> 
                    <!-- List Details -->
                    <ul class="bullet-round-list">
                      <li>{!! $produit->description !!} </li>
                    </ul>
                  </div>
                  <!-- <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
                  <div role="tabpanel" class="tab-pane fade" id="ship"></div> -->
                </div>
              </div>
            </div>
            
            <!-- Related Products -->
            <section class="padding-top-30 padding-bottom-0"> 
              <!-- heading -->
              <div class="heading">
                <h2> Produits similaires</h2>
                <hr>
              </div>
              <!-- Items Slider -->
              <div class="item-slide-4 with-nav"> 
              @foreach($lesautresproduits as $p)  
              <!-- Product -->
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
                  <span class="badge badge-primary" style="background:#F44336">{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}}</span> 
                      
                      </p>
                      
                      <div class="price">{{$p->shop_['nom']}}</div>
                      <a href="#." class="cart-btn">
                        <i class="fa fa-shopping-cart"></i>
                      </a> 
                    </article>
                  </div>
              @endforeach
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Your Recently Viewed Items -->
    <section class="padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Dernières publications</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-5 with-nav"> 
          
        
        @foreach($recently_added as $p)            

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
                
                  <span class="badge badge-primary" style="background:#F44336">{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}}</span> 
                  </p>
                  <!--  -->
                  <div class="price">{{$p->shop_['nom']}} </div>
                  <a href="#." class="cart-btn">
                    <i class="fa fa-shopping-cart"></i>
                  </a> 
                </article>
              </div>
              @endforeach
          
        </div>
      </div>
    </section>
    
<div class="zoom-box" id="zoombox"></div>
    
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
  });


  
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