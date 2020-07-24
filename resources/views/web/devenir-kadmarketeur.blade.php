@extends('layout.market')

@section('content')



<!-- Content -->
<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
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
                        <h2>Qu'est ce qu'un KADMARKETEUR</h2>
                        <hr>
                    </div>
                    <div class="body-content">
                        <h4 style="color:red;font-size:20px;">Devenir <strong> Kadmarketeur </strong></h4>
                        <p style="font-size:1.5rem;line-height:20px;">
                            Il s’agit d’une offre exclusivement réservée à l’ensemble de notre clientèle. Elle est destinée à ceux qui désirent gagner de l’argent en recommandant nos produits à leurs proches.
                        </p>

                        <h4 style="color:red;font-size:20px;">Produits mis en vente</h4>
                        <ul>
						<li style="font-size:1.5rem;line-height:20px;">Smartphones</li>
                        <li style="font-size:1.5rem;line-height:20px;">Tablettes</li>
                         <li style="font-size:1.5rem;line-height:20px;">Accessoires Oraimo (www.oraimo.com)</li>

                        </ul>

                        <h4 style="color:red;font-size:20px;">Comment ça fonctionne</h4>
                        <ul>
                            <li style="font-size:1.4rem;line-height:20px;">Proposez nos produits à vos parents ,amis et connaissances</li>
                            <li style="font-size:1.4rem;line-height:20px;">Après le choix du produit sur notre site ou sur nos différentes pages Facebook, il active un code de réduction de 200 F qui lui donne droit à un prix préférentiel. </li>
                            <li style="font-size:1.4rem;line-height:20px;">il/elle paie en ligne ( via AirtelMoney) ou à la livraison</li>
							<li style="font-size:1.4rem;line-height:20px;">Pour terminer, il doit nous communiquer une adresse de livraison accessible.</li>

                        </ul>

                        <h4 style="color:red;font-size:20px;">L’implication du Kadmarkeur et le paiement de ses commissions</h4>
                        <ul>
                            <li style="font-size:1.4rem;line-height:20px;">Sans bouger de chez vous, toutes les transactions sont faites par les équipes de Kadmarket. En somme, vous gagnez de l’argent sans vous déplacer.</li>
                            <li style="font-size:1.4rem;line-height:20px;">Vos commissions sur les activations des codes sont reversées automatiquement sur votre compte kadmarketeur. Et vous pouvez les retirer quand vous le souhaitez.</li>
                        </ul>
                        <p style="font-size:1.5rem;line-height:20px;">
                            <em>NB: pour plus d’informations, nous contacter : WhatsApp / Appel: +241 74 98 03 03</em>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading">
                        <h2>Inscrivez vous maintenant</h2>
                        <hr>
                    </div>

                        <form action="{{URL::to('/inscrire-kadmarketeur')}}" method="POST">
                            <div>
                                @if(session()->has('errors'))

                                    <div class="alert bg-danger">
                                        <i class="fa fa-times-circle"></i>
                                        {{session()->get('errors')->all()[0]}}
                                    </div>
                                @endif
                                @if(session()->has('success'))

                                    <div class="alert bg-success">
                                        <i class="fa fa-times-circle"></i>
                                        {{session()->get('success')}}
                                    </div>
                                @endif
                            </div>

                        {{ csrf_field() }}


                        <!-- Name -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> Nom <sup style="color: red;font-size: 15px;">*</sup>
                                    <input name="nom" placeholder="Votre nom" value="{{old('nom')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                                </label>
                            </div>

                            <!-- firstname -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> Prénom
                                    <input name="prenom" placeholder="Votre prénom" value="{{old('prenom')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                                </label>
                            </div>

                            <!-- Phone -->
                            <div class="col-sm-12" >
                                <label class="col-md-12"> Téléphone<sup style="color:red;font-size: 15px;">*</sup>
                                    <input class="form-control" name="tel" placeholder="Votre numero de téléphone" value="{{old('tel')}}" style="margin-bottom: 20px;border-color: black;" type="text" >
                                </label>
                            </div>

                            <!-- Ville -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> Ville <sup style="color: red;font-size: 15px;">*</sup>
                                    <input name="ville" placeholder="Votre ville de résidence" value="{{old('ville')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                                </label>
                            </div>
                            <!-- Email -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> E-mail <sup style="color: red;font-size: 15px;">*</sup>
                                    <input name="email" placeholder="Indiquez votre e-mail" value="{{old('email')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="text">
                                </label>
                            </div>
                            <!-- mot de passe -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> Mot de passe <sup style="color: red;font-size: 15px;">*</sup>
                                    <input name="pass" placeholder="Veuillez saisir un mot de passe" value="{{old('pass')}}" class="form-control" style="margin-bottom: 20px;border-color: black;" type="password">
                                </label>
                            </div>
                            <!-- Confirmation -->
                            <div class="col-sm-12">
                                <label class="col-md-12"> Ressaisir le mot de passe <sup style="color: red;font-size: 15px;">*</sup>
                                    <input name="pass_confirmation" placeholder="Confirmez votre mot de passe" value="" class="form-control" style="margin-bottom: 20px;border-color: black;" type="password">
                                </label>
                            </div>

                            <div class="col-sm-12 mb-4 text-right" >
                                <input type="submit" class="btn-round" value="S'inscrire">
                            </div>
                        </form>

                    @if(session()->has('newKadmarketeurCode') && session()->get('newKadmarketeurCode') != '' )
                        <div class="heading">
                            <h2>Votre code </h2>
                            <hr>
                        </div>
                        <div class="col-sm-12 mb-4" >
                            <p style="margin-bottom: 25px;">
                                <em>Veuillez noter ce code. Votre compte sera activé apès vérification dans 72h au plus tard</em>
                            </p>

                            <?php   $code = session()->get('code'); ?>
                            <div class="col-md-6 text-center">
                                <span class="padding-15 text-white bg-blue" style="font-size: large;border-radius: 5px; border: 1px solid; color: black; letter-spacing: 3px;">{{$code}}</span>
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
