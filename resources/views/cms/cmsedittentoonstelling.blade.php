@extends('layouts.cms')

@section('content')

    @foreach($editExpo as $expo)
    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h4>Titel</h4><br />
            <input value="{{ $expo->title }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Zichtbaar</h4>
            @if($expo->visible == 1)
                <input type="checkbox" value="Visibility" name="visibility" checked>
            @else
                <input type="checkbox" value="Visibility" name="visibility">
            @endif
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Subtitel</h4>
            <input value="{{ $expo->subtitle }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Introductie</h4>
            <textarea rows="5" cols="80">{!! $expo->introduction !!}</textarea>
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Tekst</h4>
            <textarea rows="5" cols="80">{!! $expo->text !!}</textarea>
        </div>
        <div class="col-md-4"></div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-2">
            <h4>Datum van</h4>
            <input value="{{ $expo->date_from }}" />
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <h4>Datum tot</h4>
            <input value="{{ $expo->date_to }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Locatie</h4>
            <select>
                @if($expo->location == 'exporuimte')
                    <option value="exporuimte" selected>Exporuimte</option>
                    <option value="portiersloge">Portiersloge</option>
                @else
                    <option value="exporuimte">Exporuimte</option>
                    <option value="portiersloge" selected>Portiersloge</option>
                @endif
            </select>
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Locatie</h4>
            <select>
                @if($expo->toon == 'yes')
                    <option value="yes" selected>Ja</option>
                    <option value="no">Nee</option>
                @else
                    <option value="yes">Ja</option>
                    <option value="no" selected>Nee</option>
                @endif
            </select>
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Openingstijden</h4>
            <input style="width: 300px;" value="{{ $expo->open_times }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Extra</h4>
            <input style="width: 300px;" value="{{ $expo->extra }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-2">
            <h4>Opening</h4>
            <input value="{{ $expo->opening }}" />
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <h4>Opening</h4>
            <input value="{{ $expo->opening_time }}" />
        </div>
    </div>

    <br />
    <br />
    <div class="row">
        <div class="col-md-8">
            <h4>Melding</h4>
            <input value="{{ $expo->message }}" />
        </div>
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