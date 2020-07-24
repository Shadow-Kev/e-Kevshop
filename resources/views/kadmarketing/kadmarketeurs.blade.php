@extends('layout.app')
@section('title')
    Kadmarketeurs
@stop

@section('content')

    <h1>Kadmarketeurs </h1>
    <hr>
    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Code</th>
                    <th>Tel</th>
                    <th>email</th>
                    <th>Statut</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($kadmarketeurs as $item)
                <tr>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->nom }} {{ $item->prenom }}</td>
                    <td>{{ $item->code_kadmarketeur }}</td>
                    <td>{{ $item->tel }}</td>
                    <td>{{ $item->email }}</td>
                    <td class="text-center">{!!   $item->statut  ? "<span class='badge badge-success'>Actif</span>" : "<span class='badge badge-danger'>Inactif</span>" !!}</td>
                    <td>
                        <a href="#" style="padding: 3px 7px;" onclick="{!! $item->statut ? 'desactivate('.$item->id.')' : 'activate('.$item->id.')'  !!}" class=" btn btn-{{$item->statut ? 'danger' : 'success'}} btn-xs">
                          <span><i class="fa fa-unlock"></i></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <script>
        function activate(id) {

            Swal.fire({
                title: 'Activer ce kadmarketeur ?',
                text: 'Confirmer l\'activation ? !',
                html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>', showCancelButton: true,
                confirmButtonText: '<i class="fa fa-check"></i>',
                cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
            }).then((result) => {
                console.log(result);
                if (result.value) {
                    axios({
                        method: 'post',
                        url: "/manager/activatekadmarketeur",
                        headers: {},
                        data: {
                            kdm: id,
                            _token : "{{ csrf_token() }}"// This is the body part
                        }
                    }).then(function (response) {
                        if(response.res = false){
                            Swal.fire(
                                'Erreur !',
                                'L\' activation a échoué !',
                                'error'
                            )
                        }else{
                            window.location.reload()
                        }

                    }).catch(function (error) {
                        Swal.fire(
                            'Erreur !',
                            'L\' activation a échoué !',
                            'error'
                        )
                    });

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Erreur !',
                        'L\' activation a échoué !',
                        'error'
                    )
                }
            })

        }

        function desactivate(id) {

            Swal.fire({
                title: 'Désactiver ce kadmarketeur ?',
                text: 'Confirmer l\'action ? !',
                html: '<h1><i class="fa fa-warning" style="color: orangered"></i></h1>', showCancelButton: true,
                confirmButtonText: '<i class="fa fa-check"></i>',
                cancelButtonText: '<i class="fa fa-window-close" aria-hidden="true"></i>'
            }).then((result) => {
                console.log(result);
                if (result.value) {
                    axios({
                        method: 'post',
                        url: "/manager/disablekadmarketeur",
                        headers: {},
                        data: {
                            kdm: id,
                            _token : "{{ csrf_token() }}"// This is the body part
                        }
                    }).then(function (response) {
                        if(response.res == false){
                            Swal.fire(
                                'Erreur !',
                                'L\' action a échoué !',
                                'error'
                            );
                        }else{
                            window.location.reload();
                        }
                    }).catch(function (error) {
                        Swal.fire(
                            'Erreur !',
                            'L\' action a échoué !',
                            'error'
                        );
                    });

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Erreur !',
                        'L\' action a échoué !',
                        'error'
                    )
                }
            })

        }

    </script>
@endsection