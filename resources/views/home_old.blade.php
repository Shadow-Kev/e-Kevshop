@extends('layout.market')

@section('content')
  <!-- Slid Sec -->
 <section class="slid-sec">
    <div class="container">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- Main Slider  -->
          <div class="col-md-9 no-padding"> 
            
            <!-- Main Slider Start -->
            <div class="tp-banner-container">
              <div class="tp-banner">
                <ul>
                  
                  <!-- SLIDE  -->

                  <?php  
                  //dd($main_slides)
                  ?>

                  @foreach($main_slides as $slide_m)
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    <!-- MAIN IMAGE --> 
                    <img src="{{asset('storage/storage/pubs/'.$slide_m->image)}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">{{$slide_m->text1}} </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                      style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;"> 
                                      <?php // $slide_m->libelle ?>
                                      </div> 
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="10" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">{{$slide_m->text3}} </div>
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="210" 
                                     data-y="center" data-voffset="5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">{{$slide_m->text4}} </div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;">
                                     <!-- <a href="#." class="btn-round big">Shop Now</a> --> 
                      </div>
                  </li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Main Slider  -->
          <div class="col-md-3 no-padding"> 
            
            <!-- New line required  -->
            <a href="">
            <div class="product">
              <div class="like-bnr" id="slide_bann_1" targ = "{{asset('storage/storage/pubs/'.$new_line->image)}}">
                <div class="position-center-center">
                  <h5>{{ $new_line ? $new_line->text1 : ''}}</h5>
                  <h4><?php //$new_line ? $new_line->libelle : ''  ?></h4>
                  <span class="price">{{$new_line ? $new_line->text4 : ''}}</span> </div>
              </div>
            </div>
            </a>
            <!-- Weekly Slaes  -->
            <a href="#.">
              <div class="week-sale-bnr" id="slide_bann_2" targ = "{{asset('storage/storage/pubs/'.$weekly->image)}}">
                <h4>{{$weekly ? $weekly->libelle : ''}} </h4>
                <p>{{$weekly ? $weekly->text1 : ' '}}</p>
              </div>
            </a> 
              
              
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Shipping Info -->
    <section class="shipping-info">
      <div class="container">
        <ul>
          
          <!-- Free Shipping -->
          <li>
            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
            <div class="media-body">
              <h5>Free Shipping</h5>
              <span>On order over $99</span></div>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
            <div class="media-body">
              <h5>Money Return</h5>
              <span>30 Days money return</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="flaticon-operator"></i> </div>
            <div class="media-body">
              <h5>Support 24/7</h5>
              <span>Hotline: (+100) 123 456 7890</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body">
              <h5>Safe Payment</h5>
              <span>Protect online payment</span></div>
          </li>
        </ul>
      </div>
    </section>

    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
          <!-- <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li> -->
          <!-- <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">Special</a></li>
          <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a></li> -->
        </ul>

           
        <!-- heading -->
        <div class="heading">
          <h2>Articles récents</h2>
          <hr>
        </div>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 

               @foreach($recently_added as $p)            
              <?php dd($p->images); ?>
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
                  <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getDevise()}}  {{number_format($p->getNonPromoPrice(),1,',',' ')}}</span>  @endif  </div>
                  <a href="#" class="cart-btn" i="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                    <i class="icon-basket-loaded"></i>
                  </a> 
                </article>
              </div>
              @endforeach
              
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
      <?php  //"SLIDE"=>"Bloc Slide horizontal",  "BLOC_LEAD"=>"Bloc avec lead",    "PUB"=>"Bloc banniere publicitaire"  ?>

      @foreach($rubriques as $r)
          

        @if($r->type_affichage == 'SLIDE' )
        <section class="featur-tabs padding-top-60 padding-bottom-60">
          <div class="container"> 
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
              <!-- <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li> -->
              <!-- <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">Special</a></li>
              <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a></li> -->
            </ul>

              
            <!-- heading -->
            <div class="heading">
              <h2>{{$r->titre}}</h2>
              <hr>
            </div>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- Featured -->
              <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav"> 

                  @foreach($r->produits as $p)            

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
                      
                      <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getDevise()}}  {{number_format($p->getNonPromoPrice(),1,',',' ')}}</span>  @endif  </div>
                      <a href="#" class="cart-btn" i="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                        <i class="icon-basket-loaded"></i>
                      </a> 
                    </article>
                  </div>
                  @endforeach
                  
                </div>
              </div>
              
            </div>
          </div>
        </section>
        
        @elseif($r->type_affichage == 'BLOC_LEAD')

        <section class="light-gry-bg padding-top-60 padding-bottom-30">
          <div class="container"> 
            
            <!-- heading -->
            <div class="heading">
              <h2>{{$r->titre}}</h2>
              <hr>
            </div>
            
            <!-- Items -->
            <div class="item-col-5"> 
            <?php 
                    
              $lead = $r->leadproduit();
              $ilead = $lead != null ? $lead->id : -1;
              ?>
              <!-- Product -->
              
              @if($r->leadproduit())
              
              <a href="#.">
                <div class="product col-2x">
                  <div class="like-bnr" id="bnrLead" image="{!!  file_exists('assets/img/articles/'.$r->leadproduit()->image)  ? asset('assets/img/articles/'.$r->leadproduit()->image) :  (  file_exists(url('storage').'/'.$r->leadproduit()->nom) ? url('storage').'/'.$r->leadproduit()->nom : asset('storage/'.$p->leadproduit()->images->first()->nom )) !!}">
                    <div class="position-center-center">
                      <!-- <h5>{{$r->leadproduit()->nom}}</h5>
                      <h5>{{$r->leadproduit()->image}}</h5>
                      <p>{{$r->leadproduit()->description}}</p> -->
                    </div>
                  </div>
                </div>
              </a> 
              @endif


              @foreach($r->produits as $p)
              
              <!-- Product -->
              
              <div class="product">
                <article> 
                <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}">
                <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$p->images->first()->nom )) !!}" alt="" > 
                </a>
                  @if($p->isNewProduct())
                  <span class="new-tag">Nouveau</span> 
                  @endif
                  <!-- Content --> 
                  <span class="tag">{{$p->_categorie->nom}}</span> 
                  <a href="#." class="tittle">{{ $p->nom}}</a> 
                  <!-- Reviews -->
                  <p class="rev">
                    <span class="badge badge-primary" style="background:#F44336">{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}}</span> 
                  </p>

                  <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getDevise()}}  {{number_format($p->getNonPromoPrice(),1,',',' ')}}</span>  @endif  </div>
                  <a href="#" class="cart-btn" i="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                  <i class="icon-basket-loaded"></i>
                  </a> 
                  </article>
              </div>
              
            @endforeach
            </div>
          </div>
        </section>

        @endif


      @endforeach



    <!-- Top Selling Week -->
   
    
   

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="assets/images/c-img-1.png" alt="" ></li>
          <li><img src="assets/images/c-img-2.png" alt="" ></li>
          <li><img src="assets/images/c-img-3.png" alt="" ></li>
          <li><img src="assets/images/c-img-4.png" alt="" ></li>
          <li><img src="assets/images/c-img-5.png" alt="" ></li>
        </ul>
      </div>
    </section>
    
