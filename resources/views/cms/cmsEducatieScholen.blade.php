@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-9 breadcrumb breadcrumbs"></div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <!--hier komt de content in -->
            <h2>Scholen</h2>

        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

            <h3>Foto's voor de pagina</h3>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="ImageToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <hr class="breeklijn"/>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <h3>Text voor de 'Educatie voor scholen'-pagina:</h3>
            <textarea rows="5" cols="80"></textarea>
        </div>
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