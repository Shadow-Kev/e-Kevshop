@extends('layout.app')
@section('title')
Typearticle
@stop

@section('content')

    <h1>Typearticle <a href="{{ url('typearticle/create') }}" class="btn btn-primary pull-right btn-sm">Add New Typearticle</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltypearticle">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Description</th><th>Slug</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($typearticle as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('typearticle', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->description }}</td><td>{{ $item->slug }}</td>
                    <td>
                        <a href="{{ url('typearticle/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['typearticle', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
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
               axios.delete('/typearticle/' + id)
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
