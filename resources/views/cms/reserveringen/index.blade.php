@extends('layouts.cms')

@section('content')

    <script defer>
        jQuery(document).ready(function ($) {
            $('.form-group').on('change', function () {
                var self = this;
                document.location.href = '/cms/reserveringen/' + self.value;

            });
        });

    </script>

    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Reserveringen beheren</h2>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div>
            <h3>Werkplaats</h3>
            <select class="form-group" name="workspace_name">
                <option value="" selected></option>
                @foreach($data['workspaces'] as $workspace)
                    @if(isset($data['workspaceID']))
                        @if($workspace->id == $data['workspaceID'])
                            <option value="{{$workspace->id}}"
                                    selected>{{$workspace->name . ' ' . $workspace->size}}</option>
                        @else
                            <option value="{{$workspace->id}}">{{$workspace->name . ' ' . $workspace->size}}</option>
                        @endif
                    @else
                        <option value="{{$workspace->id}}">{{$workspace->name . ' ' . $workspace->size}}</option>
                    @endif
                @endforeach
            </select>
        </div>


        @if(count($data) != 1)
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Begintijd</th>
                    <th>Eindtijd</th>
                    <th>Gebruiker</th>
                    <th width="280px">Verwijder</th>
                </tr>

                @foreach ($data['reservist'] as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->date_in }}</td>
                        <td>{{ $reservation->date_out }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td><a class="btn btn-danger" href="/cms/deleteReservering/{{$reservation->id}}">Verwijder</a></td>
                    </tr>
                @endforeach

            </table>
        @endif

    </div>
@endsection