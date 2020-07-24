@extends('layout.market')

@section('content')

<div id="wrap">

    <!-- Content -->
    <div id="content">
        @include('layout._market-shipsteps')
        <section class="padding-bottom-60">
            <div class="container">
                <!-- Payout Method -->
                <div class="pay-method check-out">


                    <div>
                        <div>
                            @if(session()->has('errors'))
                                <div class="alert bg-danger">
                                    <i class="fa fa-times-circle"></i>
                                    {{session()->get('errors')->all()[0]}}
                                </div>

                            @endif
                        </div>
                        <div class="col-md-12 newslatter" style="background: none;padding: 0;">
                            <form class="form-group" action="{{URL::to('/appliquercode')}}" method="POST" name="reduire">

                                {{csrf_field()}}
                                <input type="text" name="code_reduction" value="{{old('code_reduction')}}" style="border: 1px solid black" class="form-control" placeholder="Saisir un code de réduction pour profiter des prix très interessants" aria-describedby="basic-addon1">
                                <button type="submit" class="visible-xs"><i class="fa fa-check"></i></button>

                                <button type="submit" class="hidden-xs">Appliquer le code de réduction </button>
                            </form>
                        </div>

                    </div>


                    <!-- Shopping Cart -->
                    <div class="heading" style="margin-bottom: 15px">
                        <h2>Panier</h2>
                        <hr>
                    </div>

                    <!-- Check Item List -->
                    @foreach($panier as $p)
                        <?php $prod = $p->produit; ?>
                        <ul class="row check-item">
                        <li class="col-xs-6">
                            <p>{{$prod->nom}}</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>XAF {{number_format($prod->getFinalPrice(),1,',',' ') }}</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p>{{$p->quantite_produit}} unités</p>
                        </li>
                        <li class="col-xs-2 text-center">
                            <p> XAF {{number_format($prod->getFinalPrice() *  $p->quantite_produit,1,',',' ') }}</p>
                        </li>
                    </ul>
                    @endforeach


                    <!-- Payment information -->
                    <div class="heading margin-top-50" style="margin-bottom: 15px">
                        <h2>Mode de règlement</h2>
                        <hr>
                    </div>

                    <!-- Check Item List -->
                    <ul class="row check-item">
                        <li class="col-xs-6">
                            <p><img class="margin-right-20" src="images/visa-card.jpg" alt=""> {{$reglement->nom}}</p>
                        </li>
                    </ul>

                    <!-- Delivery infomation -->
                    <div class="heading margin-top-50" style="margin-bottom: 15px">
                        <h2>Livraison</h2>
                        <hr>
                    </div>

                    <!-- Information -->
                    <ul class="row check-item infoma">
                        <li class="col-sm-3">
                            <h6>Nom</h6>
                            <span>{{$livraison['nom_receveur']}}</span> </li>
                        <li class="col-sm-3">
                            <h6>Contact</h6>
                            <span>{{$livraison['contact']}}</span> </li>
                        <li class="col-sm-3">
                            <h6>Zone de livraison</h6>

                            <?php $zo =  \App\ZoneLivraison::find($livraison['zonelivraison']); ?>
                            <span>{{$zo->nom}}</span> </li>
                        <li class="col-sm-3">
                            <h6>Mode de livraison</h6>
                            <span>{{\App\ModeLivraison::find($livraison['modelivraison'])->nom}}</span> </li>

                        <li class="col-sm-3">
                            <h6>Infos complémentaires</h6>
                            <span>{{$livraison['description_supplementaire']}}</span> </li>
                    </ul>

                    <!-- Information -->
                   {{-- <ul class="row check-item infoma exp">
                        <li class="col-sm-9"> <span>Coût de livraison</span> </li>
                        <li class="col-sm-3">
                            <h5>+25</h5>
                        </li>
                    </ul>--}}

                    <!-- Totel Price -->
                    <div class="total-price">
                        <h4><small> Prix total: </small>  XAF {{number_format($infosPanier['mnt_total'],1,',',' ')}}</h4>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn">
                    <a href="{{URL::to('/methods')}}" class="btn-round btn-light btn-width-harmo"><span><i class="fa fa-arrow-circle-left"></i></span> Précédent</a>
                    <a href="{{URL::to('/proceed')}}" target="_blank" class="btn-round btn-width-harmo">Payer </a> </div>
            </div>
        </section>
    </div>
    <!-- End Content -->

</div>




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













