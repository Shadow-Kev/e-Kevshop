@extends('layout.app')
@section('title')
Publicites
@stop

@section('content')

    <h1>Publicites <a href="{{ url('manager/publicites/create') }}" class="btn btn-primary pull-right btn-sm">+ publicites</a></h1>

    
    <hr>
    
    @if(isset($success))
        <ul class="alert alert-success">
            <li>{{ $success }}</li>
        </ul>
    @endif

    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th width="30%">libelle</th>
                    <th width="10%">Debut</th>
                    <th width="10%">Fin</th>
                    <th width="10%">Statut</th>
                    <th width="10%">Position</th>
                    <th width="10%">Actions</th>              
                </tr>
            </thead>
            <tbody>
             @foreach($pubs as $item)



             <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->libelle }}</td>
                    <td>{{ $item->date_debut }}</td>
                    <td>{{ $item->date_fin }}</td>
                    <td>
                        @if( $item->date_debut >= now() )
                            <span class="badge badge-warning">EN ATTENTE</span>
                        @elseif($item->date_debut <= now() && $item->date_fin >= now())
                            <span class="badge badge-success">EN COURS</span>
                        @else
                            <span class="badge badge-danger">TERMINEE</span>
                        @endif
                    </td>
                    <td>{{ $item->position }}</td>
                    <td>
                        <a href="{{ url('manager/publicites/edit/'. $item->id) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                        <!-- <button type="submit" class="btn-danger btn-sm" data-toggle="modal" data-target="#Mypopup"> <span><i class="fa fa-trash"></i></span></button> -->
                        <a href="#" class="btn btn-danger btn-sm " onclick="destroy({!! $item->id !!})"> <span><i class="fa fa-trash"></i></span></a>
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
               axios.delete('/manager/publicites/' + id)
                   .then(function (response) {
                   })
                   .catch(function (error) {
                   });
               Swal.fire(
                   'Supprimé !',
                   'Suppression éffectuée avec succès!',
                   'success'
               )
               window.location.reload()
       
           } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire(
                   'Abandon !',
                   'La suppression a échouée !',
                   'error'
               )
           }
       })
       
       }
       
       </script>
@endsection