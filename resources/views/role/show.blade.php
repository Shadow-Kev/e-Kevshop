@extends('layout.app')
@section('title')
Role
@stop

@section('content')

    <h1>Role</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Description</th><th>Slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $role->id }}</td> <td> {{ $role->nom }} </td><td> {{ $role->description }} </td><td> {{ $role->slug }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection