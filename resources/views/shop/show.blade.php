@extends('layout.app')
@section('title')
Shop
@stop

@section('content')

    <h1>Shop</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Telephone</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $shop->id }}</td> <td> {{ $shop->nom }} </td><td> {{ $shop->telephone }} </td><td> {{ $shop->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection