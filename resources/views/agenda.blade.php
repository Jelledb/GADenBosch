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
                            <td><strong>{{ $expos->date_from }}</strong></td>
                            <td>&nbsp;t/m&nbsp;</td>
                            <td><strong>{{ $expos->date_to }}</strong></td>
                            <td>&nbsp;</td>
                            <td><a href="/agendaitem/{{ $expos->id }}">{{ preg_replace('/ {2,}/', ' ', preg_replace('/<[^>]*>/', ' ', $expos->title)) }}</a></td>
                        </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection