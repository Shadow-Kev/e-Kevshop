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


            <?php
            $caracterique_array = $caracterique->caracteristiques;
        ?>

                   <div class="form-group {{ $errors->has('produit') ? 'has-error' : ''}}">
                 <div class="row">
                     {!! Form::label('produit', 'Produit: ', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-6">
                         <select name="produit" class="form-control">
                             <option value="">Selectionner un produit</option>
                             @foreach($prods as $pr)
                                <option value="{{$pr->id}}" <?php if($pr->id == $caracterique->id) echo 'selected' ?> >{{$pr->nom}}</option>
                             @endforeach
                         </select>
                         {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
                     </div>
                </div>
             </div>
             <!-- $collection->slice($n, 1); -->
             <!-- $collection->values()->get($n); -->
             <?php  
             $data1 = ($caracterique_array->count() >=0) ? $caracterique_array->get(0) : null
             ?>
             <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('lib_1', 'Libelle1: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::hidden('ident_1', $data1 == null ? null : $data1->id) !!}
                        {!! Form::text('lib_1', $data1 == null ? null : $data1->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val1', 'Valeur 1: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val1', $data1 == null ? null : $data1->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data2 = ($caracterique_array->count() >=1) ? $caracterique_array->get(1) : null ;
             ?>
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_2', $data2 == null ? null : $data2->id) !!}
                    {!! Form::label('lib_2', 'Libell2: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_2', $data2 == null ? null : $data2->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val2', 'Valeur 2: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val2', $data2 == null ? null : $data2->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data3 = ($caracterique_array->count() >=2) ? $caracterique_array->get(2) : null ;
             ?>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_3', $data3 == null ? null : $data3->id) !!}
                    {!! Form::label('lib_3', 'Libelle3: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_3', $data3 == null ? null : $data3->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">

                    {!! Form::label('val3', 'Valeur 3: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val3', $data3 == null ? null : $data3->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data4 = ($caracterique_array->count() >=3) ? $caracterique_array->get(3) : null ;
             ?>


            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_4', $data4 == null ? null : $data4->id) !!}
                    {!! Form::label('lib_4', 'Libelle 4: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_4', $data4 == null ? null : $data4->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val4', 'Valeur 4: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val4', $data4 == null ? null : $data4->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val4', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data5 = ($caracterique_array->count() >=4) ? $caracterique_array->get(4) : null ;
             ?>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_5', $data5 == null ? null : $data5->id) !!}
                    {!! Form::label('lib_5', 'Libelle 5: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_5', $data5 == null ? null : $data5->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_5', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val5', 'Valeur 5: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val5', $data5 == null ? null : $data5->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val5', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data6 = ($caracterique_array->count() >=5) ? $caracterique_array->get(5) : null ;
             ?>


            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_6', $data6 == null ? null : $data6->id) !!}
                    {!! Form::label('lib_6', 'Libelle6: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_6', $data6 == null ? null : $data6->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_6', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val6', 'Valeur 6: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val6', $data6 == null ? null : $data6->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val6', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data7 = ($caracterique_array->count() >=6) ? $caracterique_array->get(6) : null ;
             ?>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_7', $data7 == null ? null : $data7->id) !!}

                    {!! Form::label('lib_7', 'Libelle 7: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_7', $data7 == null ? null : $data7->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_7', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val7', 'Valeur 7: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val7', $data7 == null ? null : $data7->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val7', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

            <?php  
             $data8 = ($caracterique_array->count() >=7) ? $caracterique_array->get(7) : null ;
             ?>

            <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::hidden('ident_8', $data8 == null ? null : $data8->id) !!}
                    {!! Form::label('lib_8', 'Libelle8: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('lib_8', $data8 == null ? null : $data8->nom, ['class' => 'form-control']) !!}
                        {!! $errors->first('lib_8', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
          

             <div class="form-group {{ $errors->has('valeur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('val8', 'Valeur 8: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::textarea('val8', $data8 == null ? null : $data8->valeur, ['class' => 'form-control']) !!}
                        {!! $errors->first('val8', '<p class="help-block">:message</p>') !!}
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