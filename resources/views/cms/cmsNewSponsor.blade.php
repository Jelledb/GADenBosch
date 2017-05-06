@extends('layouts.cms')

@section('content')


    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Sponsor</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <form class="form-horizontal" role="form" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12 breadcrumb breadcrumbs"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h4>Naam</h4><br />
                <input name="name" value="" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-12 breadcrumb breadcrumbs"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h4>Website:</h4><br />
                <input name="website" value="" />
            </div>
        </div>
    </form>
@endsection