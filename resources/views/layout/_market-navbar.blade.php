  <!-- Header -->
  <header class="header-style-3">
    <div class="container">
      <div class="logo"> <a href="{{url('/')}}"><img src="{{asset('assets/img/Logo-Kadmarket.png')}}" width="130px;" alt="" ></a> </div>
      <div class="search-cate">
      <form action="{{url('/search')}}" method="POST">
          {{csrf_field()}}
          <select class="" name="category" style="border: none;">
            <!--<select class="selectpicker" name="category">-->

            <option> Toutes les categories</option>
            @foreach($allcats as $c)
              <option value="{{$c->id}}"> {{$c->nom}} </option>
            @endforeach
          </select>
          <input type="search" name="search" placeholder="Rechercher sur tout le site..." >
          <button class="submit" type="submit"><i class="fa fa-search"></i></button>
        </form>  
      </div>

    <!-- Cart Part -->
      <ul class="nav navbar-right cart-pop">
        <li class="dropdown">
          <a href="{{ url(route('monPanier')) }}" class="dropdown-toggle" >
            <span class="itm-cont" id="cartQuantity-badge" style="left: 100px;">{{$infosPanier['qteTotal']}}</span>
            <i class="fa fa-shopping-bag"></i> <strong>Mon Panier</strong> <br>
            <span> <span id="cartQuantity"> {{$infosPanier['qteTotal']}} </span> articles(s) - XAF <span id="cartTotal">{{$infosPanier['mnt_total']}}</span></span>
          </a>
          @if(!Auth::check())
          <ul class="dropdown-menu" style="min-height:auto;">
            <li class="btn-cart"> <a href="{{url(route('webLogin'))}}" class="btn-round">Connexion</a> </li>
          </ul>
          @endif
        </li>
      </ul>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container"> 
        
        <!-- Categories -->
        <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Categories </a>
          <div class="cate-bar-in">
            <div id="cater" class="collapse">
              <ul>
                @foreach($menucats as $c)
                  <li><a href="{{url('/store/'.time().'-'.$c->id.'-'.$c->slug)}}"> {{$c->nom }}</a></li>
                @endforeach
                </ul>
            </div>
          </div>
        </div>
        
        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li class="{{ (isset($page) && $page == 'Accueil') ? 'active' : '' }}"> <a href="{{url('/')}}">Accueil </a></li>
            <li class="dropdown megamenu {{ (isset($page) && $page == 'Boutique') ? 'active' : '' }}"> 
              <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Boutique </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf">
                <div class="mega-inside">
                  <div class="top-lins">
                    <ul>
                      <li><a href="{{url('/toutes-marques')}}"> Toutes les marques </a></li>
                      <li><a href="{{ url('/oraimo') }}"> Oraimo </a></li>
                      <li><a href="{{ url('/nouveautes') }}"> Nouveautés </a></li>
                      <li><a href="{{ url('/promotions') }}"> Promotions </a></li>
                      <li><a href="{{url('/store')}}"> Tous les produits </a></li>
                     
                    </ul>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <h6>Smartphones</h6>
                      <ul>
                       @foreach($marques_phones as $m)
                        <li><a href="{{url('/store?smartphones=&marque='.time().'-'.$m->id.'-'.str_slug($m->slug))}}"> {{ ucfirst(strtolower($m->title))}} </a></li>
                       @endforeach
                      </ul>
                    </div>
                    <div class="col-sm-2">
                      <h6>Feature phones </h6>
                      <ul>
                        @foreach($marques_feature_phones as $m)
                        <li><a href="{{url('/store?feature=&marque='.time().'-'.$m->id.'-'.str_slug($m->slug))}}"> {{ ucfirst(strtolower($m->title))}} </a></li>
                       @endforeach
                      </ul>
                    </div>

                    <div class="col-sm-2">
                      <h6>Tablettes</h6>
                      <ul>
                        @foreach($marques_tabs as $r)
                          <li><a href="{{url('/store?tabs=&marque='.time().'-'.$r->id.'-'.str_slug($r->slug))}}"> {{ ucfirst(strtolower($r->title)) }}</a></li>
                        @endforeach
                      </ul>
                    </div>
                    
                    <div class="col-sm-2">
                      <h6>Oraimo</h6>
                      <ul>
                       @foreach($categories_accessoires as $a)
                       <li><a href="{{url('/store/'.time().'-'.$a->id.'-'.str_slug($a->slug))}}"> {{ucfirst(strtolower($a->nom))}} </a></li>
                       @endforeach
                      </ul>
                    </div>

                    <div class="col-sm-4"> 
                      <img class=" nav-img" src="{{is_null($megamenu_pub) ? asset('assets/img/Oraimo-Rubrique.jpg')  : asset('storage/uploads/pubs/'.$megamenu_pub->image)}}" alt="" > 
                    </div>

                  </div>
                </div>
              </div>
            </li>

            <li class="{{ (isset($page) && $page == 'Oraimo') ? 'active' : '' }}"> <a href="{{ url('/oraimo') }}">Oraimo</a></li>
            
            <li class="{{ (isset($page) && $page == 'Promotions') ? 'active' : '' }}"> <a href="{{ url('/promotions') }}">Promotions</a></li>
            
            <li class="{{ (isset($page) && $page == 'Nous contacter') ? 'active' : '' }}"> <a href="{{ url('/contact') }}">Nous contacter</a></li>
            
            
            <li style=" position: absolute;right: 0;">  
            <a href="{{ url('/devenir-kadmarketeur') }}" style="background-color:#FFF205; color:black;" >Devenir KADMARKETEUR</a> 
            </li>
           
          </ul>
        </div>
        
        <!-- NAV RIGHT -->
        <div class="nav-right"></div>
      </div>
    </nav>
  </header>
  