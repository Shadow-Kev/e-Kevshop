@extends('backLayout.app')
@section('title')
Paiement
@stop

@section('content')

    <h1>Paiement</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Date</th><th>Mode Paiement</th><th>User</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $paiement->id }}</td> <td> {{ $paiement->date }} </td><td> {{ $paiement->mode_paiement }} </td><td> {{ $paiement->user }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection