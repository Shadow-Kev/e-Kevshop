@extends('layout.app')
@section('title')
Venteflash
@stop

@section('content')

    <h1>Venteflash</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Produit</th><th>Prix Flash</th><th>Date Debut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $venteflash->id }}</td> <td> {{ $venteflash->produit }} </td><td> {{ $venteflash->prix_flash }} </td><td> {{ $venteflash->date_debut }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection