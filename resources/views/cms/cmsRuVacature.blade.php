@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs">CMS >> Vacatures >> Vacature </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Vacature</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Korte beschrijving</h3>
            <textarea rows="5" cols="80">{{$vacature->short_description}}</textarea>
        </div>
        <div class="col-md-4"></div>
    </div>
    <hr class="breeklijn"/>
    <div class="row">
        <div class="col-md-8">
            <h3>volledige beschrijving</h3>
            <textarea rows="5" cols="80">{{$vacature->description}}</textarea>
        </div>
        <div class="col-md-4"></div>
    </div>
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
                <input type="submit" value="Zet op de site" name="submit">
            </div>
            <div class="col-md-9"></div>
        </div>
    </form>
@endsection