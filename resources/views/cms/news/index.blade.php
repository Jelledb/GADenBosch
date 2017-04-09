@extends('layouts.cms')

@section('content')
    <div class="">
        <div class="">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Nieuwsberichten beheren</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('news.create') }}">Maak nieuwsbericht</a>
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
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Zichtbaar</th>
                <th>Aangemaakt</th>
                <th width="280px">Actie</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->titel }}</td>
                    <td>{{ $item->beschrijving }}</td>
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
                        <a class="btn btn-primary" href="{{ route('news.edit', $item->id) }}">Bewerk</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $item->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Verwijder', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection