@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Foto's slider aanpassen</h2>
                </div>
                <div class="pull-right">
                    <a data-toggle="tooltip" title="Voeg nieuwe foto toe" class="btn btn-success" href="{{ route('newimageslider') }}">Voeg foto toe</a>
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
                <th>Foto</th>
                <th>Zichtbaar</th>
                <th>Aangemaakt</th>
                <th width="280px">Actie</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->foto }}</td>
                    <td>
                        @if($item->zichtbaar)
                            Ja
                        @endif
                        @if(!$item->zichtbaar)
                            Nee
                        @endif
                    </td>
                    <td>
                        {{ date("d-m-Y", strtotime($item->aangemaakt)) }}
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('bewerkimageslider', $item->id) }}">Bewerk</a>
                        <a class="btn btn-danger" href="{{ route('deleteimageslider', $item->id) }}">Verwijder</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection