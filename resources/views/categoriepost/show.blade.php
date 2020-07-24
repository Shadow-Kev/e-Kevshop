@extends('layout.app')
@section('title')
Categorie
@stop

@section('content')

    <h1>Categorie</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $categorie->id }}</td> <td> {{ $categorie->cat_libelle }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection