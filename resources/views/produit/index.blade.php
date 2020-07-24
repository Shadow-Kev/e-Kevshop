@extends('layout.app')
@section('content')

    <h1>Produit<a href="{{ url('manager/produit/create') }}" class="btn btn-primary pull-right btn-sm">+ Produit</a></h1>
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
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Prix réduit</th>
                <th>Quantite</th>
                <th>Marque</th>
                <th> Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produit as $item)
            <?php 
                            
                            $nom = $item->image;
                            //dd($nom);
                            if(file_exists(url('storage').'/'.$nom)) 
                            ;
                            else;
                                //dd($item->images); ?>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td data-id="{{$item->nom}}" id="slug"><a
                                href="{{ url('produit', $item->id) }}">{{ $item->nom }}</a></td>
                    <td>{{ number_format($item->prix,0,",",' ') }}</td>
                    <td>{{ number_format($item->prix_reduit,0,",",' ') }}</td>
                    <td>{{ $item->quantite }}</td>
                    <td>{{ App\Marque::find($item->marque)->title }}</td>

                    <td>
                        @if($item->id <= 91)
                            <img src="{!!  file_exists('assets/img/articles/'.$item->image)  ? asset('assets/img/articles/'.$item->image) : asset('assets/img/IMG-20180823-WA0023.jpg')!!}"
                                 width="50" height="50"/>
                        @else
                            <img src="<?php 
                            if(file_exists(url('storage').'/'.$item->image)) 
                                echo url('storage').'/'.$item->image; 
                            else
                             echo asset('storage/'.$item->image); ?>" width="50" height="50"/>
                        @endif
                    </td>

                    <td>
                        <a href="{{ url('manager/produit/edit/' . $item->id ) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>

                        <a href="#" class="btn btn-danger btn-sm " onclick="destroy({!! $item->id !!})"> <span><i class="fa fa-trash"></i></span></a>

                        <a href="{{$item->lien_details_constructeur != null ? $item->lien_details_constructeur  : '#' }}" class="btn btn-success btn-sm" target='_blank' > <span><i class="fa fa-list"></i></span></a>

                        <!-- lien_details_constructeur -->
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
        axios.delete('/manager/produit/' + id)
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

@section('js')
@endsection
 