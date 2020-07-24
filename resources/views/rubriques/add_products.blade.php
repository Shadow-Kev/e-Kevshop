@extends('layout.app')
@section('title')
    Edition de rubrique : {{$rubs->titre}}
@stop

@section('content')
<?php $typeAffichages = ["SLIDE"=>"Bloc Slide horizontal", "BLOC_LEAD"=>"Bloc avec lead", "PUB"=>"Bloc banniere publicitaire"]  ?>
    <h1>Nouvelle rubrique</h1>
    <hr/>

            {!! Form::open(
                ['url' => 'manager/rubriques/ajouterproduits', 
                'class' => 'form-horizontal', 
                'method'=>'POST']) 
            !!}
            
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif


            {!! Form::hidden('rubrique_id', $rubs->id) !!}

            <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('titre', 'Titre: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('titre', $rubs->titre, ['class' => 'form-control',"disabled"=>true]) !!}
                    </div>
                </div>
            </div>

            
            <div class="form-group {{ $errors->has('categories') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('categories', "Categorie produit: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('categories', $liste_categories->pluck('nom','id')->all(), null, ['placeholder' => 'Choisissez une categorie','class' => 'form-control','id'=>'categories']) !!}
                        {!! $errors->first('categories', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>
                    
            <div class="form-group {{ $errors->has('fournisseur') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('fournisseurs', "Fournisseur/Boutique: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('fournisseurs', $liste_fournisseurs->pluck('nom','id')->all(), null, ['placeholder' => 'Choisissez un fournisseur','class' => 'form-control','id'=>'fournisseurs']) !!}
                        {!! $errors->first('fournisseur', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>
                    
            <div class="form-group {{ $errors->has('liste_produits') ? 'has-error' : ''}}">
                <div class="row">
                    {!! Form::label('liste_produits', "Selectionner les produtis: ", ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('liste_produits[]', [], null, ['multiple'=>'multiple', 'placeholder' => 'Choisissez les produits','class' => 'form-control','id'=>'liste_produits', 'style'=>"min-height:250px;"]) !!}
                        {!! $errors->first('liste_produits', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>    
            </div>
                    
            <div class="form-group">
                <div class=" col-sm-12">
                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}


            <div class="table table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                    <tr>
                        <th width="30%">Produits</th>
                        <th width="10%">marque</th>
                        <th width="10%">fournisseur</th>
                        <th width="10%">Actions</th>              
                    </tr>
                </thead>
                <tbody>
                @foreach($rubs->produits->where('deleted_at',null)->all() as $item)
                <tr>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->marque_->title }}</td>
                    <td>{{ $item->shop_->nom }}</td>
                    <td>
                    <a href="#" class="btn btn-danger btn-sm " onclick="destroy({!! $rubs->id !!} , {!! $item->id !!})"> <span><i class="fa fa-trash"></i></span></a>
                    <?php 
                    
                    $lead = $rubs->leadproduit();
                    $ilead = $lead != null ? $lead->id : -1;
                     ?>
                    @if($rubs->type_affichage == 'BLOC_LEAD' &&  $item->id != $ilead)
                        <a href="#" class="btn btn-primary btn-sm " onclick="setleadprod({!! $rubs->id !!} , {!! $item->id !!})"> <span><i class="fa fa-check-square"></i></span></a>
                    @endif
                    @if($rubs->type_affichage == 'BLOC_LEAD' &&  $item->id == $ilead)
                        <span class="btn btn-success"><i class="fa fa-check-circle"></i></span>
                    @endif
                    </td>

                </tr>               
                @endforeach
                </tbody>
            </table>
        </div>


@endsection

@section('js')
<script>
    function destroy(id, prod) {
       
       Swal.fire({
           title: 'Voulez vous retirer ce produit ?',
           text: 'Confirmer la suppression ? !',
           html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>',    showCancelButton: true,
           confirmButtonText: '<i class="fa fa-check"></i>',
           cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
       }).then((result) => {
           if (result.value) {
               axios.delete('/manager/rubriques/dropfromrubriques/' + id + '/' + prod)
                   .then(function (response) {
                   })
                   .catch(function (error) {
                   });
               Swal.fire(
                   'Supprimé !',
                   'Suppression éffectuée avec succès!',
                   'success'
               ).then( (res)=>{
                    window.location.reload()
               } );
       
           } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire(
                   'Abandon !',
                   'La suppression a échouée !',
                   'error'
               )
           }
       })
       
       }

       function getprods(cat, four){
        console.log(cat+'getValues'+four);

            $.ajax({
                url : '/manager/rubriques/listprods/'+cat+'/'+four,
                type : 'get',
                success : function(data){
                    var innerHt = '<option disabled value="">Selectionner un produit</option>';
                    if(data.length){
                        data.forEach(x=>{
                            innerHt += '<option value="'+x.id+'">'+x.nom+'</option>';
                        });
                    }else{
                        innerHt = '<option disabled value="">Aucun produit correspondant</option>'
                    }
                    

                    $('#liste_produits').html(innerHt);

                    console.log($('#liste_produits'));
                    
                }
            });
       }

       function getValues()
       {
        
           var idcat = $('#categories').val() ? $('#categories').val() : 0 ;
           var idfour = $('#fournisseurs').val() ? $('#fournisseurs').val() : 0;
            getprods(idcat, idfour);
       }

       function setleadprod(id, prod) {
            Swal.fire({
                title: 'Voulez vous retirer positionner ce produit en avant ?',
                text: 'Confirmer votre choiox ? !',
                html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>',    showCancelButton: true,
                confirmButtonText: '<i class="fa fa-check"></i>',
                cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
            }).then((result) => {
                if (result.value) {
                    axios.get('/manager/rubriques/setleadproduct/' + id + '/' + prod)
                        .then(function (response) {
                        })
                        .catch(function (error) {
                        });
                    Swal.fire(
                        'Super !!!! !',
                        'Modification effectuee avec succes!',
                        'success'
                    ).then( (res)=>{
                            window.location.reload()
                    });
            
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Erreur !',
                        'La modification a échouée !',
                        'error'
                    )
                }
            })
       };


       $('#categories').on('change',function(ev){
            getValues()
       });

       $('#fournisseurs').on('change',function(ev){
            getValues()
       });
       
       
       </script>
@endsection