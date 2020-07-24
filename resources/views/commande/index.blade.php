@extends('layout.app')
@section('title')
Commande
@stop

@section('content')

    <h1>Commande </h1>

  
    <hr>

    <div class="table table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Destinataire</th>
                    <th>Livraison</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($commande as $item)
                <tr>
                    <td><a href="{{ url('commande', $item->id) }}">{{ $item->date }}</a></td>
                    <td>{{ $item->nom_receveur }}</td>
                    <td>{{ $item->getModeLivraison->nom }}</td>
                    <td class="text-center">
                        @if($item->statut == 1)
                            <span class="badge badge-warning">En attente de paiement</span>
                        @elseif($item->statut == 2)
                            <span class="badge badge-success">Validé et payé</span>
                        @elseif($item->statut == 0)
                            <span class="badge badge-danger">Paiement echoué</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('manager/commande/details/'. $item->slug) }}" class="btn btn-primary btn-sm"><i class="fa fa-list-alt margin-right-3"></i>Détails</a>
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
               axios.delete('/commande/' + id)
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
