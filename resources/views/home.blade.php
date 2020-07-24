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
                    <img src="{{asset('storage/uploads/pubs/'.$slide_m->image)}}"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
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
            <a href="{{$new_line->link}}">
            <div class="product">
              <div class="like-bnr" id="slide_bann_1" targ = "{{asset('storage/uploads/pubs/'.$new_line->image)}}">
                <div class="position-center-center">
                  <h5>{{ $new_line ? $new_line->text1 : ''}}</h5>
                  <h4><?php //$new_line ? $new_line->libelle : ''  ?></h4>
                  <span class="price">{{$new_line ? $new_line->text4 : ''}}</span> </div>
              </div>
            </div>
            </a>
            <!-- Weekly Slaes  -->
            <a href="{{$weekly->link}}">
              <div class="week-sale-bnr" id="slide_bann_2" targ = "{{asset('storage/uploads/pubs/'.$weekly->image)}}">
                <h4>{{$weekly ? $weekly->text4 : ''}} </h4>
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
            <a href="{{url(route('livraison-remboursement'))}}">
              <div class="media-left"> <i class="fa fa-truck"></i> </div>
              <div class="media-body">
                <h5>Livraison gratuite</h5>
                <span>Sur toutes les commandes de Grand Libreville</span>
              </div>
            </a>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="fa fa-exchange"></i> </div>
            <div class="media-body">
              <h5>Garantie</h5>
              <span>Bénéficiez d'une garantie allant de 3 à 6 mois</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="fa fa-user-circle-o "></i> </div>
            <div class="media-body">
              <h5>Support 24/7</h5>
              <span>(+241) 74 98 03 03</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="fa fa-credit-card-alt"></i> </div>
            <div class="media-body">
              <h5>Paiement securisé</h5>
              <span>Paiement en ligne securisé ou à la livraison</span></div>
          </li>
        </ul>
      </div>
    </section>



    @if($promos->count()>0)
     <!-- tab Section -->
     <section class="featur-tabs padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
        </ul>

           
        <!-- heading -->
        <div class="heading">
          <h2><a href="{{ url('/promotions') }}">Promotions</a></h2>
          <hr>
        </div>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 

               @foreach($promos as $p)            
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
                        <a href="" class="cart-btn" dataid="{{time().'-'.$p->id.'-'.$p->slug}}">
                          <i class="fa fa-shopping-cart" dataid="{{time().'-'.$p->id.'-'.$p->slug}}"></i>
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
                            <a href="" class="cart-btn" dataid="{{time().'-'.$sousp->id.'-'.$sousp->slug}}">
                              <i class="fa fa-shopping-cart" dataid="{{time().'-'.$sousp->id.'-'.$sousp->slug}}"></i>
                            </a> 
                          </article>
                        </div>
                      @endforeach

                    @endif
              @endforeach
              
            </div>
          </div>
          
        </div>
      </div>
    </section>

    @endif




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
              <?php $tabProduit = []; ?>
               @foreach($recently_added as $p)
               <?php if (in_array($p->id, $tabProduit) == false) { $tabProduit[]=$p->id;?>  
                      
              <div class="product">
                <article> 
                  <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}">
                    <?php 
                         //dump("Taill=".sizeof($tabProduit)." T/F= ".in_array($p->id, $tabProduit));
                        //dump($p->images);
                          $tmpimg = $p->images;
                          //dd($tmpimg);
                          //dd($tmpimg->first());
                          $imgFirst = $tmpimg->first();
                         // dd($imgFirst);
                          
                           ?>              
                    <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$imgFirst['nom'] )) !!}" alt="" >
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
                  <a href="" class="cart-btn" dataid="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                    <i class="fa fa-shopping-cart"  dataid="{{time().'-'.$p->id.'-'.$p->slug}}"></i>
                  </a> 
                </article>
              </div>

            <?php } ?>
              @endforeach
              
            </div>
          </div>
          
        </div>
      </div>
    </section>





     <!-- Main Tabs Sec -->
     <section class="main-tabs-sec padding-top-60 padding-bottom-0">
      <div class="container">
        <ul class="nav margin-bottom-40" role="tablist">
          @foreach($cats_to_display as $cat)
            @if($cat['cat'] != null)
            <li role="presentation" class="{{$cat['active']}}"><a href="#{{$cat['tabid']}}" aria-controls="special" role="tab" data-toggle="tab"><i class="fa {{$cat['icon-class']}}"></i>{{$cat['cat']->nom}} <span>@if(is_array($cat['products'])) {{count($cat['products'])}} @else {{ $cat['products']->count() }} @endif article(s)</span></a></li>
            @else
            <li role="presentation" class="{{$cat['active']}}"><a href="#{{$cat['tabid']}}" aria-controls="special" role="tab" data-toggle="tab"><i class="fa {{$cat['icon-class']}}"></i>{{$cat['default_name']}} <span>0 article(s)</span></a></li>
            @endif
          @endforeach
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- TV & Audios -->
          @foreach($cats_to_display as $cat)
          <div role="tabpanel" class="tab-pane {{$cat['active']}} fade in" id="{{$cat['tabid']}}"> 
            @if(isset($cat['first']))
            <div class="item-slide-5 with-bullet no-nav"> 
            @else
            <div class="item-col-5"> 
            @endif


            @foreach($cat['products'] as $p)
            <!-- Items -->
            <?php 
           // dd($p->toArray());
           //$a = $p->toArray();
                   // $pr = new App\Produit($a);
                          $tmpimg = $p->images;
                          $imgFirst = $tmpimg->first();
                          //dd($tmpimg);
                          //$imgFirst = $tmpimg[0];
                      ?> 
              <!-- Product -->
              <div class="product">
                <article> 
                  <a href="{{ url('/store/afficher/'.time().'-'.$p->id.'-'.$p->slug) }}">
                                
                    <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$imgFirst['nom'] )) !!}" alt="" >
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
                  <?php $cate = $p->_categorie; //dd($p); ?>
                  <span class="tag">{{$cate->nom}}</span> 
                  <a href="#." class="tittle">{{$p->nom}}</a> 
                  <!-- Reviews -->
                  <p class="rev">
                  <span class="badge badge-primary" style="background:#F44336">{{$p->getDevise()}}  {{number_format($p->getFinalPrice(),1,',',' ')}}</span> 
                  </p>
                  <!--  -->
                  <div class="price">{{$p->shop_['nom']}} @if($p->isPromo())  <span>{{$p->getDevise()}}  {{number_format($p->getNonPromoPrice(),1,',',' ')}}</span>  @endif  </div>
                  <a href="" class="cart-btn" dataid="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                    <i class="fa fa-shopping-cart" dataid="{{time().'-'.$p->id.'-'.$p->slug}}"></i>
                  </a> 
                </article>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach

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
                      <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$p->images->first()['nom'] )) !!}" alt="" >                       
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
                      <a href="" class="cart-btn" dataid="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                        <i class="fa fa-shopping-cart"  dataid="{{time().'-'.$p->id.'-'.$p->slug}}"></i>
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

              //$rub = new Rubrique((array) $r);
                    
              $lead = $r->leadproduit();
              $ilead = $lead != null ? $lead->id : -1;
              ?>
              <!-- Product -->
              
              @if($ilead > -1)
              
              <a href="#.">
                <div class="product col-2x">
                  <div class="like-bnr" id="bnrLead" image="{!!  file_exists('assets/img/articles/'.$r->leadproduit()->image)  ? asset('assets/img/articles/'.$r->leadproduit()->image) :  (  file_exists(url('storage').'/'.$r->leadproduit()->nom) ? url('storage').'/'.$r->leadproduit()->nom : asset('storage/'.$r->leadproduit()->images->first()['nom'] )) !!}">
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
                
                <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$p->image)  ? asset('assets/img/articles/'.$p->image) :  (  file_exists(url('storage').'/'.$p->nom) ? url('storage').'/'.$p->nom : asset('storage/'.$p->images->first()['nom'] )) !!}" alt="" > 
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
                  <a href="" class="cart-btn" dataid="{{time().'-'.$p->id.'-'.$p->slug}}" style="">
                  <i class="fa fa-shopping-cart" dataid="{{time().'-'.$p->id.'-'.$p->slug}}"></i>
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
    <section class="padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2> <a href="{{url('/nouveautes')}}">Nouveautés</a> </h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav"> 
          <!-- Blog Post -->
          @foreach($nouveautes as $n)
          <div class="blog-post">
            <article> 
              @if($n->post_image != NULL)
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}">
                <img class="img-responsive" src="{{asset('storage/uploads/articles/'.$n->post_image)}}" alt="" > 
              </a>
              @endif
              <span>
                <i class="fa fa-bookmark-o"></i> 
                <?php $d = new DateTime($n->publication_date); ?>
                <span> {{ "Publié le ".strftime('%d %B %Y',$d->getTimestamp()) }} </span>
                
              </span> 
              <!-- <span><i class="fa fa-comment-o"></i> 86 Comments</span>  -->
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}" class="tittle">{{$n->post_title}} </a>
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}">Voir plus...</a> 
            </article>
          </div>
          @endforeach
          
        </div>
      </div>
    </section>



     
     @if($actualites->count())
     <section class="padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Actualités</h2>
          <hr>
        </div>
        <div id="blog-slide-2" class="with-nav"> 
          <!-- Blog Post -->
                   
          @foreach($actualites as $n)
          <div class="blog-post">
            <article> 
              @if($n->post_image != NULL)
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}">
                <img class="img-responsive" src="{{asset('storage/uploads/articles/'.$n->post_image)}}" alt="" > 
              </a>
              @endif
              <span>
                <i class="fa fa-bookmark-o"></i> 
                <?php $d = new DateTime($n->publication_date); ?>
                <span> {{ "Publié le ".strftime('%d %B %Y',$d->getTimestamp()) }} </span>
                
              </span> 
              <!-- <span><i class="fa fa-comment-o"></i> 86 Comments</span>  -->
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}" class="tittle">{{$n->post_title}} </a>
              <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}">Voir plus...</a> 
            </article>
          </div>
          @endforeach
          
        </div>
      </div>
    </section>
    @endif
    
   
  
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
    

  });

</script>

@endsection