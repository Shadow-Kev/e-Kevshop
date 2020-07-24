@extends('layout.app')
@section('title')
Vente
@stop

@section('content')

    <h1>Vente</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Produit</th><th>Date</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $vente->id }}</td> <td> {{ $vente->produit }} </td><td> {{ $vente->date }} </td><td> {{ $vente->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection