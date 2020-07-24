@extends('layout.app')
@section('title')
Paiement
@stop

@section('content')

    <h1>Hitoriques de Navigation <i class="fa fa-list"></i></h1>
    <hr>
    <div class="table table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead class="text-uppercase thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>IP</th>
                                <th>Utilisateur</th>
                                <th>Table</th>
                                <th>Date de création</th>
                            </tr>
                            </thead>
            <tbody>
                  @foreach ($log as $item)
                  <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->action }}</td>
                        <td>{{ $item->adresseIp }}</td>
                        <td>{{ $item->user }}</td>
                        <td>{{ $item->table }}</td>
                        <td>{{ $item->created_at}}</td>
                    </tr>     
                  @endforeach       
            </tbody>
        </table>
    </div>

@endsection
