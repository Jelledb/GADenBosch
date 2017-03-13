@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-9 breadcrumb breadcrumbs"></div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Sponsor</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                Upload de foto van de sponsor:
                <input type="file" name="ImageToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1"></div>
            <div class="col-md-3"></div>
        </div>
        <hr class="breeklijn"/>
        <p>Zet hier de url van de website van de sponsor:</p>
        <input type="text">
        <hr class="breeklijn"/>

        <div class="row">
            <div class="col-md-3">
                <input type="submit" value="Zet op de site" name="submit">
            </div>
            <div class="col-md-9"></div>
        </div>
    </form>
@endsection