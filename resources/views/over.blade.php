@extends('layouts.website')

@section('content')
    <div class="container">
        <h2 class="col-md-offset-2">Over ons</h2>
        <br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="over-content">
                        {!! $overons->content_left !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="panel panel-default">
                    <div class="over-content">
                        {!! $overons->content_right !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
