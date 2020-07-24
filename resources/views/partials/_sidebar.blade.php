<nav class="side-navbar">
    <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="{{url('storage/default.png')}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4"> {{ Auth::user()->nom }}   {{ Auth::user()->prenom }}</h1>
                </div>
            </div>
    <!-- Sidebar Navidation Menus-->
    <ul class="list-unstyled">
        <li class="active"> <a href="{{route('dashboard')}}"><i class="icon-home"></i>Tableau de bord</a></li>
        <li><a href="#apps" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Produits </a>
            <ul id="apps" class="collapse list-unstyled">
                <li><a href="{{route('categorie.index')}}">Categories</a></li> 
                <li><a href="{{route('marque.index')}}">Marques</a></li> 
                <li><a href="{{route('caracteristique.index')}}">Caratériques</a></li> 
                <li><a href="{{route('produit.index')}}">Produits</a></li> 
            </ul>
        </li>
        <li> <a href="{{route('shop.index')}}"> <i class="fa fa-shopping-basket"></i>Boutiques </a></li>
        <li> <a href="{{route('venteflash.index')}}"> <i class="fa fa-bar-chart"></i>Vente Flash </a></li>
        <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-building-o"></i>Ventes & Paiements </a>
            <ul id="forms" class="collapse list-unstyled">
                <li><a href="{{route('vente.index')}}">Articles vendu</a></li> 
                <li><a href="{{route('paiement.index')}}">Paiements</a></li> 
            </ul>
        </li>
        <li><a href="#pages" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-o"></i>Commandes & Livraisons </a>
            <ul id="pages" class="collapse list-unstyled">
                <li><a href="{{route('commande.index')}}">Commandes</a></li> 
                <li><a href="{{route('livraison.index')}}">Livraisons</a></li> 
                <li><a href="{{route('modepaiement.index')}}">Moyens de Paiement</a></li> 
                <li><a href="{{route('modelivraison.index')}}">Mode Livraisons</a></li> 
            </ul>
        </li>
        <li> <a href="{{route('image.index')}}"> <i class="fa fa-camera"></i> Galleries Images</a></li> 
        <li><a href="#elements" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i> Utilisateurs </a>
            <ul id="elements" class="collapse list-unstyled">
                <li><a href="{{url('user?type=client')}}">Clients</a></li>
                <li><a href="{{url('user?type=admin')}}">Administrateurs</a></li>
                <li><a href="{{route('role.index')}}">Roles</a></li>
            </ul>
        </li>
        <li><a href="{{url('log')}}"><i class="fa fa-globe"></i> Historiques</a></li>

    </ul>
</nav>
