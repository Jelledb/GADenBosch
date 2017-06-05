@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2>Tentoonstellingen</h2>
        </div>
        <div class="col-md-5 newbutton">
            <div class="row">
                <a href="{{ url('cms/nieuwtentoonstelling') }}"><input type="submit" value="Nieuwe tentoonstelling"  name="submit"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Toon</th>
                    <th>Datum van</th>
                    <th>Datum tot</th>
                    <th>Titel</th>
                    <th width="280px">Actie</th>
                </tr>
                @foreach($allExpositions as $expos)
                    <tr>
                        <td>
                            <p>{{ $expos->id }}</p>
                        </td>
                        <td>
                            @if($expos->toon == "yes")
                                Ja
                            @endif
                            @if($expos->toon == "no")
                                Nee
                            @endif
                        </td>
                        <td>
                            <form>
                                <input type="date" value="{{ $expos->date_from }}">
                            </form>
                        </td>
                        <td>
                            <form>
                                <input type="date" value="{{ $expos->date_to }}">
                            </form>
                        </td>
                        <td>{!! $expos->title !!}</td>
                        <td>
                            <a class="btn btn-primary" href="bewerktentoonstelling/{{$expos->id}}">Bewerk</a>
                            <a class="btn btn-danger" href="{{route('deletetentoonstelling', $expos->id)}}">Verwijder</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection