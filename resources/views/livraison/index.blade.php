@extends('layout.app')
@section('title')
Livraison
@stop

@section('content')

    <h1>Livraison <a href="{{ url('livraison/create') }}" class="btn btn-primary pull-right btn-sm">+ Livraison</a></h1>
    

    <hr>
    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                <tr>
                    <th>ID</th><th>Date</th><th>Commande</th><th>Mode Livraison</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($livraison as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('livraison', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->commande }}</td><td>{{ $item->mode_livraison }}</td>
                    <td>
                        <a href="{{ url('livraison/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">  <span><i class="fa fa-edit"></i></span></a>
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
               axios.delete('/livraison/' + id)
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
