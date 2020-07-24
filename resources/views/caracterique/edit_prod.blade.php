@extends('layout.app')
@section('title')
Edit Caracterique
@stop

@section('content')

    <h1>Modifier une caracteristique</h1>
    <hr/>

    <div class="col-lg-12">
        <div class="card-form">
            {!! Form::model($caracterique, [
                'method' => 'POST',
                'url' => ['manager/caracterique', $caracterique->id],
                'class' => 'form-horizontal'
            ]) !!}

                   <div class="form-group {{ $errors->has('produit') ? 'has-error' : ''}}">
                 <div class="row">
                     {!! Form::label('produit', 'Produit: ', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-6">
                         <select name="produit" class="form-control">
                             <option value="">Selectionner un produit</option>
                             @foreach($prods as $pr)
                                <option value="{{$pr->id}}" <?php if($pr->id == $caracterique->produit) echo 'selected' ?> >{{$pr->nom}}</option>
                             @endforeach
                         </select>
                         {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
                     </div>
                </div>
             </div>

             <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('valeur', 'Valeur: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('valeur', null, ['class' => 'form-control']) !!}
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
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@endsection