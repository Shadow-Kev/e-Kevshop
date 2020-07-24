@extends('layout.app')
@section('title')
Shop
@stop
@section('css')
      <style>
        .clear-line{
  
  width:100%;
  height:20px;
}

.img-c{
    position: relative;
    height: 0;
    width: 100%;
    overflow: hidden;
  padding-top: 75.09%
}


img{
  display:block;
  position: absolute;
    display: block;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
      width: 100%;
    height: auto;
    margin: auto;
}

.card-type-1{
    background-color: #fff;
    border-radius: 4px;
    border: 1px solid #e1e8ed;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    min-width:300px;
    padding: 15px;
    width: 100%;
}

.card-type-2 {

    border-radius: 3px;
    background-color: #fff;
  background-color: #fff;

    border: 1px solid #d8d8d8;
    border-bottom-width: 2px;
    width:100%;
     min-width:300px;
    padding: 8px;
  margin-bottom:3%;
}
      </style>

@endsection
@section('content')


    <h1>Shop <a href="{{ url('shop/create') }}" class="btn btn-primary pull-right btn-sm">+ Shop</a></h1>


    <hr>
    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                <tr>
                    <th width="5%">ID</th><th width="40%">Nom</th><th width="20%">Telephone</th><th width="20%">Email</th> <th width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($shop as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom }}</td><td>{{ $item->telephone }}</td><td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('shop/edit/' . $item->id) }}" class="btn btn-primary btn-sm"> <span><i class="fa fa-edit"></i></span></a>
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
               axios.delete('/shop/' + id)
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