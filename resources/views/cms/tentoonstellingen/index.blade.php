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
                <a data-toggle="tooltip" title="Maak nieuwe tentoonstelling aan" href="{{ url('cms/nieuwtentoonstelling') }}"><input type="submit" value="Nieuwe tentoonstelling"  name="submit"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">

            <table class="table">
                <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Toon</th>
                    <th class="col-md-2">Datum van</th>
                    <th class="col-md-2">Datum tot</th>
                    <th class="col-md-5">Titel</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allExpositions as $expos)
                    <tr>
                        <td>
                            <p>{{ $expos->id }}</p>
                        </td>
                        <td>
                            <div class="checkbox toonbutton">
                                <label>
                                    @if($expos->visible == 1)
                                        <input type="checkbox" value="{{ $expos->id }}" checked disabled>
                                    @else
                                        <input type="checkbox" value="{{ $expos->id }}" disabled>
                                    @endif
                                </label>
                            </div>
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
                            <a data-toggle="tooltip" title="Pas tentoonstelling aan" href="bewerktentoonstelling/{{$expos->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a data-toggle="tooltip" title="Verwijder tentoonstelling" href="{{route('deletetentoonstelling', $expos->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection