@extends('layout.app')
@section('title')
Modelivraison
@stop

@section('content')

    <h1>Modelivraison</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Description</th><th>Commande</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $modelivraison->id }}</td> <td> {{ $modelivraison->nom }} </td><td> {{ $modelivraison->description }} </td><td> {{ $modelivraison->commande }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection