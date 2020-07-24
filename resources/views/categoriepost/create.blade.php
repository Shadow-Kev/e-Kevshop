@extends('layout.app')
@section('title')
Enregistrement Categorie
@stop

@section('content')

    <h1>Nouvelle Categorie</h1>
    <hr/>

    <div class="col-lg-12">
        <div class="card-form">
            {!! Form::open(['url' => 'manager/categorie-post',
            'class' => 'form-horizontal',
            'enctype'=>'multipart/form-data']) !!}

            <div class="form-group {{ $errors->has('cat_libelle') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('cat_libelle', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('cat_libelle', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('cat_libelle', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('cat_status') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('cat_status', 'Activer (Afficher ou cacher tous les articles de cette categorie): ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('cat_status',false, ['class' => 'form-control', 'name'=>"cat_status"]) !!}
                        {!! $errors->first('cat_status', '<p class="help-block">:message</p>') !!}
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
                                accept="image/*" name="cat_image"  id="input-img1" tar="img1" />
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