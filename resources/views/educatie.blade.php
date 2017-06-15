@extends('layouts.website')
@section('content')
@if($page != null)
    <div class="container zoomable">
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
            <div class="col-md-4" >
                <div class="panel panel-default">
                    <div class="over-content">
                        {!! $page->content_right !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container zoomable">
        <h2 class="col-md-offset-2">
            Er zijn helaas geen educatie pagina's.
        </h2>
    </div>
    @endif
@endsection