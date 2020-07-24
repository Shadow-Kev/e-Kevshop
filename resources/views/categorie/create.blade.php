@extends('layout.app')
@section('title')
Enregistrement Categorie
@stop

@section('content')

    <h1>Nouvelle Categorie</h1>
    <hr/>

    <div class="col-lg-12">
        <div class="card-form">
            {!! Form::open(['url' => 'manager/categorie',
            'class' => 'form-horizontal',
            'enctype'=>'multipart/form-data']) !!}

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            
            <div class="form-group {{ $errors->has('categorie_parent') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('categorie_parent', 'Categorie mère : ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('categorie_parent', \App\Categorie::pluck('nom','id'), null, ['placeholder' => 'Choisissez une catégorie mère','class' => 'form-control','id'=>'categorie_parent']) !!}
                        {!! $errors->first('categorie_parent', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3">
                        {!! Form::label('Logo', 'Logo: ', ['class' => 'col-sm-12 control-label']) !!}

                    </div>
                    <div class="col-sm-9 file-upload" id='img1'>
                        <div class="image-upload-wrap">
                      <input class="file-upload-input" type='file' onchange="readURL(this);"
                                accept="image/*" name="image"     id="input-img1" tar="img1" />
                            <div class="drag-text">
                                <h3>Glissez et Deposez ou Cliquez ici pour selectioner une image </h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image"/>
                            <div class="image-title-wrap">
                                <div class="row">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Changer
                                        <span
                                                class="image-title">Image chargée</button>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="form-group {{ $errors->has('ordre') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('ordre', 'Ordre d\'affichage: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::number('ordre',  old('ordre'), ['class' => 'form-control', 'name'=>"ordre"]) !!}
                        {!! $errors->first('ordre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('displayOnMenu', 'Afficher sur le site: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('displayOnMenu', old('displayOnMenu'), ['class' => 'form-control', 'name'=>"displayOnMenu"]) !!}
                        {!! $errors->first('displayOnMenu', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('active', 'Activer (Afficher ou cacher tous les produits de la categorie): ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('active',false, ['class' => 'form-control', 'name'=>"active"]) !!}
                        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            
            <div class="form-group {{ $errors->has('is_categorie_accessoire') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('is_categorie_accessoire', "Est une categorie d'accessoires: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('is_categorie_accessoire', false, ['class' => 'form-control', 'name'=>"is_categorie_accessoire"]) !!}
                        {!! $errors->first('is_categorie_accessoire', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="form-group">
               <div class="row">
                   <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
                   </div>
                   <div class="col-sm-offset-3 col-sm-3">
                      <a class="btn btn-success form-control" href="{{route('categorie.index')}}"><< Retour</a>
                   </div>
               </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

   
@endsection