@extends('layout.app')
@section('title')
Commande
@stop

@section('content')

    <h3>Détails de la Commande N° {{$commande->slug}}</h3>
    <hr>
    <div class="table-responsive">
        <div class="col-md-12">
            <div class="heading">
                <h3 class="title">Entête de la commande</h3>
                <a href="{{URL::to('manager/commande')}}" class="btn-sm btn-primary float-right">Liste des commandes</a>

            </div>
            <div class="content-body">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                    <tr>
                        <td>Date</td> <td> {{ $commande->date }} </td>
                    </tr>
                    <tr>
                        <td>Montant total</td> <td> {{ $commande->montant_total }} </td>
                    </tr>
                    <tr>
                        <td>Code de reduction</td> <td> {{ $commande->code_remise }} </td>
                    </tr>
                    <tr>
                        <td>Montant à payer</td> <td> {{ $commande->montant_a_payer }} </td>
                    </tr>
                    <tr>
                        <td>statut</td> <td>
                            @if($commande->statut == 1)
                                <span class="badge badge-warning">En attente de paiement</span>
                            @elseif($commande->statut == 2)
                                <span class="badge badge-success">Validé et payé</span>
                            @elseif($commande->statut == 0)
                                <span class="badge badge-danger">Paiement echoué</span>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="heading">
                <h3 class="title">Produits commandés</h3>
            </div>
            <div class="content-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th> Produit </th>
                            <th> Quantité </th>
                            <th> Prix unitaire </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($commande->detailsCommande  as $p)
                    <tr>
                        <td> {{ $p->produit->nom }} </td>
                        <td> {{ $p->quantite_produit }} </td>
                        <td> {{ $p->produit->getFinalPrice() }} </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="heading">
                <h3 class="title">Destinataire</h3>
            </div>
            <div class="content-body">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                    <tr>
                        <td>Nom</td> <td> {{ $commande->nom_receveur }} </td>
                    </tr>
                    <tr>
                        <td>Contact</td> <td> {{ $commande->tel_receveur }} </td>
                    </tr>
                    <tr>
                        <td>Lieu</td> <td> {{ $commande->zoneLivraison->nom }} </td>
                    </tr>
                    <tr>
                        <td>Mode livraison</td> <td> {{ $commande->getModeLivraison->nom }} </td>
                    </tr>

                    <tr>
                        <td>Autre infos</td> <td> {{ $commande->description_livraison }} </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection