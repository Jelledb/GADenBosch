@extends('layouts.website')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div>
                        <h1 class="centerH1">Agenda</h1>
                        <br />


                    </div>
                </div>

                <table border="2" cellpadding="10">
                    <tr>
                        <td>ID</td>
                        <td>date_from</td>
                        <td>date_to</td>
                        <td>open_times</td>
                        <td>extra</td>
                        <td>opening</td>
                        <td>opening_time</td>
                        <td>message</td>
                        <td>title</td>
                        <td>subtitle</td>
                        <td>introduction</td>
                        <td>text</td>
                        <td>location</td>
                        <td>toon</td>
                        <td>template</td>
                    </tr>

                    @foreach($allExpositions as $expos)
                        <tr>
                            <td>{{ $expos->id }}</td>
                            <td>{{ $expos->date_from }}</td>
                            <td>{{ $expos->date_to }}</td>
                            <td>{{ $expos->open_times }}</td>
                            <td>{{ $expos->extra }}</td>
                            <td>{{ $expos->opening }}</td>
                            <td>{{ $expos->opening_time }}</td>
                            <td>{{ $expos->message }}</td>
                            <td>{{ $expos->title }}</td>
                            <td>{{ $expos->subtitle }}</td>
                            <td>{{ $expos->introduction }}</td>
                            <td>{{ $expos->text }}</td>
                            <td>{{ $expos->location }}</td>
                            <td>{{ $expos->toon }}</td>
                            <td>{{ $expos->template }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection