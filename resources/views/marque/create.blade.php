@extends('layout.app')
@section('title')
Create new Marque
@stop

@section('content')

    <h1>Nouvelle Marque</h1>
    <hr/>
    
    <div class="col-md-12">
        <div class="card-form">
            
    {!! Form::open(['method'=>"POST",'url' => 'marque', 'class' => 'form-horizontal','files'=>true]) !!}

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <div class="row">
            {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <div class="row">
            {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
        <div class="row">
            {!! Form::label('image', 'Logo: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

    </div>
    <div class="form-group {{ $errors->has('displayOnSite') ? 'has-error' : ''}}">
        <div class="row">
            {!! Form::label('displayOnSite', 'Afficher sur le site: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::checkbox('displayOnSite', 1, ['class' => 'form-control', 'name'=>"displayOnSite",false]) !!}
                {!! $errors->first('displayOnSite', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group {{ $errors->has('displayOnMenu') ? 'has-error' : ''}}">
        <div class="row">
            {!! Form::label('displayOnMenu', 'Afficher sur le Mmenu principal: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::checkbox('displayOnMenu', 1, ['class' => 'form-control', 'name'=>"displayOnMenu",false]) !!}
                {!! $errors->first('displayOnMenu', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

   
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
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