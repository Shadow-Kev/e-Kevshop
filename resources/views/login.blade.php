@extends('layout.default')

@section('content')
<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Connection</h4>
	<p class="">Bonjour, Connectez-vous en utilisant vos identifiants .</p>
		@if(session()->has('logfailed'))
		<div class="error-msg">
		<i class="fa fa-times-circle"></i>
            {{session()->get('logfailed')}}
		</div>
    @endif
	<form class="register-form outer-top-xs" role="form" action="{{route('login')}}" method="POST">
						{!! csrf_field() !!}

		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="username">
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="password">
		</div>
		@if ($roles != null)
		<div class="form-group">
			<label for="exampleSelected1">Role <span>*</span></label>
			<select class="form-control" name="role" id="exampleSelected1">
				<option value="">Choisir un rôle</option>
				@foreach($roles as $role)
					<option value="{{$role->id}}"> {{$role->name}} </option>
				@endforeach
			</select>
		</div>
		@endif
		<div class="radio outer-xs">
		  	<a href="#" class="forgot-password pull-right">Mot de pass oublié ?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Connection</button>
    </form>	
	<hr>

    <div class="social-sign-in outer-top-xs">
        
		<div class="row">
            <a href="#" class="btn btn-xs"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
	     	<a href="#" class="btn btn-xs"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
        </div>
	</div>				
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Créer un nouveau compte</h4>
	<p class="text title-tag-line">Enregistrez vous ici .</p>
	<form class="register-form outer-top-xs" role="form">
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Nom & Prenom <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Télephone <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mot de passe <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirmation<span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Envoyer</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div>
@endsection
