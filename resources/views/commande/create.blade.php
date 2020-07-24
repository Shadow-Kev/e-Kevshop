@extends('layout.app')
@section('title')
Create new Commande
@stop

@section('content')

    <h1>Enregistrement Commande</h1>
    <hr/>

    <div class="col-lg-12">
        <div class="card-form">
            {!! Form::open(['url' => 'commande', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
            {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
            {!! Form::label('user', 'User: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('user', null, ['class' => 'form-control']) !!}
                {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mode_paiement') ? 'has-error' : ''}}">
            {!! Form::label('mode_paiement', 'Mode Paiement: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('mode_paiement', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mode_paiement', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mode_livraison') ? 'has-error' : ''}}">
            {!! Form::label('mode_livraison', 'Mode Livraison: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('mode_livraison', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mode_livraison', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('statut') ? 'has-error' : ''}}">
            {!! Form::label('statut', 'Statut: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('statut', null, ['class' => 'form-control']) !!}
                {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
            {!! Form::label('slug', 'Slug: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}

        </div>
    </div>
    @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

@endsection