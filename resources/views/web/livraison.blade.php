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
                        <div class="col-md-6">

                            <!-- Your information -->
                            <div class="heading">
                                <h2>Informations de livraison</h2>
                                <hr>
                            </div>
                            <form action="{{URL::to('/processlivraison')}}" method="POST">
                                <div class="row">

                                    <div>
                                        @if(session()->has('errors'))

                                            <div class="alert bg-danger">
                                                <i class="fa fa-times-circle"></i>
                                                {{session()->get('errors')->all()[0]}}
                                            </div>

                                        @endif
                                    </div>

                                    {{csrf_field()}}

                                    <!-- Name -->
                                    <div class="col-sm-12">
                                        <label> Nom et prénom du receveur<sup color="red">*</sup>
                                            <input name="nom_receveur" value="{{old('nom_receveur')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                                        </label>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="col-sm-12 mb-4">
                                        <div class="row">
                                            <div class="col-xs-12" style="margin-bottom: 20px;">
                                                <label> Zone de livraison <sup color="red">*</sup></label>
                                                <div class="btn-group bootstrap-select">
                                                    <select name="zonelivraison" class="form-control" style="border-color: black;" tabindex="-98">
                                                        @foreach($zonesLivraisons as $z)
                                                            <option @if(old('zonelivraison')==$z->id) selected @endif value="{{$z->id}}"> {{$z->nom}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Type livraison -->
                                    <div class="col-sm-12 mb-4">
                                        <div class="row">
                                            <div class="col-xs-12" style="margin-bottom: 20px;">
                                                <label> Type de livraison <sup color="red">*</sup></label>
                                                <div class="btn-group bootstrap-select">
                                                    <select name='modelivraison' class="form-control" style="border-color: black;" tabindex="-98">
                                                        @foreach($modeLivraison as $t)
                                                            <option @if(old('modelivraison')==$t->id) selected @endif  value="{{$t->id}}"> {{$t->nom}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-sm-12 mb-4" style="margin-bottom: 20px;">
                                        <label> Contact<sup color="red">*</sup>
                                            <input class="form-control" value="{{old('contact')}}" style="margin-bottom: 20px;border-color: black;" type="text" name="contact">
                                        </label>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-12">
                                        <label> Indication supplémentaire <sup color="red">*</sup>
                                            <textarea value="{{old('description_supplementaire')}}"  style="border-color: black;" class="form-control" rows="4"  name="description_supplementaire" type="text"></textarea>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Button -->
                                        <div class="pro-btn">
                                            <a href="{{URL::to('/panier')}}" class="btn-round btn-light btn-width-harmo"><span><i class="fa fa-arrow-circle-left"></i></span> Précédent</a>
                                            <button type="submit" class="btn-round btn-width-harmo">Suivant <span><i class="fa fa-arrow-circle-right"></i></span></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- Select Your Transportation -->
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Nos conditions de livraison</h2>
                                <hr>
                            </div>
                            <div>


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













