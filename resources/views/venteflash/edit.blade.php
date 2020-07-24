@extends('layout.app')
@section('title')
Edit Venteflash
@stop

@section('content')

    <h1>Edit Venteflash</h1>
    <hr/>

    {!! Form::model($venteflash, [
        'method' => 'POST',
        'url' => ['venteflash', $venteflash->id],
        'class' => 'form-horizontal'
    ]) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

            <div class="form-group {{ $errors->has('produit') ? 'has-error' : ''}}">
                {!! Form::label('produit', 'Produit: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('produit', \App\Produit::pluck('nom','id'), $venteflash->_produit->id, ['placeholder' => 'Choisissez un  produit','class' => 'form-control']) !!}
                    {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prix_flash') ? 'has-error' : ''}}">
                {!! Form::label('prix_flash', 'Prix Flash: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('prix_flash', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prix_flash', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_debut') ? 'has-error' : ''}}">
                {!! Form::label('date_debut', 'Date Debut: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::date('date_debut', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_fin') ? 'has-error' : ''}}">
                {!! Form::label('date_fin', 'Date Fin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::date('date_fin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_fin', '<p class="help-block">:message</p>') !!}
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
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}



@endsection