@extends('layout.app')
@section('title')
Nouvel utilisateur
@stop

@section('content')

    <h1>Nouvel utilisateur</h1>
    <hr/>

    {!! Form::open(['url' => 'user', 'class' => 'form-horizontal']) !!}



<!-- 
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
 -->
<!-- 
            <div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
                {!! Form::label('prenom', 'Prenom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                </div>
            </div> -->


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                 {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                                 {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                            </div>                                  
                        </div>                              
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                             <div class="row">
                            {!! Form::label('prenom', 'Prenom: ', ['class' => 'col-sm-3 control-label']) !!}
                             {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                             </div>                                   
                            </div>    
                    </div>
                </div> 


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <div class="row" >
                        {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
                            {!! Form::text('password', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <div class="row">
                            {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
                        <div class="row">
                            {!! Form::label('telephone', 'Telephone: ', ['class' => 'col-sm-3 control-label']) !!}
                                {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('web') ? 'has-error' : ''}}">
                        <div class="row">
                            {!! Form::label('web', 'Web: ', ['class' => 'col-sm-3 control-label']) !!}
                            {!! Form::text('web', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('web', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
                        <div class="row">
                        {!! Form::label('facebook', 'Facebook: ', ['class' => 'col-sm-3 control-label']) !!}
                            {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('statut') ? 'has-error' : ''}}">
                        {!! Form::label('statut', 'Statut: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="checkbox">
                            <label>{!! Form::radio('statut', '1') !!} Actif</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('statut', '0', true) !!} Inactif</label>
                        </div>
                        {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="row">
                     {!! Form::label('shop', 'Boutique: ', ['class' => 'col-sm-4 control-label']) !!}
                     {!! Form::select('shop', \App\Shop::pluck('nom','id'), null, ['placeholder' => 'Choisissez une boutique','class' => 'form-control']) !!}
                     {!! $errors->first('shop', '<p class="help-block">:message</p>') !!}
                 </div>
                </div>
           </div>

            <div class="col-sm-4">
                <div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
                    <div class="row">
                        {!! Form::label('role', 'Role: ', ['class' => 'col-sm-3 control-label']) !!}
                            {!! Form::select('role', \App\Role::pluck('name','id'), null, ['placeholder' => 'Choisissez un role','class' => 'form-control']) !!}
                            {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <div class="row">
                     {!! Form::label('shop', 'Boutique: ', ['class' => 'col-sm-4 control-label']) !!}
                     {!! Form::select('shop', \App\Shop::pluck('nom','id'), null, ['placeholder' => 'Choisissez une boutique','class' => 'form-control']) !!}
                     {!! $errors->first('shop', '<p class="help-block">:message</p>') !!}
                 </div>
                </div>
           </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection