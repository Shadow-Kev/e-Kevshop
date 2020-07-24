@extends('layout.app')
@section('title')
Rubriques
@stop

@section('content')

    <h1>Rubriques <a href="{{ url('manager/rubriques/create') }}" class="btn btn-primary pull-right btn-sm">+ rubriques</a></h1>

    
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
                    <th width="25%">Titre</th>
                    <th width="5%">ordre</th>
                    <th width="10%">Mode d'affichage</th>
                    <th width="10%">Statut</th>
                    <th width="20%">Actions</th>              
                </tr>
            </thead>
            <tbody>
             @foreach($rubs as $item)

             <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->titre }}</td>
                    <td>{{ $item->ordre }}</td>
                    <td>{{ $item->type_affichage }}</td>
                    <td>
                        @if( $item->statut == 0 )
                            <span class="badge badge-danger">INACTIF</span>
                        @elseif($item->statut == 1)
                            <span class="badge badge-success">ACTIF</span>
                        @else
                            <span class="badge badge-warning">NON DETERMINE</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('manager/rubriques/edit/'. $item->id) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                        <!-- <button type="submit" class="btn-danger btn-sm" data-toggle="modal" data-target="#Mypopup"> <span><i class="fa fa-trash"></i></span></button> -->
                        <a href="#" class="btn btn-danger btn-sm " onclick="destroy({!! $item->id !!})"> <span><i class="fa fa-trash"></i></span></a>
                        <a href="{{url('manager/rubriques/details/'.$item->id)}}" class="btn btn-warning btn-sm "> <span><i class="fa fa-list"></i></span></a>
                    </td>
                </tr>               
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
            
    function destroy(id) {
       
       Swal.fire({
           title: 'Supprimer cet article?',
           text: 'Confirmer la suppression ? !',
           html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>', showCancelButton: true,
           confirmButtonText: '<i class="fa fa-check"></i>',
           cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
       }).then((result) => {
           if (result.value) {
               axios.delete('/rubriques/' + id)
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