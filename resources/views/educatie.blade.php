@extends('layouts.website')
@section('content')
    <div class="container">
        @if($page != null)
        <h2 class="col-md-offset-2">{!! $page->title !!}</h2>
        <br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="over-content">
                        {!! $page->content_left !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="over-content">
                        {!! $page->content_right !!}
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row">
                <div class="col-md-3 col-md-offset-2"></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <p class="no-item">Sorry er zijn geen educatie pagina's</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-2"></div>
            </div>
            @endif
    </div>
@endsection