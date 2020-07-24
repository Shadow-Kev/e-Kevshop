<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('manager/dashboard')}}"><img src="{{asset('assets/img/Logo-Kadmarket.png')}}" alt="KadMarket"></a>
            <a class="navbar-brand hidden" href="{{URL::to('manager/dashboard')}}"><img src="{{asset('assets/img/Logo-Kadmarket.png')}}" alt="KadMarket"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('manager/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Tableau de Bord </a>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa fa-bar-chart"></i>Statistiques </a>
                </li>
                <h3 class="menu-title">Boutiques & Produits  </h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Produits</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa"></i><a href="{{route('marque.index')}}">Marques</a></li>
                        <li><i class="fa"></i><a href="{{route('categorie.index')}}">Catégories</a></li>
                        <li><i class="fa"></i><a href="{{route('caracteristique.index')}}">Caractétisques</a></li>
                        <li><i class="fa"></i><a href="{{route('produit.index')}}">Produits</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('shop.index')}}"> <i class="menu-icon fa fa-shopping-basket"></i>Boutiques</a>
                </li>
            

                <h3 class="menu-title">Commandes & Ventes</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Commandes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon"></i><a href="{{route('modelivraison.index')}}">Mode Livraison</a></li>
                        <li><i class="menu-icon"></i><a href="{{route('livraison.index')}}">Livraisons</a></li>
                        <li><i class="menu-icon"></i><a href="{{route('commande.index')}}">Commandes</a></li>

                    </ul>
                </li>
                <li>
                        <a href="{{ route('promotion.index') }}"> <i class="menu-icon fa fa-product-hunt"></i> Promotions </a>
                </li>
                
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-usd"></i>Paiements</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon"></i><a href="{{route('modepaiement.index')}}">Mode de Paiement</a></li>
                        <li><i class="menu-icon "></i><a href="{{route('paiement.index')}}">Paiements</a></li>
                    </ul>
                </li>


                <h3 class="menu-title">Kadmarketing  </h3><!-- /.menu-title -->
                <li>
                    <a href="{{url(route('Codesreduction.liste'))}}"> <i class="menu-icon fa fa-address-card "></i> Codes de réductions </a>
                </li>
                <li>
                    <a href="{{url(route('Kadmarketeurs.liste'))}}"> <i class="menu-icon fa fa-address-card "></i> Kadmarketeurs </a>
                </li>

              
                <h3 class="menu-title">Partenariat  </h3><!-- /.menu-title -->
                <li>
                        <a href="{{url(route('partenaires.index'))}}"> <i class="menu-icon fa fa-address-card "></i> Nos partenaires </a>
                </li>
                
                   
                <h3 class="menu-title">PAGES  </h3><!-- /.menu-title -->
                <li>
                        <a href="{{url(route('categoriePost.index'))}}"> <i class="menu-icon fa fa-address-card "></i> Categorie de pages</a>
                </li>
                <li>
                        <a href="{{url(route('posts.index'))}}"> <i class="menu-icon fa fa-address-card "></i> Articles </a>
                </li>
                
                
                <h3 class="menu-title">Parametres</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Utilisateurs</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon"></i><a href="{{url('manager/user?type=client')}}">Clients</a></li>
                        <li><i class="menu-icon"></i><a href="{{url('manager/user?type=admin')}}">Administrateurs</a></li>
                        <li><i class="menu-icon"></i><a href="{{route('role.index')}}">Roles</a></li>

                    </ul>
                </li>
                <li><a href="{{url('/manager/publicites')}}"><i class="menu-icon fa fa-globe"></i> Publicites</a></li>
                <li><a href="{{url('/manager/rubriques')}}"><i class="menu-icon fa fa-globe"></i> Rubriques </a></li>
                
                <li><a href="{{url('log')}}"><i class="menu-icon fa fa-globe"></i> Historiques</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->