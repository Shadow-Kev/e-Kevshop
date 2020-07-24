@extends('layout.app')
@section('title')
Modifier Produit
@stop

@section('content')
<script src="{{asset('js/vendors/ckeditor/ckeditor.js')}}"></script>
    <h1>Modifier Produit</h1>
    <hr/>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($produit, [
        'method' => 'PUT',
        'url' => ['manager/produit', $produit->id],
        'class' => 'form-horizontal',
        'files' => true
    ]) !!}

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('prix') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('prix', 'Prix: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::number('prix', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            {!! Form::label('prix_achat', 'Prix d\'achat : ', ['class' => 'col-sm-12 control-label']) !!}
                            {!! Form::number('prix_achat', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('prix_achat', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            {!! Form::label('prix_reduit', 'Prix réduit: ', ['class' => 'col-sm-12 control-label']) !!}
                            {!! Form::number('prix_reduit', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('quantite', 'Quantite en stock: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::number('quantite', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('marque') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('marque', 'Marque: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('marque', \App\Marque::pluck('title','id'), $produit->marque_->id, ['placeholder' => 'Choisissez une marque','class' => 'form-control']) !!}
                        {!! $errors->first('marque', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('categorie') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('categorie', 'Categorie: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('categorie', \App\Categorie::pluck('nom','id'), $produit->categorie, ['placeholder' => 'Choisissez une catégorie','class' => 'form-control']) !!}
                        {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('garantie') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('garantie', 'Garantie: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('garantie', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('garantie', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            @if(Auth::user()->shop_id == 1)
            <div class="form-group {{ $errors->has('shop') ? 'has-error' : ''}}">
                <div class="row">
                      {!! Form::label('shop', 'Boutique: ', ['class' => 'col-sm-3 control-label']) !!}    
                    <div class="col-sm-8">
                        {!! Form::select('shop', \App\Shop::pluck('nom','id'), null, ['placeholder' => 'Choisissez une boutique','class' => 'form-control']) !!}
                        {!! $errors->first('shop', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                         <div class="row">
                         {!! Form::label('lien_details_constructeur', 'Lien detail vers le constructeur: ', ['class' => 'col-sm-12 control-label']) !!}
                         {!! Form::text('lien_details_constructeur', old('lien_details_constructeur'), ['class' => 'form-control']) !!}
                         {!! $errors->first('lien_details_constructeur', '<p class="help-block">:message</p>') !!}
                         </div>                                   
                        </div>    
                </div>
            </div>
            
      <div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
            <div class="row">
                {!! Form::label('active', 'Afficher sur le site: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::checkbox('active', 1, ['class' => 'form-control', 'name'=>"active", "checked"=>($produit->active == 1)]) !!}
                    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>


        <div class="col-md-12">
                        <h3 style="border-bottom: 1px solid #ddd;">Images</h3>
                 </div>
                <br>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <div class="file-upload" id='img1'>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);"
                                    accept="image/*" name="image[]" id="input-img1" tar="img1" />
                                <div class="drag-text">
                                    <h3>Image 1 </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="file-upload" id='img2'>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);"
                                    accept="image/*" name="image[]" id="input-img2" tar="img2"  />
                                <div class="drag-text">
                                    <h3>Image 2</h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="file-upload" id='img3'>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);"
                                    accept="image/*" name="image[]"  id="input-img3" tar="img3" />
                                <div class="drag-text">
                                    <h3>Image 3 </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="file-upload" id='img4'>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);"
                                    accept="image/*" name="image[]"  id="input-img4" tar="img4" />
                                <div class="drag-text">
                                    <h3>Image 3 </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="file-upload" id='img1'>
                            <div class="file-upload-content" style="display:block" style="display:block">
                                <img class="file-upload-image" src="{!!  file_exists('assets/img/articles/'.$produit->image)  ? asset('assets/img/articles/'.$produit->image) :  (  file_exists(url('storage').'/'.$produit->nom) ? url('storage').'/'.$produit->nom : asset('storage/'.$produit->images->first()->nom )) !!}" alt="your image"/>
                                <div class="image-title-wrap">
                                    <div class="row">
                                        <button type="button" onclick="removeUpload('img1')" class="remove-image btn-sm">Changer
                                            <span class="image-title"> Image chargée </span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="file-upload" id='img2'>
                            <div class="file-upload-content" style="display:block">
                            @if( isset($produit->images[1]) &&  file_exists(asset('storage/'.$produit->images[1]->nom)))
                                <img class="file-upload-image" src="{{asset('storage/'.$produit->images[1]->nom)}}" alt="your image"/>
                                <div class="image-title-wrap">
                                    <div class="row">
                                        <button type="button" onclick="removeUpload('img2')" class="remove-image btn-sm">Changer
                                            <span class="image-title"> Image chargée </span> </button>

                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="file-upload" id='img3'>
                            <div class="file-upload-content"  style="display:block">
                            @if( isset($produit->images[2]) &&  file_exists(asset('storage/'.$produit->images[2]->nom)))
                                <img class="file-upload-image" src="{{asset('storage/'.$produit->images[2]->nom)}}" alt="your image"/>
                                <div class="image-title-wrap">
                                    <div class="row">
                                        <button type="button" onclick="removeUpload('img3')" class="remove-image btn-sm">Changer
                                            <span class="image-title"> Image chargée </span> </button>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="file-upload" id='img4'>
                            <div class="file-upload-content">
                            @if( isset($produit->images[4]) &&  file_exists(asset('storage/'.$produit->images[4]->nom)))
                                <img class="file-upload-image" src="{{asset('storage/'.$produit->images[4]->nom)}}" alt="your image"/>
                                <div class="image-title-wrap">
                                    <div class="row">
                                        <button type="button" onclick="removeUpload('img4')" class="remove-image btn-sm">Changer
                                            <span class="image-title"> Image chargée </span> </button>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>


           
    <div class="form-group">
        <div class="col-sm-12">
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <script> 

    CKEDITOR.replace( 'description',{
        language: 'fr',
    } );
    </script>
              
@endsection