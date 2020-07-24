@extends('layout.market')

@section('content')

<div id="wrap">

    <!-- Content -->
    <div id="content">
        @include('layout._market-shipsteps')


        <section class="padding-bottom-60">
            <div class="container">
                <!-- Payout Method -->
                <div class="pay-method">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Your Card -->
                            <div class="heading">
                                <h2>Choisissez le moyen de paiement</h2>
                                <hr>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <form action="{{URL::to('/processmethodes')}}" method="POST">
                                    {{@csrf_field()}}
                                    <div>
                                        @if(session()->has('errors'))

                                            <div class="alert bg-danger">
                                                <i class="fa fa-times-circle"></i>
                                                {{session()->get('errors')->all()[0]}}
                                            </div>

                                        @endif
                                    </div>

                                    @foreach($methodes as $m)
                                    <div class="row">
                                            <div class="col-xs-2">
                                                <input name='methode_choisie' type="radio" value="{{$m->id}}" class="payemode" />
                                            </div>
                                            <div class="col-xs-9">
                                                {{$m->nom}}
                                            </div>
                                    </div>
                                @endforeach

                                    <!-- Button -->
                                    <div class="pro-btn">
                                        <a href="{{url(route('modeLivraisonCli'))}}" class="btn-round btn-light btn-width-harmo"><span><i class="fa fa-arrow-circle-left"></i></span> Précédent</a>
                                        <button type="submit" class="btn-round btn-success btn-width-harmo">Suivant <span><i class="fa fa-arrow-circle-right"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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













