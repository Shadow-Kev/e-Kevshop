@extends('layout.app')
@section('title')
Edit Categorie
@stop

@section('content')

    <h1>Modifier une Categorie</h1>
    <hr/>

    {!! Form::model($categorie, [
        'method' => 'POST',
        'url' => ['/manager/categorie', $categorie->id],
        'class' => 'form-horizontal',
        //'enctype'=>'multipart/form-data'
        'files' => true
    ]) !!}

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block text-danger">:message</p>') !!}
                    </div>
                </div>
            </div>
            <?php //dd($categorie->_parent);?>
            <div class="form-group {{ $errors->has('categorie_parent') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('categorie_parent', 'Categorie mère : ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('categorie_parent', \App\Categorie::pluck('nom','id'), $categorie->_parent->id, ['placeholder' => 'Choisissez une catégorie mère','class' => 'form-control','id'=>'categorie_parent']) !!}
                        {!! $errors->first('categorie_parent', '<p class="help-block">:message</p>') !!}
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
            
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3">
                        {!! Form::label('Logo', 'Logo: ', ['class' => 'col-sm-12 control-label']) !!}

                    </div>
                    <div class="col-sm-9 file-upload">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);"
                                   accept="image/*" name="image"/>
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

<!--             
            
            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('image', 'Image: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::file('image', null, ['class' => 'form-control',  'onchange'=>"readURL(this);",
                       'accept'=>"image/*", 'name'=>"image"]) !!}
                        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div> -->
            

            <div class="form-group {{ $errors->has('ordre') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('ordre', 'Ordre d\'affichage: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::number('ordre',  $categorie->ordre, ['class' => 'form-control', 'name'=>"ordre"]) !!}
                        {!! $errors->first('ordre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('displayOnMenu', 'Afficher sur le menu: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('displayOnMenu',  $categorie->displayOnMenu==1, ['class' => 'form-control', 'name'=>"displayOnMenu"]) !!}
                        {!! $errors->first('displayOnMenu', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('active', 'Activer (Afficher ou cacher tous les produits de la categorie): ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('active', $categorie->active==1, ['class' => 'form-control', 'name'=>"active"]) !!}
                        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            
            <div class="form-group {{ $errors->has('is_categorie_accessoire') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('is_categorie_accessoire', "Est une categorie d'accessoires: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('is_categorie_accessoire', $categorie->is_categorie_accessoire==1, ['class' => 'form-control', 'name'=>"is_categorie_accessoire"]) !!}
                        {!! $errors->first('is_categorie_accessoire', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>




        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>

        {!! Form::close() !!}



@endsection