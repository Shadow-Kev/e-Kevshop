@extends('layout.market')

@section('content')

<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Accueil</a></li>
          <li class="active">Authentication</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php // dd($errors); ?>
            @if ($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all(':message') as $m)
                  <li>{{$m}}</li>
                @endforeach
              </div>
            @endif
          </div>
          <div class="col-md-6"> 
            <!-- Login Your Account -->
            <h5>Connectez-vous</h5>
            
            <!-- FORM -->
            <form action="{{url(route('process-login'))}}" method="POST">
				      {{ csrf_field() }}
              
              <ul class="row">
                <li class="col-sm-12">
                  <label>Identifiant
                    <input type="text" class="form-control" name="l_log" placeholder="E-mail ou téléphone" value="{{old('l_log')}}">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Mot de passe
                    <input type="password" class="form-control" name="l_pass" placeholder="Mot de passe" value="{{old('l_pass')}}">
                  </label>
                </li>
              
                <li class="col-sm-6"> <a href="#." class="forget">Mot de passe oublié?</a> </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round" name="l_login">Se connecter</button>
                </li>
              </ul>
            </form>
          </div>
          
          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            <h5>Pas encore inscrit? Inscris-toi maintenant !</h5>
            
            <!-- FORM -->
            <form action="{{url(route('client.register'))}}" method="POST">
				{{ csrf_field() }}
              <ul class="row">
                <li class="col-sm-12">
                  <label>Identifiant
                    <input type="text" class="form-control" name="r_login" placeholder="E-mail ou téléphone" value="{{old('r_login')}}">
                  </label>
				</li>
				<li class="col-sm-12">
                  <label>Nom
                    <input type="text" class="form-control" name="r_name" placeholder="Nom et prénoms" value="{{old('r_name')}}">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Mot de passe
                    <input type="password" class="form-control" name="r_pass" placeholder="" value="{{old('r_pass')}}">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Confirmation
                    <input type="password" class="form-control" name="r_pass_confirmation" placeholder="Veuillez confirmer votre mot de passe" value="{{old('r_pass_confirmation')}}">
                  </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round" name='r_reg' >S'inscrire</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
   
  </div>
@endsection
