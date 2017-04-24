@extends('layouts.website')

@section('content')


    <div class="container">
        <div class="row">
            <div class="panel panel-default">


                <h1 class="centerH1"> Uw reserveringen</h1>
                    <br>
                <div class="col-md-8 col-md-offset-2">
                    <table id="time-table">
                        <tbody>
                        <thead>
                        <tr>
                            <th>Starttijd</th>
                            <th>Eindtijd</th>
                            <th>Type tafel</th>
                            <th>grootte tafel</th>

                        </tr>
                        @foreach($reservations as $res)
                            <?php
                            //dd($res);
                            $dateIn = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res->date_in)->format('H:i');
                            $dateOut = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $res->date_out)->format('H:i');
                            $type = $res->Workspace[0]->name;
                            $size = $res->Workspace[0]->size;
                            ?>
                            <tr>
                                <td>{{$dateIn}}</td>
                                <td>{{$dateOut}}</td>
                                <td>{{$type}}</td>
                                <td>{{$size}}</td>

                            </tr>
                            @endforeach
                        </thead>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection