@extends('layouts.cms')

@section('content')
    <form class="form-horizontal" role="form" method="post">
        {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12 breadcrumb breadcrumbs"></div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h4>Titel</h4><br />
                    <input name="title" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Toon</h4>
                    <select name="toon" >
                        <option value="yes">Ja</option>
                        <option value="no" selected>Nee</option>
                    </select>
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Subtitel</h4>
                    <input name="subtitle" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Introductie</h4>
                    <textarea name="introduction" rows="5" cols="80"></textarea>
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Tekst</h4>
                    <textarea name="text" rows="5" cols="80"></textarea>
                </div>
                <div class="col-md-4"></div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-2">
                    <h4>Datum van</h4>
                    <input name="date_from" value="" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <h4>Datum tot</h4>
                    <input name="date_to" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Locatie</h4>
                    <select name="location" >
                        <option value="exporuimte" selected>Exporuimte</option>
                        <option value="portiersloge">Portiersloge</option>
                    </select>
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Openingstijden</h4>
                    <input name="open_times" style="width: 300px;" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Extra</h4>
                    <input name="extra" style="width: 300px;" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-2">
                    <h4>Opening</h4>
                    <input name="opening" value="" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <h4>Openingstijd</h4>
                    <input name="opening_time" value="" />
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    <h4>Melding</h4>
                    <input name="message" value="" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    Hier komt de tekst in 2 kolommen:
                    <div class="radio text-center">
                        <label><input type="radio" name="optradio" value="1"></label>
                    </div>
                </div>
                <div class="col-md-3">
                    Hier komt de tekst in 1 kolom met het plaatje links:
                    <div class="radio text-center">
                        <label><input type="radio" name="optradio" value="2"></label>
                    </div>
                </div>
                <div class="col-md-3">
                    Hier komt de tekst in 1 kolom met het plaatje rechts:
                    <div class="radio text-center">
                            <label><input type="radio" name="optradio" value="3"></label>
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
    </form>
@endsection