@extends('layout.app')
@section('title')
User
@stop

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Prenom</th><th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->nom }} </td><td> {{ $user->prenom }} </td><td> {{ $user->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection