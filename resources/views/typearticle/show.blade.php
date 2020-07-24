@extends('backLayout.app')
@section('title')
Typearticle
@stop

@section('content')

    <h1>Typearticle</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Description</th><th>Slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $typearticle->id }}</td> <td> {{ $typearticle->nom }} </td><td> {{ $typearticle->description }} </td><td> {{ $typearticle->slug }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection