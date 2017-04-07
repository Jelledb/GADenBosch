@extends('layouts.cms')

@section('content')
    <form class="form-horizontal" role="form" method="post">
        {{ csrf_field() }}
        @foreach($editExpo as $expo)
        <div class="row">
            <div class="col-md-12 breadcrumb breadcrumbs"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h4>Titel</h4><br />
                <input name="title" value="{{ $expo->title }}" />
            </div>
        </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Toon</h4>
                    <select name="toon" >
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
                <h4>Subtitel</h4>
                <input name="subtitle" value="{{ $expo->subtitle }}" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4>Introductie</h4>
                <textarea name="introduction" rows="5" cols="80">{!! $expo->introduction !!}</textarea>
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4>Tekst</h4>
                <textarea name="text" rows="5" cols="80">{!! $expo->text !!}</textarea>
            </div>
            <div class="col-md-4"></div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-2">
                <h4>Datum van</h4>
                <input name="date_from" value="{{ $expo->date_from }}" />
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <h4>Datum tot</h4>
                <input name="date_to" value="{{ $expo->date_to }}" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4>Locatie</h4>
                <select name="location" >
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
                <h4>Openingstijden</h4>
                <input name="open_times" style="width: 300px;" value="{{ $expo->open_times }}" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4>Extra</h4>
                <input name="extra" style="width: 300px;" value="{{ $expo->extra }}" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-2">
                <h4>Opening</h4>
                @if($expo->opening != "0000-00-00")
                    <input name="opening" value="{{ $expo->opening }}" />
                @else
                    <input name="opening" value="{{ $expo->date_from }}" />
                @endif
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <h4>Openingstijd</h4>
                <input name="opening_time" value="{{ $expo->opening_time }}" />
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                <h4>Melding</h4>
                <input name="message" value="{{ $expo->message }}" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                Hier komt de tekst in 2 kolommen:
                <div class="radio text-center">
                    @if($expo->template == 1)
                        <label><input type="radio" name="optradio" value="1" checked></label>
                    @else
                        <label><input type="radio" name="optradio" value="1"></label>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                Hier komt de tekst in 1 kolom met het plaatje links:
                <div class="radio text-center">
                    @if($expo->template == 2)
                        <label><input type="radio" name="optradio" value="2" checked></label>
                    @else
                        <label><input type="radio" name="optradio" value="2"></label>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                Hier komt de tekst in 1 kolom met het plaatje rechts:
                <div class="radio text-center">
                    @if($expo->template == 3)
                        <label><input type="radio" name="optradio" value="3" checked></label>
                    @else
                        <label><input type="radio" name="optradio" value="3"></label>
                    @endif
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <br />
        <br />
        <div class="form-group controls account-form">
            <div class="col-sm-12 controls">
                <input type="submit" class="btn btn-success" value="Opslaan">
            </div>
        </div>
        @endforeach
    </form>
@endsection