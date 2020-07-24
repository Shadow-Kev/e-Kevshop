@extends('layout.app')
@section('title')
Modifier un partenaire
@stop

@section('content')

    <h1>Modifier un partenaire <a href="{{ url('manager/partners') }}" class="btn btn-primary pull-right btn-sm">+ Lister les partenaires</a></h1>
    <hr/>

    {!! Form::model($parts, [
        'method' => 'POST',
        'url' => ['manager/partners', $parts->id],
        'class' => 'form-horizontal',
        'files'=>true
    ]) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    

            
        <div class="form-group {{ $errors->has('nom_partenaire') ? 'has-error' : ''}}">
            <div class="row">
                {!! Form::label('nom_partenaire', 'Nom du partenaire: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('nom_partenaire', old('nom_partenaire'), ['class' => 'form-control']) !!}
                    {!! $errors->first('nom_partenaire', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>

        <div class="form-group {{ $errors->has('url_partenaire') ? 'has-error' : ''}}">
            <div class="row">
                {!! Form::label('url_partenaire', 'Site web : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('url_partenaire', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('url_partenaire', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="form-group {{ $errors->has('contact_partenaire') ? 'has-error' : ''}}">
            <div class="row">
                {!! Form::label('contact_partenaire', 'Contact : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('contact_partenaire',null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contact_partenaire', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>

        <div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('adresse', 'Adresse : ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('adresse',null, ['class' => 'form-control']) !!}
                        {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        

        <div class="form-group {{ $errors->has('statut') ? 'has-error' : ''}}">
            <div class="row">
                {!! Form::label('statut', 'Afficher le partenaire: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::checkbox('statut', 1, ['class' => 'form-control', 'name'=>"statut","checked"=>($parts->statut == 1)]) !!}
                    {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>


        <div class="col-md-12">
                <div class="file-upload" id='image'>
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);"
                            accept="image/*" name="image_partenaire"  id="input-image" tar="image" />
                        <div class="drag-text">
                            <h3 id="imglabel">Image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content " style="{{$parts->image_partenaire != null ? 'display:block' : ''}}">
                        <img class="file-upload-image" style="max-width:100%;max-height:100%" src="{{asset('storage/uploads/partenaires/'.$parts->image_partenaire)}}" alt="your image"/>
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
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('ENREGISTRER', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}



@endsection


