@extends('layout.app')
@section('title')
Create new Shop
@stop

@section('content')

    <h1>Nouvelle boutique</h1>
    <hr/>

    {!! Form::open(['url' => 'shop', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}

      
            <div class="file-upload"> 
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="logo"/>
                    <div class="drag-text">
                        <h3>Glissez et Deposez ou Cliquez ici pour selection le logo</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image"/>
                    <div class="image-title-wrap">
                        <div class="row">
                            <button type="button" onclick="removeUpload()" class="remove-image">Changer
                                <span  class="image-title">Image chargée</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    
       
            
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

            </div>
            <div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('telephone', 'Telephone: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('adresse', 'Adresse: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
      
            <div class="form-group {{ $errors->has('benefice') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('benefice', 'Benefice: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::number('benefice', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('benefice', '<p class="help-block">:message</p>') !!}
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