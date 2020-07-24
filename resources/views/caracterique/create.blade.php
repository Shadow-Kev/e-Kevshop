@extends('layout.app')
@section('title')
Nouvelle caracteristique
@stop

@section('content')

    <h1>Nouvelle Caracteristique</h1>
    <hr/>


     <div class="col-lg-12">
         <div class="card-form">
            {!! Form::open(['url' => 'manager/caracterique', 'class' => 'form-horizontal','method' => 'POST']) !!}


            @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger alert-dismissable">{{ $error }}</li>
                @endforeach
                </ul>
            @endif

             <div class="form-group {{ $errors->has('produit') ? 'has-error' : ''}}">
                 <div class="row">
                     {!! Form::label('produit', 'Produit: ', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-6">
                         <select name="produit" class="form-control">
                             <option value="">Selectionner un produit</option>
                             @foreach($prods as $pr)
                                <option value="{{$pr->id}}" >{{$pr->nom}}</option>
                             @endforeach
                         </select>
                         {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
                     </div>
                </div>
             </div>


            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Libelle 1: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('valeur', 'Valeur 1: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    {!! Form::label('nom', 'Libelle 2: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    {!! Form::label('valeur', 'Valeur 2: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 3: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 3: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 4: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 4: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 5: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 5: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 6: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 6: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 7: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 7: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>

            <div class="form-group">
                    <div class="row">
                        {!! Form::label('nom', 'Libelle 8: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nom[]', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('valeur', 'Valeur 8: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('valeur[]', null, ['class' => 'form-control', 'rows' => 3]) !!}
                            {!! $errors->first('valeur', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
            </div>


           

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}
         </div>
     </div>

     

@endsection