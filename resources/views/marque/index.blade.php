@extends('layout.app')
@section('title')
Marque
@stop

@section('content')

    <h1>Marques <a href="{{ url('manager/marque/create') }}" class="btn btn-primary pull-right btn-sm">+ Marque</a></h1>
 

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
                    <th width="10%">ID</th>
                    <th width="30%">Title</th>
                    <th width="40%">Description</th>
                    <th width="10%">Disponibilité</th>
                    <th width="10%">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($marque as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('manager/marque', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->description }}</td>
                    <td class="text-center">{!!   $item->displayOnSite ? "<span class='badge badge-success'>Actif</span>" : "<span class='badge badge-danger'>Inactif</span>" !!}</td>
                    <td>
                        <a href="{{ url('manager/marque/edit/' . $item->id ) }}" class="btn btn-primary btn-sm"> <span><i class="fa fa-edit"></i></span></a>
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
               axios.delete('/manager/marque/' + id)
                   .then(function (response) {
                   })
                   .catch(function (error) {
                   });
               Swal.fire(
                   'Supprimé !',
                   'La suppression a été éffectué avec succès!',
                   'success'
               )
               window.location.reload()
       
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