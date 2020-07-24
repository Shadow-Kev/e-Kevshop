@extends('layout.app')
@section('title')
Image
@stop

@section('content')

    <h1>Image</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Alt</th><th>Slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $image->id }}</td> <td> {{ $image->nom }} </td><td> {{ $image->alt }} </td><td> {{ $image->slug }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection