@extends('layout.app')
@section('title')
Partenaires
@stop

@section('content')

    <h1>Partenaires <a href="{{ url('manager/partners/create') }}" class="btn btn-primary pull-right btn-sm">+ Partenaire</a></h1>

    
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
                    <th width="30%">Nom</th>
                    <th width="10%">Contact</th>
                    <th width="10%">Site web</th>
                    <th width="10%">adresse</th>
                    <th width="10%">Statut</th>
                    <th width="10%">Actions</th>              
                </tr>
            </thead>
            <tbody>
             @foreach($parts as $item)



             <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom_partenaire }}</td>
                    <td>{{ $item->contact_partenaire }}</td>
                    <td>{{ $item->url_partenaire }}</td>
                    <td>{{ $item->adresse }}</td>
                    <td class="text-center">{!!   $item->statut ? "<span class='badge badge-success'>Actif</span>" : "<span class='badge badge-danger'>Inactif</span>" !!}</td>
                    <td>
                        <a href="{{ url('manager/partners/edit/'. $item->id) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
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
               axios.delete('partners/' + id)
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