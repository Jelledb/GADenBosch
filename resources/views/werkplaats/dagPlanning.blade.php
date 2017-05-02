@extends('layouts.website')

<?php
$start = ["9:00" => "9:00", "10:00" => "10:00", "11:00" => "11:00", "12:00" => "12:00", "13:00" => "13:00", "14:00" => "14:00"];
// $end = ["12:00" => "12:00", "13:00" => "13:00", "14:00" => "14:00", "15:00" => "15:00", "16:00" => "16:00", "17:00" => "17:00"];
?>

@section('content')
    <script type="text/javascript">
        var datajson = {
            "09:00": [{
                "12:00": [{"id": "12:00"}],
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "10:00": [{
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "11:00": [{
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "12:00": [{"15:00": [{"id": "15:00"}], "16:00": [{"id": "16:00"}], "17:00": [{"id": "17:00"}]}],
            "13:00": [{"16:00": [{"id": "16:00"}], "17:00": [{"id": "17:00"}]}],
            "14:00": [{"17:00": [{"id": "17:00"}]}]
        };

        jQuery(document).ready(function ($) {
            $("#start").on('change', function () {
                var locations = datajson[$(this).val()];
                var locationString = '';
                $.each(locations[0], function (i, item) {
                    locationString += '<option value="' + item[0].id + '">' + item[0].id + '</option>';
                });
                console.log(locationString)
                $('#end').html(locationString);
            });
        });

//        jQuery(document).ready(function ($) {
//            function lala() {
//                $('#submit').attr('disabled', 'disabled');
//                var x = document.getElementById('submit').value;
//                if (x != '') {
//                    $('#submit').attr('disabled', '');
//                }
//                else {
//                    $('#submit').attr('disabled', 'disabled');
//                }
//            }
//        });

    </script>

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <h6 class="centerH1">{{$data['day']}}</h6>
                <h4 class="centerH1">{{$data['workspace']->name .': '. $data['workspace']->size}}  </h4>
                <h1 class="centerH1">Reserveringen </h1>
                <br/>
                <div class="col-md-8 col-md-offset-2">
                    <table id="time-table">
                        <thead>
                        <tr>
                            <th>Starttijd</th>
                            <th>Eindtijd</th>
                            <th>Naam</th>
                        </tr>
                        @for($i =0; $i< count($data['occupation']);$i ++)
                            <?php
                            $dateIn = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['occupation'][$i]->date_in)->format('H:i');
                            $dateOut = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['occupation'][$i]->date_out)->format('H:i');
                            ?>
                            <tr>
                                <th>{{$dateIn}}</th>
                                <th>{{$dateOut}}</th>
                                <th>{{$data['user'][$i]->name}}</th>
                                @endfor
                            </tr>
                        </thead>
                    </table>
                    <h1 class="centerH1">Reserveer</h1>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-4 col-md-offset-4">

                    {!! Form::open() !!}

                    <!-- Reserveertijd Form Input -->
                        <div class="form-group">
                            {!! Form::label('tijd', 'Tijd:') !!}
                            <select name="start" id="start" class="form-control">
                                <option value="" disabled="" selected="">Selecteer een begintijd</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                            </select>
                            <select name="end" id="end" class="form-control">
                            </select>
                        </div>

                        <!-- Submit Form Input -->
                        <div class="form-group">
                            {!! Form::submit('Verstuur', ['class' => 'btn btn-primary form-control', 'id' => 'submit']) !!}
                            {{--<input type="button" value="Verstuur" id="submit" class="btn btn-primary form-control" method="post">--}}
                        </div>

                        {!! Form::hidden('dag', $data["day"]) !!}
                        {!! Form::hidden('gebruiker', Auth::id()) !!}
                        {!! Form::hidden('werkplaats', $data["id"]) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection