@extends('layout.market')
@extends('layout.market')

@section('content')



<!-- Content -->
<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">code-réduction</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <section class="map-block margin-bottom-40 kadmarketeur">
            <div class="row">
                <div class="col-md-6">
                    <!-- Your information -->
                    <div class="heading">
                        <h2>Qu'est ce qu'un CODE DE REDUCTION</h2>
                        <hr>
                    </div>
                    <div class="body-content">
                        <h4 style="color:red;font-size:20px;">Devenir <strong> Kadmarketeur </strong></h4>
                        <p style="font-size:1.5rem;line-height:20px;">
                            KADMARKET vous offre la possibilité d'acheter les articles à des prix très bas. Le code de réduction vous permet de bénéficier d'une réduction de 10% sur un achat effectué en ligne.
                        </p>

                        <h4 style="color:red;font-size:20px;">Comment procéder</h4>
                        <p>
                            Pour profiter de cette offre, vous avez 3 étapes
                            <ol>
                                <li style="font-size:1.5rem;line-height:20px;">Remplissez le formulaire ci-après avec votre nom (et prénom), Votre contact valide et le code du KADMARKETEUR si vous avez été recommandé. Cliquez ensuite sur le bouton <b>Générer le code </b> </li>
                                <li style="font-size:1.5rem;line-height:20px;">Une fois le code généré, vous devez l'activer en effectuant le paiement (Avec Airtel Money). Pour cela cliquez sur le bouton <b>Payer pour activer</b>. Après paiement votre code est automatiquement activé. </li>
                                <li style="font-size:1.5rem;line-height:20px;"> Une fois le paiement effectué, Ajoutez des produits à votre panier puis procédez à la commande ou cliquez sur l'icone de panier situé en bas de votre écran. Vous aurez la liste des produits sélectionnés et un champ en haut reservé pour le code de réduction. Saisissez votre code puis cliquez sur APPLIQUER.   </li>
                                
                            </ol>                            
                            
                        </p>

                       
                        
                        <p style="font-size:1.5rem;line-height:20px;">
                            <em>NB: pour plus d’informations, nous contacter : WhatsApp / Appel: +241 74 98 03 03</em>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading">
                        <h2>Achetez un code de réduction à 200 F CFA seulement !!!</h2>
                        <hr>
                    </div>
                    <form action="{{URL::to('/generer-code-reduction')}}" method="POST">
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
                            <label class="col-md-12"> Nom <sup style="color: red;font-size: 15px;">*</sup>
                                <input name="nom" placeholder="Votre nom" value="{{old('nom')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                            </label>
                        </div>

                        <!-- Phone -->
                        <div class="col-sm-12" >
                            <label class="col-md-12"> Téléphone<sup style="color:red;font-size: 15px;">*</sup>
                                <input class="form-control" placeholder="Votre numero de téléphone" value="{{old('tel')}}" style="margin-bottom: 20px;border-color: black;" type="text" name="tel">
                            </label>
                        </div>
                        <!-- Code kadmarketeur -->
                        <div class="col-sm-12 mb-4" style="margin-bottom: 20px;">
                            <label class="col-md-12"> Code de votre kadmarketeur
                                <input class="form-control" placeholder="Si un kadmarketeur vous a recommandé, veuillez saisir son code" value="{{old('code_kadmarketeur')}}" style="margin-bottom: 20px;border-color: black;" type="text" name="code_kadmarketeur">
                            </label>
                        </div>
                        @if(!session()->has('newDiscountCode'))
                        <div class="col-sm-12 mb-4" >
                            <input type="submit" class="btn-round" value="Générer le code">
                        </div>
                        @endif

                    </form>

                    @if(session()->has('newDiscountCode'))

                        <div class="heading">
                            <h2>Votre code </h2>
                            <hr>
                        </div>
                        <div class="col-sm-12 mb-4" >
                            <p style="margin-bottom: 25px;">
                                <em>Veuillez noter ce code puis cliquez sur le bouton <strong>Payer pour activer</strong></em>
                            </p>

                            <?php  $code = session()->get('newDiscountCode');  ?>
                            <div class="col-md-6 text-center">
                                <span class="padding-15 text-white bg-blue" style="font-size: large;border-radius: 5px; border: 1px solid; color: black; letter-spacing: 3px;">{{$code->code}}</span>
                            </div>
                            <div class="col-md-6">
                                <a class="btn-round" href="{{URL::to('/payecode')}}">Payer pour activer le code</a>
                            </div>
                        </div>
                    @endif
                </div>

            </div>

        </section>
       
       
      </div>
    </section>
    
   
  </div>
<!-- 
      <div class="col-md-12 contact-map outer-bottom-vs">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.77899574764723!2d9.468834252471837!3d0.3630741996901834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3f043806d9a7%3A0x248754e753626f79!2sKADMARKET!5e1!3m2!1sfr!2sga!4v1536766854801"
                                width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                -->


@endsection
