@extends('layout.app')
@section('title')
Edit Modepaiement
@stop

@section('content')

    <h1>Edit Modepaiement</h1>
    <hr/>

    {!! Form::model($modepaiement, [
        'method' => 'PATCH',
        'url' => ['modepaiement', $modepaiement->id],
        'class' => 'form-horizontal'
    ]) !!}

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



            <div class="form-group {{ $errors->has('identifiant_marchand') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('identifiant_marchand', 'identifiant: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('identifiant_marchand', null, ['class' => 'form-control',  'required'=>true]) !!}
                                {!! $errors->first('identifiant_marchand', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('secret_marchand') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('secret_marchand', 'Code secret: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('secret_marchand', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('secret_marchand', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('param1') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('param1', 'Parametre 1: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('param1', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('param1', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group {{ $errors->has('param2') ? 'has-error' : ''}}">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('param2', 'Parametre 2: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('param2', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('param2', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
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