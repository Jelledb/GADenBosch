@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Sponsors beheren</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('nieuwsponsor') }}">Maak sponsor</a>
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
                <th>Foto</th>
                <th>Website</th>
                <th>Zichtbaar</th>
                <th width="280px">Actie</th>
            </tr>
            @foreach ($sponsors as $sponsor)
                <tr>
                    <td>{{ $sponsor->id }}</td>
                    <td>{{ $sponsor->name }}</td>
                    <td>{{ $sponsor->photo }}</td>
                    <td>{{ $sponsor->website }}</td>
                    <td>
                        @if($sponsor->visible == "yes")
                            Ja
                        @endif
                        @if($sponsor->visible == "no")
                            Nee
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('bewerksponsor', $sponsor->id) }}">Bewerk</a>
                        <a class="btn btn-danger" href="{{ route('deletesponsor', $sponsor->id) }}">Verwijder</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection