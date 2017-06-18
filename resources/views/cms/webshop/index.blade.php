@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Shop beheren</h2>
                </div>
                <div class="pull-right">
                    <a data-toggle="tooltip" title="Het aanmaken van een nieuw product" class="btn btn-success" href="{{ url('cms/producten/create') }}">Maak nieuw product</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Naam</th>
                <th>Korte beschrijving</th>
                <th>Alt</th>
                <th>Prijs</th>
                <th width="280px">Actie</th>
            </tr>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description_short }}</td>
                    <td>{{ $item->alt }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a data-toggle="tooltip" title="Pas het product aan" class="btn btn-primary" href="{{ url('cms/producten/edit', $item->id) }}">Bewerk</a>
                        <a data-toggle="tooltip" title="Verwijder het product" class="btn btn-danger" href="{{ url('cms/producten/delete', [$item->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection