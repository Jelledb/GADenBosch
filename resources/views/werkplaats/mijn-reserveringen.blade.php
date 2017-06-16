@extends('layouts.website')

@section('content')


    <div class="container">
        <div class="panel panel-default">
            <div class="row">
                <h1  class="centerH1"> Mijn reserveringen</h1>
                <br>
                <div class="col-md-8 col-md-offset-2">
                    <table id="time-table">
                        <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Starttijd</th>
                            <th>Eindtijd</th>
                            <th>Type tafel</th>
                            <th>Grootte tafel</th>
                            <th>Verwijder reservering</th>
                        </tr>
                        @foreach($reservations as $res)
                            <?php
                            $day = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res->date_in)->format('d-m-Y');
                            $dateIn = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res->date_in)->format('H:i');
                            $dateOut = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res->date_out)->format('H:i');
                            $type = $res->Workspace[0]->name;
                            $size = $res->Workspace[0]->size;
                            $id = $res->id;
                            ?>
                            <tr>
                                <th>{{$day}}</th>
                                <th>{{$dateIn}}</th>
                                <th>{{$dateOut}}</th>
                                <th>{{$type}}</th>
                                <th>{{$size}}</th>
                                <th><a data-toggle="tooltip" title="verwijder deze reservering" class="btn btn-danger btn-block" href="delete-reservering/{{$id}}">verwijder </a>
                                </th>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection