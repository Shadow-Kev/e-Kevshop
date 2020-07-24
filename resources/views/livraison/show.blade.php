@extends('layout.app')
@section('title')
Livraison
@stop

@section('content')

    <h1>Livraison</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Date</th><th>Commande</th><th>Mode Livraison</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $livraison->id }}</td> <td> {{ $livraison->date }} </td><td> {{ $livraison->commande }} </td><td> {{ $livraison->mode_livraison }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection