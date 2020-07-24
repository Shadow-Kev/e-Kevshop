@extends('layout.app')
@section('title')
Caracteristique
@stop

@section('content')

    <h1>Caracteriques de produits <a href="{{ url('manager/caracterique/create') }}" class="btn btn-primary pull-right btn-sm">Nouvelle caracteristique</a></h1>

    <hr>
     @if(session()->has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Bravo !!!</strong>
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                <tr>
                    <th  width="10%">ID</th>
                    <th width="40%">Produit</th>
                    <th width="20%">Carac.</th>                    
                    <th  width="10%">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($caracterique as $item)
                
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom }}</td>
                    <td >
                        <ul>
                            @foreach($item->caracteristiques as $c)
                                <li><a href="{{ url('caracterique', $c->id) }}">{{ $c->nom }}:{{ $c->valeur }}</a> <a href="#" class="btn btn-danger btn-sm" style="padding:2px;" onclick="destroy({!! $c->id !!})"> <span><i class="fa fa-trash"></i></span></a></li>
                            @endforeach
                        </ul>
                    </td>
                   
                    <td>
                        <a href="{{ url('manager/caracterique/edit/'. $item->id) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                    </td>
                </tr>
                
            @endforeach
            </tbody>
        </table>
    </div>
   

    <script>
            function destroy(id) {
       
       Swal.fire({
           title: 'Supprimer  l\'article   ' + id+' ?',
           text: 'Confirmer la suppression ? !',
           html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>',    showCancelButton: true,
           confirmButtonText: '<i class="fa fa-check"></i>',
           cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
       }).then((result) => {
           if (result.value) {
               axios.delete('/manager/caracterique/' + id)
                   .then(function (response) {
                   })
                   .catch(function (error) {
                   });
               Swal.fire(
                   'Supprimé !',
                   'La suppression a été éffectué avec succès!',
                   'success'
               ).then( x =>{
                   if(x){
                     window.location.reload()
                   }
               })
       
           } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire(
                   'Abandon !',
                   'La suppression n\'a pas été éffectué !',
                   'error'
               )
           }
       })
       
       }
       
       </script>

@endsection
       