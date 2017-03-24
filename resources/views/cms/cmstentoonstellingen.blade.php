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
                <a href="{{ url('cms/tentoonstellingen') }}"><input type="submit" value="Nieuwe tentoonstelling"  name="submit"></a>
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
                                    <input type="checkbox" value="">
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
                            <a href="{{ url('cms/tentoonstellingen') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection