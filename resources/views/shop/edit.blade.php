@extends('layout.app')
@section('title')
Edit Shop
@stop

@section('content')

    <h1>Edit Shop</h1>
    <hr/>

    {!! Form::model($shop, [
        'method' => 'POST',
        'url' => ['shop', $shop->id],
        'class' => 'form-horizontal',
        'files' => true
    ]) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="row">
                                
                                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
                 <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('telephone', 'Telephone: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                 <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('adresse', 'Adresse: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('logo', 'Logo: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        @if(file_exists(asset('storage/app/public/'.$shop->logo)))
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <img src="{{asset('storage/app/public/'.$shop->logo)}}" class="img-responsive">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>    
            </div>
            <div class="form-group {{ $errors->has('benefice') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('benefice', 'Benefice: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::number('benefice', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('benefice', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                 <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
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