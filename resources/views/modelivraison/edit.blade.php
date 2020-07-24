@extends('layout.app')
@section('title')
Edit Modelivraison
@stop

@section('content')

    <h1>Edit Modelivraison</h1>
    <hr/>

    {!! Form::model($modelivraison, [
        'method' => 'PATCH',
        'url' => ['manager/modelivraison', $modelivraison->id],
        'class' => 'form-horizontal'
    ]) !!}

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                 <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
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
                            <div class="col-sm-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('commande') ? 'has-error' : ''}}">
                 <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            {!! Form::label('commande', 'Commande: ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::number('commande', null, ['class' => 'form-control']) !!}
                                {!! $errors->first('commande', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

    <div class="form-group">
         <div class="row">
            <div class="col-sm-12">
                {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
            </div>
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