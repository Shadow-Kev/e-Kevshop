@extends('layout.app')
@section('title')
Marque
@stop

@section('content')

    <h1>{{ $marque->title }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Description</th><th>Slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $marque->id }}</td> 
                    <td> {{ $marque->title }} </td>
                    <td> {{ $marque->description }} </td>
                    <td> {{ $marque->slug }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection