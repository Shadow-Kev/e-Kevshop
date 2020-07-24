@extends('layout.app')
@section('title')
    Nouvelle publicite
@stop

@section('content')
<?php $position = [0=>"Slide principale", 1=>"Annexe slide 1", 2=>"Annexe slide 2",3=>"Menu de gauche", 4=>"Pages infos generales"]  ?>
    <h1>Nouvelle publicite</h1>
    <hr/>

            {!! Form::open(['url' => 'manager/publicites', 'class' => 'form-horizontal','files'=>true]) !!}
            
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif


            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('libelle', 'Libelle: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('libelle', old('libelle'), ['class' => 'form-control']) !!}
                        {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('text1', 'Texte 1: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('text1', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('text1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('text3', 'Texte 3: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('text3',null, ['class' => 'form-control']) !!}
                        {!! $errors->first('text3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('text4', 'Texte 4: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('text4',null, ['class' => 'form-control']) !!}
                        {!! $errors->first('text4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('date_debut', 'Date Debut: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::date('date_debut', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            


            <div class="form-group {{ $errors->has('date_fin') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('date_fin', 'Date Fin: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::date('date_fin', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('date_fin', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('statut', 'Afficher la pub: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::checkbox('statut', 1, ['class' => 'form-control', 'name'=>"statut"]) !!}
                        {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('position', 'Position: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('position', \App\PubsPositions::pluck('libelle','id'), null, ['placeholder' => 'Choisissez une position','class' => 'form-control','id'=>'position_select']) !!}
                        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>

            <div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('link', 'Lien de details: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('link',null, ['class' => 'form-control']) !!}
                        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                     <div class="file-upload" id='image'>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);"
                                accept="image/*" name="image"  id="input-image" tar="image" />
                            <div class="drag-text">
                                <h3 id="imglabel">Image</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image"/>
                            <div class="image-title-wrap">
                                <div class="row">
                                    <button type="button" onclick="removeUpload('image')" class="remove-image btn-sm">Changer
                                        <span class="image-title"> Image chargée </span> </button>
                                </div>
                            </div>
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
<script>
$(document).ready(function(){
    $( "#position_select" ).change(function(e) {
        $.ajax({
         url: "/publicites/dimensionsposition",
         data: { positionid: this.value },
         type: "GET",
         beforeSend: function(xhr){xhr.setRequestHeader('Accept', 'application/json');},
         success: function(data) { 
             $('#imglabel').html(data.x+' X '+data.y);
             removeUpload('image');

          }
      });
    });

    

});
</script>
@endsection