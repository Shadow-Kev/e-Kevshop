@extends('layout.app')
@section('title')
    Codes de réductions
@stop

@section('content')

    <h1>Codes de réductions</h1>
    <hr>
    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Code</th>
                    <th>Expire le</th>
                    <th>Nom</th>
                    <th>tel</th>
                    <th>statut</th>
                </tr>
            </thead>
            <tbody>
            @foreach($codes as $item)
                <tr>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->fin_validite }}</td>
                    <td>{{ $item->beneficiaire }}</td>
                    <td>{{ $item->phone_beneficiaire }}</td>
                    <td>{!! $item->statut  ? "<span class='badge badge-success'>Actif</span>" : "<span class='badge badge-danger'>Inactif</span>" !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <script>

       
       </script>
@endsection