@endsection
@section('js')
<script>
 $(document).ready(function(e){
    var imageUrl = $('#slide_bann_1').attr('targ'); 
    if(imageUrl){
      $("#slide_bann_1").css("background-image", "url(" + imageUrl + ")"); 
    }

    imageUrl = $('#slide_bann_2').attr('targ'); 
    if(imageUrl){
      $("#slide_bann_2").css("background-image", "url(" + imageUrl + ")"); 
    }
    
    if($('.like-bnr').length){
      $('.like-bnr').each((index, element) => {
      
        imageUrl = $(element).attr('image'); 
        if(imageUrl){
          $(element).css("background-image", "url(" + imageUrl + ")"); 
        }
        imageUrl = null;
      });
    }
    
    $(".cart-btn i").each((i, em)=>{
        $(em).click(function(e) {
            e.stopPropagation();
         // $(this).parent().click();
        });
    })

    if($(".cart-btn").length){
      $('.cart-btn').each( (index, el) => {
        $(el).on('click', function(e){
         // e.preventDefault();
        
          $.ajax({
            url : "{{url('/addToCart')}}/"+$(el).attr('i')+'/1',
            type : 'GET',
          success : function(data){
            console.log(data.r);
            if(data.r){
              $('#cartQuantity').html(data.q);
              $('#cartQuantity-badge').html(data.q);
              $('#cartTotal').html(data.m);
            }else{
              if(data['code'] == "12" || data['code'] == 12 ){
                //window.location.href = "{{url(route('webLogin'))}}";
              }
            }
          }
          })
        });
      });
    }
  });


</script>

@endsection