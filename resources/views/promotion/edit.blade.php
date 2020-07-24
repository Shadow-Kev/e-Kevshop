@extends('layout.app')
@section('title')
Modifier une promotion
@stop

@section('content')

    <h1>Modifier une promotion</h1>
    <hr/>

    {!! Form::model($promos, [
        'method' => 'POST',
        'url' => ['manager/promotion', $promos->id],
        'class' => 'form-horizontal'
    ]) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

            <div class="form-group row {{ $errors->has('produit') ? 'has-error' : ''}}">
                <div class="col-sm-3"> 
                    {!! Form::label('produit', 'Produit: ', ['class' => ' ']) !!}
                </div>
                <div class="col-sm-9">
                    {!! Form::select('produit', \App\Produit::pluck('nom','id'), $promos->_produit->id, ['placeholder' => 'Choisissez un  produit','class' => 'form-control']) !!}
                    {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('prix_flash') ? 'has-error' : ''}}">
                <div class="col-sm-3 "> 
                {!! Form::label('prix', 'Prix Promotion: ', ['class' => 'control-label']) !!}
                </div>
                <div class="col-sm-9">
                    {!! Form::number('prix', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('date_debut') ? 'has-error' : ''}}">
                <div class="col-sm-3">    {!! Form::label('date_debut', 'Date Debut: ', ['class' => 'control-label']) !!} </div>
                <div class="col-sm-8">
                    {!! Form::date('date_debut', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('date_fin') ? 'has-error' : ''}}">
                <div class="col-sm-3">    {!! Form::label('date_fin', 'Date Fin: ', ['class' => 'control-label']) !!} </div>
                <div class="col-sm-8">
                    {!! Form::date('date_fin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_fin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
                <div class="col-sm-3">    {!! Form::label('description', 'Description: ', ['class' => 'control-label']) !!} </div>
                <div class="col-sm-8">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('ENREGISTRER', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}



@endsection