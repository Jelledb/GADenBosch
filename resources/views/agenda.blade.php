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

                <table cellspacing="10">
                    @foreach($allExpositions as $expos)
                        @if(strtotime($expos->date_to) >= strtotime('now'))

                        <tr>
                            <td>{{ $expos->date_from }}</td>
                            <td>&nbsp;</td>
                            <td>{{ $expos->date_to }}</td>
                            <td>&nbsp;</td>
                            <td><a href="/agendaitem/{{ $expos->id }}">{!! $expos->title !!}</a></td>
                        </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection