@extends('layouts.website')

@section('content')
    {{-- Fill the selectbox of the ending time of the reservation. --}}
    <script type="text/javascript">
        var endTimes = {
            "09:00": [{
                "10:00": [{"id": "10:00"}],
                "11:00": [{"id": "11:00"}],
                "12:00": [{"id": "12:00"}],
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "10:00": [{
                "11:00": [{"id": "11:00"}],
                "12:00": [{"id": "12:00"}],
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "11:00": [{
                "12:00": [{"id": "12:00"}],
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "12:00": [{
                "13:00": [{"id": "13:00"}],
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "13:00": [{
                "14:00": [{"id": "14:00"}],
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "14:00": [{
                "15:00": [{"id": "15:00"}],
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "15:00": [{
                "16:00": [{"id": "16:00"}],
                "17:00": [{"id": "17:00"}]
            }],
            "16:00": [{
                "17:00": [{"id": "17:00"}]
            }]
        };

        var selectedDay = "<?php echo $data['day']; ?>";
        var currentDay = "<?php echo date("Y-m-d"); ?>";

        jQuery(document).ready(function ($) {

            $('#start').on('change', function () {
                var endingTimeOptions = endTimes[$(this).val()];
                var endingTime = '';
                $.each(endingTimeOptions[0], function (i, item) {
                    endingTime += '<option value="' + item[0].id + '">' + item[0].id + '</option>';
                });
                $('#end').html(endingTime);

                if (selectedDay >= currentDay) {
                    $('#submit').prop('disabled', false);
                }

            });
        });
    </script>


    <div class="container">

        @if(session('reservationOK'))
            <div class="alert alert-success text-center">Reservering is geplaatst!</div>

        @elseif(session('reservationBAD'))
            <div class="alert alert-warning text-center">{{session('reservationBAD')}}</div>
        @endif

        @if(!Auth::check())
            <div class="alert alert-warning text-center">Je moet eerst inloggen voordat je kan reserveren!</div>
        @endif


        <div class="row">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href='/werkplaats-overzicht'>Werkplaatsen</a></li>
                <li class="breadcrumb-item"><a href='/detailed-werkplaats/{{$data['id']}}'>kalender</a></li>
                <li class="breadcrumb-item active">Inplannen</li>
            </ol>
            <div class="panel panel-default">
                <h6  data-toggle="tooltip" title="Dag van reservering" class="text-center">{{$data['day']}}</h6>
                <h4  data-toggle="tooltip" title="Gelecteerde werkplaats" class="text-center">{{$data['workspace']->name .': '. $data['workspace']->size}}  </h4>
                <h3 class="text-center">Geplaatste reserveringen </h3>
                <br/>
                <div class="col-md-8 col-md-offset-2">
                    <table id="time-table">
                        <thead>
                        <tr>
                            <th>Starttijd</th>
                            <th>Eindtijd</th>
                            <th>Naam</th>
                        </tr>
                        @for($i = 0; $i < count($data['occupation']); $i++)
                            <?php
                            $dateIn = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['occupation'][$i]->date_in)->format('H:i');
                            $dateOut = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['occupation'][$i]->date_out)->format('H:i');
                            ?>
                            <tr>
                                <th>{{$dateIn}}</th>
                                <th>{{$dateOut}}</th>
                                <th>{{$data['user'][$i]->name}}</th>

                            </tr>
                        @endfor
                        </thead>
                    </table>
                    <h3 class="centerH1">Reserveer</h3>
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
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                            <select name="end" id="end" class="form-control">
                            </select>
                        </div>

                        <!-- Submit Form Input -->
                        <div class="form-group">

                            <input type="submit" value="Reserveer!" class="btn btn-primary form-control" id="submit"
                                   disabled/>

                            {{--{!! Form::submit('Verstuur', ['class' => 'btn btn-primary form-control', 'id' => 'submit', 'disabled' => 'disabled']) !!}--}}
                        </div>

                        {!! Form::hidden('dag', $data['day']) !!}
                        {!! Form::hidden('gebruiker', Auth::id()) !!}
                        {!! Form::hidden('werkplaats', $data['id']) !!}
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection