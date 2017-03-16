@extends('layouts.website')

<?php



?>


@section('content');

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div>
                    <h1 class="centerH1">Werkplaatsen</h1>
                    <br/>
                </div>
                <ul>
                    @foreach($workplaces as $workplace)

                        <li>

                            {{ $workplace->workspace_type_id . " " . $workplace->size_id}}


                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>

@endsection