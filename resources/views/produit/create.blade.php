@extends('layout.app')
@section('title')
Enregistrement Produit
@stop

@section('content')

    <h1>Enregistrement Produit</h1>
    <hr/>

    {!! Form::open(['url' => 'manager/produit', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}

                  <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prix') ? 'has-error' : ''}}">
                {!! Form::label('prix', 'Prix: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('prix', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
                {!! Form::label('quantite', 'Quantite: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('quantite', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('shop') ? 'has-error' : ''}}">
                {!! Form::label('shop', 'Shop: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('shop', \App\Shop::pluck('nom','id'), null, ['placeholder' => 'Choisissez une boutique','class' => 'form-control']) !!}
                    {!! $errors->first('shop', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('marque') ? 'has-error' : ''}}">
                {!! Form::label('marque', 'Marque: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('marque', \App\Marque::pluck('title','id'), null, ['placeholder' => 'Choisissez une marque','class' => 'form-control']) !!}
                    {!! $errors->first('marque', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('categorie') ? 'has-error' : ''}}">
                {!! Form::label('categorie', 'Categorie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('categorie', \App\Categorie::pluck('nom','id'), null, ['placeholder' => 'Choisissez une catégorie','class' => 'form-control']) !!}
                    {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('garantie') ? 'has-error' : ''}}">
                {!! Form::label('garantie', 'Garantie (Nombre de mois): ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('garantie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('garantie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                {!! Form::label('carateristiques', 'Carateristiques: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-offset-1 col-sm-1">
                 <button class="btn btn-success form-control" id="myModal">+ Ajouter</button>
                </div>
            </div>


              
        <div class="col-sm-6">
              <div class="file-upload"> 
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


            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           


    <div class="form-group">
       <div class="row">
            <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
        </div>
         <div class="col-sm-offset-3 col-sm-3">
      <a class="btn btn-success form-control" href="{{route('produit.index')}}"><< Retour</a>
    </div>
       </div>
    </div>
    {!! Form::close() !!}


        <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>


@endsection
@section('js')
    <script>
    $('#myModal').on('shown.bs.modal', function () {
             $('#myInput').trigger('focus')
    })
    </script>
@endsection