@extends('layout.app')
@section('title')
Venteflash
@stop

@section('content')

    <h1>Venteflash <a href="{{ url('venteflash/create') }}" class="btn btn-primary pull-right btn-sm">+ Venteflash</a></h1>



    <hr>p
    <div class="table table-responsive">
            <table class="table table-bordered table-striped table-hover" id="tblvente">
                    <thead>
                <tr>
                    <th width="10%">ID</th><th width="40%">Produit</th><th width="10%">Prix Flash</th><th width="10%">Date Debut</th><th width="10%">Date fin</th><th width="10%">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($venteflash as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->_produit->nom }}</td><td>{{ $item->prix_flash }}</td><td>{{ $item->date_debut }}</td><td>{{ $item->date_fin }}</td>
                    <td>
                        <a href="{{ url('venteflash/edit/'. $item->id) }}" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>

                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['venteflash', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        <button type="submit" class="btn-danger btn-sm" data-toggle="modal" data-target="#Mypopup"> <span><i class="fa fa-trash"></i></span></button>

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
