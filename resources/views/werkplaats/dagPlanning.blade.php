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
        <div class="row">
            <div class="panel panel-default">
                <h1 class="centerH1">{{$data['workspace']->name .': '. $data['workspace']->size}}  </h1>
                <h2 class="centerH1">Geplaatste reserveringen </h2>
                <br/>
                <div class="col-md-8 col-md-offset-2">
                    <table id="time-table">
                        <thead>
                        <tr>
                            <th>Starttijd</th>
                            <th>Eindtijd</th>
                        </tr>
                        @foreach($data['occupation'] as $oc)
                            <?php
                            $dateIn = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $oc->date_in)->format('H:i');
                            $dateOut = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $oc->date_out)->format('H:i');
                            ?>
                            <tr>
                                <th>{{$dateIn}}</th>
                                <th>{{$dateOut}}</th>
                                @endforeach
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