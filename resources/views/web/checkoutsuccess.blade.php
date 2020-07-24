@extends('layout.market')

@section('content')

<div id="wrap">

    <!-- Content -->
    <div id="content">
        @if(isset($commande))
            @if($commande->mode_paiement ==1)
                <section >
                    @if($commande->montant_a_payer <= 500000)
                    <div class="col-md-12 text-center">
                        <img src="{{asset('assets/img/loader.gif')}}" class="img-responsive" alt="" style="width: 80px;display:block; margin: 20vh auto 5px auto;">
                        <div class="col-md-12">
                            Chargement en cours...
                        </div>
                    </div>
                    <form action="https://mypvit.com/airtelmoneypvit.kk" name="pvit" method="POST" style="display: none;">
                        <input type="text" name="tel_marchand" value="{{$phone_merchant_am}}"/>
                        <input type="text" name="montant" value= "{{$commande->montant_a_payer}}"/>
                        <input type="text" name="ref" value= "{{$paie->reference}}"/>
                        <input type="text" name="agent" value= "enligne"/>
                        <input type="text" name="redirect" value="https://kadmarket.shop"/>
                        <input type="submit"  name="payer" >
                    </form>
                    <script>
                        document.forms['pvit'].submit();
                    </script>
                    @else
                        <div class="container">
                            <!-- Payout Method -->
                            <div class="order-success"> <i class="fa fa-check"></i>
                                <h6>Le montant à payer ne peut dépasser 500 000 en une transaction pour Airtel Money</h6>
                            </div>
                        </div>
                    @endif
                </section>
            @else
                <section>
                    <div class="container">
                        <!-- Payout Method -->

                        <div class="order-success"> <i class="fa fa-check"></i>
                            <h6>Félicitation! Votre commande a été reçu</h6>
                            <p>Vous serez contacté dans les heures qui suivent</p>
                            <a href="{{URL::to('/store')}}" class="btn-round btn-light">Retour à la boutique </a>
                        </div>
                    </div>
                </section>
            @endif

        @else()
            <section>
                <div class="container">
                    <!-- Payout Method -->
                    <div class="order-success"> <i class="fa fa-check"></i>
                        <h6>Vous n'avez pas de commande en cours</h6>
                    </div>
                </div>
            </section>
        @endif


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













