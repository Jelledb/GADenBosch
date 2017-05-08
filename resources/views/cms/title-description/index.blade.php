@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Titel en beschrijvingen beheren</h2>
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
                <th>URL</th>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th width="280px">Actie</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->route }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('cms/titel-beschrijving/edit', $item->id) }}">Bewerk</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection