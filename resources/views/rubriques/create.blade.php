@extends('layout.app')
@section('title')
    Nouvelle rubrique
@stop

@section('content')
<?php $typeAffichages = ["SLIDE"=>"Bloc Slide horizontal", "BLOC_LEAD"=>"Bloc avec lead", "PUB"=>"Bloc banniere publicitaire"]  ?>
    <h1>Nouvelle rubrique</h1>
    <hr/>

            {!! Form::open(['url' => 'manager/rubriques', 'class' => 'form-horizontal','files'=>true]) !!}
            
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif


            <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('titre', 'Titre: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('titre', old('titre'), ['class' => 'form-control']) !!}
                        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            

            <div class="form-group {{ $errors->has('type_affichage') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('type_affichage', "Mode d'affichage: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('type_affichage', $typeAffichages, null, ['placeholder' => 'Choisissez un mode','class' => 'form-control','id'=>'type_affichage']) !!}
                        {!! $errors->first('type_affichage', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>


            <div class="form-group {{ $errors->has('ordre') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('ordre', "Ordre d'affichage: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::number('ordre', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('ordre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        
            <div class="form-group {{ $errors->has('statut') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('statut', 'Afficher la rubrique: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('statut', 1, ['class' => 'form-control', 'name'=>"statut"]) !!}
                        {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            

                    
            <div class="form-group">
                <div class=" col-sm-12">
                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}


@endsection

@section('js')

@endsection