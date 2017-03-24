@extends('layouts.cms')

@section('content')

    @foreach($editExpo as $expo)
    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>{{ $expo->title }}</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <h4>Datum van</h4><br />
            <input value="{{ $expo->date_from }}" />
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <h4>Datum tot</h4><br />
            <input value="{{ $expo->date_to }}" />
        </div>
    </div>

    <br />
    <br />

    <div class="row">
        <div class="col-md-8">
            <h4>Openingstijden</h4><br />
            <input style="width: 300px;" value="{{ $expo->open_times }}" />
        </div>
    </div>

    <br />
    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Tekst</h4>
            <textarea rows="5" cols="80">{!! $expo->text !!}</textarea>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">

        <div class="col-md-3">
            Hier komt de tekst in 2 kolommen:
            <div class="radio text-center">
                <label><input type="radio" name="optradio"></label>
            </div>
        </div>
        <div class="col-md-3">
            Hier komt de tekst in 1 kolom met het plaatje links:
            <div class="radio text-center">
                <label><input type="radio" name="optradio"></label>
            </div>
        </div>
        <div class="col-md-3">
            Hier komt de tekst in 1 kolom met het plaatje rechts:
            <div class="radio text-center">
                <label><input type="radio" name="optradio"></label>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <!--
    <hr class="breeklijn"/>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                Select image to upload:
                <input type="file" name="ImageToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </div>

            <div class="col-md-3"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1"></div>
            <div class="col-md-3"></div>
        </div>
        <hr class="breeklijn"/>
        <div class="row">
            <div class="col-md-3">
                <input type="submit" value="Bewerk" name="submit">
            </div>
            <div class="col-md-9"></div>
        </div>
    </form>-->
    @endforeach
@endsection