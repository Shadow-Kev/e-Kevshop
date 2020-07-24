@extends('layout.app')
@section('title')
Caracterique
@stop

@section('content')

    <h1>Caracterique</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Valeur</th><th>Produit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $caracterique->id }}</td> <td> {{ $caracterique->nom }} </td><td> {{ $caracterique->valeur }} </td><td> {{ $caracterique->produit }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection