@extends('layout.app')
@section('title')
Modepaiement
@stop

@section('content')

    <h1>Modepaiement</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th> 
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Commande</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $modepaiement->id }}</td> 
                    <td> {{ $modepaiement->nom }} </td>
                    <td> {{ $modepaiement->description }} </td>
                    <td> {{ $modepaiement->commande }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection