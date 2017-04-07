@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs">CMS >> Vacatures</div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2>Vacatures</h2>
        </div>
        <div class="col-md-5 newbutton">
            <a href="{{ url('cms/workshop') }}"><input type="submit" value="Nieuwe vacature aanmaken"  name="submit"></a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th class="col-md-1">Toon</th>
                    <th class="col-md-2">Datum</th>
                    <th class="col-md-5">Titel</th>
                    <th class="col-md-5"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacatures as $vacature)
                <tr>
                    <td>
                        <div class="checkbox toonbutton">
                            <label>
                                <input type="checkbox" value="">
                            </label>
                        </div>
                    </td>
                    <td>
                        <form>
                            <input type="date" value="{{$vacature->datum}}">
                        </form>
                    </td>
                    <td>{{$vacature->title}}</td>
                    <td>
                        <a href="{{ url('cms/vacature', [$vacature->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-floppy-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
