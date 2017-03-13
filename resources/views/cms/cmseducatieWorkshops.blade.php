@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2>Workshops</h2>
        </div>
        <div class="col-md-5 newbutton">
            <a href="{{ url('cms/newEducatie') }}"><input type="submit" value="Nieuwe Workshop"  name="submit"></a>
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
                            <input type="date">
                        </form>
                    </td>
                    <td>Hier komt de titel van het nieuws</td>
                    <td>
                        <a href="{{ url('cms/newEducatie') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
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
                            <input type="date">
                        </form>
                    </td>
                    <td>Hier komt de titel van het nieuws</td>
                    <td>
                        <a href="{{ url('cms/newEducatie') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>

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
                            <input type="date">
                        </form>
                    </td>
                    <td>Hier komt de titel van het nieuws</td>
                    <td>
                        <a href="{{ url('cms/newEducatie') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection